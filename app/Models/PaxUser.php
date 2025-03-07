<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaxUser extends Model
{
    protected $fillable = [
        'email',
        'password',
        'verification_code'
    ];
}
