<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conference extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'edition', 'url', 'from', 'to', 'city', 'state',
    ];
}
