<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Log;
use Illuminate\Support\Str;
use Session;
class CartController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
    	$cart = Session::get('cart');
    	
    	$pr=array();
    	if(!empty($cart)){
    		foreach ($cart as $key => $value) {
    		$pr[] .=$key;
    	}
    	$product_list = DB::table('products')
        ->select('products.*','categories.category','carats.carat')
        ->join('categories','categories.id','=','products.category_id')
        ->leftJoin('carats','carats.id','=','products.carat_id')
        ->whereIn('products.slug', $pr)
        ->get();
    	}else{
    	$product_list=array();	
    	}
    	
    	
        $title="Free Horoscope & Astrology";
        $category_list = DB::table('categories')
        ->select('*')
        ->get();
        
        /*echo "<pre>";
    	print_r($product_list);die;*/
        //dd($product_list);
        return view('shop.checkout', ['title'=>$title, 'category_list'=>$category_list, 'product_list'=>$product_list, 'cart_items' => @count(Session::get('cart'))]);//home
    }
    /**
     * Add product to the cart
     *
     * @return success message
     */
    public function addToCart(Request $request){

        $product = $request->all();

        $cart = Session::get('cart');
        //dd($cart);
        /*
         * If product already exist into the cart then update QTY of product
         * Othewise add new product into the cart
         */
        if(isset($cart[$product['slug']])):
            $cart[$product['slug']]['qty'] += 1;
        else:
            $cart[$product['slug']] = $product;
            $cart[$product['slug']]['qty'] = 1; // Dynamically add initial qty
        endif;

        Session::put('cart', $cart);
/*        Session::flash('message', 'This is a message!'); 
Session::flash('alert-class', 'alert-danger');*/ 
        return redirect()->back()->withSuccess('Your request have been successfully completed.');
        //return Response::json(['success' => true, 'cart_items' => count(Session::get('cart')), 'message' => 'Cart updated.']);
    }


}
