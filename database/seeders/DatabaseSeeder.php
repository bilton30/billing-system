<?php

declare(strict_types=1);

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([

            SuperUserSeeder::class,
            // UsersSeeder::class,
            RolesAndPermissionsSeeder::class,
            // PermissionsSeeder::class,
            // PermissionRoleSeeder::class,
            ExpenseSeeder::class,
            CategoriesSeeder::class,
            
            ProductsSeeder::class,
            CustomersSeeder::class,

            CurrencySeeder::class,
            SettingsSeeder::class,
            LanguagesSeeder::class,
            WarehouseSeeder::class,
        ]);
    }
}
