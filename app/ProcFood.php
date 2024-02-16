<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProcFood extends Model
{
    protected $guarded= ['id'];
    // protected $table="dbo_loandtl";
    use SoftDeletes;
}
