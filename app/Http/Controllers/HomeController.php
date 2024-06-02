<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function frontHome(Request $request)
    {
        $employees = Employee::latest();
        if (!empty($request->get('keyword'))) {
            $employees = $employees->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        $employees = $employees->paginate(10);
        return view('welcome', compact('employees'));
    }
}
