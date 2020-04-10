<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    protected $table = 'advertises';
    protected $primaryKey = 'id';
    protected $fillable = ['full_name', 'email','mobile_no', 'company','web_url','adv_category','start_date','end_date','note','brand_image','product_image','status'
    ];
}
