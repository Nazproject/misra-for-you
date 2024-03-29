<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Log;


class HoroscopeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $title='Horoscope List';
        $list = DB::table('horoscopes')
        ->select('*')
        ->where('category', $slug)
        ->get();
        return view('admin.horoscope.horoscope_list',['list' => $list,'title'=>$title,'slug'=>$slug]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug)
    {
        $title='Add '.$slug;
        return view('admin.horoscope.horoscope_add',['title'=>$title,'slug'=>$slug]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($slug,Request $request)
    {   //dd(request()->all());
        $data=request()->all();
        $vali = Validator::make($request->all(), [
        'title'=>'required',
        'publish_date'=>'required',        
        'description'=>'required',
        'finance'=>'required',
        'education'=>'required',
        'ascendant'=>'required',
        'stock_market'=>'required',
        'career'=>'required',
        'love'=>'required',
        'personalized'=>'required',
        'health'=>'required',
        'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($vali->fails())
        {
            return redirect()->back()->withErrors($vali->errors())->withInput();
        }
        /*$validation=$this->validate($request, [
        'title'=>'required',
        'publish_date'=>'required',        
        'description'=>'required',
        'finance'=>'required',
        'education'=>'required',
        'ascendant'=>'required',
        'stock_market'=>'required',
        'career'=>'required',
        'love'=>'required',
        'personalized'=>'required',
        'health'=>'required',
        'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);*/
        //$horoscope = new Horoscope();
         if($file = $request->hasFile('filename')) {
            
            $file = $request->file('filename') ;
            
            $fileName = time()."_".$file->getClientOriginalName() ;
            $destinationPath = public_path().'/dist/img/horoscope/' ;
            $insert_arr=array(
                'title' => $data['title'],
                'filename' => $fileName,
                'types' => $data['types'],
                'category' => $data['category'],
                'created_at' => date('Y-m-d H:i'), 
                'description' => $data['description'],
                'finance' => $data['finance'],
                'education' => $data['education'],
                'ascendant' => $data['ascendant'],
                'stock_market' => $data['stock_market'],
                'career' => $data['career'],
                'love' => $data['love'],
                'personalized' => $data['personalized'],
                'health' => $data['health'],
                'publish_date' => $data['publish_date'],

            );
            //print_r($insert_arr);die;
            if($file->move($destinationPath,$fileName)){
                DB::table('horoscopes')->insert($insert_arr);
            }
        }
        /* $this->validate(request(),
        [
            'title'=>'required',
            'filename' => 'required|filename|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'=>'required'
        ]
        );
        $imageName = time().'.'.request()->filename->getClientOriginalExtension();
        echo $imageName;die;
        
        if (request()->filename->move(public_path('dist/img/horoscope'), $imageName)) {
            
            $horoscope = new Horoscope();
            $horoscope->title = $data['title'];
            $horoscope->description = $data['description'];
            $horoscope->filename = $data['filename'];
            $horoscope->types = $data['types'];
            $horoscope->save();
        }*/
        //return back()->with('success','You have successfully added.');
        return redirect('admin/horoscope/'.$slug.'')->with('success','You have successfully added.');
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
    public function edit($id, $slug)
    {
        //echo $id;die;
        $title='Update '.$slug;
        $horoscope = DB::table('horoscopes')
        ->select('*')
        ->where('id', $id)
        ->first();
        //print_r($horoscope);die;
        return view('admin.horoscope.horoscope_edit',['title'=>$title,'slug'=>$slug,'horoscope'=>$horoscope]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        //echo $request->title;die;
        $vali = Validator::make($request->all(), [
        'title'=>'required',
        'publish_date'=>'required',        
        'description'=>'required',
        'finance'=>'required',
        'education'=>'required',
        'ascendant'=>'required',
        'stock_market'=>'required',
        'career'=>'required',
        'love'=>'required',
        'personalized'=>'required',
        'health'=>'required',
        ]);

        if ($vali->fails())
        {
            return redirect()->back()->withErrors($vali->errors())->withInput();
        }
        /*$this->validate($request, [
        'title'=>'required',
        'publish_date'=>'required',        
        'description'=>'required',
        'finance'=>'required',
        'education'=>'required',
        'ascendant'=>'required',
        'stock_market'=>'required',
        'career'=>'required',
        'love'=>'required',
        'personalized'=>'required',
        'health'=>'required',
        ]);*/
        if($file = $request->hasFile('filename')) {
            $file = $request->file('filename') ;
            
            $fileName = time()."_".$file->getClientOriginalName() ;
            $destinationPath = public_path().'/dist/img/horoscope/' ;
            $file->move($destinationPath,$fileName);
        }else{
            $fileName=$request->old_image;
        } 
        DB::table('horoscopes')->where('id',$request->id)->update([
        'title' =>$request->title,
        'filename' => $fileName,
        'types' =>$request->types,
        'category' =>$request->category,
        'created_at' => date('Y-m-d H:i'), 
        'description' =>$request->description,
        'finance' =>$request->finance,
        'education' =>$request->education,
        'ascendant' =>$request->ascendant,
        'stock_market' =>$request->stock_market,
        'career' =>$request->career,
        'love' =>$request->love,
        'personalized' =>$request->personalized,
        'health' =>$request->health,
        'publish_date' =>$request->publish_date,
        'updated_at' => date('Y-m-d H:i')
         ]);
        //return back()->with('success', 'Horoscope updated successfully');
        return redirect('admin/horoscope/'.$slug.'')->with('success','Horoscope updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = DB::table('horoscopes')->where('id', $id)->delete();
        return back()->with('success', 'Horoscope removed successfully');
    }
}
