<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk; // Import model Produk
use Illuminate\Support\Facades\Storage;
use Sheets;

class ProdukController extends Controller
{
    public $rowperpage = 4; // Jumlah baris per halaman

    public function index()
    {
        // Jumlah baris per halaman
        $data['rowperpage'] = $this->rowperpage;

        // Ambil data dari spreadsheet
        $sheet = Sheets::spreadsheet('14JiQXhCjKsWKR21G9vFzrAKM4s6ESmQ_46JM4Lk5mrI')->sheet('WSSContent')->get();
        $header = $sheet->pull(0);
        $values = Sheets::collection(header: $header, rows: $sheet);
        $data['data'] = $values->toArray();

        // Tampilkan tampilan index
        return view('wss.home', $data);
    }

    // Ambil data
    public function getProducts(Request $request)
    {
        $start = $request->get("start");

        // Ambil data
        $sheet = Sheets::spreadsheet('14JiQXhCjKsWKR21G9vFzrAKM4s6ESmQ_46JM4Lk5mrI')->sheet('WSSContent')->get();
        $header = $sheet->pull(0);
        $values = Sheets::collection(header: $header, rows: $sheet);
        $records = $values->toArray();

        // Buat HTML
        $html = "";
        for ($i = $start; $i < $start + $this->rowperpage && $i < count($records); $i++) {
            $item = $records[$i];
            $name = $item['NAMA_BARANG'];
            $price = number_format($item['HARGA_JUAL'], 0, ',', '.');

            $html .= '<div class="card w-75 post">
                <div class="card-body">
                    <h5 class="card-title">' . $name . '</h5>
                    <p class="card-text">Rp. ' . $price . ',-</p>
                </div>
            </div>';
        }

        $data['html'] = $html;

        return response()->json($data);
    }



    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        // Mengambil data dari spreadsheet Google Sheets
        $sheet = Sheets::spreadsheet('14JiQXhCjKsWKR21G9vFzrAKM4s6ESmQ_46JM4Lk5mrI')->sheet('WSSContent')->get();
        $header = $sheet->pull(0);
        $values = Sheets::collection(header: $header, rows: $sheet);
        $data = $values->toArray();

        // Lakukan pencarian berdasarkan 'NAMA_PRODUK' dalam data
        $produk = collect($data)->filter(function ($item) use ($searchTerm) {
            return stripos($item['NAMA_BARANG'], $searchTerm) !== false && floatval($item['JUMLAH']) > 0;
        })->take(5); // Batasi hanya 5 hasil yang ditampilkan

        return view('wss.searchpage', compact('produk'));
    }

    // public function search(Request $request)
    // {
    //     $searchTerm = $request->input('search');

    //     // Mengambil data dari spreadsheet Google Sheets
    //     $sheet = Sheets::spreadsheet('14JiQXhCjKsWKR21G9vFzrAKM4s6ESmQ_46JM4Lk5mrI')->sheet('WSSContent')->get();
    //     $header = $sheet->pull(0);
    //     $values = Sheets::collection(header: $header, rows: $sheet);
    //     $data = $values->toArray();

    //     // Lakukan pencarian berdasarkan 'NAMA_PRODUK' dalam data
    //     $results = collect($data)->filter(function ($item) use ($searchTerm) {
    //         return stripos($item['NAMA_BARANG'], $searchTerm) !== false;
    //     });

    //     return response()->json($results);
    // }



    //Dashboard Produk Admin

    public function infoProduk()
    {
        $produk = Produk::all();
        return view('admin.info-produk', compact('produk'));
    }


    // Fungsi untuk menampilkan formulir input produk
    public function tampilFormInput()
    {
        return view('admin.input.input-produk');
    }

    // Fungsi untuk menangani proses pengiriman formulir produk
    public function inputProduk(Request $request)
    {
        // Simpan data produk ke dalam database tanpa validasi
        Produk::create([
            'produk' => $request->input('produk'),
            'ukuran' => $request->input('ukuran'),
            'satuan' => $request->input('satuan'),
            'deskripsi' => $request->input('deskripsi'),
            'kategori' => $request->input('kategori'),
            'merk' => $request->input('merk'),
            'saran_penyajian' => $request->input('saran_penyajian'),
            'petunjuk_simpan' => $request->input('petunjuk_simpan'),
            'harga' => $request->input('harga'),
            'qty' => $request->input('qty'),
            'foto' => $request->file('foto')->store('produk', 'public'), // Simpan foto dengan storage
            'expired' => $request->input('expired'),
            'timeframe' => $request->input('timeframe'),
        ]);

        // Redirect kembali ke halaman input produk dengan pesan sukses
        return redirect()->route('infoProduk')->with('success', 'Produk berhasil ditambahkan!');
        }


        public function hapusProduk($id)
        {
        // Temukan produk berdasarkan ID
        $produk = Produk::find($id);

        // Periksa jika produk ditemukan
        if ($produk) {
            // Dapatkan nama file foto
            $namaFoto = $produk->foto;

            // Hapus foto terkait jika ada
            if (!empty($namaFoto)) {
            // Dapatkan path lengkap ke file foto dalam penyimpanan
            $path = public_path('storage/produk/' . $namaFoto);

            // Periksa apakah file ada sebelum dihapus
            if (file_exists($path)) {
                unlink($path); // Hapus file foto
            }
        }

            // Hapus produk dari database
            $produk->delete();

            // Redirect kembali ke halaman info produk dengan pesan sukses
            return redirect()->route('infoProduk')->with('success', 'Produk berhasil dihapus.');
            } else {
            // Redirect kembali ke halaman info produk dengan pesan error jika produk tidak ditemukan
            return redirect()->route('infoProduk')->with('error', 'Produk tidak ditemukan.');
             }
        }


    public function edit($id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return redirect()->route('infoProduk')->with('error', 'Produk tidak ditemukan.');
        }

        return view('admin.input.update-produk', compact('produk'));
    }

    // Fungsi untuk menangani proses update produk tanpa validasi
    public function update(Request $request, $id)
    {
        // Temukan produk berdasarkan ID
        $produk = Produk::find($id);

        // Periksa jika produk ditemukan
        if ($produk) {
            // Update data produk tanpa validasi
            $produk->update([
                'produk' => $request->input('produk'),
                'ukuran' => $request->input('ukuran'),
                'satuan' => $request->input('satuan'),
                'deskripsi' => $request->input('deskripsi'),
                'kategori' => $request->input('kategori'),
                'merk' => $request->input('merk'),
                'saran_penyajian' => $request->input('saran_penyajian'),
                'petunjuk_simpan' => $request->input('petunjuk_simpan'),
                'harga' => $request->input('harga'),
                'qty' => $request->input('qty'),
                'expired' => $request->input('expired'),
                'timeframe' => $request->input('timeframe'),
            ]);

            // Periksa jika ada upload foto baru
            if ($request->hasFile('foto')) {
                // Hapus foto lama jika ada
                if (!empty($produk->foto)) {
                    Storage::disk('public')->delete('produk/' . $produk->foto);
                }

                // Simpan foto baru
                $fotoPath = $request->file('foto')->store('produk', 'public');
                $produk->update(['foto' => $fotoPath]);
            }

            // Redirect kembali ke halaman info produk dengan pesan sukses
            return redirect()->route('infoProduk')->with('success', 'Produk berhasil diperbarui.');
        } else {
            // Redirect kembali ke halaman info produk dengan pesan error jika produk tidak ditemukan
            return redirect()->route('infoProduk')->with('error', 'Produk tidak ditemukan.');
        }
    }

}

