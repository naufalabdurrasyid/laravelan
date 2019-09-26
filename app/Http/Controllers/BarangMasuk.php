<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class BarangMasuk extends Controller
{
    public function index(){
        $nama = "logistik";
        $namabarang = ["Ayam","Jagung","Bayam"];
        return view('barangmasuk' ,['nama' => $nama , 'barang' => $namabarang]);
    }
}