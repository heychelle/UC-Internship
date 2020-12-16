<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();

        $this->call([
            DepartmentSeeder::class,
            TitleSeeder::class,
            JakaSeeder::class,
            ScholarshipSeeder::class,
            InfoSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            StudentSeeder::class,
            StaffSeeder::class,
            LecturerSeeder::class,
        ]);

        Model::reguard();
    }
}
