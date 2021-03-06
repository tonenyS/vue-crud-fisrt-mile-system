<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(UsersTableSeeder::class);

        $this->call(LaratrustSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(BbnSeeder::class);
        \App\Models\Category::factory(10)->create();
        \App\Models\Ticket::factory(20)->create();
        // \App\Models\Building::factory(200)->create();
        // \App\Models\User::factory(50)->create();
        // \App\Models\Team::factory(20)->create();

        // $this->call(TeamUserTableSeeder::class);
        // \App\Models\Planing::factory(100)->create();
    }
}
