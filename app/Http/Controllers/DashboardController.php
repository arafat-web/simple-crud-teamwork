<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Program;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $student = Student::join('programs', 'students.st_program', '=', 'programs.id')
            ->join('departments', 'students.st_dept', '=', 'departments.id')
            ->take(10)
            ->get(['students.*', 'programs.pg_name as pg_name', 'departments.dpt_name as dpt_name']);

        return view('client.dashboard.dashboard', [
            'total_st' => Student::all()->count(),
            'total_dpt' => Department::all()->count(),
            'total_pg' => Program::all()->count(),
            'students' => $student
        ]);
    }
    public function create(){

    }
    public function show(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
