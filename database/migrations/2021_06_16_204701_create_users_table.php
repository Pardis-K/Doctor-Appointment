<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
			
			$table->string('name');
			$table->integer('melicode');
			$table->string('gender');
			$table->integer('age');
			$table->string('telephone');
			$table->string('address')->nullable();
			$table->string('email')->nullable();
			$table->string('username');
			$table->string('password');
			$table->string('image')->nullable();
			$table->string('role');
			$table->string('code')->nullable();
			
			$table->unsignedBigInteger('group_id');

            $table->foreign('group_id')->references('id')->on('groups')->default(0);
			
			
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
        Schema::dropIfExists('users');
    }
}
