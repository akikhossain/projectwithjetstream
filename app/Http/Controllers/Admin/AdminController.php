<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::id()) {

            $userType = Auth::user()->usertype;
            if ($userType == 'admin') {
                $employees = Employee::latest();
                if (!empty($request->get('keyword'))) {
                    $employees = $employees->where('name', 'like', '%' . $request->get('keyword') . '%');
                }
                $employees = $employees->paginate(10);
                return view('admin.dashboard', compact('employees'));
            } else {

                return view('dashboard');
            }
        }
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'department' => 'required',
            'position' => 'required',
        ]);
        if ($validator->fails()) {
            session()->flash('error', 'Please fill in all the fields.');
            return redirect()->route('admin.create')
                ->withErrors($validator)
                ->withInput();
        }
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->department = $request->department;
        $employee->position = $request->position;
        $employee->save();

        session()->flash('success', 'Employee created successfully.');
        return redirect()->route('home')
            ->with('success', 'Employee created successfully.');
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('admin.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'department' => 'required',
            'position' => 'required',
        ]);
        if ($validator->fails()) {
            session()->flash('error', 'Please fill in all the fields.');
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->department = $request->department;
        $employee->position = $request->position;
        $employee->save();

        session()->flash('success', 'Employee updated successfully.');
        return redirect()->route('home')
            ->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        session()->flash('success', 'Employee deleted successfully.');
        return redirect()->route('home')
            ->with('success', 'Employee deleted successfully.');
    }
}
