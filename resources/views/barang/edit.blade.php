<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <style>
        body { font-family: Arial; background:#f4f4f4; }
        .box { width:300px; margin:50px auto; padding:20px; background:#fff; border-radius:10px; }
        input, button { width:100%; padding:8px; margin:5px 0; }
        button { background:green; color:white; border:none; }
    </style>
</head>
<body>

<div class="box">
<h3>Edit Barang</h3>

<form method="POST" action="/update/{{ $data->id }}">
    @csrf
    <input type="text" name="nama_barang" value="{{ $data->nama_barang }}">
    <input type="number" name="harga" value="{{ $data->harga }}">
    <input type="number" name="stok" value="{{ $data->stok }}">
    <button>Update</button>
</form>

<a href="/barang">← Kembali</a>
</div>

</body>
</html>