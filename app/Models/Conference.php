<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    protected $fillable = [
        'name', 'description', 'url', 'from', 'to',
    ];
}
