<?php

use Illuminate\Database\Seeder;

class RobberiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Askari\Robbery::class, 20)->create();
    }
}
