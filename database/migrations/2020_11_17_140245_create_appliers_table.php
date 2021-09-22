<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('reference_job')->unsigned();
            $table->string('title')->nullable();
            $table->string('name');
            $table->string('age');
            $table->string('degree');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->text('skills')->nullable();
            $table->string('cv');
            $table->foreign('reference_job')->references('id')->on('jobs')->onDelete('cascade');
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
        Schema::dropIfExists('appliers');
    }
}
