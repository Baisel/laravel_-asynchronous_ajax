<?php

use Faker\Factory as Fake;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        $this->call(ProductSeeder::class);
        $this->call(ProductsLikeSeeder::class);
        $this->call(UsersSeeder::class);

    }
}
