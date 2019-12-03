<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToContactContactsTable extends Migration
{
    public function up()
    {
        Schema::table('contact_contacts', function (Blueprint $table) {
            $table->unsignedInteger('company_id')->nullable();
            $table->foreign('company_id', 'company_fk_623817')->references('id')->on('contact_companies');

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');


            $table->unsignedInteger('liste_id')->nullable();
            $table->foreign('liste_id')->references('id')->on('liste_companies');





        });
    }
}
