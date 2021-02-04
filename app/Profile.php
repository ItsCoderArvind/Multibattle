<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['name', 'doctor1', 'doctor2', 'address1', 'address2', 'phone', 'mobile', 'email', 'fax', 'timings'];
}
