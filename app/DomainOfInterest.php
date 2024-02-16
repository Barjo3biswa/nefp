<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DomainOfInterest extends Model
{
    protected $guarded = ['id'];
    use SoftDeletes;
}
