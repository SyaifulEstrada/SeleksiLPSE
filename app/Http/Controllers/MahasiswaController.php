<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()  {
        $data1 = Mahasiswa::all();
        // $data1 = Mahasiswa::find(88765)->jurusan;
        // @dd($data1);
        return view('index', compact('data1'));
    }
}
