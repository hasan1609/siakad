<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;

class Kelas extends BaseController
{
    public function __construct()
    {
        $this->kelasmodel = new KelasModel();
    }

    public function index()
    {
        $kelas = $this->kelasmodel->findAll();
        $data = [
            'judul_web' => 'Kelas',
            'kelas' => $kelas
        ];
        return view('kelas/index', $data);
    }

    public function add()
    {
        $val = $this->validate([
            'nama_kelas' => [
                'rules' => 'is_unique[kelas.nama_kelas]',
            ]
        ]);
        if (!$val) {
            session()->setFlashdata('err', 'Maaf Kelas sudah ada');
            return redirect()->to('/kelas');
        } else {
            $data = [
                'nama_kelas' => $this->request->getPost('nama_kelas'),
            ];

            $simpan = $this->kelasmodel->save($data);
            if ($simpan) {
                session()->setFlashdata('pesan', 'Ditambahkan');
                return redirect()->to('/kelas');
            }
        }
    }
}
