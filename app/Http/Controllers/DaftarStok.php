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
    	return view('daftarstok');
}

public function tambah()
{
	return view('tambahstok');
}

public function simpan(Request $request)
{
	DB::table('barang_masuk')->insert([
		'nama' => $request->nama,
		'jumlah' => $request->jumlah,
	]);
	return redirect('/daftar');
 
}
public function edit($id)
{
	$barang_masuk = DB::table('barang_masuk')->where('no_id',$id)->get();
	return view('updatestok',['barang_masuk' => $barang_masuk]);
 
}

public function update(Request $request)
{
	
	DB::table('barang_masuk')->where('no_id',$request->id)->update([
		'nama' => $request->nama,
        'jumlah' => $request->jumlah,
        'tanggal' => $request->tanggal,
	]);

	return redirect('/daftar');
}

public function delete($id)
{
	DB::table('barang_masuk')->where('no_id',$id)->delete();
		
	return redirect('/daftar');
}
}