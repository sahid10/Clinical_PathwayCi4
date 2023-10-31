<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'master_login2'; // Name of the database table

    protected $allowedFields = ['username', 'password', 'pd_nickname']; // Fields that can be used for insert/update operations

    public function checkLogin($username, $password)
    {
        // Perform the query to check if the username, password, and pd_nickname are correct
        return $this->where('username', $username)
            ->where('password', $password)
            ->countAllResults() === 1;
    }

    // You can add more functions to retrieve and update pd_nickname if needed
    public function getNicknameByUsername($username)
    {
        $user = $this->where('username', $username)->first();
        return $user ? $user['pd_nickname'] : null;
    }

    public function updateNickname($username, $newNickname)
    {
        $data = ['pd_nickname' => $newNickname];
        $this->where('username', $username)->update($data);
    }
}
