<?php

namespace App\Containers\Achievement\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();

            $table->string('title')->unique();
            $table->string('target');
            $table->string('icon_url', 1000)->nullable();
            $table->string('external_url', 1000)->nullable();
            $table->integer('order')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
