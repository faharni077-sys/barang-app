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

<a href="{{ route('barang.create') }}">+ Tambah Data</a>
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

    @foreach($barang as $b)
    <tr>
        <td>{{ $b->id }}</td>
        <td>{{ $b->nama_barang }}</td>
        <td>{{ $b->harga }}</td>
        <td>{{ $b->stok }}</td>
        <td>
            <a href="{{ route('barang.edit', $b->id) }}">Edit</a>

            <form action="{{ route('barang.destroy', $b->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button>Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>