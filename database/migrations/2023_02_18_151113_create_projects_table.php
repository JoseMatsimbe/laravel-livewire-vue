<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('project_id')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('homepage')->nullable();
            $table->string('parent_id')->nullable();
            $table->string('author_id')->nullable();
            $table->string('identifier')->nullable();
            $table->string('status')->nullable();
            $table->string('has_shared_budget')->nullable();
            $table->string('created_on')->nullable();
            $table->string('updated_on')->nullable();
            $table->string('lft')->nullable();
            $table->string('rgt')->nullable();
            $table->string('inherit_members')->nullable();
            $table->string('default_version_id')->nullable();
            $table->string('default_assigned_to_id')->nullable();
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
