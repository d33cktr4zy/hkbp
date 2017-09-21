<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbmasterUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbmaster_user', function (Blueprint $table) {
            $table->string('user_id',20)->primary();
            $table->string('user_uname',50)->unique();
            $table->string('user_email',100)->unique();
            $table->string('user_password',100);
            $table->string('user_namalengkap',255);
            $table->string('user_level',255);
            $table->string('user_createby',20);
            $table->date('user_createdt');
            $table->string('user_modifyby',20)->nullable();
            $table->date('user_modifydt')->nullable();
            $table->rememberToken();
            $table->timestamps('user_lastvisit');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbmaster_user');
    }
}
