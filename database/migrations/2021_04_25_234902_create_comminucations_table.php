<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComminucationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comminucations', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');
			
            $table->string('subject');
            $table->string('text');
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
        Schema::dropIfExists('comminucations');
    }
}
