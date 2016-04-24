<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(OffendersTableSeeder::class);
        $this->call(TrafficOffenceTableSeeder::class);
        $this->call(RobberiesTableSeeder::class);
        $this->call(ImpoundsTableSeeder::class);
        $this->call(MissingPersonsSeeder::class);
        $this->call(EvidenceTableSeeder::class);
    }
}
