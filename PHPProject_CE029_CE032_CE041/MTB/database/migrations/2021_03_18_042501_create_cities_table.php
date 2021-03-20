<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->unsigned()->index();
            $table->string('city_name');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade') ;
            $table->string('address');
            $table->string('state');
            $table->string('pincode');

            
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
        Schema::dropIfExists('cities');
    }
}
