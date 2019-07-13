<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plants extends Model
{
    protected $fillable = ['types','waterAmount','details'];
}
