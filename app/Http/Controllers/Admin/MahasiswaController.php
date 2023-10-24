<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MahasiswaRequest;
use App\Models\Jurusan;
use App\Models\Mahasiswa;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataMahasiswa = Mahasiswa::paginate(5);
        return view('admin.mahasiswa.index', [
            'title' => 'Mahasiswa'
        ], compact('dataMahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Jurusan $jurusan)
    {
        $jurusan = Jurusan::all();
        return view('admin.mahasiswa.create', [
            'title' => 'Tambah Data Mahasiswa'
        ], compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MahasiswaRequest $request)
    {

         Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jekel' => $request->jekel,
            'id_jurusan' => $request->id_jurusan,
        ]);

        return to_route('admin.mahasiswa.index')->with('success', 'Data Berhasil Ditambahkan');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa, Jurusan $jurusan)
    {

        // $mahasiswa = Mahasiswa::all();
        $jurusan= Jurusan::with('jurusan');
        // $mahasiswa = Mahasiswa::all();

        return view('admin.mahasiswa.edit', [
            'title' => 'Edit Data Mahasiswa'
        ],compact('mahasiswa', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update($request->validated());

        return to_route('admin.mahasiswa.index')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return to_route('admin.mahasiswa.index')->with('success', 'Data berhasil di hapus');

    }

    public function pdf() {

        $mahasiswa = Mahasiswa::all();

        $pdf = PDF::loadview('admin.mahasiswa.mahasiswapdf', ['mahasiswa' => $mahasiswa]);
        return $pdf->download('cetak-data-mahasiswa.pdf');

    }

}
