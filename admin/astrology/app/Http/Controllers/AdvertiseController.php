<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Log;
class AdvertiseController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        date_default_timezone_set("Asia/Calcutta");
    }

    public function index()
    {
        $title="Advertise with us";
        return view('advertisement', ['title'=>$title]);//home
    }

    public function send(Request $request)
    {//dd($request->email);
    	//
        $vali = Validator::make($request->all(), [
            'full_name'=>'required',
            'mobile_no'=>'required',        
            'email'=>'required|email|unique:advertises',
            'web_url'=>'required',
            'brand_image'=>'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            //'product_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]/*,[
            'full_name'=>'First name is required',
            'mobile_no'=>'Last name is required',        
            'email'=>'Unique email is required',
            'web_url'=>'Website url number is required',
            'brand_image'=>'Brand image is required',
            //'product_image'=>'Product image is required'
            ]*/
        );
        if ($vali->fails())
        {echo 1;die;
            return redirect()->back()->withErrors($vali->errors())->withInput();
        }else{echo 111;die;
        	if($file = $request->hasFile('brand_image')) {
            
            $file = $request->file('brand_image') ;
            
            $fileName = time()."_".$file->getClientOriginalName() ;
            $destinationPath = public_path().'/dist/img/advertise/' ;

            $insert_arr=array(
                'full_name'=>$request->full_name,
                'mobile_no'=>$request->mobile_no,        
                'email'=>$request->email,
                'company'=>$request->company,
                'web_url'=>$request->web_url,
                'adv_category'=>$request->adv_category,
                'start_date'=>$request->start_date,
                'end_date'=>$request->end_date,
                'note'=>$request->note,
                'brand_image'=>$fileName,
                //'product_image'=>$request->product_image,
                'created_at' => date('Y-m-d H:i')
            );
            print_r($insert_arr);die;
            if($file->move($destinationPath,$fileName)){
                DB::table('advertises')->insert($insert_arr);
            }
            return redirect()->back()->with('success','Your request has been successfully completed.');
        }
    }
    }
}
