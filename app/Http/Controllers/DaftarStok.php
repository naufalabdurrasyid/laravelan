<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class DaftarStok extends Controller
{
    public function index(){
 

$barang_masuk = DB::table('barang_masuk')->get();
 

return view('daftarstok',['barang_masuk' => $barang_masuk]);
    }

    public function daftar(){
 
    	return view('daftar');
 
}

public function proses(Request $request){
    $nama = $request->input('nama');
     $jumlah = $request->input('jumlah');
    return "Nama Barang : ".$nama.", Jumlah Barang : ".$jumlah;
}

}