<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sampleLSM extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'genre',
        'book_name',
        'book_author',
        'pub_date',
        'quantity',
    ];
    protected $table = "sample_l_s_m_s";
}
