<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carat extends Model
{
    protected $table = 'carats';
    protected $primaryKey = 'id';
    protected $fillable = [
        'carat'
    ];
}
