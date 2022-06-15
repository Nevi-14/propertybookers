<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksManager extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taskmanager', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->bigInteger('requester_id')->nullable();
            $table->bigInteger('owner_id')->nullable();
            $table->enum('priority',['High','Medium','Low'])->default('Low');
            $table->enum('type',['Developing','Design','Technical Support','Tools','User Access','Inf. Applications','Other'])->default('Other');
            $table->enum('status',['Assigned' ,'Waiting', 'Started', 'In progress','Completed','Rejected'])->default('Assigned');
            $table->text('description')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
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
        Schema::dropIfExists('taskmanager');
    }
}
