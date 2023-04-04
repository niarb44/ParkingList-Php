<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


    class CreatePersonsTable extends Migration
    {
        public function up()
        {
            Schema::create('persons', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('surname');
                $table->string('numbers');
                $table->text('description');
                $table->softDeletes();
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('persons');
        }
    }


