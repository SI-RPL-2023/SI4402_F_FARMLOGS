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
        return view('admin.dashboard');
    }
    public function profileadmin()
    {
        return view('admin.profile');
    }
}
