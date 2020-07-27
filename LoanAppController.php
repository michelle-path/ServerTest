<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

//use App\Http\Requests;
//use App\Http\Controllers\Controller;

class LoanAppController extends Controller
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
        //$products = \App\Product::all();

        //return view('viewproducts', ['allProducts' => $products]);
        $loanapp = DB::select("select * from loanapps where user = '" +$data->user()->name + "'");
        return view('loanapp',['loanapp'=>$loanapp]);

    }

    /**
     * Create a new loan application 
     *
     * @param  array  $data
     * @return \App\loanapp
     */
    protected function store(Request $data)
    {
        $fname = $data['f_name'];
        $lname = $data['l_name'];
        $ssn = $data->input('ssn');
        $occupation = $data->input('occupation');
        $marital_status = $data->input('maritalStatus');
        $DOB = $data->input('dob');
        $dependants = $data->input('dependents');
        $annual_income = $data->input('income');
        $loan_type = $data->input('loanType');
        $loan_request_amount = $data->input('loanRequestAmount');
        $loan_duration = $data->input('loanDuration');


        \App\LoanApps::create([
            'fname' => $fname,
            'lname' => $lname,
            'ssn' => $ssn,
            'occupation' => $occupation,
            'marital_status' => $marital_status,
            'DOB' => $DOB,
            'dependants' => $dependants,
            'annual_income' => $annual_income,
            'loan_type' => $loan_type,
            'loan_request_amount' => $loan_request_amount,
            'loan_duration' => $loan_duration,
            'user'=> $data->user()->name 
          ]);
  
          return redirect('/loanapp');



/*
        //echo "11111111111111";
        //echo $data->user()->name;
        //echo "22222222222222222";
        $data=array(
            'fname' => $fname,
            'lname' => $lname,
            'ssn' => $ssn,
            'occupation' => $occupation,
            'marital_status' => $marital_status,
            'DOB' => $DOB,
            'dependants' => $dependants,
            'annual_income' => $annual_income,
            'loan_type' => $loan_type,
            'loan_request_amount' => $loan_request_amount,
            'loan_duration' => $loan_duration,
            'user'=> $data->user()->name 
    
            );
      //      'first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
        DB::table('loanapps')->insert($data);
*/
        /*
        return loanapps::create([
            //'name' => $data['name'],
            //'email' => $data['email'],
            //'password' => Hash::make($data['password']),

            'fname' => $data->input('f_name'),
            'lname' => $data->input('l_name'),
            'ssn' => $data->input('ssn'),
            'occupation' => $data->input('occupation'),
            'marital_status' => $data->input('maritalStatus'),
            'DOB' => $data->input('dob'),
            'dependants' => $data->input('dependents'),
            'annual_income' => $data->input('income'),
            'loan_type' => $data->input('loanType'),
            'loan_request_amount' => $data->input('loanRequestAmount'),
            'loan_duration' => $data->input('loanDuration')
            //,
            //'user'=> Auth::user()->id


            ]);
*/
    }
}
