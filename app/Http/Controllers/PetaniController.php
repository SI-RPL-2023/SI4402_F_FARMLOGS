<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
