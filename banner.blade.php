
<html>

<head>
<link rel="shortcut icon" href="http://willlouden.com/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Welcome to: diyNovice.com&#153;)
</title>
<style>
.sub-bttn {
  position: absolute;
  bottom: -10px;
  left: 5px;
}
.TM-end {
  position: relative;
  top: -20px;
  left: -660px;
}
div.w3-content {
  position: relative;
  top: 10px;
  left: -220px;
}
.serviceTable {
  margin-top: -200px;
  width: 50%;
}
.back-covers {
  position: relative;
  top: -20px;
  left: -500px;
  width: 520px;}
.product-DESC {
  position: relative;
  top: -15px;
  left: -500px;}
.books {
  position: relative;
  top: -5px;
  left: -500px;
}
.images {
  position: relative;
  display:block;
  top: -25px;
  left: -500px;}
.images1 {
  position: relative;
  top: -10px;
  left: -500px;}
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
        <p align="center">
        <table border="0" cellpadding="4" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber15">
          <tr>
            <td width="25%">
            <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber16">
            <tr>
                <td width="100%">
                <p align="center">
                <span style="font-size: 12pt; font-family: Times New Roman">Visit:
                </span><span style="font-size: 12pt; font-family: Arial"><a href="http://BoutIt.com">
                BoutIt.com</span><span style="font-size: 12pt; font-family: Times New Roman">™</span></td>
              </tr>
            </table>
            </td>
            <td width="25%">
            <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber17">
              <tr>
                <td width="100%">
                <p align="center">
                <span style="font-size: 12pt; font-family: Times New Roman"><a href="{{url('/estimator')}}">
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
                / Account Informations</span></td>
              </tr>
            </table>
            </td>
            <td width="25%">
            <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber19">
            <tr>
                <td width="100%">
                <p align="center">
                <span style="font-size: 12pt; font-family: Times New Roman">
                  <div class="dropdown"><a href="#">Additional Site Resources</a>
                    <div class="dropdown-content">
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
    </td>
      </tr>
  <tr>
    <td width="100%" align="left">
    <table border="0" cellpadding="4" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber32">
      <tr>
        <td width="100%">
              <span style="font-size: 15pt; font-family: Times New Roman; font-weight: 700">
              Welcome to Account Management: </span><font color="#FF0000">
            <span style="font-size: 15pt">{{ Auth::user()->name }}</span>
          </font></td>
      </tr>
    </table>
    </td>
  </tr>
  <tr>
  <td width="50%">
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
      @foreach ($banner as $b)
        <table width="40%" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber8" class="bannerform">
          <tr>
            <form method="POST" action="{{url('/banner')}}" enctype="multipart/form-data">
@csrf
            <td width="40%"><label>Banner Name</label></td>
            <td width="60%" ><input type="text" id="nameofBanner" name="nameofBanner" value="{{$b->nameofBanner}}"></td>
          </tr>
          <tr>
            <td width="40%"><label>Banner ID</label></td>
            <td width="60%"><input type="text" id="id" name="id" readonly value="{{$b->id}}"></td>
          </tr>
          <tr>
            <td width="40%"><label>Profiler Name</label></td>
            <td width="60%"><input type="text" id="profilerName" name="profilerName" readonly value="{{ Auth::user()->name }}"></td>
          </tr>
          <tr>
            <td width="40%"><label>Master Counter</label></td>
            <td width="60%"><input type="text" id="masterCounter" readonly name="masterCounter" value="{{$b->masterCounter}}"></td>
          </tr>
          <tr>
            <td width="40%"><label>Daily Counter</label></td>
            <td width="60%"><input type="text" id="dailyCounter" readonly name="dailyCounter" value="{{$b->dailyCounter}}"></td>
          </tr>
          <tr>
            <td width="40%"><label>Description</label></td>
            <td width="60%"><input type="text" id="description" name="description" value="{{$b->description}}"></td>
          </tr>
          <tr>
            <td width="40%"><label>Impressions Counter</label></td>
            <td width="60%"><input type="text" id="impressionsCounter" readonly name="impressionsCounter" value="{{$b->impressionsCounter}}"></td>
          </tr>
          <tr>
            <td width="40%"><label>Status</label></td>
            <td width="60%"><select id="status" name="status" type="text">
                                <option value="Active">Active</option>
                                <option value="Archive">Archive</option>
                                <option value="Suspend">Suspend</option>
                                <option value="Inactive">Inactive</option>
                                </select></td>
          </tr>
          <tr>
            <td width="40%"><label>Duration</label></td>
            <td width="60%"><input type="text" id="duration" name="duration" value="{{$b->duration}}"></td>
          </tr>
          <tr>
            <td width="40%"><label>Size</label></td>
            <td width="60%"><input type="text" id="size" name="size" value="{{$b->size}}"></td>
          </tr>
          <tr>
            <td width="40%"><label>Banner Platform</label></td>
            <td width="60%"><input type="text" id="bannerPlatform" name="bannerPlatform" value="{{$b->bannerPlatform}}"></td>
          </tr>
          <tr>
            <td width="40%"><label>Banner Type</label></td>
            <td width="60%"><input type="text" id="bannerType" name="bannerType" value="{{$b->bannerType}}"></td>
          </tr>
          <tr>
            <td width="40%"><label>Banner Image</label></td>
            <td width="60%"><input type="file" id="bannerImage" name="bannerImage" ></td>

          </tr>
          <tr>
            <td width="40%"></td>
            
            <td width="60%"><img src="{{url($b->image_file)}}"  class="img-thumbnail" height="50px" width="50px" /></td>

          </tr>
          <tr>
            <td width="50%" align="center"><br><br><button>Submit</button></td>
            <td width="50%"></td>
          </tr>
          <script>
            function setSelectedIndex(s, v) {
                for ( var i = 0; i < s.options.length; i++ ) {
                    if ( s.options[i].value == v ) {
                        s.options[i].selected = true;
                        return;
                    }
                }
            }
            setSelectedIndex(document.getElementById('status'),"{{$b->status}}");
          </script>

          </form>
        </tr>
        <tr>
          <td width="43%" align="center"><font color="#FFFFFF">---</font></td>
          <td width="57%" align="center"><font color="#FFFFFF">---</font></td>
        </tr>
        <tr>
          <td width="43%" align="center"><font color="#FFFFFF">---</font></td>
          <td width="57%" align="center"><font color="#FFFFFF">---</font></td>
        </tr>
        </table>
        @endforeach   
      </td>
        <td width="50%">
        <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber25">
          <tr>
            <td width="100%">
            <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber26" class="books">
              <tr>
                <td width="100%">
                <p align="center">
                <span style="font-size: 12pt; font-family: Times New Roman">
                Books and Resources by: <b><i>Will G. Louden</i></b>™</span></td>
              </tr>
            </table>
            </td>
          </tr>
          <tr>
            <td width="100%">
            <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber28" class="images1">
              <tr>
                <td width="50%" align="center">
              <img class="slides2" border="0" src="http://diynovice.com/_BetaDesigns/_SmallCovers/SampleFrontPgCvr1.jpg" width="250" height="324">
              <img class="slides2" border="0" src="http://diynovice.com/_BetaDesigns/_SmallCovers/SampleBackPgCvr1.jpg" width="250" height="324">
              <script>
                var myIndex = 0;
                carousel2();
                function carousel2() {
                  var i;
                  var x = document.getElementsByClassName("slides2");
                  for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                  }
                  myIndex++;
                  if (myIndex > x.length) {myIndex = 1}    
                  x[myIndex-1].style.display = "block";  
                  setTimeout(carousel2, 2500);    
                }
              </script>
              </td>
                <td width="50%" align="center">
                <p dir="rtl">
              <img class="slides3" border="0" src="http://diynovice.com/_BetaDesigns/_SmallCovers/SampleBackPgCvr1.jpg" width="250" height="324">
              <img class="slides3" border="0" src="http://diynovice.com/_BetaDesigns/_SmallCovers/SampleFrontPgCvr1.jpg" width="250" height="324">
              
              <script>
                var myIndex1 = 0;
                carousel3();
                function carousel3() {
                  var j;
                  var y = document.getElementsByClassName("slides3");
                  for (j = 0; j < y.length; j++) {
                    y[j].style.display = "none";  
                  }
                  myIndex1++;
                  if (myIndex1 > y.length) {myIndex1 = 1}    
                  y[myIndex1-1].style.display = "block";  
                  setTimeout(carousel3, 2500);    
                }
              </script>
              
              </td>
              </tr>
            </table>
            </td>
          </tr>
          <tr>
            <td width="100%">
            <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber27" class="product-DESC">
              <tr>
                <td width="100%">
                <p align="center">
                <span style="font-size: 12pt; font-family: Times New Roman">
                Please <u><b>click here</b></u> to read a basic book / product 
                description</span></td>
              </tr>
            </table>
            </td>
          </tr>
        </table>
        </td>
      </tr>
      <tr>
        <td width="50%">
              <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber56">
                <tr>
                  <td width="43%">
                  <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber34" bgcolor="#000000">
                    <tr>
                      <td width="100%">
                      <p align="center">
                      <span style="font-family: Times New Roman"><a href="{{ url('/') }}">
                      <font color="#FFFFFF">Return to Main</font></span></td>
                    </tr>
                  </table>
                  </td>
                  
                </tr>
                <tr>
                  <td width="43%">
                  <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber36">
                    <tr>
                      <td width="100%">
                      <p align="center">
                      <span style="font-family: Times New Roman"><a href="{{url('/banneradmin')}}">
                      <p class="MsoNormal">Banner Admin Page</span></td>
                    </tr>
                  </table>
                  </td>
                <tr>
                  <td width="43%" align="center"><font color="#FFFFFF">---</font></td>
                  <td width="57%" align="center"><font color="#FFFFFF">---</font></td>
                </tr>
              </table>
        </td>
        <td width="50%">
        <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber29">
          <tr>
            <td width="100%">
            <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber32" class="back-covers">
              <tr>
                <td width="100%">
                <p class="MsoNormal" align="center" style="text-align:center">
                <span style="font-size: 12pt">Special “<b><i>Level Up</i></b> ” 
                Planner Series Covers:</span></td>
              </tr>
            </table>
            </td>
          </tr>
          <tr>
            <td width="100%">
            <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber28" class="images">
            <tr>
                <td width="50%" align="center">
                <img class="slides4" border="0" src="http://diynovice.com/_BetaDesigns/_MiscFiles/LevelUpSeriesExplainer.jpg" width="250" height="324">
              <img class="slides4" border="0" src="http://diynovice.com/_BetaDesigns/_MiscFiles/LevelUpSmCvr1.jpg" width="250" height="324">

              <script>
                var myIndex2 = 0;
                carousel4();
                function carousel4() {
                  var k;
                  var z = document.getElementsByClassName("slides4");
                  for (k = 0; k < z.length; k++) {
                    z[k].style.display = "none";  
                  }
                  myIndex2++;
                  if (myIndex2 > z.length) {myIndex2 = 1}    
                  z[myIndex2-1].style.display = "block";  
                  setTimeout(carousel4, 2500);    
                }
              </script>
                </td>
                
                <td width="50%" align="center">
                <p dir="rtl">
                <img class="slides5" border="0" src="http://diynovice.com/_BetaDesigns/_MiscFiles/LevelUpSmCvr1.jpg" width="250" height="324">
                <img class="slides5" border="0" src="http://diynovice.com/_BetaDesigns/_MiscFiles/LevelUpSeriesExplainer.jpg" width="250" height="324">
              <script>
                var myIndex3 = 0;
                carousel5();
                function carousel5() {
                  var l;
                  var w = document.getElementsByClassName("slides5");
                  for (l = 0; l < w.length; l++) {
                    w[l].style.display = "none";  
                  }
                  myIndex3++;
                  if (myIndex3 > w.length) {myIndex3 = 1}    
                  w[myIndex3-1].style.display = "block";  
                  setTimeout(carousel5, 2500);    
                }
              </script>
              </td>
              </tr>
            </table>
            </td>
          </tr>
          <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber32" class="back-covers"> 
          <tr>
            <td width="100%">
            <p align="center">45 Covers for ONE: Quarterly Career, Life and/or 
            Family Planner</td>
          </tr>
          </table>
        </table>
        </td>
      </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td width="100%" align="left">
    &nbsp;</td>
  </tr>
  <tr>
    <td width="100%" align="left">
    <p align="center">###</td>
  </tr>
  <tr>
    <td width="100%">
    <p align="center">
    ---</td>
  </tr>
  <tr>
             
   
    
    </td>
  </tr>
  <tr>
    <td width="100%">
      <p align="center">Thanks for visiting!!! :_)</td>
  </tr>
  <tr>
    <td width="100%">
    <p align="center">
    ---</td>
  </tr>
  <tr>
    <td width="100%">
    <!--webbot bot="Include" U-Include="http://diynovice.com/sitemax/_footer/index.htm" TAG="BODY" startspan -->
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
    <tr>
      <td width="100%">
      <div align="center">
        <center>
        <table border="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="26%" id="AutoNumber10">
          <tr>
            <td width="33%">
            <p align="center">
            <a href="http://willlouden.com/copyright_mini.htm" target="_parent">
            <img border="0" src="http://diynovice.com/sitemax/_footer/1st-line/1.jpg" alt="™  Trademark and © Copyright - Intellectual Property Notices." width="143" height="18"></a></td>
            <td width="33%">
            <p align="center"><a href="http://willglouden.com/" target="_parent">
            <img border="0" src="http://diynovice.com/sitemax/_footer/1st-line/2.jpg" alt="Will G. Louden™ FOUNDER." width="101" height="18"></a></td>
            <td width="34%">
            <p align="center">
      <a href="http://www.willglouden.com/_WGL-LBR-Trust/index.html" target="_parent">
      <img border="0" src="http://diynovice.com/sitemax/_footer/2nd-line/1.jpg" alt="Living Business Revocable (LBR) Trust." width="184" height="20"></a></td>
          </tr>
        </table>
        </center>
      </div>
      </td>
    </tr>
    <tr>
      <td width="100%">
      <div align="center">
        <center>
        <table border="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="40%" id="AutoNumber11">
          <tr>
            <td width="25%">
            <p align="center"><a href="http://walkerhomesassociation.com/" target="_parent">
            <img border="0" src="http://diynovice.com/sitemax/_footer/3rd-line/1.jpg" alt="Walker Homes Association.COM™ (A Historically Significant Memphis Neighborhood!)." width="200" height="18"></a></td>
            <td width="25%">
            <p align="center">
            <a href="http://willlouden.com/copyright_mini.htm" target="_parent">
            <img border="0" src="http://diynovice.com/sitemax/_footer/3rd-line/2.jpg" alt="™  Trademark and © Copyright - Intellectual Property Notices." width="42" height="18"></a></td>
            <td width="25%">
            <p align="center">
            <a href="http://willlouden.com/copyright_mini.htm" target="_parent">
            <img border="0" src="http://diynovice.com/sitemax/_footer/4th-line/1.jpg" alt="™  Trademark and © Copyright - Intellectual Property Notices." width="148" height="19"></a></td>
            <td width="25%">
            <p align="center">
            <a href="http://willglouden.com/" target="_parent">
            <img border="0" src="http://diynovice.com/sitemax/_footer/4th-line/2.jpg" alt="Will G. Louden™ FOUNDER." width="99" height="19"></a></td>
          </tr>
        </table>
        </center>
      </div>
      </td>
    </tr>
    <tr>
      <td width="100%">
      <div align="center">
        <center>
        <table border="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="14%" id="AutoNumber12">
          <tr>
            <td width="100%">
            <p align="center">
      <img border="0" src="http://diynovice.com/sitemax/_footer/5th-line/1.jpg" alt="All other ™ Trademarks &amp; © Copyrights are property of their owners." width="233" height="21"></td>
          </tr>
        </table>
        </center>
      </div>
      </td>
    </tr>
    <tr>
      <td width="100%"><hr color="#FFFFFF" width="77%" size="1"></td>
    </tr>
    <tr>
      <td width="100%">
      <div align="center">
        <center>
        <table border="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="31%" id="AutoNumber13">
          <tr>
            <td width="25%">
            <a href="http://willlouden.com/termsofservice/index_mini.htm" target="_parent">
            <img border="0" src="http://diynovice.com/sitemax/_footer/6th-line/1.jpg" alt="Terms of Service." width="96" height="17" align="left"></a></td>
            <td width="25%">
            <p align="center">
            <a href="http://willlouden.com/privacy-policy_mini.htm" target="_parent">
            <img border="0" src="http://diynovice.com/sitemax/_footer/6th-line/2.jpg" alt="Privacy Policy." width="96" height="17"></a></td>
            <td width="25%">
            <p align="center">
            <a href="http://willlouden.com/data-disclaimer_mini.htm" target="_parent">
            <img border="0" src="http://diynovice.com/sitemax/_footer/7th-line/1.jpg" alt="Data Disclaimer." width="93" height="19"></a></td>
            <td width="25%">
            <p align="center">
            <a href="http://willlouden.com/ad-policy_mini.htm" target="_parent">
            <img border="0" src="http://diynovice.com/sitemax/_footer/7th-line/2.jpg" alt="Advertising Policy." width="126" height="19"></a></td>
          </tr>
        </table>
        </center>
      </div>
      </td>
    </tr>
    <tr>
      <td width="100%">
      <div align="center">
        <center>
        <table border="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="13%" id="AutoNumber14">
          <tr>
            <td width="50%">
            <p align="center">
      <a href="http://who.is/whois/diynovice.com" target="_blank">
      <img border="0" src="http://diynovice.com/sitemax/_footer/8th-line/1.jpg" alt="Click here for underlying  who.is data." width="142" height="18"></a></td>
            <td width="50%">
            <p align="center">
      <img border="0" src="http://diynovice.com/sitemax/_footer/9th-line/1.jpg" width="116" height="20"></td>
          </tr>
        </table>
        </center>
      </div>
      </td>
    </tr>
    <tr>
      <td width="100%">
      <hr color="#FFFFFF" width="77%" size="1"></td>
    </tr>
    <tr>
      <td width="100%">
      <p align="center">
      <img border="0" src="http://diynovice.com/sitemax/_footer/10th-line/1.jpg" alt="&quot;Partners for a more resourceful future&quot;©" width="237" height="22"></td>
    </tr>
    <tr>
      <td width="100%"><hr color="#FFFFFF" width="77%" size="1"></td>
    </tr>
    <tr>
      <td width="100%">
      <p align="center">
      <a href="http://diynovice.com/sitemax/index.html" target="_parent">
    <img
    src="http://diynovice.com/sitemax/name-plate.jpg" alt="willlouden.com™" border="0" width="180" height="35"></a></td>
    </tr>
    <tr>
      <td width="100%"><hr color="#FFFFFF" width="77%" size="1"></td>
    </tr>
    <tr>
      <td width="100%">
      <p align="center"><a href="http://willglouden.com" target="_parent">
    <img
    src="http://diynovice.com/sitemax/_footer/sig.jpg" alt="Will G. Louden™ - Founder" width="66" height="52" border="0"></a></td>
    </tr>
  </table>
  </center>
</div>
<!--webbot bot="Include" endspan i-checksum="60246" --></td>
  </tr>
</table>
  </center>
</div>
</body>
</html>