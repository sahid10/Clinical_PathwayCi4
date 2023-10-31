<?php

namespace App\Controllers;

use App\Models\TablePasienModel;

class Home extends BaseController
{
    public function index()
    {
        // Load the session library
        $session = session();

        // Check if the user is not logged in
        if (!$session->get('username')) {
            return redirect()->to('login'); // Redirect to the login page if not logged in.
        }

        $model = new TablePasienModel();
        $data['rows'] = $model->getSemuaPasienData();

        return view('home', $data);
    }

    public function CamarAtas()
    {
        // Load the session library
        $session = session();

        // Check if the user is not logged in
        if (!$session->get('username')) {
            return redirect()->to('login'); // Redirect to the login page if not logged in.
        }

        $model = new TablePasienModel();
        $data['rows'] = $model->getCamarAtasData();

        return view('home', $data);
    }
    public function CamarBawah()
    {
        // Load the session library
        $session = session();

        // Check if the user is not logged in
        if (!$session->get('username')) {
            return redirect()->to('login'); // Redirect to the login page if not logged in.
        }

        $model = new TablePasienModel();
        $data['rows'] = $model->getCamarBawahData();

        return view('home', $data);
    }

    public function CendrawasihAtas()
    {
        // Load the session library
        $session = session();

        // Check if the user is not logged in
        if (!$session->get('username')) {
            return redirect()->to('login'); // Redirect to the login page if not logged in.
        }

        $model = new TablePasienModel();
        $data['rows'] = $model->getCendrawasihAtasData();

        return view('home', $data);
    }

    public function CendrawasihBawah()
    {
        // Load the session library
        $session = session();

        // Check if the user is not logged in
        if (!$session->get('username')) {
            return redirect()->to('login'); // Redirect to the login page if not logged in.
        }

        $model = new TablePasienModel();
        $data['rows'] = $model->getCendrawasihBawahData();

        return view('home', $data);
    }

    public function ICU()
    {
        // Load the session library
        $session = session();

        // Check if the user is not logged in
        if (!$session->get('username')) {
            return redirect()->to('login'); // Redirect to the login page if not logged in.
        }

        $model = new TablePasienModel();
        $data['rows'] = $model->getICUData();

        return view('home', $data);
    }

    public function IGD()
    {
        // Load the session library
        $session = session();

        // Check if the user is not logged in
        if (!$session->get('username')) {
            return redirect()->to('login'); // Redirect to the login page if not logged in.
        }

        $model = new TablePasienModel();
        $data['rows'] = $model->getIGDData();

        return view('home', $data);
    }

    public function KenariAtas()
    {
        // Load the session library
        $session = session();

        // Check if the user is not logged in
        if (!$session->get('username')) {
            return redirect()->to('login'); // Redirect to the login page if not logged in.
        }

        $model = new TablePasienModel();
        $data['rows'] = $model->getKenariAtasData();

        return view('home', $data);
    }

    public function KenariBawah()
    {
        // Load the session library
        $session = session();

        // Check if the user is not logged in
        if (!$session->get('username')) {
            return redirect()->to('login'); // Redirect to the login page if not logged in.
        }

        $model = new TablePasienModel();
        $data['rows'] = $model->getKenariBawahData();

        return view('home', $data);
    }
    public function KapodangAtas()
    {
        // Load the session library
        $session = session();

        // Check if the user is not logged in
        if (!$session->get('username')) {
            return redirect()->to('login'); // Redirect to the login page if not logged in.
        }

        $model = new TablePasienModel();
        $data['rows'] = $model->getKapodangAtasData();

        return view('home', $data);
    }

    public function KapodangBawah()
    {
        // Load the session library
        $session = session();

        // Check if the user is not logged in
        if (!$session->get('username')) {
            return redirect()->to('login'); // Redirect to the login page if not logged in.
        }

        $model = new TablePasienModel();
        $data['rows'] = $model->getKapodangBawahData();

        return view('home', $data);
    }

    public function Nuri()
    {
        // Load the session library
        $session = session();

        // Check if the user is not logged in
        if (!$session->get('username')) {
            return redirect()->to('login'); // Redirect to the login page if not logged in.
        }

        $model = new TablePasienModel();
        $data['rows'] = $model->getNuriData();

        return view('home', $data);
    }

    public function Perinatologi()
    {
        // Load the session library
        $session = session();

        // Check if the user is not logged in
        if (!$session->get('username')) {
            return redirect()->to('login'); // Redirect to the login page if not logged in.
        }

        $model = new TablePasienModel();
        $data['rows'] = $model->getPerinatologiData();

        return view('home', $data);
    }

    public function VK()
    {
        // Load the session library
        $session = session();

        // Check if the user is not logged in
        if (!$session->get('username')) {
            return redirect()->to('login'); // Redirect to the login page if not logged in.
        }

        $model = new TablePasienModel();
        $data['rows'] = $model->getVKData();

        return view('home', $data);
    }

    public function Kelas1()
    {
        // Load the session library
        $session = session();

        // Check if the user is not logged in
        if (!$session->get('username')) {
            return redirect()->to('login'); // Redirect to the login page if not logged in.
        }

        $model = new TablePasienModel();
        $data['rows'] = $model->getKelas1Data();

        return view('home', $data);
    }

    public function Kelas2()
    {
        // Load the session library
        $session = session();

        // Check if the user is not logged in
        if (!$session->get('username')) {
            return redirect()->to('login'); // Redirect to the login page if not logged in.
        }

        $model = new TablePasienModel();
        $data['rows'] = $model->getKelas2Data();

        return view('home', $data);
    }

    public function Kelas3()
    {
        // Load the session library
        $session = session();

        // Check if the user is not logged in
        if (!$session->get('username')) {
            return redirect()->to('login'); // Redirect to the login page if not logged in.
        }

        $model = new TablePasienModel();
        $data['rows'] = $model->getKelas3Data();

        return view('home', $data);
    }
}
