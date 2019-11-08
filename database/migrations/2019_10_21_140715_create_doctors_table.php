<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('registrationNo')->nullable();
            $table->string('photo')->nullable();
            $table->string('qualification')->nullable();
            $table->string('specialities')->nullable();
            $table->string('department')->nullable();
            $table->text('message')->nullable();
            $table->string('description')->nullable();
            $table->string('arrival')->nullable();
            $table->boolean('isDaily')->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
