<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('comparisons', function (Blueprint $table) {
            $table->renameColumn('key', 'comparisonable_type');
            $table->renameColumn('better_id', 'comparisonable_id');
        });
    }

    public function down(): void
    {
        Schema::table('comparisons', function (Blueprint $table) {
            $table->renameColumn('comparisonable_type', 'key');
            $table->renameColumn('comparisonable_id', 'better_id');
        });
    }
};
