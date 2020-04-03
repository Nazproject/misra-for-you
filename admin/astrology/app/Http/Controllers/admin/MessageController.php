<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Log;
class MessageController extends Controller
{
    
	public function __construct()
    {
        $this->middleware('auth:admin');
        date_default_timezone_set("Asia/Calcutta");
    }

    public function index()
    {//dd($request->email);
        $title='Message List';
        $list = DB::table('messages')
        ->select('*')
        ->get();
        return view('admin.message.message_list',['list' => $list,'title'=>$title]);
    }
    public function destroy($id)
    {
        $delete = DB::table('messages')->where('id', $id)->delete();
        return back()->with('success', 'Item removed successfully');
    }








}
