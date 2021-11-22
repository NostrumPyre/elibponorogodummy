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
            $table->varchar('title');
            $table->varchar('file path');
            $table->date('publish date');
            $table->varchar('description');
            $table->varchar('genre');
            $table->integer('type');
            $table->varchar('publication place');
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
