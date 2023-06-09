<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\HasilPanen;
use App\Models\Peminjaman;
use App\Models\CheckOut;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboardadmin()
    {
        $co =  CheckOut::count();
        $user = User::where('id_roles', '<>', '1')->count();
        $users = User::where('id_roles', '2')->get();
        $petani = User::where('id_roles', '3')->get();
        $transaksi = CheckOut::where('status', 'diterima')->sum('harga');;
        return view('admin.dashboard', compact(['co'],['user'],['transaksi'],['users'],['petani']));
    }
    public function profileadmin()
    {
        return view('admin.profile');
    }

    public function gudang()
    {

        $hasil = HasilPanen::where('status', 'Terkonfirmasi')->get();
        return view('admin.gudang', compact(['hasil']));

    }

    public function dana()
    {
        $dana = Peminjaman::where('status','Menunggu Validasi')->get();
        
        return view('admin.dana', compact(['dana']));
    }
    public function hasiltani()
    {
        $hasil = HasilPanen::where('status', 'Menunggu Konfirmasi')->get();
        return view('admin.hasiltani', compact(['hasil']));
    }
    
    public function acchasiltani($id)
    {
        $list = HasilPanen::find($id);
        return view('admin.acchasiltani' , compact(['list']));
    }
    public function confirm(Request $request, $id){
        $konfirmasihasiltani = HasilPanen::find($id);
        $konfirmasihasiltani->update($request->except('_token'));
        return redirect('/admin/hasiltani');
    }

    public function transaksi()
    {
        $trans = CheckOut::where('status', 'Menunggu Konfirmasi')->get();
        return view('admin.transaksi', compact(['trans']));
    }
    public function acctransaksi($id)
    {
        $list = CheckOut::find($id);
        return view('admin.acctransaksi' , compact(['list']));
    }
    public function confirmm(Request $requestt, $id){
        $konfirmasitransaksi = CheckOut::find($id);
        $konfirmasitransaksi->update($requestt->except('_token'));
        return redirect('/admin/transaksi');
    }
    public function responseadmin()
    {
        $response = Peminjaman::where('status', 'Valid')->get();
        return view('admin.responseadmin', compact(['response']));
    }
    public function accresponse($id)
    {
        $list = Peminjaman::find($id);
        return view('admin.accresponse' , compact(['list']));
    }
    public function confirmmm(Request $requesttt, $id){
        $konfirmasiadmin = Peminjaman::find($id);
        $konfirmasiadmin->update($requesttt->except('_token'));
        return redirect('/admin/responseadmin');
    }
<<<<<<< HEAD
    public function deleteResponse($id)
    {
        // Lakukan logika penghapusan data berdasarkan $id
        Response::findOrFail($id)->delete();

        // Setelah penghapusan, tambahkan kode notifikasi
        session()->flash('success', 'Permintaan ditolak');
        return redirect()->back();
    }


=======
    public function verifikasidana($id){
        $dana = Peminjaman::find($id);
        return view('admin.verifikasidana', compact(['dana']));
    }

    public function confirm2(Request $request, $id){
        $konfirmasidana = Peminjaman::find($id);
        $konfirmasidana->update($request->except('_token'));
        return redirect('/admin/dana');
    }

    public function reporting()
    {
        return view('admin.reporting');
    }
    public function reportingpenjualan()
    {
        $penjualan = CheckOut::all();
        return view('admin.reportingpenjualan',compact(['penjualan']));
    }
    public function reportingpeminjaman()
    {
        $peminjaman = Peminjaman::all();
        return view('admin.reportingpeminjaman', compact(['peminjaman']));
    }
>>>>>>> 2588202b8042a3928544f3ec0aca50bba77f92b6
}
