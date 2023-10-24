@extends('admin.layouts.app')


@section('konten')
<div class="container">
    <h1 class="text-center mt-5">Edit Data Mahasiswa</h1>
    <form action="{{ route('admin.mahasiswa.update', $mahasiswa) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" id="nim" class="form-control" name="nim" value="{{ $mahasiswa->nim }}">
            </div>
            <div class="col-md-6">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" class="form-control" name="nama" value="{{ $mahasiswa->nama }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="alamat" class="form-label">alamat</label>
                <textarea name="alamat" id="alamat" class="form-control">{{{ $mahasiswa->alamat }}}</textarea>
            </div>
            <div class="col-md-6">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="jekel" id="jenis_kelamin">
                    @if($mahasiswa->jekel === "laki-laki")
                    <option value="laki-laki" selected>Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                    @else
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan" selected>Perempuan</option>
                    @endif
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-select" name="id_jurusan" id="jurusan">
                    @foreach ($jurusan as $j)
                    <option  value="{{ $j->id_jurusan }}" {{ $j->id_jurusan == $mahasiswa->id_jurusan ? 'selected' : '' }}>{{ $j->nama_jurusan }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-secondary mt-4">Edit</button>
    </form>
</div>

@endsection

