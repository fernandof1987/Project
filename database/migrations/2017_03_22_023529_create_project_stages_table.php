<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_stages', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('number');
            
            $table->string('name');

            $table->text('description');
            $table->text('notes')->nullable();

            $table->integer('project_id');
            $table->foreign('project_id')->references('id')->on('projects');

            //$table->integer('task_id');
            //$table->foreign('task_id')->references('id')->on('tasks');

            $table->boolean('completed')->default(0);
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
        Schema::dropIfExists('project_stages');
    }
}
