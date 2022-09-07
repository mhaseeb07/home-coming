<?php

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
        $this->call(PermissionGroupSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CampusSeeder::class);
        $this->call(ConvocationSessionSeeder::class);
        $this->call(EligibleTypeSeeder::class);
        $this->call(MedalSeeder::class);
    }
}
