<?php

namespace App\Http\Controllers;

use App\Models\ArtikelPetani;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ArtikelPetaniController extends Controller
{
    public function index()
    {
        $artikelpetani = ArtikelPetani::all();
        return view('artikelpetani.index', [
            'title' => 'Artikel',
            'active' => 'artikel',
            'datas' => $artikelpetani,
        ]);
    }    
    public function show($id_artikelpetani) 
    {
        $artikelpetani = Artikel::find($id_artikelpetani);
        return view('artikelpetani.show', compact('artikelpetani')); 
    }
    
}
