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
        return view('client.student.manage-student');
    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }

}
