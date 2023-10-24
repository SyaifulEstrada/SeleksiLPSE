<!DOCTYPE html>
<html>

<head>
  <style>
    #mahasiswa {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #mahasiswa td,
    #mahasiswa th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #mahasiswa tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #mahasiswa tr:hover {
      background-color: #ddd;
    }

    #mahasiswa th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #0d6efd;
      color: white;
    }
  </style>
</head>

<body>

  <h1>Data Tabel Mahasiswa</h1>

  <table id="mahasiswa">
    <tr>
      <th>No</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Jenis Kelamin</th>
      <th>Jurusan</th>
    </tr>

    @foreach ($mahasiswa as $m)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $m->nim }}</td>
        <td>{{ $m->nama }}</td>
        <td><textarea>{{ $m->alamat }}</textarea></td>
        <td>{{ $m->jekel }}</td>
        <td>{{ $m->jurusan->nama_jurusan }}</td>
      </tr>
    @endforeach
  </table>

</body>

</html>
