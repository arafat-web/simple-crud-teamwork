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
        return back();
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
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
