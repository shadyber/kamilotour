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
        \App\Models\Product::factory(10)->create();
        \App\Models\Destination::factory(10)->create();
        \App\Models\Album::factory(5)->create();
        \App\Models\Photo::factory(30)->create();
        $this->call(AdminSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(AddressSeeder::class);

    }
}
