<?php

use Illuminate\Database\Seeder;

class EvidenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Askari\Evidence::class, 10)->create();
    }
}
