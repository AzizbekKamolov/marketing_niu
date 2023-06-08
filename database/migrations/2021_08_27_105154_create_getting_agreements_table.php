<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGettingAgreementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getting_agreements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->date('getting_date');
            $table->integer('agreement_side_type_id');
            $table->integer('agreement_type_id');
            $table->integer('agreement_getting_permission_id');
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
        Schema::dropIfExists('getting_agreements');
    }
}
