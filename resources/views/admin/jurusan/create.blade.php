@extends('admin.layouts.app')


@section('konten')
<div class="container">
    <h1 class="text-center mt-5">Tambah Data Jurusan</h1>
    <form action="{{ route('admin.jurusan.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="kode_jurusan" class="form-label">Kode Jurusan</label>
                <input type="text" id="kode_jurusan" class="form-control" name="kode_jurusan">
            </div>
            <div class="col-md-6">
                <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
                <input type="text" id="nama_jurusan" class="form-control" name="nama_jurusan">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Tambah</button>
        </div>
    </form>
</div>

@endsection

