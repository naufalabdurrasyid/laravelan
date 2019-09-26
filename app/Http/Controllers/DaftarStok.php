<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class DaftarStok extends Controller
{
    public function index($nama){
 

$nama = DB::table('barang masuk')->get();
 

return view('index',['barang masuk' => $barang]);
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