<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manage extends Model
{
    protected $fillable = [
        'type',
        'name',
        'address',
        'tel1',
        'tel2',
    ];
}
