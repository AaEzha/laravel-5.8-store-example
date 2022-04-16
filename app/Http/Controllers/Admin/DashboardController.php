<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
    	$daftar_produk = DB::table('produk')
    						->paginate(20);
    	return view('admin.dashboard', compact('daftar_produk'));
    }
}
