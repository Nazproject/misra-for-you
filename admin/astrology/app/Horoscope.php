<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horoscope extends Model
{
    protected $table = 'horoscopes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title', 'description', 'category','types','filename'
    ];
}

