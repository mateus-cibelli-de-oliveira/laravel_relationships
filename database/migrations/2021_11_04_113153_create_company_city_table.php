<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyCityTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('company_city', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->foreign('city_id')->references('id')
                                       ->on('cities')
                                       ->onDelete('cascade');
            $table->foreign('company_id')->references('id')
                                       ->on('companies')
                                       ->onDelete('cascade');                           
            $table->string('name', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_city');
    }
}
