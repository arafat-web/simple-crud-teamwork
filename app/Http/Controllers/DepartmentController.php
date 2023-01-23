<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DepartmentController extends Controller
{
    public $department;
    public $image,$imageName,$directory,$imageUrl;
    public function index(){
        $this->department = Department::all();
        return view('client.department.department',[
            'departments'=>$this->department,
            'edit'=>0
        ]);
    }
    public function create(Request $request){
        $request->validate([
            'dpt_name'=>'required',
            'dpt_code'=>'required',
        ]);
        $this->department = new Department();
        $this->department->dpt_name = $request->dpt_name;
        $this->department->dpt_code = $request->dpt_code;
        if ($request->file('dpt_image')!=null){
            $this->department->dpt_image = $this->getImageUrl($request);
        }
        $this->department->save();
        return back()->with('message','Department Added Successfully!!!');
    }
    private function getImageUrl($request){
        $this->image = $request->file('dpt_image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'upload/department/';
        $this->imageUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imageUrl;
    }

    public function show(){

    }
    public function edit($id){
        return view('client.department.department',[
            'departments'=>Department::all(),
            'department'=>Department::find($id),
            'edit'=>$id,
        ]);
    }
    public function update(Request $request){
        $request->validate([
            'id'=>'required',
            'dpt_name'=>'required',
            'dpt_code'=>'required',
        ]);
        $this->department = Department::find($request->id);
        $this->department->dpt_name = $request->dpt_name;
        $this->department->dpt_code = $request->dpt_code;

        $this->department->save();

        if ($request->file('dpt_image')!=null){
            $this->changeImageUrl($request);
        }
        return redirect(route('department'))->with('message','Department Updated Successfully!!!');
    }
    private function changeImageUrl($request){
        $this->department = Department::find($request->id);
        if ($this->department->dpt_image!=null){
            if (file_exists($this->department->dpt_image)){
                unlink($this->department->dpt_image);
            }
        }
        $this->department->dpt_image = $this->getImageUrl($request);
        $this->department->save();
    }

    public function delete($id){
        $this->department = Department::find($id);
        if ($this->department->dpt_image!=null){
            if (file_exists($this->department->dpt_image)){
                unlink($this->department->dpt_image);
            }
        }
        $this->department->delete();
        return back()->with('message','Department Deleted Successfully!!');
    }
}
