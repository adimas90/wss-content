<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Produk WSS</h1>

    <ul>
        @foreach ($data as $row)
            <li style="padding-top:30px"><span style="color: green;">NAMA PRODUK:</span> {{ $row['NAMA_BARANG'] }}</li>
            <li><span style="color: green;">KATEGORI:</span> {{ $row['KATEGORI'] }}</li>
            <li><span style="color: green;">HARGA:</span> Rp. {{ number_format($row['HARGA_JUAL'], 0, ',', '.') }},-</li>
            <li><span style="color: green;">SUPPLIER:</span> {{ $row['SUPPLIER'] }}</li>
            <!-- Ganti 'nama_kolom' dengan nama kolom yang sesuai di spreadsheet -->
        @endforeach
    </ul>

</body>
</html>
