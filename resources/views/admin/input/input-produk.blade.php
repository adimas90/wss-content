@extends('layouts.admin')

@section('content')
<div class="content-wrapper bg-white">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color: #000;">Tambah Produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content px-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body bg-white">
                            <form action="{{ route('inputProduk') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="produk">Nama Produk</label>
                                    <input type="text" class="form-control bg-white" id="produk" name="produk" required>
                                </div>

                                <div class="wrapper" style="display: flex; gap:15px">
                                    <div class="form-group">
                                        <label for="ukuran">Ukuran</label>
                                        <input type="number" step="0.01" class="form-control bg-white" id="ukuran" name="ukuran" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="satuan">Satuan</label>
                                        <select class="form-control bg-white" id="satuan" name="satuan" required>
                                            <option value="Butir">Butir</option>
                                            <option value="Kg">Kg</option>
                                            <option value="Gram">Gram</option>
                                            <option value="Liter">Liter</option>
                                            <option value="Buah">Buah</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control bg-white" id="deskripsi" name="deskripsi" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control bg-white" id="kategori" name="kategori" required>
                                        <option value="Sayur">Sayur</option>
                                        <option value="Buah">Buah</option>
                                        <option value="Telur">Telur</option>
                                        <option value="Daging Sapi">Daging Sapi</option>
                                        <option value="Daging Unggas">Daging Unggas</option>
                                        <option value="Daging Ikan">Daging Ikan</option>
                                        <option value="Beras">Beras</option>
                                        <option value="Susu">Susu</option>
                                        <option value="Bahan">Bahan</option>
                                        <option value="Instant">Instant</option>
                                        <option value="Snack">Snack</option>
                                        <option value="Protein">Protein</option>
                                        <option value="Tepung">Tepung</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="merk">Merk</label>
                                    <input type="text" class="form-control bg-white" id="merk" name="merk" required>
                                </div>
                                <div class="form-group">
                                    <label for="saran_penyajian">Saran Penyajian</label>
                                    <textarea class="form-control bg-white" id="saran_penyajian" name="saran_penyajian" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="petunjuk_simpan">Petunjuk Simpan</label>
                                    <textarea class="form-control bg-white" id="petunjuk_simpan" name="petunjuk_simpan" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" class="form-control bg-white" id="harga" name="harga" required>
                                </div>
                                <div class="form-group">
                                    <label for="qty">Qty</label>
                                    <input type="number" class="form-control bg-white" id="qty" name="qty" required>
                                </div>
                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" class="form-control-file" id="foto" name="foto" required>
                                </div>

                                <div class="wrapper" style="display: flex; gap:15px">
                                    <div class="form-group">
                                        <label for="expired">Expired</label>
                                        <input type="number" class="form-control bg-white" id="expired" name="expired" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="timeframe">Timeframe</label>
                                        <select class="form-control bg-white" id="timeframe" name="timeframe" required>
                                            <option value="Hari">Hari</option>
                                            <option value="Minggu">Minggu</option>
                                            <option value="Bulan">Bulan</option>
                                            <option value="Tahun">Tahun</option>
                                        </select>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
