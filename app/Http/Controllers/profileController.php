<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\myprofile;
use App\lifestyle;
use App\familydetails;
use App\educationalinfo;
use App\desiredpartner;
use Illuminate\Support\Facades\Auth;
class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1=myprofile::where('uid', '=', Auth::user()->id)->select('*')->first();
        $data2= User::where('id', '=', Auth::user()->id)->select('*')->first();
        $data3=lifestyle::where('uid', '=', Auth::user()->id)->select('*')->first();
        $data4=familydetails::where('uid', '=', Auth::user()->id)->select('*')->first();
        $data5=educationalinfo::where('uid', '=', Auth::user()->id)->select('*')->first();
        $data6=desiredpartner::where('uid', '=', Auth::user()->id)->select('*')->first();
        
        return view('myprofile',compact('data1','data2','data3','data4','data5','data6'));
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
        $data1=myprofile::where('uid', '=', $id)->select('*')->first();
        $data2= User::where('id', '=', $id)->select('*')->first();
        $data3=lifestyle::where('uid', '=', $id)->select('*')->first();
        $data4=familydetails::where('uid', '=', $id)->select('*')->first();
        $data5=educationalinfo::where('uid', '=', $id)->select('*')->first();
        $data6=desiredpartner::where('uid', '=', $id)->select('*')->first();
        
        return view('profileinfo',compact('data1','data2','data3','data4','data5','data6'));
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
