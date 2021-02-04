<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testdetail extends Model
{
    protected $fillable = ['test_id', 'dname', 'dv', 'unit', 'ndefault', 'remark'];
}
