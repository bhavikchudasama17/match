<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class notificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1=DB::table('users')
        ->join('req', 'users.id', '=', 'req.uid')
        ->where('req.rid', '=', Auth::user()->id) 
        ->select('users.id','users.name','req.updated_at')
        ->get();
        $data=DB::table('users')
        ->join('intrested', 'users.id', '=', 'intrested.uid')
        ->where('intrested.iid', '=', Auth::user()->id) 
        ->select('users.id','users.name','intrested.updated_at')
        ->get();
        $data2=DB::table('users')
        ->join('meet', 'users.id', '=', 'meet.uid')
        ->where('meet.mid', '=', Auth::user()->id) 
        ->select('users.id','users.name','meet.date','meet.time','meet.place')
        ->get();
        $data3=DB::table('users')
        ->join('matched', 'users.id', '=', 'matched.uid')
        ->where('matched.mid', '=', Auth::user()->id) 
        ->select('users.id','users.name','matched.updated_at')
        ->get();
        return view('notification',compact('data','data1','data2','data3'));
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
        //
    }
}
