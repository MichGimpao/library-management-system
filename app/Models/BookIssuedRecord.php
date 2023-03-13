<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookIssuedRecord extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'stud_id',
        'book_id',
        // 'bk_title',
        // 'stud_name',
        'no_copies',
        'release_date',
        'due_date',
    ];
    protected $table = "book_issued_records";

    public function student()
    {
        return $this->belongsTo(Student::class, "stud_id");
    }
    public function book()
    {
        return $this->belongsTo(SampleLSM::class, "book_id");
    }
}
