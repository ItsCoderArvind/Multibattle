<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['bno', 'date', 'sirName', 'name', 'sex', 'age', 'doctype', 'docnum', 'mobile', 'email', 'doctor_id', 'sample', 'takenby', 'centrename', 'url', 'status', 'des'];

}
