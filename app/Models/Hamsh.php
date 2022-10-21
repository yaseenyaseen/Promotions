<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hamsh extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Pro_req_id', 	/*THE column name was proreq_id before 20 Oct*/
        'title',
        'Sci_plan_Applicant',
        'Sci_plan_Coll_Sci_Affairs',
        'Sci_plan_Coll_Dean_Assis',
        'Sci_plan_presidency_office',
        'Sci_plan_Sci_Affairs_President_University_Assistant',
        'Sci_plan_presidency_Academic_Promotions_Affairs',

        'description'
    ];
    protected $table='Hamshs';

   /* public function proreq(){
        return $this->belongsTo(proreq::class);
    }*/

}
