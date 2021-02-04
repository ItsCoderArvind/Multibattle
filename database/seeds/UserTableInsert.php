<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableInsert extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'       => 'Dr. Neeraj Saini',
            'email'    => 'ceo@haxways.com',
            'password'    => Hash::make('hackersn')
        ]);
    }
}
