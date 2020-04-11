<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
	use Sluggable;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title', 'slug', 'image', 'mrp_price','mrp_gst_price','price','gst','discount','first_description','second_description','carat_id','planet','zodiac_sign','top_selling','stock','product_count','faq'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
