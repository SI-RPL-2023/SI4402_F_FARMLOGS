<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\HasilPanen;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\DB;


class PetaniController extends Controller
{
    public function profilepetani()
    {
        return view('petani.profile');
    }
    public function homepetani()
    {
        return view('petani.home');
    }
    public function inputpanen()
    {
        return view('petani.inputpanen');
    }
    public function peminjaman()
    {
        return view('petani.peminjaman');
    }
    public function cicilan()
    {
        $list = Peminjaman::all();
        return view('petani.cicilan', compact(['list']));
    }
    public function cekinput(Request $request){
        $ekstensi = $request->file('image')->clientExtension();
        $nama = $request->name.'-'.now()->timestamp.'.'.$ekstensi;
        $request->file('image')->storeAs('public/Panen', $nama);
        $request['image'] = $nama;
        $cekinput = HasilPanen::create([
            'name' => $request->name,
            'detail' => $request->detail,
            'image' => $nama,
            'harga' => $request->harga,
            'hasil' => $request->hasil,
            'status' => "Menunggu Konfirmasi"
        ]);
        if($cekinput){
            return redirect('/petani/inputpanen');
        }
    }
    public function peminjamandana(Request $request){
        $ekstensi = $request->file('ktp')->clientExtension();
        $nama = $request->name.'-'.now()->timestamp.'.'.$ekstensi;
        $request->file('ktp')->storeAs('public/Data', $nama);
        $request['ktp'] = $nama;
        $cekinput = Peminjaman::create([
            'ktp' => $nama,
            'petani' => $request->petani,
            'alamat' => $request->alamat,
            'dana' => $request->dana,
            'tujuan' => $request->tujuan,
            'cicilan' => $request->cicilan,
            'lahan' => $request->lahan,
            'jatuhtempo' => '2024-12-31',
            'status' => "Menunggu Konfirmasi"
        ]);
        if($cekinput){
            return redirect('/petani/peminjaman');
        }
        
    }

    public function bayarcicilan(Request $request){
        $id = $request->input('id');
        DB::table('peminjaman')->where('id', $id)->update(['status' => 'Lunas']);

        return redirect('/petani/cicilan');

    }
}

