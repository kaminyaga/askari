<?php

use Illuminate\Database\Seeder;

class OffendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Askari\Offender::class, 30)->create();
    }
}
