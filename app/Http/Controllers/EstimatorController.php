<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Auth;
use DB;


class EstimatorController extends Controller
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
        $estimator = DB::select("select * from estimators where user = '" .Auth::user()->name . "'");
        return view('estimator',['estimator'=>$estimator]);

    }

    /**
     * Create a new loan application 
     *
     * @param  array  $data
     * @return \App\loanapp
     */
    protected function store(Request $data)
    {
        $isflooring = $data->input('isflooring');
        
        $flooringtype = null;
        if ($isflooring == 'Yes') {
            $flooringtype = $data->input('flooringtype');
        }

        $iswindows = $data->input('iswindows');
        
        $windowcount = 0;
        if ($iswindows == 'Yes') {
            $windowcount = $data->input('windowcount');
            if ($windowcount == '') {
                $windowcount = 0;
            }
        }

        
        $isdoor = $data->input('isdoor');
        
        $isappliances = $data->input('isappliances');

        $appliancetype1 = null;
        $appliancetype2 = null;
        $appliancetype3 = null;
        $appliancetype4 = null;
        if ($isappliances == 'Yes') {
            $appliancetype1 = $data->input('appliancetype1');
            $appliancetype2 = $data->input('appliancetype2');
            $appliancetype3 = $data->input('appliancetype3');
            $appliancetype4 = $data->input('appliancetype4');
        }
        
        //check if the profile exists in the database
        $sql="select * from estimators where user = '" .Auth::user()->name . "'";
        
        $estimator = DB::select($sql);
        
        if ($estimator) {
                //if profile exists in the database then update it
                $sql="update estimators set isflooring='".$isflooring."', flooringtype = '".$flooringtype."', "; 
                $sql = $sql."iswindows = '".$iswindows."', ";
                $sql = $sql."isdoor = '".$isdoor."', ";
                $sql = $sql."windowcount = ".$windowcount.", ";
                $sql = $sql."isappliances = '".$isappliances."', ";
                $sql = $sql."appliancetype1 = '".$appliancetype1."', ";
                $sql = $sql."appliancetype2 = '".$appliancetype2."', ";
                $sql = $sql."appliancetype3 = '".$appliancetype3."', ";
                $sql = $sql."appliancetype4 = '".$appliancetype4."' ";
                $sql = $sql." where user = '" .Auth::user()->name . "'";
                
                DB::update($sql);
            
            }
        else {
            \App\Estimator::create([
                'user'=> Auth::user()->name,
                'isflooring' => $isflooring,
                'flooringtype' => $flooringtype,
                'iswindows' => $iswindows,
                'isdoor' => $isdoor,
                'windowcount' => $windowcount,
                'isappliances' => $isappliances,
                'appliancetype1' => $appliancetype1,
                'appliancetype2' => $appliancetype2,
                'appliancetype3' => $appliancetype3,
                'appliancetype4' => $appliancetype4,
            ]);
        }
        //return redirect('/estimator')->with('status', 'Estimates saved successfully!');
        return redirect('/estimator');

    }
}