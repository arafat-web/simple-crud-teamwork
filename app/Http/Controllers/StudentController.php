<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Program;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $getImage;
    public function index()
    {
        return view('client.student.add-student', [
            'programs' => Program::all(),
            'depts' => Department::all()
        ]);
    }

    public function store(Request $request)
    {
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
            $this->getImage = 'upload/student/' . $imageName;
            $path->move(public_path('upload/student/'), $imageName);
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

    public function show($id)
    {
        $student = Student::join('programs', 'students.st_program', '=', 'programs.id')
            ->join('departments', 'students.st_dept', '=', 'departments.id')
            ->where('students.id', $id)
            ->first(['students.*', 'programs.pg_name as pg_name', 'departments.dpt_name as dpt_name']);
        return view('client.student.show-student', compact('student'));
    }

    public function manage()
    {
        $students = Student::join('programs', 'students.st_program', '=', 'programs.id')
            ->join('departments', 'students.st_dept', '=', 'departments.id')
            ->get(['students.*', 'programs.pg_name as pg_name', 'departments.dpt_name as dpt_name']);
        return view('client.student.manage-student', compact('students'));
    }

    public function edit($id)
    {
        $students = Student::join('programs', 'students.st_program', '=', 'programs.id')
            ->join('departments', 'students.st_dept', '=', 'departments.id')
            ->where('students.id', $id)
            ->first(['students.*', 'programs.pg_name as pg_name', 'departments.dpt_name as dpt_name']);
        return view('client.student.edit-student', [
            'depts' => Department::all(),
            'programs' => Program::all()
        ], compact('students'));

    }

    public function update(Request $request)
    {
        $request->validate([
            'st_name' => 'required',
            'st_phone' => 'required',
            'st_email' => 'required',
            'st_dept' => 'required',
            'st_program' => 'required',
            'st_admd' => 'required',
        ]);

        if ($request->hasFile('st_image')) {
            $path = $request->file('st_image');
            $imageName = rand() . '.' . $path->getClientOriginalExtension();
            $this->getImage = 'upload/student/' . $imageName;
            $path->move(public_path('upload/student/'), $imageName);
            if (file_exists($request->old_image))
                unlink($request->old_image);
        } else {
            $this->getImage = $request->old_image;
        }

        Student::where('id', $request->id)->update([
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

    public function destroy($id)
    {
        $student = Student::find($id);
        if ($student->st_image != null) {
            if (file_exists($student->st_image))
                unlink($student->st_image);
        }
        $student->delete();
        return back()->with('success', 'Student has been deleted successfully!');
    }

}
