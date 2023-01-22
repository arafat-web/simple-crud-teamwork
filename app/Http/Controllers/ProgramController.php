<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public $program;
    public function index(){
        $this->program = Program::all();
        return view('client.program.program',[
            'programs'=>$this->program,
            'edit'=>0,
        ]);
    }
    public function create(Request $request){
        $this->program = new Program();
        $this->program->pg_name = $request->pg_name;
        $this->program->pg_code = $request->pg_code;
        if ($request->file('pg_image')!=null){

            $this->program->pg_image = $this->getImageUrl($request);
        }
        $this->program->save();
        return back()->with('message','Program Created Successfully!!!!');
    }
    private $image, $imageName,$imageUrl,$directory;
    private function getImageUrl($request){
        $this->image = $request->file('pg_image');
        $this->imageName = rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'images/program/';
        $this->imageUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imageUrl;
    }
    public function show(){

    }
    public $allProgram;
    public function edit($id){
        $this->program = Program::find($id);
        $this->allProgram = Program::all();

        return view('client.program.program',[
            'program'=>$this->program,
            'edit'=>$id,
            'programs'=>$this->allProgram,
        ]);

    }
    public function update(Request $request){
        $this->program = Program::find($request->id);
        $this->program->pg_name = $request->pg_name;
        $this->program->pg_code = $request->pg_code;
        $this->program->save();
        if ($request->file('pg_image')!=null){
            $this->checkForImage($request);
        }
        return redirect(route('program'))->with('message','Program Updated Successfully!!!');

    }
    private function checkForImage($request){

        $this->program = Program::find($request->id);
        if ($this->program->pg_image != null){
            unlink($this->program->pg_image);
        }
        $this->program->pg_image = $this->getImageUrl($request);
        $this->program->save();
    }




    public function destroy($id){
        $this->program = Program::find($id);
        if ($this->program->pg_image!=null){
            unlink($this->program->pg_image);
        }
        $this->program->delete();
        return back()->with('message','Program Deleted Successfully!!!!');
    }
}
