<?php

namespace App\Controllers;

use App\Models\TablePasienModel;
use CodeIgniter\Controller;

class TablePasienController extends Controller
{
    public function index()
    {
        $model = new TablePasienModel();
        $data['rows'] = $model->getTablePasienData();

        return view('table', $data);
    }
}
