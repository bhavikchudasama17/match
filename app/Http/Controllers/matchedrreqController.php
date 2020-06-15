<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\matchedreq;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class matchedrreqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('users')
        ->join('matchedreq', 'users.id', '=', 'matchedreq.uid')
        ->join('myprofile', 'matchedreq.uid', '=', 'myprofile.uid')
        ->join('educationalinfo', 'matchedreq.uid', '=', 'educationalinfo.uid')
        ->join('lifestyle', 'matchedreq.uid', '=', 'lifestyle.uid')
        ->where('matchedreq.mid', '=', Auth::user()->id) 
        ->select('users.id','users.name','users.for','users.religion','myprofile.image','myprofile.age','myprofile.height','educationalinfo.occupation','lifestyle.stay')
        ->get();
    return view('matchedrreq',compact('data'));
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
        //
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
        ->where(['mid'=>Auth::user()->id, 'uid'=>$id])
        
        ->delete();

        return back()->withInput();
    }
}
