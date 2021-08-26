<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masters', function (Blueprint $table) {
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
            $table->date('passport_given_date');
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
            // relatives father and mother
            $table->string('f_first_name');
            $table->string('f_last_name');
            $table->string('f_middle_name');
            $table->string('f_living_address');
            $table->string('f_phone');
            $table->string('f_job_org');
            $table->string('f_position');
            $table->string('f_job_phone');
            $table->string('m_first_name');
            $table->string('m_last_name');
            $table->string('m_middle_name');
            $table->string('m_living_address');
            $table->string('m_phone');
            $table->string('m_job_org');
            $table->string('m_position');
            $table->string('m_job_phone');
            $table->string('scholarship_id')->nullable();
            $table->string('scholarship_serial')->nullable();
            // other information
            $table->text('aboutme',500)->nullable();
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
        Schema::dropIfExists('masters');
    }
}
