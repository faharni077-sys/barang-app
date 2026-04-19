<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
    <style>
        body { font-family: Arial; background:#f4f4f4; }
        .box { width:300px; margin:50px auto; padding:20px; background:#fff; border-radius:10px; }
        input, button { width:100%; padding:8px; margin:5px 0; }
        button { background:blue; color:white; border:none; }
        a { text-decoration:none; display:block; margin-top:10px; }
    </style>
</head>
<body>

<div class="box">
<h3>Tambah Barang</h3>

<form method="POST" action="/barang">
    @csrf
    <input type="text" name="nama_barang" placeholder="Nama Barang">
    <input type="number" name="harga" placeholder="Harga">
    <input type="number" name="stok" placeholder="Stok">
    <button>Simpan</button>
</form>

<a href="/barang">← Kembali</a>
</div>

</body>
</html>