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
        date_default_timezone_set("Asia/Calcutta");
    }

    public function index(Request $request)
    {//dd($request->email);
        $vali = Validator::make($request->all(), [
            'first_name'=>'required',
            'last_name'=>'required',        
            'email'=>'required|email|unique:messages',
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
        }else{
            $insert_arr=array(
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,        
                'email'=>$request->email,
                'phone'=>$request->phone,
                'zodiac_sign'=>$request->zodiac_sign,
                'content_type'=>$request->content_type,
                'created_at' => date('Y-m-d H:i')
            );
           // print_r($insert_arr);die;
            DB::table('messages')->insert($insert_arr);
            return redirect()->back()->with('success','Your request has been successfully completed.');
        }

    }
}
