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
        ->select('users.id','users.name','myprofile.image')
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
            'message'=>Crypt::encrypt($request->message),
            
        );
        messages::create($messages);
        return redirect('msg');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data1=messages::where('rid', '=', $id)->where('sid', '=', Auth::user()->id)->selectRaw("message, AES_DECRYPT(message, md5(CONCAT(message, 'somekey')))")->get();
      
        return view('sendmessage',compact('data1'));
       
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
