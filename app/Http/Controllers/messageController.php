<?php

namespace App\Http\Controllers;
use App\intrested;
use App\messages;
use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Encryption\EncryptionServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class messageController extends Controller
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
        ->where('intrested.uid', '=', Auth::user()->id) 
        ->select('users.id','users.name','myprofile.image','intrested.id AS ide')
        ->get();
  
        return view('msgindex',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sendmessage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages=array(
                
            'sid'=>$request->sid,
            'rid' =>$request->rid,
            'iid' =>$request->iid,
            'message'=>$request->message,
            
        );
        messages::create($messages);
        return back()->withInput();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
        $data1=DB::table('users')
        ->join('myprofile','users.id','=','myprofile.uid')
        ->join('messages', 'users.id', '=', 'messages.sid')
        ->where([['messages.sid', $id],['messages.rid', Auth::user()->id]])
        ->orWhere([['messages.rid', $id],['messages.sid', Auth::user()->id]])
        ->orderBy('messages.updated_at','ASC')
        ->select('messages.id AS idm','myprofile.image','messages.sid','messages.rid','messages.message','users.name','messages.updated_at')
        ->get();
        $data2=DB::table('intrested')
       
        ->join('messages', 'intrested.id', '=', 'messages.iid')
        ->where('intrested.uid', Auth::user()->id)
        ->select('intrested.iid','intrested.id')
        ->first();
        return view('sendmessage',compact('data1','data2'));
       
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
        messages::find($id)->delete();
        return back()->withInput();
    }
}
