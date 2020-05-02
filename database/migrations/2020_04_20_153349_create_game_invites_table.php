<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_invites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sender_uuid', 300)->nullable();
            $table->string('receiver_email', 300)->nullable();
            $table->string('location', 300)->nullable();
            $table->dateTime('datetime')->nullable();
            $table->integer('status')->default(0)->comment('0=>sent, 1=>accepted, 2=>rejected');  
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_invites');
    }
}
