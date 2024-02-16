<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turnover extends Model
{
    protected $guarded = ['id'];
    use SoftDeletes;
}
