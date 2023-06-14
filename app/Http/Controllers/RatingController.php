<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function add (Request $request)
    {
        return $stars_rated = $request->input('product_rating');
    }
}
