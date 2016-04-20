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
            'password' => bcrypt('12345')
        ]);
    }
}
