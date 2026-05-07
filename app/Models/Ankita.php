<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ankita extends Model
{
     protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
