@extends('admin.layouts.app')

@section('konten')
<div class="container  mt-5">

    <div class="row justify-content-center">
        <h1 class="text-center">Data Jurusan</h1>
        <div class="col-md-5 mt-4">
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
                        <th scope="col">Kode Jurusan</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataJurusan as $jurusan)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $jurusan->kode_jurusan }}</td>
                        <td>{{ $jurusan->nama_jurusan }}</td>
                        <td>
                            <a href="{{ route('admin.jurusan.edit', $jurusan->id_jurusan) }}" class="btn btn-info btn-sm text-white">Edit</a> | <form action="{{ route('admin.jurusan.destroy', $jurusan->id_jurusan) }}" method="POST" onsubmit="return confirm('kamu yakin?')" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $dataJurusan->links() }}
            <a href="{{ route('admin.jurusan.create') }}" class="btn btn-secondary">Tambah Data</a>
            <a href="{{ route('jurusan.print') }}" class="btn btn-danger">Export PDF</a>
        </div>
    </div>

</div>
@endsection

