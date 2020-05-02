<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('is_logged_in')->default(0)->comment('0=>not_loggedIn, 1=>loggedIn');
            $table->integer('device_type')->nullable()->comment('0=>android, 1=>ios');
            $table->string('device_token', 300)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_logged_in');
            $table->dropColumn('device_type');
            $table->dropColumn('device_token');
        });
    }
}
