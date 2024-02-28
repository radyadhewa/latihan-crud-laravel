<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Inventory Management</title>
  <style>
    table, th, td {
      border: 1px solid black;
    }
  </style>
</head>

<body>
  <h1>Manajemen Inventori</h1>

  <table>
    <tr>
      <th>Nama Barang</th>
      <th>Jenis Barang</th>
      <th>Jumlah</th>
      <th>Tanggal Masuk</th>
    </tr>

    @foreach($databes as $i)
    <tr>
      <td>{{$i->nama_barang}}</td>
      <td>{{$i->jenis_barang}}</td>
      <td>{{$i->jumlah}}</td>
      <td>{{$i->tanggal_masuk}}</td>
    </tr>
    @endforeach
  </table>

</body>
</html>