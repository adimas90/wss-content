@extends('layouts.admin')

@section('content')
    <div class="content-wrapper bg-white">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0" style="color: #000;">Produk WSS</h1>
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
            <a href="/input-produk" class="btn btn-success mt-3 mb-3">+ Tambah Produk</a>
            <table class="table table-bordered">
                <thead>
                    <tr class="table-success">
                        <th scope="col">ID</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Ukuran</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Penyimpanan</th>
                        <th scope="col">Penyajian</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Expired</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($produk as $row)
                        <tr class="align-middle">
                            <th scope="row">{{ $row->id }}</th>
                            <td>{{ $row->produk }}</td>
                            <td>
                                @if (is_numeric($row->ukuran) && floor($row->ukuran) == $row->ukuran)
                                    {{ number_format($row->ukuran, 0) }} {{ $row->satuan }}/Pack
                                @else
                                    {{ $row->ukuran }} {{ $row->satuan }}/Pack
                                @endif
                            </td>
                            <td>{{ $row->deskripsi }}</td>
                            <td>{{ $row->kategori }}</td>
                            <td>{{ $row->merk }}</td>
                            <td>{{ $row->petunjuk_simpan }}</td>
                            <td>{{ $row->saran_penyajian }}</td>
                            <td>Rp.&nbsp;{{ number_format($row->harga, 0, ',', '.') }},-</td>
                            <td>{{ $row->qty }}</td>
                            <td><img src="{{ asset('storage/' . $row->foto) }}" alt="{{ $row->produk }}" width="100">
                            </td>
                            <td>{{ $row->expired }} {{ $row->timeframe }}</td>
                            <td>
                                <a href="{{ route('editProduk', ['id' => $row->id]) }}" class="btn btn-primary">Update</a>
                                <form action="{{ route('hapusProduk', $row->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </section>
        <!-- /.content -->
    </div>
@endsection
