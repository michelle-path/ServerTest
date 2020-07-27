<html>

<head>
<link rel="shortcut icon" href="http://willlouden.com/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Welcome to: diyNovice.com&#153;)
</title>
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
                <span style="font-size: 12pt; font-family: Times New Roman"><a href="{{url('/estimator')}}">
                Renovation Estimator</span></td>
              </tr>
            </table>
            </td>
            
            <td width="25%">
          <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber6">
            <tr>
              <td width="100%">
              <p align="center">
              <span style="font-size: 12pt; font-family: Times New Roman">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </span></td>
            </tr>
          </table>
          </td>
          <td width="25%">
            <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber19">
            <tr>
              <td width="100%">
              <p align="center">
              <span style="font-size: 12pt; font-family: Times New Roman"><div class="dropdown"><a href="{{url('/additionalresources')}}">
                Additional Site Resources</a>
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
              System Login Management:</span></td>
      </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td width="100%" align="left">
    <table border="0" cellpadding="4" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber24">
      <tr>
        <td width="50%">
        <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber33">
          <tr>
            <td width="100%" colspan="2">
            <span style="font-size: 15pt">Username</span></td>
          </tr>
          <tr>
            <td width="100%" colspan="2">
            <table border="1" cellpadding="7" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber57">
              <tr>
                <p align="left"><font color="#C0C0C0">
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <b>
                           <input id="email" type="email" class="form-control-email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </b>
                </font>
              </tr>
            </table>
            </td>
          </tr>
          <tr>
            <td width="100%" colspan="2">
            <p align="center"><font color="#FFFFFF">
            <span style="font-family: Times New Roman">---</span></font></td>
          </tr>
          <tr>
            <td width="100%">
            <span style="font-size: 15pt" class="password-logo">Password </span></td>
          </tr>
          <tr>
            <td width="100%" colspan="2">
            <table border="1" cellpadding="7" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber38">
              <tr>
                <p align="left"><font color="#C0C0C0">
                <b>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </b>
                </font>
              </tr>
            </table>
            </td>
          </tr>
          <tr>
            <td width="100%" colspan="2">
            &nbsp;</td>
          </tr>
          <tr>
            <td width="100%" colspan="2">
            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber58">
              <tr>
                <td width="50%">&nbsp;</td>
                <td width="50%">
                <table border="1" align="center" cellpadding="7" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="50%" id="AutoNumber59">
                  <tr>
                    <p align="left">
                    <button type="submit" class="btn-primary">
                    {{ __('Log In') }}
                    </button>
            </form>
                  </tr>
                </table>
                </td>
              </tr>
            </table>
            </td>
          </tr>
          <tr>
            <td width="100%" colspan="2" align="center">
            <font color="#FFFFFF">---</font></td>
          </tr>
          <tr>
            <td width="100%" colspan="2" align="center">
            <font color="#FFFFFF">---</font></td>
          </tr>
          <tr>
            <td width="100%" colspan="2" align="center">
            <font color="#FFFFFF">---</font></td>
          </tr>
          <tr>
            <td width="100%" colspan="2" align="center">
            <font color="#FFFFFF">---</font></td>
          </tr>
          <tr>
            <td width="100%" colspan="2" align="center">
            <font color="#FFFFFF">---</font></td>
          </tr>
          <tr>
            <td width="100%" colspan="2">
            <p align="center"><font color="#FFFFFF">---</font></td>
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
        </td>
        <td width="50%">
        <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber25">
          <tr>
            <td width="100%">
            <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber26">
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
            <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber28">
              <tr>
                <td width="50%" align="center">
              <img border="0" src="http://diynovice.com/_BetaDesigns/_SmallCovers/SampleFrontPgCvr1.jpg" width="250" height="324"></td>
                <td width="50%" align="center">
                <p dir="rtl">
              <img border="0" src="http://diynovice.com/_BetaDesigns/_SmallCovers/SampleBackPgCvr1.jpg" width="250" height="324"></td>
              </tr>
            </table>
            </td>
          </tr>
          <tr>
            <td width="100%">
            <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber27">
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
                  <td width="43%" align="center">
                  <font color="#FFFFFF">---</font></td>
                  <td width="57%" align="center">
                  <font color="#FFFFFF">---</font></td>
                </tr>
                <tr>
                  <td width="43%" align="center">
                  <font color="#FFFFFF">---</font></td>
                  <td width="57%" align="center">
                  <font color="#FFFFFF">---</font></td>
                </tr>
                <tr>
                  <td width="43%" align="center">
                  <font color="#FFFFFF">---</font></td>
                  <td width="57%" align="center">
                  <font color="#FFFFFF">---</font></td>
                </tr>
                <tr>
                  <td width="43%" align="center">
                  <font color="#FFFFFF">---</font></td>
                  <td width="57%" align="center">
                  <font color="#FFFFFF">---</font></td>
                </tr>
                <tr>
                  <td width="50%" align="center">
                  <font color="#FFFFFF">---</font></td>
                  <td width="50%" align="center">
                  <font color="#FFFFFF">---</font></td>
                </tr>
                <tr>
                  <td width="43%" align="center">
                  <font color="#FFFFFF">---</font></td>
                  <td width="57%" align="center">
                  <font color="#FFFFFF">---</font></td>
                </tr>
                <tr>
                  <td width="43%" align="center">
                  <font color="#FFFFFF">---</font></td>
                  <td width="57%" align="center">
                  <font color="#FFFFFF">---</font></td>
                </tr>
                <tr>
                  <td width="43%" align="center">
                  <font color="#FFFFFF">---</font></td>
                  <td width="57%" align="center">
                  <font color="#FFFFFF">---</font></td>
                </tr>
                <tr>
                  <td width="43%" align="center">
                  <font color="#FFFFFF">---</font></td>
                  <td width="57%" align="center">
                  <font color="#FFFFFF">---</font></td>
                </tr>
                <tr>
                  <td width="43%" align="center">
                  <font color="#FFFFFF">---</font></td>
                  <td width="57%" align="center">
                  <font color="#FFFFFF">---</font></td>
                </tr>
                <tr>
                  <td width="43%" align="center">
                  <font color="#FFFFFF">---</font></td>
                  <td width="57%" align="center">
                  <font color="#FFFFFF">---</font></td>
                </tr>
                <tr>
                  <td width="43%" align="center"><font color="#FFFFFF">---</font></td>
                  <td width="57%" align="center"><font color="#FFFFFF">---</font></td>
                </tr>
                <tr>
                  <td width="43%" align="center">&nbsp;</td>
                  <td width="57%" align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td width="43%" align="center"><font color="#FFFFFF">---</font></td>
                  <td width="57%" align="center"><font color="#FFFFFF">---</font></td>
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
        </td>
        <td width="50%">
        <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber29">
          <tr>
            <td width="100%">
            <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber31">
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
            <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber30">
              <tr>
                <td width="50%">
              <img border="0" src="http://diynovice.com/_BetaDesigns/_MiscFiles/LevelUpSeriesExplainer.jpg" width="250" height="324"></td>
                <td width="50%">
              <img border="0" src="http://diynovice.com/_BetaDesigns/_MiscFiles/LevelUpSmCvr1.jpg" width="250" height="324"></td>
              </tr>
            </table>
            </td>
          </tr>
          <tr>
            <td width="100%">
            <p align="center">45 Covers for ONE: Quarterly Career, Life and/or 
            Family Planner</td>
          </tr>
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