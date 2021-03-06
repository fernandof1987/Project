<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->integer('task_depends_on')->nullable();
            $table->string('name');
            $table->string('description');
            $table->decimal('stipulated_time', 10, 2)->nullable();
            $table->date('stipulated_date')->nullable();
            $table->boolean('canceled')->default(0);
            $table->boolean('completed')->default(0);
            $table->boolean('paused')->default(0);
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('task_depends_on')->references('id')->on('tasks');

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
        Schema::dropIfExists('tasks');
    }
}
