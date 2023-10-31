<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        // Load the session library
        $session = session();

        // Check if the user is already logged in
        if ($session->get('username')) {
            return redirect()->to('welcome_message');
        }

        $data = [];

        $request = service('request');
        $loginModel = new LoginModel();

        if ($request->getMethod() === 'post') {
            $username = $request->getPost('username');
            $password = $request->getPost('password');

            // Check if the login credentials are valid using the model method
            if ($loginModel->checkLogin($username, $password)) {
                // Login successful
                // Store the pd_nickname in the session
                $pdNickname = $loginModel->getNicknameByUsername($username);
                $session->set('username', $username);
                $session->set('pd_nickname', $pdNickname);

                return redirect()->to('');
            } else {
                // Login failed, set error message in the session flash data
                $session->setFlashdata('error', 'Username or password is incorrect.');
                return redirect()->to('login');
            }
        }

        echo view('login_view', $data);
    }

    public function logout()
    {
        // Load the session library
        $session = session();

        // Destroy the session and redirect to the login page
        $session->destroy();
        return redirect()->to('login');
    }
}
