<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description'
    ];
    protected $table='forms';

   /* public function proreq(){
        return $this->belongsTo(proreq::class);
    }*/

}
