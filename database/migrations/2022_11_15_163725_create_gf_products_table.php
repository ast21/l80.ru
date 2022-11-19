<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gf_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gift_id')->nullable();
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->string('name');
            $table->double('price')->nullable();
            $table->string('url', 2000)->nullable();
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
        Schema::dropIfExists('gf_products');
    }
};
