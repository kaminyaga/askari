<?php

use Illuminate\Database\Seeder;

class MissingPersonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Askari\MissingPersons::class, 30)->create();
    }
}
