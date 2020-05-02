<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('uuid', 300)->nullable();
            $table->string('fname', 300)->nullable();
            $table->string('lname', 300)->nullable();
            $table->string('email', 300)->unique();           
            $table->string('password', 200)->nullable();
            $table->string('gender', 200)->nullable(); 
            $table->integer('age')->nullable();
            $table->string('phone', 200)->nullable();
            $table->string('role', 200)->nullable();           
            $table->integer('status')->default(1)->comment('0=>inactive, 1=>active, 2=>blocked');  
            $table->integer('is_verified')->default(0)->comment('0=>notverified, 1=>verified');
            $table->string('email_token', 300)->nullable(); 
            $table->dateTime('last_login')->nullable();           
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at');
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
