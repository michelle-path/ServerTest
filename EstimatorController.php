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
        if (!$estimator) {
            $sql = "select '' as isflooring, '' as flooringtype,
            '' as iswindows, 
            '' as isdoor, 
            '' as windowcount, 
            '' isappliances, 
            '' as appliancetype1, 
            '' as appliancetype2, 
            '' as appliancetype3, 
            '' as appliancetype4";
            $estimator = DB::select($sql);        
        }
        return view('estimator',['estimator'=>$estimator]);

    }

    /**
     * Create a new loan application 
     *
     * @param  array  $request
     * @return \App\loanapp
     */
    protected function store(Request $request)
    {
        $isflooring = $request->input('isflooring');
        
        $flooringtype = '';
        if ($isflooring == 'Yes') {
            $flooringtype = $request->input('flooringtype');
        }

        $iswindows = $request->input('iswindows');
        
        $windowcount = 0;
        if ($iswindows == 'Yes') {
            $windowcount = $request->input('windowcount');
            if ($windowcount == '') {
                $windowcount = 0;
            }
        }

        
        $isdoor = $request->input('isdoor');
        
        $isappliances = $request->input('isappliances');

        $appliancetype1 = '';
        $appliancetype2 = '';
        $appliancetype3 = '';
        $appliancetype4 = '';
        if ($isappliances == 'Yes') {
            $appliancetype1 = $request->input('appliancetype1');
            $appliancetype2 = $request->input('appliancetype2');
            $appliancetype3 = $request->input('appliancetype3');
            $appliancetype4 = $request->input('appliancetype4');
        }
     
        $validator = $request->validate([
            'isflooring' => 'required' ,
            'iswindows' => 'required',
            'isdoor' => 'required',
            'isappliances' => 'required'
        ],
        [
            'isflooring.required' => 'New flooring (yes/no) selection is required',
            'iswindows.required' => 'Windows (yes/no) selection is required',
            'isdoor.required' => 'New door (yes/no) selection is required',
            'isappliances.required' => 'New Appliances (yes/no) selection is required'
        ]);        



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
        return redirect('/estimator')->with('status', 'Estimates saved successfully!');
        //return redirect('/estimator');

    }
}
