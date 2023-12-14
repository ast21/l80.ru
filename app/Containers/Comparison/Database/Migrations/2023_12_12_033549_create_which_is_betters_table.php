<?php

namespace App\Containers\Comparison\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('which_is_betters', function (Blueprint $table) {
            $table->id();

            $table->string('key')->index();
            $table->unsignedBigInteger('better_id');
            $table->unsignedBigInteger('compared_id');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('which_is_betters');
    }
};
