<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Log;
class HoroscopeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($slug)
    {
    	$title=$slug;
    	//$title='Horoscope List';
    	$year = date("Y");
        $list = DB::table('horoscopes')
        ->select('*')
        ->where('category', $slug)
        ->where('types', 'yearly')
        ->whereYear('publish_date', $year)
        ->first();
        //dd($list);
        return view('horoscope',['list' => $list,'title'=>$title,'slug'=>$slug]);
    }
    public function horoscopebytype($type)
    {
    	$title=$type;
        return view('horoscopebytype',['title'=>$title,'type'=>$type]);
    }

    public function horoscopebytypefetch($type,$slug)
    {//echo 1;die;
        $title=$slug;
        $year = date("Y");
        $month = date("m");
        $date = date("Y-m-d");
        //DB::enableQueryLog(); // Enable query 
        //
        $query = DB::table('horoscopes')
        ->select('*')
        ->where('category', $slug)
        ->where('types', $type);
        if($type=='daily'){
          $query->where('publish_date', $date); 
        }elseif($type=='weekly'){
          $query->where('publish_date', '>=', strtotime($date));  
        }elseif($type=='monthly'){
          $query->whereMonth('publish_date', $month);  
        }elseif($type=='yearly'){
          $query->whereYear('publish_date', $year); 
        }
        $list =$query->first();
        //dd(DB::getQueryLog());
        //dd($list);
        //echo 1;die;
        return view('horoscope',['list'=>$list,'title'=>$title,'slug'=>$slug,'type'=>$type]);
    }
    public function horospecial($special,$slug)
    {//echo 1;die;
        $title=$slug;
        $year = date("Y");
        //$date = date("Y-m-d");
        $list = DB::table('horoscopes')
        ->select('filename',$special)
        ->where('category', $slug)
        ->where('types', 'yearly')
        //->where('publish_date', $date)
        ->whereYear('publish_date', $year)
        ->first();
        //dd($list);
        //echo 1;die;
        return view('horoscopespecial',['list'=>$list,'title'=>$title,'slug'=>$slug,'special'=>$special]);
    }
}
