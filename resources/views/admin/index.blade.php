@extends('admin.layouts.app')


@section('konten')
<div class="container">
    <div class="row mt-5">
        <h1 class="text-center">Jumlah Data Dari masing masing tabel</h1>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Data Mahasiswa</h5>
                  <p class="card-text">Data : {{ $mahasiswa }}</p>
                  <a href="{{ route('admin.mahasiswa.index') }}" class="btn btn-primary">Mahasiswa</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Data Jurusan</h5>
                  <p class="card-text">Data : {{ $jurusan }}</p>
                  <a href="{{ route('admin.jurusan.index') }}" class="btn btn-primary">Jurusan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
