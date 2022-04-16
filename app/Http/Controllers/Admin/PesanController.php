<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use Illuminate\Support\Facades\DB;

class PesanController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function pesan_produk(Request $detail){
    	$produk_id = $detail->produk_id;
    	$daftar_produk = DB::table('produk')
                		->select('*')
                		->where('produk_id', $produk_id)
                		->first();
        return view('admin.pesan_produk', compact('daftar_produk'));
    }
}
