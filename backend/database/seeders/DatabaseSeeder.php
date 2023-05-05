<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Table;
use \App\Models\User;

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
        User::factory(1)->create();
    }
}
