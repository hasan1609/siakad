<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['judul_web'] = "Dashboard";
        return view('dashboard/index', $data);
    }
}
