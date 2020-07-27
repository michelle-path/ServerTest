<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('nameofBanner')->unique();
            $table->string('profilerName');
            $table->string('masterCounter');
            $table->string('dailyCounter');
            $table->string('description');
            $table->string('impressions');
            $table->string('status');
            $table->string('duration');
            $table->string('size');
            $table->string('bannerPlatform');
            $table->string('bannerType');
            $table->string('image_file');
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
        Schema::dropIfExists('banners');
    }
}
