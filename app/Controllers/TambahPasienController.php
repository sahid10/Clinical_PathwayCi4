<?php

namespace App\Controllers;

use App\Models\TambahPasienModel;

class TambahPasienController extends BaseController
{
    public function index()
    {
        // Load the view for the form
        return view('home');
    }

    public function store()
    {
        // Check if form is submitted
        if ($this->request->getMethod() === 'post') {
            $nama_pasien = $this->request->getPost('nama_pasien');
            $nomr = $this->request->getPost('nomr');
            $masuk_rs = $this->request->getPost('masuk_rs');
            $ruangan = $this->request->getPost('ruangan');
            $kelas_bpjs = $this->request->getPost('kelas_bpjs');
            $dxutama = $this->request->getPost('dxutama');

            if ($ruangan == 'Pilih Ruangan' || $kelas_bpjs == 'Pilih Kelas') {
                return redirect()->back()->with('error', 'Mohon pilih ruangan dan kelas BPJS.');
            } else {
                $model = new TambahPasienModel();

                // Prepare data for insertion
                $data = [
                    'nama_pasien' => $nama_pasien,
                    'nomr' => $nomr,
                    'masuk_rs' => $masuk_rs,
                    'ruangan' => $ruangan,
                    'kelas_bpjs' => $kelas_bpjs,
                    'dxutama' => $dxutama,
                ];

                // Insert data
                $model->insert($data);

                return redirect()->to('')->with('success', 'Data Berhasil ditambahkan');
            }
        }

        // If not a POST request, redirect back to the form
        return redirect()->back();
    }

    public function success()
    {
        // Load the success view
        return view('');
    }
}
