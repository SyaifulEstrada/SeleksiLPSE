<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class DashboardController extends Controller
{

    public function index()
      {

        $mahasiswa = Mahasiswa::count();
        $jurusan = Jurusan::count();

        return view('admin.index', [
            'title' => 'Dashboard'
        ], compact('mahasiswa', 'jurusan'));
    }
}
