<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\meet;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class meetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('users')
        ->join('meet', 'users.id', '=', 'meet.mid')
        ->join('myprofile', 'meet.mid', '=', 'myprofile.uid')
        ->join('educationalinfo', 'meet.mid', '=', 'educationalinfo.uid')
        ->join('lifestyle', 'meet.mid', '=', 'lifestyle.uid')
        ->where('meet.uid', '=', Auth::user()->id) 
        ->select('meet.date','meet.time','meet.place','users.id','users.name','users.for','users.religion','myprofile.image','myprofile.age','myprofile.height','educationalinfo.occupation','lifestyle.stay')
        ->get();
    return view('meetindex',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $meet=array(
                    
            'uid'=>$request->uid,
            'mid' =>$request->mid,
            'date'=>$request->date,
            'time'=>$request->time,
            'place'=>$request->place,
        );
        $meet1=array(
                
            'mid'=>$request->uid,
            'uid' =>$request->mid,
            'date'=>$request->date,
            'time'=>$request->time,
            'place'=>$request->place,
        );
        meet::firstOrCreate($meet);
        meet::firstOrCreate($meet1);
        DB::table('meetreq')
        ->where(['uid'=>$request->mid, 'rid'=>$request->uid])
        
        ->delete();

        return redirect('meet');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=DB::table('meet')
        ->where(['uid'=>Auth::user()->id, 'mid'=>$id])
        ->orWhere(['mid'=>Auth::user()->id, 'uid'=>$id])
        ->delete();

        return back()->withInput();
    }
}
