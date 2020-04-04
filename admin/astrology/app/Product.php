<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title', 'image', 'mrp_price','mrp_gst_price','price','gst','discount','first_description','second_description','carat_id','planet','zodiac_sign','top_selling','stock','product_count','faq'
    ];
}
