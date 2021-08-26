<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOverseasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overseas', function (Blueprint $table) {
            // applicant details
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->date('birth_date');
            $table->integer('birth_place');
            $table->integer('citizenship');
            $table->string('living_address');
            $table->integer('gender');
            $table->string('passport_serial');
            $table->string('passport_number');
            $table->date('passport_expiration_date');
            $table->string('passport_issued_by');
            $table->string('passport_copy');
            $table->string('image');
            $table->string('email');
            $table->string('phone1');
            $table->string('phone2');
            // qualification details
            $table->string('background_study');
            $table->integer('background_certificate');
            $table->string('backgraund_grad_year');
            $table->string('back_cert_series');
            $table->string('back_cert_numbers');
            $table->string('back_cert_copy');
            $table->integer('foreign_lang');
            $table->integer('higher_education');
            $table->string('h_educ_diplom_copy');
            $table->string('h_educ_univer_name');
            $table->string('more_info');
            // other information
            $table->integer('speciality');
            $table->integer('study_language');
            $table->integer('education_degree');
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
        Schema::dropIfExists('overseas');
    }
}
