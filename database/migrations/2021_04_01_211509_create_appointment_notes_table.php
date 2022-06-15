<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_notes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appointment_id')->references('id')->on('appointments');
            $table->foreignId('created_by')->references('id')->on('users');
            $table->string('subject')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('appointment_notes');
    }
}
