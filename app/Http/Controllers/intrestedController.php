<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\intrested;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class intrestedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('users')
        ->join('intrested', 'users.id', '=', 'intrested.iid')
        ->join('myprofile', 'intrested.iid', '=', 'myprofile.uid')
        ->join('educationalinfo', 'intrested.iid', '=', 'educationalinfo.uid')
        ->join('lifestyle', 'intrested.iid', '=', 'lifestyle.uid')
        ->where('intrested.uid', '=', Auth::user()->id) 
        ->select('users.id','users.name','users.for','users.religion','myprofile.image','myprofile.age','myprofile.height','educationalinfo.occupation','lifestyle.stay')
        ->get();
    return view('intindex',compact('data'));
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
        {
            $intrested=array(
                    
                'uid'=>$request->uid,
                'iid' =>$request->iid,
                
            );
            $intrested1=array(
                    
                'iid'=>$request->uid,
                'uid' =>$request->iid,
                
            );
            intrested::firstOrCreate($intrested);
            intrested::firstOrCreate($intrested1);
            DB::table('req')
            ->where(['uid'=>$request->iid, 'rid'=>$request->uid])
            
            ->delete();
    
            return redirect('home');
        }

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
        $data=DB::table('intrested')
        ->where(['uid'=>Auth::user()->id, 'iid'=>$id])
        ->orWhere(['iid'=>Auth::user()->id, 'uid'=>$id])
        ->delete();

        return back()->withInput();
    }
}
