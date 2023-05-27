<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\HasilPanen;
use App\Models\CheckOut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function registerpetani()
    {
        return view('registerpetani');
    }
    public function login()
    {
        return view('login');
    }

    public function cekregis(Request $request){
        $request->validate([
            'password' => 'confirmed',
            'email' => ['required', 'unique:users', 'email:dns']
        ]);

        $RegisterUser = User::create([
            'email' => $request->email,
            'nama' => $request->nama,
            'id_roles' => 2,
            'nomor' => $request->nomor,
            'lahir' => $request->lahir,
            'daerah' => $request->daerah,
            'password' => Hash::make($request->password),
        ]);
        if($RegisterUser){
            return redirect('/login');
        }

    }
    public function cekregis2(Request $request){
        $request->validate([
            'password' => 'confirmed'
        ]);

        $RegisterUser = User::create([
            'email' => $request->email,
            'nama' => $request->nama,
            'id_roles' => 3,
            'nomor' => $request->nomor,
            'lahir' => $request->lahir,
            'daerah' => $request->daerah,
            'password' => Hash::make($request->password),
        ]);
        if($RegisterUser){
            return redirect('/login');
        }

    }
    public function ceklogin(Request $request)
    {

        $credentials = $request->only('email', 'password', 'id_roles');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if ($request->user()->id_roles == '1') {
                return redirect()->intended('/admin/dashboard');
            }

            if ($request->user()->id_roles == '2') {
                return redirect()->intended('/pembeli/home');
            }

            if ($request->user()->id_roles == '3') {
                return redirect()->intended('/petani/home');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);


    return redirect('/login');

    }
    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
    }

    public function homepembeli()
    {
        return view('pembeli.home');
    }

    public function profilepembeli()
    {
        return view('pembeli.profile');
    }
    public function transaksipembeli()
    {
        $list = CheckOut::all();
        return view('pembeli.transaksi', compact('list'));
    }

    public function checkoutpembeli($id)
    {
        $list = HasilPanen::find($id);
        return view('pembeli.checkout', compact('list'));
    }

    public function inputpanen(Request $request){
        $inputpanen = CheckOut::create([
            'nama'=> $request->nama,
            'email'=> $request->email,
            'nomor'=> $request->nomor,
            'alamat'=> $request->alamat,
            'pembayaran' => $request -> pembayaran,
            'name' => $request->name,
            'harga' => $request->harga,
            'status' => "Menunggu Konfirmasi"

        ]);
        if($inputpanen){
            return redirect('/pembeli/home');
        }
    }

    public function updateprof(Request $request)
    {           
        $request->validate([
            'password' => 'confirmed',

        ]);
        $user = Auth::user();;
        DB::table('users')
        ->where('id', $user->id)
        ->update([
            'email'=> $request->email,
            'nama'=> $request->nama,
            'nomor' => $request->nomor,
            'lahir' => $request->lahir,
            'daerah' => $request->daerah,
            'password'=> Hash::make($request->password),

        ]);

        return back();
    }

    
    public function menupembeli()
    {
        $list = HasilPanen::where('status', 'Terkonfirmasi')->get();
        return view('pembeli.menu',compact('list'));
    }
    

}

