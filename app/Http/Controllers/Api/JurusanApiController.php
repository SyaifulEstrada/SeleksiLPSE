<?php

namespace App\Http\Controllers\Api;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resource\Jurusan\JurusanResource;
use App\Http\Resources\Jurusan\JurusanDetailResource;

class JurusanApiController extends Controller
{
    public function GeteDataJurusan()  {
        $jurusan = Jurusan::all();
        return JurusanResource::collection($jurusan);
    }

    public function Show($id_jurusan)  {
        $jurusan = Jurusan::with('mahasiswa:nim,nama,id_jurusan')->findOrFail($id_jurusan);
        return new JurusanDetailResource($jurusan);
    }
}
