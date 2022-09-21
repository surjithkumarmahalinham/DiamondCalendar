<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daywise;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function add()
    {
        return view('addevent');
    }
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $data = new Daywise();
        $data->user_id = $user_id;
        $data->title = $request->title_name;
        $data->start = $request->start;
        $data->end = $request->end;
        $data->save();
        return Redirect::to('/home')->with('success','Event Added Successfully');
    }
    public function getevent(Request $request)
    {
        $user_id = Auth::user()->id;
        $data = Daywise::where('user_id','=',$user_id)->get(['id','title','start','end']);
        return response()->json(array("eventdata"=>$data));
    }
}
