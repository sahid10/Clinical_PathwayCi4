<?php

namespace App\Controllers;

use App\Models\TambahPasienModel;

class HapusPasienController extends BaseController
{
    public function index()
    {
        // Load the view for the form
        return view('home');
    }

    // Assuming your controller name is PasienController

    public function delete($id)
    {
        $model = new TambahPasienModel();

        // Check if the ID exists in the database
        $data = $model->find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'Data not found');
        }

        // Delete the data
        $model->delete($id);

        return redirect()->to('')->with('success', 'Data Berhasil dihapus');
    }


    public function success()
    {
        // Load the success view
        return view('');
    }
}
