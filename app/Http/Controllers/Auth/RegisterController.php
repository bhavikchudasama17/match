<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\myprofile;
use App\lifestyle;
use App\familydetails;
use App\educationalinfo;
use App\desiredpartner;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user=User::create([
            'for' => $data['for'],
            'name' => $data['name'],
            'gender' => $data['gender'],
            'DOB' => $data['DOB'],
            'religion' => $data['religion'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $myprofile=myprofile::create([
            'uid' => $user['id'],
            'image'=>'not specified',
            'age' =>'0',
            'maritalstatus'=>'not specified',
            'height'=>'not specified',
            'nature'=>'not specified',
            'about'=>'not specified', 
        ]);
        $lifestyle=lifestyle::create([
            'uid' => $user['id'],
            'appearance'=>'not specified',
            'weight'=>'not specified',
            'assets'=>'not specified',
            'habbits'=>'not specified',
            'languageknown'=>'not specified',
            'bloodgroup'=>'not specified',
            'stay'=>'not specified',
        ]);
        $familydetails=familydetails::create([
            'uid' => $user['id'],
            'mother'=>'not specified',
            'father'=>'not specified',
            'brother'=>'not specified',
            'sister'=>'not specified',
            'familyincome'=>'not specified',
            'stay'=>'not specified',
        ]);
        $educationalinfo=educationalinfo::create([
            'uid' => $user['id'],
            'highesteducation'=>'not specified',
            'ugdegree'=>'not specified',
            'pgdegree'=>'not specified',
            'school'=>'not specified',
            'ugcollege'=>'not specified',
            'pgcollege'=>'not specified',
            'occupation'=>'not specified',
            'annualincome'=>'not specified',

        ]);
      
        $desiredpartner=desiredpartner::create([
            'uid' => $user['id'],
            'age'=>'not specified',
            'height'=>'not specified',
            'maritalstatus'=>'not specified',
            'religion'=>'not specified',
            'caste'=>'not specified',
            'education'=>'not specified',
            'occupation'=>'not specified',
            'income'=>'not specified',
        ]);
        return $user;


    }
}
