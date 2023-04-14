<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            'password' => 'confirmed'
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

    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required']
    ]);
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/pembeli/home');
    }


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

    public function updateprof(Request $request)
    {           
        $request->validate([
            'password' => 'confirmed',

        ]);
        $user = User::find(Auth::id());
        DB::table('users')->update([
            'email'=> $request->email,
            'nama'=> $request->nama,
            'nomor' => $request->nomor,
            'lahir' => $request->lahir,
            'daerah' => $request->daerah,
            'password'=> Hash::make($request->password),

        ]);

        return back();
    }
}

