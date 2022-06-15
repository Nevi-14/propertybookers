<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTrackerNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_tracker_notes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_tracker_id')->references('id')->on('property_tracker');
            $table->foreignId('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('property_tracker_notes');
    }
}
