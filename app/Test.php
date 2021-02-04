<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['test_id', 'tname', 'tgrp', 'rate', 'rday', 'des'];
}
