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
  <link href="{{asset('css/styles.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="px-20 m-8 bg-dark">
  <h1 class="font-extrabold text-5xl m-10 text-white">Manajemen Inventori</h1>

  <div class="relative overflow-x-auto rounded-lg">
  <table class="table table-dark">
    <tr class="" style="text-align: center;">
      <th>Nama Barang</th>
      <th>Jenis Barang</th>
      <th>Jumlah</th>
      <th>Tanggal Masuk</th>
      <th>Aksi</th>
    </tr>

    @foreach($databes as $i)
    <tr>
      <td>{{$i->nama_barang}}</td>
      <td>{{$i->jenis_barang}}</td>
      <td>{{$i->jumlah}}</td>
      <td>{{$i->tanggal_masuk}}</td>
      <td>
        <div class="d-flex justify-content-center align-items-center">
          <button class="btn btn-outline-primary m-2 items-center" style="align-items: center;"> <a style="text-decoration: 0;" href="/inventory/{{$i->id}}/edit">Edit Data</a> </button>
        </div>
        <form action="/inventory/{{$i->id}}" method="POST">
          @csrf
          @method('delete')
          <div class="d-flex justify-content-center align-items-center">
          <input class="btn btn-outline-danger" type="submit" value="Hapus Data">
          </div>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
  </div>
  <br>
  <button class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" onclick="window.location.href='/inventory/create'">Tambah Inventori</button>

</body>
</html>