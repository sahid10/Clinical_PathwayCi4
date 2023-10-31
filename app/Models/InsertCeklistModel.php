<?php

namespace App\Models;

use CodeIgniter\Model;

class InsertCeklistModel extends Model
{
    protected $table = 't_clinicalpathway';
    protected $primaryKey = 'id';
    protected $allowedFields = [];

    public function updateData($nomr, $data)
    {
        return $this->db
            ->table('t_clinicalpathway')
            ->where(["NOMR" => $nomr])
            ->set($data)
            ->update();
    }
}
