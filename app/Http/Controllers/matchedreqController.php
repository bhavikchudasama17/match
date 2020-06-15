<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\matchedreq;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class matchedreqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('users')
        ->join('matchedreq', 'users.id', '=', 'matchedreq.mid')
        ->join('myprofile', 'matchedreq.mid', '=', 'myprofile.uid')
        ->join('educationalinfo', 'matchedreq.mid', '=', 'educationalinfo.uid')
        ->join('lifestyle', 'matchedreq.mid', '=', 'lifestyle.uid')
        ->where('matchedreq.uid', '=', Auth::user()->id) 
        ->select('users.id','users.name','users.for','users.religion','myprofile.image','myprofile.age','myprofile.height','educationalinfo.occupation','lifestyle.stay')
        ->get();
    return view('matchedreq',compact('data'));
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
            'mid' =>$request->mid,
            
        );
        matchedreq::firstOrCreate($req);
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
        $data=DB::table('matchedreq')
        ->where(['uid'=>Auth::user()->id, 'mid'=>$id])
        
        ->delete();

        return back()->withInput();
    }
}
