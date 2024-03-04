<?php

use Database\Seeders\CouponSeeder;
use Database\Seeders\SettingSeeder;
use Database\Seeders\UserSeeder;
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

        $this->call([
            SettingSeeder::class,
            CouponSeeder::class,
            UserSeeder::class,
        ]);
    }
}
