<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liste_companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('liste_name');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_id_fk_621306')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('company_id')->nullable();
            $table->foreign('company_id', 'company_fk_623817')->references('id')->on('contact_companies');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liste_companies');
    }
}
