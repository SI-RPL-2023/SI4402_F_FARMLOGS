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
    public function login()
    {
        return view('login');
    }
    public function teslogin()
    {
        return view('teslogin');
    }
    public function cekregis(Request $request){
        $request->validate([
            'password' => 'confirmed'
        ]);

        $RegisterUser = User::create([
            'email' => $request->email,
            'nama' => $request->nama,
            'id_role' => 2,
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

        return redirect()->intended('/teslogin');
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

    public function profile()
    {
        return view('user.profile');
    }

    public function updateprof(Request $request)
    {           
        $request->validate([
            'password' => 'confirmed'

        ]);
        $user = User::find(Auth::id());
        DB::table('foowdusers')->update([
            'nama'=> $request->nama,
            'email'=> $request->email,
            'no_hp'=> $request->no_hp,
            'password'=> Hash::make($request->password),
            'alamat'=> $request->alamat
        ]);

        return back();
    }
}

