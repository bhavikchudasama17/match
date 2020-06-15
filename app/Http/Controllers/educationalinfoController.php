<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\educationalinfo;
class educationalinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data=educationalinfo::findOrFail($id);
        return view('editeducationalinfo',compact('data'));
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
        $educationalinfo=array(
                
            'highesteducation'=>$request->highesteducation,
            'ugdegree' =>$request->ugdegree,
            'pgdegree'=>$request->pgdegree,
            'school'=>$request->school,
            'ugcollege'=>$request->ugcollege,
            'pgcollege'=>$request->pgcollege, 
            'occupation'=>$request->occupation,
            'annualincome'=>$request->annualincome,
        );
        educationalinfo::whereId($id)->update($educationalinfo);
        return redirect('prof');
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
