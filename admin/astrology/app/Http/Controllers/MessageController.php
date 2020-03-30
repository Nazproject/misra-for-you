<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Log;
class MessageController extends Controller
{
    
	public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(Request $request)
    {
        $vali = Validator::make($request->all(), [
        'first_name'=>'required',
        'last_name'=>'required',        
        'email'=>'required|email|unique',
        'phone'=>'required',
        'zodiac_sign'=>'required',
        'content_type'=>'required'
        ],[
        'first_name'=>'First name is required',
        'last_name'=>'Last name is required',        
        'email'=>'Email is required',
        'phone'=>'Phone number is required',
        'zodiac_sign'=>'Zodiacc sign is required',
        'content_type'=>'Type of content is required'
        ]

    );
        if ($vali->fails())
        {
            return redirect()->back()->withErrors($vali->errors())->withInput();
        }
    }
}
