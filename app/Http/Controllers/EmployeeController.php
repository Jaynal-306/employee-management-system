<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
            $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'required',
            'designation' => 'required',
            'salary' => 'required|numeric',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $photoPath = null;

        if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('employees', 'public');
        }

        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'designation' => $request->designation,
            'salary' => $request->salary,
            'photo' => $photoPath,
        ]);

        return back()->with('success', 'Employee added successfully!');
    }

    public function show(Request $request)
    {
        // $employees = Employee::all();
        $employees = Employee::where('name', 'like', "%{$request->search}%")
        ->orWhere('email', 'like', "%{$request->search}%")->paginate(6);
        return view('employee.show', compact('employees'));
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'designation' => 'required',
            'salary' => 'required|numeric',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $photoPath = $employee->photo;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('employees', 'public');
        }

        $employee->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'designation' => $request->designation,
            'salary' => $request->salary,
            'photo' => $photoPath,
        ]);

        return redirect()->route('employees.show')->with('success', 'Employee updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->route('employees.show')->with('success', 'Employee deleted successfully!');
    }

    public function details($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.details', compact('employee'));
    }

    public function dashboard()
    {
        $totalEmployees = Employee::count();
        $totalSalary = Employee::sum('salary');

        return view('dashboard', compact('totalEmployees', 'totalSalary'));
    }

}


