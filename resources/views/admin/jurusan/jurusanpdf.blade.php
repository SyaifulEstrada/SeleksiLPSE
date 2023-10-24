<!DOCTYPE html>
<html>

<head>
  <style>
    #jurusan {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #jurusan td,
    #jurusan th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #jurusan tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #jurusan tr:hover {
      background-color: #ddd;
    }

    #jurusan th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #0d6efd;
      color: white;
    }
  </style>
</head>

<body>

  <h1>Data Tabel Jurusan</h1>

  <table id="jurusan">
    <tr>
      <th>No</th>
      <th>Kode Jurusan</th>
      <th>Nama Jurusan</th>
    </tr>

    @foreach ($jurusan as $j)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $j->kode_jurusan }}</td>
        <td>{{ $j->nama_jurusan }}</td>
      </tr>
    @endforeach
  </table>

</body>

</html>
