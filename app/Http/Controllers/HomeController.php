<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data=DB::table('users')
            ->join('myprofile', 'users.id', '=', 'myprofile.uid')
            ->join('educationalinfo', 'users.id', '=', 'educationalinfo.uid')
            ->join('lifestyle', 'users.id', '=', 'lifestyle.uid')
            ->select('users.id','users.name','users.for','users.religion','myprofile.image','myprofile.age','myprofile.height','educationalinfo.occupation','lifestyle.stay')
            ->whereNotIn('users.id',function($query) {

                 $query->where(['uid'=>Auth::user()->id])->select('iid')->from('intrested');
             
             })
             ->whereNotIn('users.id',function($query) {

                $query->where(['uid'=>Auth::user()->id])->select('bid')->from('blocked');
            
            })
            ->whereNotIn('users.id',function($query) {

                $query->where(['uid'=>Auth::user()->id])->select('rid')->from('req');
            
            })
            ->whereNotIn('users.id',function($query) {

                $query->where(['rid'=>Auth::user()->id])->select('uid')->from('req');
            
            })
            ->get();

        return view('home',compact('data'));
    }
}
