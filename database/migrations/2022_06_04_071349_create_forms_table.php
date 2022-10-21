<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->integer('proreq_id');  /*Pro_req_id*/
            $table->foreign('proreq_id')->references('id')->on('pro_reqs')->onDelete('cascade');
            $table->text('ArticalTitle');// we should delete this record later.
            $table->text('PublishDate');// we should delete this record later.

            $table->string('title'); // we should delete this record later.
            $table->text('description');// we should delete this record later.
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
        Schema::dropIfExists('forms');
        Schema::table('forms', function (Blueprint $table) {
            $table->dropForeign(['proreq_id']);
            $table->dropColumn('proreq_id');
        });
    }
}
