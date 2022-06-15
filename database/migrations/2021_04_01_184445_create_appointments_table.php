<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_tracker_id')->references('id')->on('property_tracker');
            $table->foreignId('created_by')->references('id')->on('users');
            $table->foreignId('assigned_to')->references('id')->on('users');
            $table->foreignId('updated_by')->references('id')->on('users');
            $table->integer('timezone');
            $table->string('start_date')->nullable();
            $table->string('time')->nullable();
            $table->string('end_date')->nullable();
            $table->enum('type', array('follow-up', 'appointment','reminder'));
            $table->boolean('status')->default(1);
            $table->string('subject')->nullable();
            $table->string('notes')->nullable();
            $table->string('close_notes')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
