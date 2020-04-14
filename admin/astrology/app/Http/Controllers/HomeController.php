<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index()
    {
        $title="Free Horoscope & Astrology";
        return view('home', ['title'=>$title]);//home
    }
    public function about_us()
    {
        $title="About Us";
        return view('about_us', ['title'=>$title]);//home
    }
    public function lalkitab()
    {
        $title="Lalakitab";
        return view('lalkitab', ['title'=>$title]);//home
    }
    public function calender()
    {
        $title="Calender";
        return view('calender', ['title'=>$title]);//home
    }
    public function festival()
    {
        $title="Festival";
        return view('festival', ['title'=>$title]);//home
    }
    public function contact_us()
    {
        $title="Contact us";
        return view('contact_us', ['title'=>$title]);//home
    }
}
