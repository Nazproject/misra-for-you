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
    	//$title='Horoscope List';
    	/*$year = date("Y");
        $list = DB::table('horoscopes')
        ->select('*')
        ->where('category', $slug)
        ->where('types', 'yearly')
        ->whereYear('publish_date', $year)
        ->first();*/
        //dd($list);'list' => $list,
        //echo 1;die;
        return view('horoscopebytype',['title'=>$title,'type'=>$type]);
    }
}
