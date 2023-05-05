<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Table;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Table::factory(15)->create();
        // \App\Models\User::factory(10)->create();
    }
}
