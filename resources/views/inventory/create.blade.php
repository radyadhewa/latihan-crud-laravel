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
  <h1>Masukkan Data Inventory</h1>

  <form action="/inventory/store" method="POST">
    @csrf
    <input type="text" name="nama_barang" placeholder="Nama Barang"><br>
    <input type="text" name="jenis_barang" placeholder="Jenis Barang"><br>
    <input type="integer" name="jumlah" placeholder="Jumlah Barang"><br>
    <input type="date" name="tanggal_masuk" placeholder="Tanggal Masuk"><br>
    <input type="submit" name="submit" value="Simpan Data">
  </form>
</body>
</html>