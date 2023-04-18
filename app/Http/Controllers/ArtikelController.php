<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        return view('artikel.index', [
            'title' => 'Artikel',
            'active' => 'artikel',
            'datas' => $artikel,
        ]);
    }    
    public function show($id_artikel) 
    {
        $artikel = Artikel::find($id_artikel);
        return view('artikel.show', compact('artikel')); 
    }
    
}
