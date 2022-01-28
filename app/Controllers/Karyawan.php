<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JabatanModel;
use App\Models\KaryawanModel;

class Karyawan extends BaseController
{
    protected $karyawanmodel;
    protected $jabatanmodel;
    public function __construct()
    {
        $this->karyawanmodel = new KaryawanModel();
        $this->jabatanmodel = new JabatanModel();
    }

    public function index()
    {
        $karyawan = $this->karyawanmodel->findAll();
        $data = [
            'judul_web' => 'Karyawan',
            'karyawan' => $karyawan
        ];
        return view('karyawan/index', $data);
    }

    public function add()
    {
        $jabatan = $this->jabatanmodel->findAll();
        $data = [
            'judul_web' => 'Tambah Karyawan',
            'jabatan' => $jabatan
        ];
        return view('karyawan/add', $data);
    }

    public function create()
    {

        $data = [
            'nama' => $this->request->getPost('nama'),
            'tempat' => $this->request->getPost('tempat'),
            'ttl' => $this->request->getPost('ttl'),
            'alamat' => $this->request->getPost('alamat'),
            'tlp' => $this->request->getPost('tlp'),
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'foto' => 'shdhsdsksjdk',
            'id_jabatan' => $this->request->getPost('jabatan'),
            'nip' => '2638276',
            'tgl_masuk' => $this->request->getPost('tgl_masuk'),
            'jk' => $this->request->getPost('jk'),
            'pendidikan_terakhir' => $this->request->getPost('pendidikan'),
            'agama' => $this->request->getPost('agama')
        ];

        $simpan = $this->karyawanmodel->save($data);
        if ($simpan) {
            session()->setFlashdata('pesan', 'Ditambahkan');
            return redirect()->to('/karyawan');
        }
    }
}
