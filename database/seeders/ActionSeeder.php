<?php

namespace Database\Seeders;

use App\Containers\LegacySection\App\Models\Action;
use App\Containers\LegacySection\App\Models\Goal;
use App\Containers\LegacySection\App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actions')->truncate();
        DB::table('tasks')->truncate();
        DB::table('goals')->truncate();

        Action::factory(50)
            ->recycle(Goal::factory(2)->create())
            ->recycle(Task::factory(5)->create())
            ->create();
    }
}
