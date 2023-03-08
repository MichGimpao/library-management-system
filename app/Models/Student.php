<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'stud_id',
        'fname',
        'lname',
        'gender',
        'course',
        'year_block',
        'stud_address',
        'stud_contactno',
        'stud_email',
    ];
    protected $table = "students";
}
