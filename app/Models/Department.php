<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public static $department, $image, $imageName, $directory, $imageUrl;
    public static function create($request){
        self::$department = new Department();
        self::$department->dpt_name = $request->dpt_name;
        self::$department->dpt_code = $request->dpt_code;
        if ($request->file('dpt_image')!= null){
            self::$department->dpt_image = self::saveImg($request);
        }

        self::$department->save();
    }

    public static function saveImg($request){
        self::$image = $request->file('dpt_image');
        self::$imageName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'upload/department/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }

    public static function updateDepartment($request){
        self::$department = Department::find($request->id);
        self::$department->dpt_name = $request->dpt_name;
        self::$department->dpt_code = $request->dpt_code;
        if ($request->file('dpt_image')!= null){
            self::$department->dpt_image = self::saveImg($request);
        }
        self::$department->save();

    }
}
