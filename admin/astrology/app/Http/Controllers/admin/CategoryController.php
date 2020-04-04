<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Log;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        date_default_timezone_set("Asia/Calcutta");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($request->email);
        $title='Category List';
        $list = DB::table('categories')
        ->select('*')
        ->get();
        return view('admin.category.list',['list' => $list,'title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Add category';
        return view('admin.category.add',['title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(request()->all());
        $data=request()->all();
        $vali = Validator::make($request->all(), [
        'category'=>'required',
        ]);

        if ($vali->fails())
        {
            return redirect()->back()->withErrors($vali->errors())->withInput();
        }
        $insert_arr=array(
            'category' => $data['category'],
            'created_at' => date('Y-m-d H:i')
        );
        //print_r($insert_arr);die;
        DB::table('categories')->insert($insert_arr);
        return redirect()->route('admin.category')->with('success','Your request have been successfully completed.');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title='Update category';
        $cat_list = DB::table('categories')
        ->select('*')
        ->where('id', $id)
        ->first();
        //print_r($horoscope);die;
        return view('admin.category.edit',['title'=>$title,'cat_list'=>$cat_list, 'id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //echo $request->title;die;
        $vali = Validator::make($request->all(), [
        'category'=>'required'
        ]);
        if ($vali->fails())
        {
            return redirect()->back()->withErrors($vali->errors())->withInput();
        }         
        DB::table('categories')->where('id',$request->id)->update([
        'category' =>$request->category,
        'updated_at' => date('Y-m-d H:i')
         ]);
        //return back()->with('success', 'Horoscope updated successfully');
        return redirect('admin/category')->with('success','Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DB::table('categories')->where('id', $id)->delete();
        return back()->with('success', 'Category removed successfully');
    }
}
