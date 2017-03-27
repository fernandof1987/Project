<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_time', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_id');
            $table->foreign('task_id')->references('id')->on('tasks');
            //$table->integer('status'); // pause|start //
            $table->datetime('start');
            $table->datetime('stop');
            $table->integer('current_stage');
            $table->integer('user_id');
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
        Schema::dropIfExists('task_time');
    }
}
