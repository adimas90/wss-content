@extends('layouts.admin')

@section('content')
<div class="content-wrapper bg-white">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="color: #000;">Edit Produk</h1>
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
                            <form action="{{ route('updateProduk', ['id' => $produk->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') <!-- Tambahkan metode PUT untuk update -->
                                <div class="form-group">
                                    <label for="produk">Nama Produk</label>
                                    <input type="text" class="form-control bg-white" id="produk" name="produk" required value="{{ $produk->produk }}">
                                </div>

                                <div class="wrapper" style="display: flex; gap:15px">
                                    <div class="form-group">
                                        <label for="ukuran">Ukuran</label>
                                        <input type="number" step="0.01" class="form-control bg-white" id="ukuran" name="ukuran" required value="{{ $produk->ukuran }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="satuan">Satuan</label>
                                        <select class="form-control bg-white" id="satuan" name="satuan" required>
                                            <option value="Butir" {{ $produk->satuan === 'Butir' ? 'selected' : '' }}>Butir</option>
                                            <option value="Kg" {{ $produk->satuan === 'Kg' ? 'selected' : '' }}>Kg</option>
                                            <option value="Gram" {{ $produk->satuan === 'Gram' ? 'selected' : '' }}>Gram</option>
                                            <option value="Liter" {{ $produk->satuan === 'Liter' ? 'selected' : '' }}>Liter</option>
                                            <option value="Buah" {{ $produk->satuan === 'Buah' ? 'selected' : '' }}>Buah</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control bg-white" id="deskripsi" name="deskripsi" required>{{ $produk->deskripsi }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control bg-white" id="kategori" name="kategori" required>
                                        <option value="Sayur" {{ $produk->kategori == 'Sayur' ? 'selected' : '' }}>Sayur</option>
                                        <option value="Buah" {{ $produk->kategori == 'Buah' ? 'selected' : '' }}>Buah</option>
                                        <option value="Telur" {{ $produk->kategori == 'Telur' ? 'selected' : '' }}>Telur</option>
                                        <option value="Daging Sapi" {{ $produk->kategori == 'Daging Sapi' ? 'selected' : '' }}>Daging Sapi</option>
                                        <option value="Daging Unggas" {{ $produk->kategori == 'Daging Unggas' ? 'selected' : '' }}>Daging Unggas</option>
                                        <option value="Daging Ikan" {{ $produk->kategori == 'Daging Ikan' ? 'selected' : '' }}>Daging Ikan</option>
                                        <option value="Beras" {{ $produk->kategori == 'Beras' ? 'selected' : '' }}>Beras</option>
                                        <option value="Susu" {{ $produk->kategori == 'Susu' ? 'selected' : '' }}>Susu</option>
                                        <option value="Bahan" {{ $produk->kategori == 'Bahan' ? 'selected' : '' }}>Bahan</option>
                                        <option value="Instant" {{ $produk->kategori == 'Instant' ? 'selected' : '' }}>Instant</option>
                                        <option value="Snack" {{ $produk->kategori == 'Snack' ? 'selected' : '' }}>Snack</option>
                                        <option value="Protein" {{ $produk->kategori == 'Protein' ? 'selected' : '' }}>Protein</option>
                                        <option value="Tepung" {{ $produk->kategori == 'Tepung' ? 'selected' : '' }}>Tepung</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="merk">Merk</label>
                                    <input type="text" class="form-control bg-white" id="merk" name="merk" required value="{{ $produk->merk }}">
                                </div>
                                <div class="form-group">
                                    <label for="saran_penyajian">Saran Penyajian</label>
                                    <textarea class="form-control bg-white" id="saran_penyajian" name="saran_penyajian" required>{{ $produk->saran_penyajian }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="petunjuk_simpan">Petunjuk Simpan</label>
                                    <textarea class="form-control bg-white" id="petunjuk_simpan" name="petunjuk_simpan" required>{{ $produk->petunjuk_simpan }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" class="form-control bg-white" id="harga" name="harga" required value="{{ $produk->harga }}">
                                </div>
                                <div class="form-group">
                                    <label for="qty">Qty</label>
                                    <input type="number" class="form-control bg-white" id="qty" name="qty" required value="{{ $produk->qty }}">
                                </div>
                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" class="form-control-file" id="foto" name="foto">
                                </div>

                                <div class="wrapper" style="display: flex; gap:15px">
                                    <div class="form-group">
                                        <label for="expired">Expired</label>
                                        <input type="number" class="form-control bg-white" id="expired" name="expired" required value="{{ $produk->expired }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="timeframe">Timeframe</label>
                                        <select class="form-control bg-white" id="timeframe" name="timeframe" required>
                                            <option value="Hari" {{ $produk->timeframe == 'Hari' ? 'selected' : '' }}>Hari</option>
                                            <option value="Minggu" {{ $produk->timeframe == 'Minggu' ? 'selected' : '' }}>Minggu</option>
                                            <option value="Bulan" {{ $produk->timeframe == 'Bulan' ? 'selected' : '' }}>Bulan</option>
                                            <option value="Tahun" {{ $produk->timeframe == 'Tahun' ? 'selected' : '' }}>Tahun</option>
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
