<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'id';
    protected $fillable = [
        'first_name', 'last_name', 'email','phone','zodiac_sign','content_type'
    ];
}
