<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->string('Username');
            $table->string('password');
            $table->string('name');
            $table->integer('Phone');
            $table->string('email')->unique();
	    $table->timestamp('email_verified_at')->nullable();
            $table->string('Address');
            $table->string('City');
            $table->string('State');
            $table->integer('Zip');
	    $table->rememberToken();
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
        Schema::dropIfExists('profiles');
    }
}