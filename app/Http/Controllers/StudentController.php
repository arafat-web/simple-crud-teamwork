<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('client.student.add-student');
    }
    public function create(){

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
