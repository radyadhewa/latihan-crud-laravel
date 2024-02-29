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
  <h1>Perbaharui Data Inventory</h1>

  <form action="/inventory/{{$inventory->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nama_barang" placeholder="Nama Barang" value="{{$inventory->nama_barang}}"><br>
    <input type="text" name="jenis_barang" placeholder="Jenis Barang" value="{{$inventory->jenis_barang}}"><br>
    <input type="integer" name="jumlah" placeholder="Jumlah Barang" value="{{$inventory->jumlah}}"><br>
    <input type="date" name="tanggal_masuk" placeholder="Tanggal Masuk" value="{{$inventory->tanggal_masuk}}"><br>
    <input type="submit" name="submit" value="Simpan Data">
  </form>
</body>
</html>