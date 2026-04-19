<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
    <style>
    body { font-family: Arial; }
    table { border-collapse: collapse; }
    th { background: #eee; }
    a { margin: 0 5px; }
    </style>

</head>
<body>

<h2>Data Barang</h2>

<a href="/form">+ Tambah Data</a>
<br><br>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    @foreach($data as $d)
    <tr>
        <td>{{ $d->id }}</td>
        <td>{{ $d->nama_barang }}</td>
        <td>{{ $d->harga }}</td>
        <td>{{ $d->stok }}</td>
        <td>
            <a href="/edit/{{ $d->id }}">Edit</a>
            <a href="/delete/{{ $d->id }}">Hapus</a>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>