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
    public function cekregis(Request $request){
        $request->validate([
            'password' => 'confirmed'
        ]);

        $RegisterUser = User::create([
            'email' => $request->email,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'birth' => $request->birth,
            'id_role' => 2,
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

        return redirect()->intended('/');
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
}
