<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::latest()->paginate(5);

        return view('employees.index', compact('employees'))
            ->with('i',(request()->input('page',1)- 1 ) * 5);

            $employees = Employee::latest()->paginate(5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nip' => 'required',
            'nik' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'date_accepted_work' => 'required',
            'employee_status' => 'required',
            'position' => 'required',
            'department' => 'required',
            'email' => 'required',
            'telp' => 'required',
            'address' => 'required',
            'mariatal_status' => 'required',
            'gender' => 'required'
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'nip' => 'required',
            'nik' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'date_accepted_work' => 'required',
            'employee_status' => 'required',
            'position' => 'required',
            'department' => 'required',
            'email' => 'required',
            'telp' => 'required',
            'address' => 'required',
            'mariatal_status' => 'required',
            'gender' => 'required'
        ]);
        $employee->update($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Employee deleted successfully');
    }

    public function generate ($id)
    {
        $data = Employee::findOrFail($id);
        $qrcode = QrCode::size(400)->generate($data->nik);
        return view('qrcode',compact('qrcode'));
    }
}
