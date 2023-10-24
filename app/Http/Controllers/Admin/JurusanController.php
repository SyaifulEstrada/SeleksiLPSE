<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jurusan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\JurusanRequest;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataJurusan = Jurusan::paginate(5);
        return view('admin.jurusan.index', [
            'title' => 'Jurusan'
        ], compact('dataJurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jurusan.create', [
            'title' => 'Tambah Data Jurusan'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JurusanRequest $request)
    {
        Jurusan::create([
            'kode_jurusan' => $request->kode_jurusan,
            'nama_jurusan' => $request->nama_jurusan
        ]);

        return to_route('admin.jurusan.index')->with('success', 'Data berhasil di tambahkan');
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
    public function edit(Jurusan $jurusan)
    {
        return view('admin.jurusan.edit', compact('jurusan'), [
            'title' => 'Edit Data Jurusan'
        ]);
        // dd($jurusan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JurusanRequest $request, Jurusan $jurusan)
    {
        $jurusan->update($request->validated());

        return to_route('admin.jurusan.index')->with('success', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();

        return to_route('admin.jurusan.index')->with('success', 'Data berhasil di hapus');
    }


    public function pdf() {

        $jurusan = Jurusan::all();

        $pdf = PDF::loadview('admin.jurusan.jurusanpdf', ['jurusan' => $jurusan]);
        return $pdf->download('cetak-data-jurusan.pdf');

    }

}
