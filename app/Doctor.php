<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name', 'address1', 'address2', 'bday', 'ani', 'mobile', 'email', 'commission', 'img'];

}
