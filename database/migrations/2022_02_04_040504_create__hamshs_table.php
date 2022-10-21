<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHamshsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Hamshs', function (Blueprint $table) {

                $table->increments('id');
                $table->unsignedBigInteger('proreq_id')->nullable();  /*proreq_id Pro_req_id*/
/*            $table->foreign('proreq_id')-> references('id')->on('pro_reqs')->onDelete('cascade');*/
/*            $table->foreign('proreq_id')->references('id')->on('pro_reqs');*/
                $table->string('title'); // we should delete this record later.
                $table->text('description');// we should delete this record later.
                $table->text('Sci_plan_Applicant')->nullable();
                $table->text('Sci_plan_Coll_Sci_Affairs')->nullable();
                $table->text('Sci_plan_Coll_Dean_Assis')->nullable();
                $table->text('Sci_plan_presidency_office')->nullable();
                $table->text('Sci_plan_Sci_Affairs_President_University_Assistant')->nullable();
                $table->text('Sci_plan_presidency_Academic_Promotions_Affairs')->nullable();
                $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Hamshs');
    }
}
