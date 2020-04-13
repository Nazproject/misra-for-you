<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Log;
use Illuminate\Support\Str;
class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title="Free Horoscope & Astrology";
        $category_list = DB::table('categories')
        ->select('*')
        ->get();
        $product_list = DB::table('products')
        ->select('products.*','categories.category','carats.carat')
        ->join('categories','categories.id','=','products.category_id')
        ->leftJoin('carats','carats.id','=','products.carat_id')
        ->get();
        //dd($product_list);
        return view('shop.home', ['title'=>$title, 'category_list'=>$category_list, 'product_list'=>$product_list]);//home
    }
    public function Bycategory($category)
    {
        $title="Free Horoscope & Astrology";
        $category_list = DB::table('categories')
        ->select('*')
        ->get();
        $cat_id=DB::table('categories')
        ->select('id')
        ->where('category', $category)
        ->first();
        $product_list = DB::table('products')
        ->select('products.*','categories.category','carats.carat')
        ->join('categories','categories.id','=','products.category_id')
        ->leftJoin('carats','carats.id','=','products.carat_id')
        ->where('category_id', $cat_id->id)
        ->get();
        return view('shop.product_by_category', ['title'=>$title, 'category_list'=>$category_list, 'product_list'=>$product_list, 'cat_name'=>$category]);//home
    }
    public function single_product($category,$slug)
    {
        $title="Free Horoscope & Astrology";
        $category_list = DB::table('categories')
        ->select('*')
        ->get();
        $cat_id=DB::table('categories')
        ->select('id')
        ->where('category', $category)
        ->first();
        $related_product = DB::table('products')
        ->select('products.*','categories.category','carats.carat')
        ->join('categories','categories.id','=','products.category_id')
        ->leftJoin('carats','carats.id','=','products.carat_id')
        ->where('category_id', $cat_id->id)
        ->get();
        $product_list = DB::table('products')
        ->select('products.*','categories.category','carats.carat')
        ->join('categories','categories.id','=','products.category_id')
        ->leftJoin('carats','carats.id','=','products.carat_id')
        ->where('products.category_id', $cat_id->id)
        ->where('products.slug', $slug)
        ->first();
        //dd($related_product);
        return view('shop.single_product', ['title'=>$title, 'related_product'=>$related_product, 'category_list'=>$category_list, 'product_list'=>$product_list]);//home
    }
}
