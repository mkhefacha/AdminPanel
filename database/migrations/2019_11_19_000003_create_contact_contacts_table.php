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

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
