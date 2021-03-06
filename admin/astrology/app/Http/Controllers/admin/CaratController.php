<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Log;
class CaratController extends Controller
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
        $title='Carat List';
        $list = DB::table('carats')
        ->select('*')
        ->get();
        return view('admin.carat.list',['list' => $list,'title'=>$title]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Add carat';
        return view('admin.carat.add',['title'=>$title]);
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
        'carat'=>'required',
        ]);

        if ($vali->fails())
        {
            return redirect()->back()->withErrors($vali->errors())->withInput();
        }
        $insert_arr=array(
            'carat' => $data['carat'],
            'created_at' => date('Y-m-d H:i')
        );
        //print_r($insert_arr);die;
        DB::table('carats')->insert($insert_arr);
        return redirect()->route('admin.carat')->with('success','Your request have been successfully completed.');
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
        $title='Update carat';
        $carat_list = DB::table('carats')
        ->select('*')
        ->where('id', $id)
        ->first();
        //print_r($horoscope);die;
        return view('admin.carat.edit',['title'=>$title,'carat_list'=>$carat_list, 'id'=>$id]);
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
        'carat'=>'required'
        ]);
        if ($vali->fails())
        {
            return redirect()->back()->withErrors($vali->errors())->withInput();
        }         
        DB::table('carats')->where('id',$request->id)->update([
        'carat' =>$request->carat,
        'updated_at' => date('Y-m-d H:i')
         ]);
        //return back()->with('success', 'Horoscope updated successfully');
        return redirect('admin/carat')->with('success','Carat updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DB::table('carats')->where('id', $id)->delete();
        return back()->with('success', 'Carat removed successfully');
    }
}
