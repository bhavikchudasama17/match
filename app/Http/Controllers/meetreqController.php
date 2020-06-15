<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\meetreq;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class meetreqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('users')
        ->join('meetreq', 'users.id', '=', 'meetreq.rid')
        ->join('myprofile', 'meetreq.rid', '=', 'myprofile.uid')
        ->join('educationalinfo', 'meetreq.rid', '=', 'educationalinfo.uid')
        ->join('lifestyle', 'meetreq.rid', '=', 'lifestyle.uid')
        ->where('meetreq.uid', '=', Auth::user()->id) 
        ->select('meetreq.date','meetreq.time','meetreq.place','users.id','users.name','users.for','users.religion','myprofile.image','myprofile.age','myprofile.height','educationalinfo.occupation','lifestyle.stay')
        ->get();
    return view('meetreq',compact('data'));
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
        $req=array(
                    
            'uid'=>$request->uid,
            'rid' =>$request->rid,
            'date'=>$request->date,
            'time'=>$request->time,
            'place'=>$request->place,

        );
        meetreq::firstOrCreate($req);
        return redirect('int');
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
        $data=DB::table('meetreq')
        ->where(['uid'=>Auth::user()->id, 'rid'=>$id])
        
        ->delete();

        return back()->withInput();
    }
}
