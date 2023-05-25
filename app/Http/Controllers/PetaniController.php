<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\HasilPanen;
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
        return view('petani.cicilan');
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
}
