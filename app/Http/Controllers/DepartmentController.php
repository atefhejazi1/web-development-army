<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments =  Department::all();
        return view('departments.allDepartments', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departments.addDepartments');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:departments|max:50',
            'description' => 'required',
        ]);


        $department = new Department();

        $department->name = $request->name;
        $department->description = $request->description;

        $department->save();

        return redirect('/departments');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $department = Department::find($id);

        return view('departments/editDepartments', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'name' => 'required:departments|max:50',
            'description' => 'required',
        ]);


        Department::where('id', $id)
            ->update([
                "name" => $request->name,
                "description" => $request->description
            ]);


        return redirect('/departments');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $department = Department::find($id);

        $department->delete();

        return redirect('/departments');
    }
}
