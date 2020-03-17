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
    	$todayDate = date("Y-m-d");
        $list = DB::table('horoscopes')
        ->select('*')
        ->where('category', $slug)
        ->where('created_at', $todayDate)
        ->get();
        //dd($list);
        return view('horoscope',['list' => $list,'title'=>$title,'slug'=>$slug]);
    }
}
