<?php

use Illuminate\Database\Seeder;
use App\Code;

class InsertCodes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Code::create([
            'title'       => 'booking',
            'vlu'       => '0'
        ]);
    }
}
