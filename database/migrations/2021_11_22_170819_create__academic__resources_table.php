<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_academic__resources', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('file path');
            $table->date('publish date');
            $table->string('description');
            $table->string('genre');
            $table->integer('type');
            $table->string('publication place');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_academic__resources');
    }
}
