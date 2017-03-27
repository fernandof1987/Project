<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id');
            $table->integer('project_id');
            $table->foreign('member_id')->references('id')->on('users');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->integer('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            //$table->decimal('time_value', 10, 2);
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
        Schema::dropIfExists('project_members');
    }
}
