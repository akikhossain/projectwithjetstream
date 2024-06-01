<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {

            $userType = Auth::user()->usertype;
            if ($userType == 'admin') {
                return view('admin.dashboard');
            } else {
                return view('dashboard');
            }
        }
    }
}
