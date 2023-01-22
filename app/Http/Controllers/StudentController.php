<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('client.student.add-student');
    }
    public function store(Request $request){
        $request->validate([
            'st_name' => 'required',
            'st_phone' => 'required',
            'st_email' => 'required',
            'st_dept' => 'required',
            'st_program' => 'required',
            'st_admd' => 'required',
            'st_image' => 'required',
        ]);

        $milliseconds = floor(microtime(true));
        if ($request->hasFile('st_image')) {
            $path = $request->file('st_image');
            $imageName = rand() . '.' . $path->getClientOriginalExtension();
            $this->getImage = 'upload/' . $imageName;
            $path->move(public_path('upload/'), $imageName);
        }

        Student::create([
            'st_id' => $milliseconds,
            'st_phone' => $request->st_phone,
            'st_email' => $request->st_email,
            'st_name' => $request->st_name,
            'st_dept' => $request->st_dept,
            'st_program' => $request->st_program,
            'st_admd' => $request->st_admd,
            'st_image' => $this->getImage,
        ]);
        return back()->with('success', 'Student has been Added successfully!');
    }
    public function show(){
        return view('client.student.show-student');
    }
    public function manage(){

        return view('client.student.manage-student');
    }
    public function edit(){

        return view('client.student.edit-student');
    }
    public function update(){

    }
    public function destroy(){

    }

}
