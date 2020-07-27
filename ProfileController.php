<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Auth;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class ProfileController extends Controller
{
        //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //show the profile from the data in the database
        $sql="select * from profiles where username = '" .Auth::user()->name . "'";
        
        $profile = DB::select($sql);
        if ($profile) {
            return view('profile',['profile'=>$profile]);     
        }
        else {
            //if user is not in the profiles table then show an empty form
            $sql="select '' as password, '' as name, '' as Phone, '' as email, '' as Address, '' as City, '' as State, '' as Zip";
        
            $profile = DB::select($sql);
            return view('profile',['profile'=>$profile]);
        }

    }    

    /**
     * Create a new profile 
     *
     * @param  array  $data
     * @return \App\profile
     */
    protected function store(Request $data)
    {
        //get form input data from Request object
        $username = $data['username'];
        $password = $data['password'];
        $name = $data->input('name');
        $phone = $data->input('phone');
        $email = $data->input('email');
        $address = $data->input('address');
        $city = $data->input('city');
        $state = $data->input('state');
        $zip = $data->input('zip');

        //check if the profile exists in the database
        $sql="select * from profiles where username = '" .Auth::user()->name . "'";
        
        $profile = DB::select($sql);
        
        if ($profile) {
                //if profile exists in the database then update it
                $sql="update profiles set password ='".Hash::make($password)."', name = '".$name."', Phone ='".$phone."', email='".$email."', Address = '".$address."', City='".$city."', State='".$state."', Zip='".$zip."' where username = '" .Auth::user()->name . "'";
                
                DB::update($sql);
            
                //if profile exists in the database then update it
                $sql="update users set password ='".Hash::make($password)."', email='".$email."' where name = '" .Auth::user()->name . "'";
                
                DB::update($sql);
            }
        else {
            //if profile does not exist in the database then insert it
            \App\Profile::create([
                'username' => $username,
                'password' => Hash::make($password),
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'address' => $address,
                'city' => $city,
                'state' => $state,
                'zip' => $zip
              ]);
            }
        
            
        return redirect('/profile');

    }
}
