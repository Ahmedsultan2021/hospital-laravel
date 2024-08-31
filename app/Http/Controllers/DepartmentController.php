<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    function index()
    {
        $departments = Department::all();
        // dd($departments);
        return view('departments.index', ["departments" => $departments]);
    }
    function create()
    {
        return view('departments.create');
    }

    function store(Request $request)
    {
        // echo "hello from store method";
        // dd($request->input());
        $department = new Department();
        $department->name = $request->name;
        $department->Description = $request->Description;
        $department->save();

        return redirect()->to('/departments');
        // return redirect()->route('')
        // return redirect()->back();
        // return to_route('');
        // return redirect('');
    }
    function edit(Department $department, Request $request)
    {
        return view('departments.edit', ["department" => $department]);
    }
    function update(Department $department, Request $request)
    {
        $department->name = $request->name;
        $department->Description = $request->Description;
        $department->save();
        return redirect()->to('/departments');
    }
    function destroy(Department $department)
    {
       $department->delete();
       return redirect()->to('/departments');

    }
}
