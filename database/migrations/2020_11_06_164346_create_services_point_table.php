<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesPointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_point', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('poin_id');
            $table->string('name_point');
            $table->text('branch_name');
            $table->text('desc_ar');
            $table->string('phone');
            $table->string('fax');
            $table->BigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->unique(['poin_id', 'city_id']);
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
        Schema::dropIfExists('services_point');
    }
}
