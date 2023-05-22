<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseAdminController extends Controller
{
    public function viewadmin()
    {
        return view('Admin.responseadmin');
    }
}
