<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gf_gift_has_hobbies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gift_id');
            $table->unsignedBigInteger('hobby_id');
            $table->timestamps();

            $table
                ->foreign('gift_id')
                ->references('id')
                ->on('gf_gifts')
                ->onDelete('cascade');
            $table
                ->foreign('hobby_id')
                ->references('id')
                ->on('gf_hobbies')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gf_gift_has_hobbies');
    }
};
