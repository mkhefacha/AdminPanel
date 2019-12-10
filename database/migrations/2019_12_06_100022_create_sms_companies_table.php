<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmsCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_sms');
            $table->string('creer_sms');
            $table->text('message_sms');

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('contact_companies');


            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('sms_companies');
    }
}
