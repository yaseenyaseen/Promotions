<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // code from the youtube:
    /*
     *    protected $table='comments';

     */
    use HasFactory;
    protected $fillable = [
        'comment', 'name'
    ];
}
