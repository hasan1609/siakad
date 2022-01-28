<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;

class ProfilSekolah extends BaseController
{
    protected $profilmodel;
    public function __construct()
    {
        $this->profilmodel = new ProfilModel();
    }

    public function index()
    {
        $data['judul_web'] = "Profil Sekolah";
        return view('profil_sekolah/index', $data);
    }

    public function create()
    {
        $data = [
            'nama_sekolah' => $this->request->getVar('nama_sekolah'),
            'email' => $this->request->getVar('email'),
            'tlp' => $this->request->getVar('tlp'),
            'alamat' => $this->request->getVar('alamat'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kabupaten' => $this->request->getVar('kabupaten'),
            'kodepos' => $this->request->getVar('kodepos'),
            'logo' => $this->request->getVar('kodepos'),
        ];

        $simpan = $this->profilmodel->save($data);
        if ($simpan) {
            return redirect()->to('/profilsekolah');
        }
    }
}
