<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
      'st_id',
      'st_name',
      'st_phone',
      'st_email',
      'st_dept',
      'st_program',
      'st_admd',
      'st_image'
    ];
}
