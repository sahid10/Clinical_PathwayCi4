<?php

namespace App\Models;

use CodeIgniter\Model;

class TambahPasienModel extends Model
{
    protected $table = 't_clinicalpathway';
    protected $primaryKey = 'id'; // Assuming 'id' is the primary key in the table
    protected $allowedFields = ['nama_pasien', 'nomr', 'masuk_rs', 'ruangan', 'kelas_bpjs', 'dxutama'];
}
