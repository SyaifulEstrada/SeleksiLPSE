@extends('admin.layouts.app')


@section('konten')
<div class="container">
    <h1 class="text-center mt-5">Edit Data Jurusan</h1>
    <form action="{{ route('admin.jurusan.update', $jurusan->id_jurusan) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <label for="kode_jurusan" class="form-label">Kode Jurusan</label>
                <input type="text" id="kode_jurusan" class="form-control" name="kode_jurusan" value="{{ $jurusan->kode_jurusan }}">
            </div>
            <div class="col-md-6">
                <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
                <input type="text" id="nama_jurusan" class="form-control" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Edit</button>
        </div>
    </form>
</div>

@endsection

