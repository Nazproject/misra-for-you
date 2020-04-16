<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Category extends Model
{
	use Sluggable;
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'category'
    ];

    public function sluggable()
    {
        return [
            'cat_slug' => [
                'source' => 'category'
            ]
        ];
    }
}
