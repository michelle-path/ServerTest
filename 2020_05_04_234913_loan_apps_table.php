<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoanAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('loanapps', function (Blueprint $table) {
            $table->id();
            $table->string('user')->unique();
            $table->string('fname');
            $table->string('lname');
            $table->string('ssn')->unique();
            $table->string('occupation');
            $table->string('marital_status');
            $table->date('DOB');
            $table->integer('dependants');
            $table->integer('annual_income');
            $table->string('loan_type');
            $table->integer('loan_request_amount');
            $table->string('loan_duration');
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
        //
        Schema::dropIfExists('loanapps');
    }
}
