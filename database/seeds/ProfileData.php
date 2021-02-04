<?php

use Illuminate\Database\Seeder;
use App\Profile;

class ProfileData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'name'       => 'Pathology Lab- Haxways.com',
            'doctor1'    => 'Dr. Neeraj saini',
            'doctor2'    => 'Dr. Tushar Chauhan',
            'address1'   => 'Cinema hall wali gali, Opp. Rajendra Rana,',
            'address2'   => 'Saharapur Road, Chhutmalpur, Saharanpur UP(India-247662)',
            'phone'      => '',
            'mobile'     => '+91 9068157944',
            'email'      => 'support@haxways.com',
            'fax'        => '',
            'timings'    => '9:00 AM TO 5:00 PM'
        ]);
    }
}
