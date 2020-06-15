<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blocked;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class blockedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('users')
        ->join('blocked', 'users.id', '=', 'blocked.bid')
        ->join('myprofile', 'blocked.bid', '=', 'myprofile.uid')
        ->join('educationalinfo', 'blocked.bid', '=', 'educationalinfo.uid')
        ->join('lifestyle', 'blocked.bid', '=', 'lifestyle.uid')
        ->where('blocked.uid', '=', Auth::user()->id) 
        ->select('users.id','users.name','users.for','users.religion','myprofile.image','myprofile.age','myprofile.height','educationalinfo.occupation','lifestyle.stay')
        ->get();
    return view('blocked',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blocked=array(
                
            'uid'=>$request->uid,
            'bid' =>$request->bid,
            
        );
        blocked::firstOrCreate($blocked);
        return redirect('home');
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
        $data=DB::table('blocked')
        ->where(['uid'=>Auth::user()->id, 'bid'=>$id])
        
        ->delete();

        return back()->withInput();
    }
}
