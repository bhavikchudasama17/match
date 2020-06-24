<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class sarchcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $category = $request->input('category');
    
        //now get all user and services in one go without looping using eager loading
        //In your foreach() loop, if you have 1000 users you will make 1000 queries
    
        $data = User::where('name', 'LIKE', '%' . $category . '%')
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
        
        return view('home', compact('data'));
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
 
   
       
    }
}