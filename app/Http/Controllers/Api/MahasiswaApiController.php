<?php

namespace App\Http\Controllers\Api;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Mahasiswa\MahasiswaResource;
use App\Http\Resources\Mahasiswa\MahasiswaDetailResource;

class MahasiswaApiController extends Controller
{
    public function getDataMahasiswa()  {
        $mahasiswa = Mahasiswa::all();
        return MahasiswaResource::collection($mahasiswa);
    }

    public function Show($nim)  {
        $mahasiswa = Mahasiswa::with('jurusan:id_jurusan,nama_jurusan')->findOrFail($nim);
        return new MahasiswaDetailResource($mahasiswa);
    }
}
