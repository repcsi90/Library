<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    protected $primaryKey = 'copy_id';
    /** @use HasFactory<\Database\Factories\CopyFactory> */
    use HasFactory;


    protected $fillable = [
        'book_id',
        'user_id',
    ];


}
