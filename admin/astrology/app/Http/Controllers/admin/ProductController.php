<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Log;

class ProductController extends Controller
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
        $title='Product List';
        $list = DB::table('products')
        ->select('products.*','categories.category','carats.carat')
        ->join('categories','categories.id','=','products.category_id')
        ->leftJoin('carats','carats.id','=','products.carat_id')
        ->get();
        return view('admin.product.list',['list' => $list,'title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_list = DB::table('categories')
        ->select('*')
        ->get();
        $carat_list = DB::table('carats')
        ->select('*')
        ->get();
        $title='Add Product';
        return view('admin.product.add',['title'=>$title,'carat_list'=>$carat_list,'category_list'=>$category_list]);
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
        'title'=>'required',
        'mrp_price'=>'required',        
        'gst'=>'required',
        'category_id'=>'required',
        'discount'=>'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($vali->fails())
        {
            return redirect()->back()->withErrors($vali->errors())->withInput();
        }
        if($file = $request->hasFile('image')) {
            $file = $request->file('image') ;
            $fileName = time()."_".$file->getClientOriginalName() ;
            $destinationPath = public_path().'/dist/img/product/' ;
            $insert_arr=array(
            'title' => $data['title'],
            'carat_id'=>$data['carat_id'],
            'mrp_price' => $data['mrp_price'],
            'gst' => $data['gst'],
            'category_id' => $data['category_id'],
            'discount' => $data['discount'],
            'image' => $fileName,
            'mrp_gst_price' => $data['mrp_gst_price'],
            'price' => $data['price'],
            'first_description' => $data['first_description'],
            'second_description' => $data['second_description'],
            'faq' => $data['faq'],
            'planet' => $data['planet'],
            'zodiac_sign' => $data['zodiac_sign'],
            'top_selling' => $data['top_selling'],
            'stock' => $data['stock'],
            'product_count' => $data['product_count'],
            'created_at' => date('Y-m-d H:i')
        );
        //print_r($insert_arr);die;
        if($file->move($destinationPath,$fileName)){
              DB::table('products')->insert($insert_arr);
            }
        }
        return redirect()->route('admin.product')->with('success','Your request have been successfully completed.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title='Update Product';
        $category_list = DB::table('categories')
        ->select('*')
        ->get();
        $carat_list = DB::table('carats')
        ->select('*')
        ->get();
        $edit_product = DB::table('products')
        ->select('*')
        ->where('id', $id)
        ->first();
        //print_r($horoscope);die;
        return view('admin.product.edit',['title'=>$title,'category_list'=>$category_list,'edit_product'=>$edit_product, 'carat_list'=>$carat_list, 'id'=>$id]);
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
        $data=request()->all();
        $vali = Validator::make($request->all(), [
        'title'=>'required',
        'mrp_price'=>'required',        
        'gst'=>'required',
        'category_id'=>'required',
        'discount'=>'required',
        ]);
        if ($vali->fails())
        {
            return redirect()->back()->withErrors($vali->errors())->withInput();
        }
        if($file = $request->hasFile('image')) {
            $file = $request->file('image') ;
            
            $fileName = time()."_".$file->getClientOriginalName() ;
            $destinationPath = public_path().'/dist/img/product/' ;
            $file->move($destinationPath,$fileName);
        }else{
            $fileName=$request->old_image;
        }
        $up_arr=array(
            'title' => $data['title'],
            'carat_id'=>$data['carat_id'],
            'mrp_price' => $data['mrp_price'],
            'gst' => $data['gst'],
            'category_id' => $data['category_id'],
            'discount' => $data['discount'],
            'image' => $fileName,
            'mrp_gst_price' => $data['mrp_gst_price'],
            'price' => $data['price'],
            'first_description' => $data['first_description'],
            'second_description' => $data['second_description'],
            'faq' => $data['faq'],
            'planet' => $data['planet'],
            'zodiac_sign' => $data['zodiac_sign'],
            'top_selling' => $data['top_selling'],
            'stock' => $data['stock'],
            'product_count' => $data['product_count'],
            'updated_at' => date('Y-m-d H:i')
        );         
        DB::table('products')->where('id',$id)->update($up_arr);
        //return back()->with('success', 'Horoscope updated successfully');
        return redirect('admin/product')->with('success','Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DB::table('products')->where('id', $id)->delete();
        return back()->with('success', 'Product removed successfully');
    }
}
