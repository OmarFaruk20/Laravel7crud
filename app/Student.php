<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'student_id';
    protected $fillable = [
    	'student_name',
    	'student_roll',
    	'fathers_name',
    	'mothers_name',
    	'student_phone',
    	'student_email',
    	'student_password',
    	'student_city',
    	'student_address',
    	'student_image',
    ]; 
}
