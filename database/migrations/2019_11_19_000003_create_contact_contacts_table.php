<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contact_contacts', function (Blueprint $table) {
            $table->increments('id');

            $table->string('contact_name')->nullable();

            $table->string('contact_phone_1')->nullable();

            $table->string('contact_phone_2')->nullable();

            $table->string('contact_email')->nullable();

            $table->string('contact_creer');


            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('contact_companies');

            $table->unsignedInteger('liste_id')->nullable();
            $table->foreign('liste_id')->references('id')->on('liste_companies');




            $table->timestamps();

            $table->softDeletes();
        });
    }
}
