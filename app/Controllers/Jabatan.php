<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JabatanModel;

class Jabatan extends BaseController
{
    protected $jabatanmodel;

    public function __construct()
    {
        $this->jabatanmodel = new JabatanModel();
    }

    public function index()
    {
        $jabatan = $this->jabatanmodel->findAll();
        $data = [
            'judul_web' => 'Jabatan',
            'jabatan' => $jabatan
        ];
        return view('jabatan/index', $data);
    }

    public function add()
    {
        $val = $this->validate([
            'nama_jabatan' => [
                'rules' => 'is_unique[jabatan.nama_jabatan]',
            ]
        ]);
        if (!$val) {
            session()->setFlashdata('err', 'Maaf Jabatan sudah ada');
            return redirect()->to('/jabatan');
        } else {
            $data = [
                'nama_jabatan' => $this->request->getPost('nama_jabatan'),
            ];

            $simpan = $this->jabatanmodel->save($data);
            if ($simpan) {
                session()->setFlashdata('pesan', 'Ditambahkan');
                return redirect()->to('/jabatan');
            }
        }
    }

    public function edit()
    {
        $id = $this->request->getPost('id_jabatan');
        $data = [
            'nama_jabatan' => $this->request->getPost('nama_jabatan'),
        ];
        $this->jabatanmodel->update($id, $data);
        session()->setFlashdata('pesan', 'Diubah');
        return redirect()->to('/jabatan');
    }

    public function delete($id)
    {
        $this->jabatanmodel->delete($id);
        session()->setFlashdata('pesan', 'Dihapus');
        return redirect()->to('/jabatan');
    }
}
