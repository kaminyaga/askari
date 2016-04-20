<?php

use Illuminate\Database\Seeder;

class TrafficOffenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Askari\Traffic::class, 20)->create();
    }
}
