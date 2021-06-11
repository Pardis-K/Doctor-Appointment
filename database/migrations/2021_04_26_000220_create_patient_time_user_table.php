<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTimeUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_time_user', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('doctor_id');

            $table->foreign('doctor_id')->references('doctor_id')->on('times');
			
			$table->foreignId('user_id')->constrained();
			
			$table->foreignId('patient_id')->constrained();
			
			$table->string('reserve_date');
			$table->string('reserve_time');
			$table->string('visit_date');
			$table->string('visit_time');
			$table->string('doctor_comment');
			$table->string('drugs');
			$table->boolean('send_sms');
			$table->boolean('cancel_sms');
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
        Schema::dropIfExists('patient_time_user');
    }
}
