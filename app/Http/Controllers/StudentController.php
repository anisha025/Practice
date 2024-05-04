<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'image' => 'required',
        ]);
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->address = $request->address;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('images/'), $fileName);
        }
        $student->image = 'images/' . $fileName;
        $student->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit', compact('student')); // bakend bata frontend maa data pathaauna lai
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->address = $request->address;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('images/'), $fileName);
            $student->image = 'images/' . $fileName;
        }
        $student->update();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return back();
    }
}
