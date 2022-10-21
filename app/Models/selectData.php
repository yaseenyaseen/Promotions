<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class selectData extends Model
{
    use HasFactory;
    protected $fillable = [
        'sci_title'
    ];
    protected $table='selectDatas';

    public function Pro_req(){
        return $this->belongsTo(proreq::class);
    }
}
