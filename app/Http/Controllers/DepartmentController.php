<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public $department;
    public function index(){
        return view('client.department.department');
    }
    public function create(Request $request){
        $request->validate([
            'dpt_name'=>'required|max:255',
            'dpt_code'=>'required|max:255',
            'dpt_image'=>'nullable',
        ]);
        Department::create($request);
        return redirect()->back();
    }



    public function show(){
        return view('client.department.department',[
           'departments'=> Department::latest()->get(),
        ]);

    }
    public function edit($id){
        return view('client.department.edit_department',[
            'department'=>Department::find($id),
            'departments'=> Department::latest()->get(),
        ]);

    }
    public function updateDepartment(Request $request){
        $request->validate([
            'dpt_name'=>'required|max:255',
            'dpt_code'=>'required|max:255',
            'dpt_image'=>'nullable',
        ]);

        Department::updateDepartment($request);
        return redirect()->back();
    }

    public function deleteDepartment(Request $request){
        $this->department = Department::find($request->id);
        if ($this->department->dpt_image!=null){
            unlink($this->department->dpt_image);
        }
        $this->department->delete();
        return redirect()->back();

    }
}
