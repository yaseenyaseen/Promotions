<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Proreq extends Model
{
    protected $table='proreqs';

    protected $fillable = [
        'id',
        'user_id',
        'selectData_id',
        'completed',
    ];
    public function hamash(){
        return $this->belongsTo(Hamsh::class);
    }
    public function selectData(){
        return $this->belongsTo(selectData::class);
    }
    public function form(){
        return $this->belongsTo(Form::class);
    }
    /*public function user(){
        return $this->belongsTo(\http\Client\Curl\User::class);
    }*/
   /* public function user()
    {
        return $this->belongsTo(User::class);
    }*/
}
