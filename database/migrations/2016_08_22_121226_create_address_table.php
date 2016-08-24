<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('addresses', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->integer('profile_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('country_id')->unsigned();


            $table->foreign('profile_id')
                ->references('id')
                ->on('profiles')
                ->onDelete('cascade');

            $table->foreign('city_id')
                            ->references('id')
                            ->on('cities')
                            ->onDelete('cascade');

            $table->foreign('state_id')
                            ->references('id')
                            ->on('states')
                            ->onDelete('cascade');

            $table->foreign('country_id')
                            ->references('id')
                            ->on('countries')
                            ->onDelete('cascade');




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
        Schema::drop('addresses');
    }
}
