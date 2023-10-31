<?php

namespace App\Models;

use CodeIgniter\Model;

class TablePasienModel extends Model
{
    protected $table = 'simrs.t_clinicalpathway';

    public function getSemuaPasienData()
    {
        return $this->findAll();
    }
//get ruang
    public function getCamarAtasData()
    {
        return $this->where('ruangan', 'Camar Atas')->findAll();
    }
    public function getCamarBawahData()
    {
        return $this->where('ruangan', 'Camar Bawah')->findAll();
    }
    public function getCendrawasihAtasData()
    {
        return $this->where('ruangan', 'Cendrawasih Atas')->findAll();
    }
    public function getCendrawasihBawahData()
    {
        return $this->where('ruangan', 'Cendrawasih Bawah')->findAll();
    }
    public function getICUData()
    {
        return $this->where('ruangan', 'ICU')->findAll();
    }
    public function getIGDData()
    {
        return $this->where('ruangan', 'Instalasi Gawat Darurat')->findAll();
    }
    public function getKenariAtasData()
    {
        return $this->where('ruangan', 'Kenari Atas')->findAll();
    }
    public function getkenariBawahData()
    {
        return $this->where('ruangan', 'kenari Bawah')->findAll();
    }
    public function getKapodangAtasData()
    {
        return $this->where('ruangan', 'Kapodang Atas')->findAll();
    }
    public function getKapodangBawahData()
    {
        return $this->where('ruangan', 'Kapodang Bawah')->findAll();
    }
    public function getNuriData()
    {
        return $this->where('ruangan', 'Nuri')->findAll();
    }
    public function getPerinatologiData()
    {
        return $this->where('ruangan', 'Perinatologi')->findAll();
    }
    public function getVKData()
    {
        return $this->where('ruangan', 'VK')->findAll();
    }
//get kelas
    public function getKelas1Data()
    {
        return $this->where('kelas_bpjs', 'Kelas 1')->findAll();
    }

    public function getKelas2Data()
    {
        return $this->where('kelas_bpjs', 'Kelas 2')->findAll();
    }

    public function getKelas3Data()
    {
        return $this->where('kelas_bpjs', 'Kelas 3')->findAll();
    }
}
