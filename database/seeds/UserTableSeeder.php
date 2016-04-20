<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Askari\User::class)->create([
            'first_name' => 'John',
            'last_name' => 'Kariuki',
            'email' => 'jk@police.com',
            'police_id' => 12345,
            'password' => bcrypt('12345')
        ]);

        factory(Askari\User::class, 10)->create();
    }
}
