@extends('admin.layouts.app')

@section('konten')
    <div class="container  mt-5">
        <div class="row justify-content-center">
            <h1 class="text-center">Data Mahasiswa</h1>
            <div class="col-md-10 mt-4">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <table class="table table-responsive table-hover table-borderless text-center rounded shadow ">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataMahasiswa as $mahasiswa)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $mahasiswa->nim }}</td>
                                <td>{{ $mahasiswa->nama }}</td>
                                <td>
                                    <textarea class="form-control">{{ $mahasiswa->alamat }}</textarea>
                                </td>
                                <td>{{ $mahasiswa->jekel }}</td>
                                <td>{{ $mahasiswa->jurusan->nama_jurusan }}</td>
                                <td>
                                    <a href="{{ route('admin.mahasiswa.edit', $mahasiswa->nim) }}"
                                        class="btn btn-info btn-sm text-white"><i class="bi bi-pencil"></i></a> |
                                    <form action="{{ route('admin.mahasiswa.destroy', $mahasiswa->nim) }}" method="POST"
                                        onsubmit="return confirm('Kamu yakin?')" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $dataMahasiswa->links() }}
                <a href="{{ route('admin.mahasiswa.create') }}" class="btn btn-secondary">Tambah Data</a>
                <a href="{{ route('mahasiswa.print') }}" class="btn btn-danger">Export PDF</a>
            </div>
        </div>
    </div>
@endsection
