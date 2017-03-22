<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_id');
            $table->integer('status_id');
            $table->integer('project_owner');
            $table->integer('priority');

            $table->string('name');
            $table->text('description');
            $table->text('notes');

            $table->decimal('investment', 10, 2);
            
            $table->datetime('stipulated_date');
            $table->datetime('final_date');

            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('status_id')->references('id')->on('project_status');
            $table->foreign('project_owner')->references('id')->on('users');

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
        Schema::dropIfExists('projects');
    }
}
