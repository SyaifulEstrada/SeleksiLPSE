<?php

namespace App\Http\Controllers\Api;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Jurusan\JurusanDetailResource;
use App\Http\Requests\JurusanRequest;
use App\Http\Resources\Resources\JurusanResources;

class JurusanApiController extends Controller
{
    public function getDataJurusan()
    {
        $jurusan = Jurusan::all();
        return JurusanResources::collection($jurusan);
    }

    public function Show($id_jurusan)
    {
        $jurusan = Jurusan::with('mahasiswa:nim,nama,id_jurusan')->findOrFail($id_jurusan);
        return new JurusanDetailResource($jurusan);
    }

    public function store(JurusanRequest $request)
    {

        $jurusan = Jurusan::create($request->all());

        return new JurusanDetailResource($jurusan->loadMissing('mahasiswa:nim,nama,id_jurusan'));
    }

    public function update(JurusanRequest $request, $id_jurusan)
    {
        $jurusan = Jurusan::findOrFail($id_jurusan);
        $jurusan->update($request->all());

        return new JurusanDetailResource($jurusan->loadMissing('mahasiswa:nim,nama,id_jurusan'));
    }

    public function destroy($id_jurusan)
    {
        $jurusan = Jurusan::findOrFail($id_jurusan);
        $jurusan->delete();

        return new JurusanDetailResource($jurusan->loadMissing('mahasiswa:nim,nama,id_jurusan'));
    }
}
