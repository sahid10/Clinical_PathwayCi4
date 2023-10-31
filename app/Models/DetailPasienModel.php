<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPasienModel extends Model
{
    protected $table = 't_clinicalpathway';
    protected $primaryKey = 'id';
    protected $allowedFields = [];

    public function getDetailPasienData($nomr)
    {
        return $this->where('NOMR', $nomr)->first();
    }
}
