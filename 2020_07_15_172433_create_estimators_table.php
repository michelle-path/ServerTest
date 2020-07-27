<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimators', function (Blueprint $table) {
            $table->id();
            $table->string('user')->unique();
            $table->string('isflooring');
            $table->string('flooringtype');
            $table->string('iswindows');
            $table->integer('windowcount');
            $table->string('isdoor');
            $table->string('isappliances');
            $table->string('appliancetype1');
            $table->string('appliancetype2');
            $table->string('appliancetype3');
            $table->string('appliancetype4');
            $table->string('appliancetype5');

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
        Schema::dropIfExists('estimators');
    }
}
