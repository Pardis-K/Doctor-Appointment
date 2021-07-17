<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTimeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient__time__users', function (Blueprint $table) {
            $table->id();
			
			$table->unsignedBigInteger('time_id');

            $table->foreign('time_id')->references('id')->on('times');
		
			$table->foreignId('user_id')->constrained();
			
			$table->foreignId('patient_id')->constrained();
			
			$table->string('reserve_date')->nullable();
			$table->string('reserve_time')->nullable();
			$table->string('visit_date')->nullable();
			$table->string('visit_time')->nullable();
			$table->string('doctor_comment')->nullable();
			$table->string('drugs')->nullable();
			$table->boolean('send_sms')->nullable();
			$table->boolean('cancel_sms')->nullable();
			
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
        Schema::dropIfExists('patient__time__users');
    }
}
