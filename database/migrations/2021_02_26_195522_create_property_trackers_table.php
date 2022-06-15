<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTrackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_tracker', function (Blueprint $table) {
            $table->id();
            $table->enum('stage', array('Lead', 'Prospect','Opportunity'))->Default('Lead');
            $table->foreignId('team_id')->references('id')->on('teams');
            $table->foreignId('sales_agent_id')->references('id')->on('users');
            $table->foreignId('status_id')->references('id')->on('statuses');
            $table->foreignId('acquisition_manager_id')->nullable()->constrained()->references('id')->on('users');
            $table->foreignId('property_owner_id')->references('id')->on('property_owners');
            $table->boolean('confirmation')->default(0);
            $table->foreignId('created_by')->references('id')->on('users');
            $table->foreignId('updated_by')->references('id')->on('users');
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
        Schema::dropIfExists('property_tracker');
    }
}
