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
        $list = Peminjaman::where('email', Auth::user()->email)->get();
        return view('petani.cicilan', compact('list'));
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

        if ($request->hasFile('ktp')) {
            $ekstensiKTP = $request->file('ktp')->getClientOriginalExtension();
            $namaKTP = $request->name.'-'.now()->timestamp.'.'.$ekstensiKTP;
            $request->file('ktp')->storeAs('public/Data/KTP', $namaKTP);
            $request['ktp'] = $namaKTP;
        }
        
        if ($request->hasFile('lahan')) {
            $ekstensiLahan = $request->file('lahan')->getClientOriginalExtension();
            $namaLahan = $request->name.'-'.now()->timestamp.'.'.$ekstensiLahan;
            $request->file('lahan')->storeAs('public/Data/Lahan', $namaLahan);
            $request['lahan'] = $namaLahan;
        }
        
        $cekinput = Peminjaman::create([
            'ktp' => $namaKTP,
            'petani' => $request->petani,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'dana' => $request->dana,
            'tujuan' => $request->tujuan,
            'cicilan' => $request->cicilan,
            'lahan' => $namaLahan,
            'jatuhtempo' => date('Y-m-d', strtotime($request->created_at . ' +'.$request->cicilan.' months')),
            'status' => "Menunggu Validasi"
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

    public function invoice($id)
    {
        $invoice = Peminjaman::find($id);
        return view('petani.invoice', compact(['invoice']));
    }
    
}

