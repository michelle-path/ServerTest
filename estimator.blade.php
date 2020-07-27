<html>

<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link rel="shortcut icon" href="http://willlouden.com/favicon.ico" type="image/x-icon" />
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>Welcome to: diyNovice.com&#153;)</title>
  
<style>

* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 50%;
  padding: -15px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

</head>

<body bgcolor="#FFFFFF" text="#000000" link="#996633" vlink="#996633" alink="#996633">
<div align="center">
  <center>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="20%" id="AutoNumber1">
  <tr>
    <td width="100%">
    <div align="center">
    <!--webbot bot="Include" U-Include="http://diynovice.com/sitemax/_header/index.htm" TAG="BODY" startspan -->
<div align="center">
  <center>

  <table border="0" width="20%" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#111111">
  <tr>
    <td width="100%"><p><small>Welcome to: <b>diyNovice.com</b>™</small></td>
  </tr>
  <tr>
    <td width="100%">
    <p align="center">
    <a href="{{ url('/') }}" target="_parent">
    <img src="http://diynovice.com/sitemax/_header/diyNovice-Large-Logo_7.10.16.jpg" alt="Welcome to: diynovice.com™" border="0" width="866" height="248"></a></td>
  </tr>
  <tr>
    <td width="100%">
    <p align="center">
    <img border="0" src="http://diynovice.com/sitemax/blank-spacer.jpg" width="310" height="15"></td>
  </tr>
  </table>
  </center>
</div>
<!--webbot bot="Include" endspan i-checksum="55350" --></div>
    </td>
  </tr>
  <tr>
        <td width="100%">
        <table border="0" cellpadding="4" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber15">
          <tr>
            <td width="25%">
            <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber16">
            <tr>
              <td width="100%">
              <p align="center">
              <span style="font-size: 12pt; font-family: Times New Roman">Visit:
              </span><b><span style="font-size: 12pt; font-family: Arial"><a href="http://BoutIt.com">
              BoutIt.com</span></b><span style="font-size: 12pt; font-family: Times New Roman">™</span></td>
            </tr>
            </table>
            </td>
            <td width="25%">
            <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber17">
              <tr>
                <td width="100%">
                <p align="center">
                <span style="font-size: 12pt; font-family: Times New Roman"><a href="#">
                Renovation Estimator</span></td>
              </tr>
            </table>
            </td>
            <td width="25%">
            <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber18">
            <tr>
              <td width="100%">
              <p align="center">
              <span style="font-size: 12pt; font-family: Times New Roman"><a href="{{route('login')}}">Log In 
              / Account Information</a></span></td>
            </tr>
            </table>
            </td>
            <td width="25%">
            <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber19">
            <tr>
              <td width="100%">
              <p align="center">
              <span style="font-size: 12pt; font-family: Times New Roman"><div class="dropdown"><a href="#">
                Additional Site Resources</a><div class="dropdown-content">
                <a href="{{url('/loanapp')}}">Loan Application</a>
                    <a href="#">Loan Information</a>
                    <a href="#">Loan FAQ</a>
                </div>
                </div>
              </span></td>
            </tr>
            </table>
            </td>
          </tr>
        </table>
        <body bgcolor="#FFFFFF" text="#000000" link="#000000" vlink="#000000" alink="#000000">
		<div  align="center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">{{ __('Renovation Estimator') }}</div>
            <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif              
              @foreach ($estimator as $p)
                <script>
                  function onisflooringClick (val) {
                    if (val=="Yes") {
                        document.getElementById('flooringtypeH').disabled=false
                        document.getElementById('flooringtypeV').disabled=false
                        document.getElementById('flooringtypeC').disabled=false

                    }
                    else {
                        document.getElementById('flooringtypeH').disabled=true
                        document.getElementById('flooringtypeV').disabled=true
                        document.getElementById('flooringtypeC').disabled=true

                        document.getElementById('flooringtypeH').checked=false;
                        document.getElementById('flooringtypeV').checked=false;
                        document.getElementById('flooringtypeC').checked=false;
                    }
                  }
                  function oniswindowsClick (val) {
                    if (val=="Yes") {
                        document.getElementById('windowcount1').disabled=false
                        document.getElementById('windowcount3').disabled=false
                        document.getElementById('windowcount5').disabled=false

                    }
                    else {
                        document.getElementById('windowcount1').disabled=true
                        document.getElementById('windowcount3').disabled=true
                        document.getElementById('windowcount5').disabled=true

                        document.getElementById('windowcount1').checked=false;
                        document.getElementById('windowcount3').checked=false;
                        document.getElementById('windowcount5').checked=false;
                    }
                  }
                  function onisappliancesClick (val) {
                    if (val=="Yes") {
                        document.getElementById('appliancetype1').disabled=false;
                        document.getElementById('appliancetype2').disabled=false;
                        document.getElementById('appliancetype3').disabled=false;
                        document.getElementById('appliancetype4').disabled=false;

                    }
                    else {
                        document.getElementById('appliancetype1').disabled=true;
                        document.getElementById('appliancetype2').disabled=true;
                        document.getElementById('appliancetype3').disabled=true;
                        document.getElementById('appliancetype4').disabled=true;

                        document.getElementById('appliancetype1').checked=false;
                        document.getElementById('appliancetype2').checked=false;
                        document.getElementById('appliancetype3').checked=false;
                        document.getElementById('appliancetype4').checked=false;
                    }
                  }
                </script>
                <form method="POST" action="{{url('/estimator')}}" enctype="multipart/form-data" onLoad="onFormLoad();">
                  @csrf
                    
                    <!----- Q1 ----->
                    
                    <table border="0" cellpadding="1" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber5">
                    <tr><td colspan="100%"  width="100%"><h4>1. Do you need new flooring?</h4></td></tr>
                    <tr>
                        <td align="center" width="25%"><input type="radio" id="isflooringY" name="isflooring" value="Yes" onclick="onisflooringClick(this.value);" {{ old('isflooring')? ((old('isflooring')=="Yes")? "checked" : "") : (($p->isflooring=="Yes")? "checked" : "") }} >
                        <label for="Yes"> Yes</label>
                        </td>
                        
                        <td align="center" width="25%"><input type="radio" id="isflooringN" name="isflooring" value="No" onclick="onisflooringClick(this.value);" {{ old('isflooring')? ((old('isflooring')=="No")? "checked" : "") : (($p->isflooring=="No")? "checked" : "") }}>
                        <label for="No"> No</label>
                        </td>
                        <td width="25%"></td>
                        <td width="25%"></td>
                    </tr>
                    <!----- Q2 ----->
                    <tr><td colspan="100%"  width="100%"><h4>2. If so, what type of flooring?</h4></td></tr>
                    <tr>
                        <td align="center" width="25%">
                        <input type="radio" id="flooringtypeH" name="flooringtype" value="Hardwood" {{ old('flooringtype') ? ((old('flooringtype')=="Hardwood")? "checked" : "") : (($p->flooringtype=="Hardwood")? "checked" : "") }} {{ old('isflooring') ? ((old('isflooring')=="No")? "disabled" : "") : (($p->isflooring=="No")? "disabled" : "") }}>
                        <label for="Hardwood"> Hardwood</label>
                        </td>
                        <td align="center" width="25%">
                        <input type="radio" id="flooringtypeV" name="flooringtype" value="Vinyl" {{old('flooringtype') ? ((old('flooringtype')=="Vinyl")? "checked" : "") : (($p->flooringtype=="Vinyl")? "checked" : "")}} {{ old('isflooring') ? ((old('isflooring')=="No")? "disabled" : "") : (($p->isflooring=="No")? "disabled" : "")}}>
                        <label for="Vinyl"> Vinyl</label>
                        </td>
                        <td align="center" width="25%">
                        <input type="radio" id="flooringtypeC" name="flooringtype" value="CeramicTiles" {{old('flooringtype') ? ((old('flooringtype')=="CeramicTiles")? "checked" : "") : (($p->flooringtype=="CeramicTiles")? "checked" : "")}} {{ old('isflooring') ? ((old('isflooring')=="No")? "disabled" : "") : (($p->isflooring=="No")? "disabled" : "")}}> 
                        <label for="CeramicTiles"> Ceramic Tiles</label>
                        </td>
                        <td width="25%"></td>
                    </tr>
                    <!----- Q3 ----->
                    <tr><td colspan="100%"  width="100%"><h4>3. Do you need windows?</h4></td></tr>
                    <tr>
                        <td align="center" width="25%">
                        <input type="radio" id="iswindowsY" name="iswindows" value="Yes" onclick="oniswindowsClick(this.value);" {{ old('iswindows') ? ((old('iswindows')=="Yes")? "checked" : "") : (($p->iswindows=="Yes")? "checked" : "") }}>
                        <label for="Yes"> Yes</label>
                        </td>
                        <td align="center" width="25%">
                        <input type="radio" id="iswindowsN" name="iswindows" value="No" onclick="oniswindowsClick(this.value);" {{ old('iswindows') ? ((old('iswindows')=="No")? "checked" : "") : (($p->iswindows=="No")? "checked" : "") }}>
                        <label for="No"> No</label>
                        </td>
                        <td width="25%"></td>
                        <td width="25%"></td>
                    </tr>
                    <!----- Q4 ----->
                    <tr><td colspan="100%"  width="100%"><h4>4. If yes, how many?</h4></td></tr>
                    <tr>
                        <td  align="center" width="25%">
                        <input type="radio" id="windowcount1" name="windowcount" value="1" {{ old('windowcount') ? ((old('windowcount')=="1")? "checked" : "") : (($p->windowcount=="1")? "checked" : "") }} {{ old('iswindows') ? ((old('iswindows')=="No")? "disabled" : "") : (($p->iswindows=="No")? "disabled" : "")}}>
                        <label for="1"> 1-2</label>
                        </td>
                        <td  align="center" width="25%">
                        <input type="radio" id="windowcount3" name="windowcount" value="3" {{ old('windowcount') ? ((old('windowcount')=="3")? "checked" : "") : (($p->windowcount=="3")? "checked" : "") }} {{old('iswindows') ? ((old('iswindows')=="No")? "disabled" : "") : (($p->iswindows=="No")? "disabled" : "")}}>
                        <label for="3"> 3-4</label>
                        </td>
                        <td  align="center" width="25%">
                        <input type="radio" id="windowcount5" name="windowcount" value="5" {{ old('windowcount') ? ((old('windowcount')=="5")? "checked" : "") : (($p->windowcount=="5")? "checked" : "") }} {{old('iswindows') ? ((old('iswindows')=="No")? "disabled" : "") : (($p->iswindows=="No")? "disabled" : "")}}>
                        <label for="5"> 5+</label>
                        </td>
                        <td width="25%"></td>
                    </tr>
                    <!----- Q5 ----->
                    <tr><td colspan="100%"  width="100%"><h4>5. Do you want a new door for the room?</h4></td></tr>
                    <tr>
                        <td  align="center" width="25%">
                        <input type="radio" id="isdoorY" name="isdoor" value="Yes" {{ old('isdoor') ? ((old('isdoor')=="Yes")? "checked" : "") : (($p->isdoor=="Yes")? "checked" : "") }}>
                        <label for="Yes"> Yes</label>
                        </td>
                        <td  align="center" width="25%">
                        <input type="radio" id="isdoorN" name="isdoor" value="No" {{ old('isdoor') ? ((old('isdoor')=="No")? "checked" : "") : (($p->isdoor=="No")? "checked" : "") }}>
                        <label for="No"> No</label>
                        </td>
                        <td width="25%"></td>
                        <td width="25%"></td>
                    </tr>
                    <!----- Q6 ----->
                    <tr><td colspan="100%"  width="100%"><h4>6. Do you need new appliances for the room?</h4></td></tr>
                    <tr>
                        <td  align="center" width="25%">
                        <input type="radio" id="isappliancesY" name="isappliances" value="Yes"  onclick="onisappliancesClick(this.value);"  {{ old('isappliances') ? ((old('isappliances')=="Yes")? "checked" : "") : (($p->isappliances=="Yes")? "checked" : "") }}>
                        <label for="Yes"> Yes</label>
                        </td>
                        <td  align="center" width="25%">
                        <input type="radio" id="isappliancesN" name="isappliances" value="No"  onclick="onisappliancesClick(this.value);" {{ old('isappliances') ? ((old('isappliances')=="No")? "checked" : "") : (($p->isappliances=="No")? "checked" : "") }}>
                        <label for="No"> No</label>
                        </td>
                        <td width="25%"></td>
                        <td width="25%"></td>
                    </tr>
                    <!----- Q6 ----->
                    <tr><td colspan="100%"  width="100%"><h4>7. If yes, what type of appliances would you need?</h4></td></tr>
                    <tr>
                        <td  align="center" width="25%">
                        <input type="checkbox" id="appliancetype1" name="appliancetype1" value="Refrigerator" {{ old('appliancetype1') ? ((old('appliancetype1')=="Refrigerator")? "checked" : "") : (($p->appliancetype1=="Refrigerator")? "checked" : "") }} {{ old('isappliances') ? ((old('isappliances')=="No")? "disabled" : "") : (($p->isappliances=="No")? "disabled" : "")}}>
                        <label for="Refrigerator"> Refrigerator</label>
                        </td>
                        <td  align="center" width="25%">
                        <input type="checkbox" id="appliancetype2" name="appliancetype2" value="Stove" {{ old('appliancetype2') ? ((old('appliancetype2')=="Stove")? "checked" : "") : (($p->appliancetype2=="Stove")? "checked" : "") }} {{old('isappliances') ? ((old('isappliances')=="No")? "disabled" : "") : (($p->isappliances=="No")? "disabled" : "")}}>
                        <label for="Stove"> Stove</label>
                        </td>
                        <td  align="center" width="25%">
                        <input type="checkbox" id="appliancetype3" name="appliancetype3" value="Oven" {{ old('appliancetype3') ? ((old('appliancetype3')=="Oven")? "checked" : "") : (($p->appliancetype3=="Oven")? "checked" : "") }} {{old('isappliances') ? ((old('isappliances')=="No")? "disabled" : "") : (($p->isappliances=="No")? "disabled" : "")}}>
                        <label for="Oven"> Oven</label>
                        </td>
                        <td  align="center" width="25%" align>
                        <input type="checkbox" id="appliancetype4" name="appliancetype4" value="Dishwasher" {{ old('appliancetype4') ? ((old('appliancetype4')=="Dishwasher")? "checked" : "") : (($p->appliancetype4=="Dishwasher")? "checked" : "") }} {{old('isappliances') ? ((old('isappliances')=="No")? "disabled" : "") : (($p->isappliances=="No")? "disabled" : "")}}>
                        <label for="Dishwasher"> Dishwasher</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="100%" align="center" width="100%">
                                    <br><button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                        </td>
                        </tr>
                    </table>


                </form>
              @endforeach 
            </div>  
          </div>
        </div>
      </div>
    </div>
    
    </td>
	</tr>
</body>
</html>