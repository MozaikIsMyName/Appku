<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('student.data')->with([
        'student' => Student::all()
       ]);

       return view('student.formadd')->with([
        'student' => Student::all()
       ]);

       return view('dashboard.index');

    }

    public function __invoke(Request $request)
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorestudentRequest $request)
    {
        $validate = $request->validated();
        
        $student = new Student;
        $student->ID = $request->txtid;
        $student->NIS = $request->txtnis;
        $student->Nama = $request->txtname;
        $student->Asal_Sekolah = $request->txtname;
        $student->Tanggal_Lahir = $request->txttanggal_lahir;
        $student->Jenis_Kelamin = $request->txtjenis_kelamin;
        $student->Alamat = $request->txtalamat;
        $student->Kota = $request->txtkota;
        $student->save();

        return redirect('Student')->with('msg','Add New Student Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /** 
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestudentRequest $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        //
    }
}
