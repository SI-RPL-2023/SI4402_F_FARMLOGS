<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboardadmin()
    {
        // $count =  HasilPanen::count();
        // $tr =  Transactions::count();
        // $user = User::count();
        // $transaksi = Transactions::sum('harga');
        // $list = User::all();
        return view('admin.dashboard');
    }
    public function profileadmin()
    {
        return view('admin.profile');
    }
    public function tableadmin()
    {
        
        $list = Food::all();
        return view('Admin.tableadmin', compact(['list']));
    }
    public function konfirmasi($id)
    {
        $list = Transactions::find($id);
        return view('Admin.konfirmasi' , compact(['list']));
    }
    public function validateadmin()
    {
   
        $list = Transactions::all();
        return view('Admin.validateadmin', compact(['list']));
    }
    public function konfirmasipesanan(Request $request, $id){
        $konfirmasipesanan = Transactions::find($id);
        $konfirmasipesanan->update($request->except('_token'));
        return redirect('/Admin/validateadmin');
    }
    public function deletemakanan($id){
        $deletemakanan = Food::find($id);
        $deletemakanan->delete();
        return redirect('/Admin/tableadmin');
    }
}
