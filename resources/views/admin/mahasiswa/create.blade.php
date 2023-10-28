@extends('admin.layouts.app')


@section('konten')
    <div class="container">
        <h1 class="text-center mt-5">Tambah Data Mahasiswa</h1>
        <form action="{{ route('admin.mahasiswa.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" id="nim" class="form-control" name="nim" value="{{ old('nim') }}">
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" class="form-control" name="nama" value="{{ old('nama') }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="alamat" class="form-label">alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control">{{ old('alamat') }}</textarea>
                </div>
                <div class="col-md-6">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jekel" id="jenis_kelamin">
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select class="form-select" name="id_jurusan" id="jurusan">
                        @foreach ($jurusan as $j)
                            <option value="{{ $j->id_jurusan }}">{{ $j->nama_jurusan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-secondary mt-4">Tambah</button>
        </form>
    </div>
@endsection
