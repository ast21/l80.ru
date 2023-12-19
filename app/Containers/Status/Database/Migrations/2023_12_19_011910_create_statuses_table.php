<?php

namespace App\Containers\Status\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();

            $table->string('statusable_type');
            $table->unsignedBigInteger('statusable_id');
            $table->string('name');

            $table->timestamp('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};
