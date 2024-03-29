<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        return view('employee.index', ['employee' => $employee]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $employee = new Employee;
        // $employee->nama = $request->nama;
        // $employee->nik = $request->nik;
        // $employee->email = $request->email;
        // $employee->jabatan = $request->jabatan;

        // $employee->save();

        // Employee::create([
        //     'nama' => $request->nama,
        //     'nik' => $request->nik,
        //     'email' => $request->email,
        //     'jabatan' => $request->jabatan
        // ]);
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|size:9'
        ]);

        Employee::create($request->all());
        return redirect('/employee')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
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
            'nama' => 'required',
            'nik' => 'required|size:9'
        ]);
        
        Employee::where('id', $employee->id)
        ->update([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'email' => $request->email,
            'jabatan' => $request->jabatan
        ]);
        return redirect('/employee')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->id);
        return redirect('/employee')->
        with('status', 'Data Berhasil Dihapus!');
    }
}
