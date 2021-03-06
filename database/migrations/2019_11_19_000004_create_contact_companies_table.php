<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('contact_companies', function (Blueprint $table) {
            $table->increments('id');

            $table->string('company_name')->unique();

            $table->integer('nbr_sms')->nullable();
            $table->integer('nbr_email')->nullable();

            $table->string('company_address')->nullable();

            $table->string('company_website')->nullable();

            $table->string('company_email')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
