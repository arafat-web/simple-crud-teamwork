<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DepartmentController extends Controller
{
    public $department;
    public function index(){
        return view('client.department.department');
    }
    public function create(Request $request){

    }



    public function show(){


    }
    public function edit($id){

    }
    public function updateDepartment(Request $request){

    }

    public function deleteDepartment(Request $request){


    }
}
