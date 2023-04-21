<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('choices', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('choice_elements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('choice_id');
            $table->string('title');
            $table->timestamps();

            $table->foreign('choice_id')
                ->references('id')
                ->on('choices')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('choice_elements');
        Schema::dropIfExists('choices');
    }
};
