<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function input_produk(){
    	return view('admin.input_produk');
    }

    public function simpan_input_produk(Request $simpan){
    	$nama_produk = $simpan->nama_produk;
    	$stok = $simpan->stok;
    	$kategori = $simpan->kategori;
    	$harga = $simpan->harga;
    	$berat_produk = $simpan->berat_produk;
    	$masa_penyimpanan = $simpan->masa_penyimpanan;
    	$tanggal_kadaluwarsa = $simpan->tanggal_kadaluwarsa;
    	$deskripsi = $simpan->deskripsi;
    	$foto = $simpan->file('foto');

    	$file = uniqid('foto');
    	$ekstensi_file = $foto->getClientOriginalExtension();
    	$nama_file = $file . "." . $ekstensi_file;

    	$direktori_upload = public_path().'/upload_file';
    	$foto->move($direktori_upload, $nama_file);

    	$simpan_produk = [
    		'nama_produk' => $nama_produk,
    		'stok' => $stok,
    		'kategori' => $kategori,
    		'harga' => $harga,
    		'berat_produk' => $berat_produk,
    		'masa_penyimpanan' => $masa_penyimpanan,
    		'tanggal_kadaluwarsa' => $tanggal_kadaluwarsa,
    		'deskripsi' => $deskripsi,
    		'foto' => $nama_file
    	];

    	DB::table('produk')
    		->insert($simpan_produk);

    	return redirect(route('list_produk'));
    }

    public function list_produk(){
    	$daftar_produk = DB::table('produk')
    						->select('*')
    						->get();

    	return view('admin.list_produk', compact('daftar_produk'));
    }

    public function delete_produk($produk_id){
        DB::table('produk')
                ->where('produk_id',$produk_id)
                ->delete();
        return redirect(route('list_produk'));
    }

    public function edit_produk($produk_id){
        $daftar = DB::table('produk')
                ->select('*')
                ->where('produk_id', $produk_id)
                ->first();

        return view('admin.form_edit_produk', compact('daftar'));
    }

    public function simpan_edit_produk(Request $edit){
        $nama_produk = $edit->nama_produk;
        $stok = $edit->stok;
        $kategori = $edit->kategori;
        $harga = $edit->harga;
        $berat_produk = $edit->berat_produk;
        $masa_penyimpanan = $edit->masa_penyimpanan;
        $tanggal_kadaluwarsa = $edit->tanggal_kadaluwarsa;
        $deskripsi = $edit->deskripsi;
        $foto = $edit->file('foto');

        $file = uniqid('foto');
        $ekstensi_file = $foto->getClientOriginalExtension();
        $nama_file = $file . "." . $ekstensi_file;

        $direktori_upload = public_path().'/upload_file';
        $foto->move($direktori_upload, $nama_file);

        $update_data = [
            'nama_produk' => $nama_produk,
            'stok' => $stok,
            'kategori' => $kategori,
            'harga' => $harga,
            'berat_produk' => $berat_produk,
            'masa_penyimpanan' => $masa_penyimpanan,
            'tanggal_kadaluwarsa' => $tanggal_kadaluwarsa,
            'deskripsi' => $deskripsi,
            'foto' => $nama_file
        ];

        DB::table('produk')
            ->where('produk_id', $edit->produk_id)
            ->update($update_data);

        return redirect(route('list_produk'));
    }
}
