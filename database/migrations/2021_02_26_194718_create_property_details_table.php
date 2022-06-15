<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_owner_id')->references('id')->on('property_owners');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->foreignId('state_id')->references('id')->on('states');
            $table->string('county')->nullable();
            $table->string('zip')->nullable();
            $table->integer('beds')->nullable();
            $table->integer('baths')->nullable();
            $table->double('sqft',10,2)->nullable();
            $table->double('zestimate',10,2)->nullable();
            $table->string('zillow_url')->nullable();
            $table->double('asking_price',10,2)->nullable();
            $table->double('bid_price',10,2)->nullable();
            $table->double('max_cash_offer',10,2)->nullable();
            $table->string('condition')->nullable();
            $table->string('motivation')->nullable();
            $table->dateTime('last_sold')->nullable();
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
        Schema::dropIfExists('property_details');
    }
}
