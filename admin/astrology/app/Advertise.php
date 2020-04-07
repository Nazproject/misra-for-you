<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    protected $table = 'advertises';
    protected $primaryKey = 'id';
    protected $fillable = [
        'first_name', 'last_name', 'email','phone','zodiac_sign','content_type'
    ];
}
