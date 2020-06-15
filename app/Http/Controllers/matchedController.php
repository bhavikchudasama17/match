<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\matched;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class matchedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('users')
        ->join('matched', 'users.id', '=', 'matched.mid')
        ->join('myprofile', 'matched.mid', '=', 'myprofile.uid')
        ->join('educationalinfo', 'matched.mid', '=', 'educationalinfo.uid')
        ->join('lifestyle', 'matched.mid', '=', 'lifestyle.uid')
        ->where('matched.uid', '=', Auth::user()->id) 
        ->select('users.id','users.name','users.for','users.religion','myprofile.image','myprofile.age','myprofile.height','educationalinfo.occupation','lifestyle.stay')
        ->get();
    return view('matchedindex',compact('data'));
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
        $matched=array(
                    
            'uid'=>$request->uid,
            'mid' =>$request->mid,
            
        );
        $matched1=array(
                
            'mid'=>$request->uid,
            'uid' =>$request->mid,
            
        );
        matched::firstOrCreate($matched);
        matched::firstOrCreate($matched1);
        DB::table('matchedreq')
        ->where(['uid'=>$request->mid, 'mid'=>$request->uid])
        
        ->delete();

        return redirect('match');
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
        $data=DB::table('matched')
        ->where(['uid'=>Auth::user()->id, 'mid'=>$id])
        ->orWhere(['mid'=>Auth::user()->id, 'uid'=>$id])
        ->delete();

        return back()->withInput();
    }
}
