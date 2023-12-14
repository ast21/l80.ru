<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::rename('which_is_betters', 'comparisons');
    }

    public function down(): void
    {
        Schema::rename('comparisons', 'which_is_betters');
    }
};
