<html>

<head>
<link rel="shortcut icon" href="http://willglouden.com/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Welcome to: WILLLOUDEN.COM, Inc. - willlouden.com™ - Knowledge. Passion. 
Perseverance. Experience.</title>
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#996633" vlink="#996633" alink="#996633">
<div align="center"><center>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="65%" id="AutoNumber2" height="552">
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
  <tr>
      <td width="100%" height="15">
      <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber20">
        <tr>
          <td width="25%">
          <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber16">
            <tr>
              <td width="100%">
              <p class="MsoNormal" align="center" style="text-align:center">
              <span style="font-size:12pt">Visit: <a href="http://BoutIt.com"><i><b>BoutIt.com</b></i>™</a></span></td>
            </tr>
          </table>
          </td>
          <td width="25%">
          <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber17">
            <tr>
              <td width="100%">
              <p class="MsoNormal" align="center" style="text-align:center">
              <span style="font-size:12pt">Visit: <a href="http://diynovice.com/"><b><i>diyNovice</i></b><i><b>.com</b></i>™</a></span></td>
            </tr>
          </table>
          </td>
          <td width="25%">
          <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber18">
            <tr>
              <td width="100%">
              <p align="center">
              <span style="font-size: 12pt; font-family: Times New Roman"><a href="{{route('login')}}">Log 
              In / Account Info.</a></span></td>
            </tr>
          </table>
          </td>
          <td width="25%">
          <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber19">
            <tr>
              <td width="100%">
              <p align="center">
              <span style="font-size: 12pt; font-family: Times New Roman">
              Other System Resources</span></td>
            </tr>
          </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td width="100%" height="15">
      <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber21">
      @csrf
        @foreach ($banners as $b)
          <script>
            function onclickImage1() {
              window.location="{{url('/banneradmin/Maint/'.$b->id1)}}";
            }
            function onclickImage2() {
              window.location="{{url('/banneradmin/Maint/'.$b->id2)}}";
            }
            function onclickImage3() {
              window.location="{{url('/banneradmin/Maint/'.$b->id3)}}";
            }
            function onclickImage4() {
              window.location="{{url('/banneradmin/Maint/'.$b->id4)}}";
            }
          </script>              
          <tr>
            <td width="50%">
            <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber22">
              <tr>
                <td width="50%">
                <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber23">
                  <tr>
                    <td width="100%">
                    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber25">
                      <tr>
                        <td width="100%">
                        <p class="MsoNormal" align="center" style="text-align:center">
                        <span style="font-size: 12pt">{{$b->id1=='' ? "Books and Resources" : $b->nameofBanner1}}</span></td>
                      </tr>
                      <tr>
                        <td width="100%">
                        <p align="center">
                        <span style="font-size: 12pt; font-family: Times New Roman">
                        {{$b->id1=='' ? "by: " : "" }} <b><i>{{$b->id1=='' ? "Will G. Louden" : "" }}</i></b>{{$b->id1=='' ? "™" : "" }}</span></td>
                      </tr>
                    </table>
                    </td>
                  </tr>
                </table>
                </td>
                <td width="50%">
                <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber24">
                  <tr>
                    <td width="100%">
                    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber26">
                      <tr>
                        <td width="100%">
                        <p align="center">{{$b->id2==''?'Diamond Motivational':$b->nameofBanner2}}</td>
                      </tr>
                      <tr>
                        <td width="100%">
                        <p align="center">{{$b->id2==''?'Tee Shirt Line':''}}</td>
                      </tr>
                    </table>
                    </td>
                  </tr>
                </table>
                </td>
              </tr>
              <tr>
                <td width="50%">
              <img border="0"  {{$b->id1==''?'':'onclick=onclickImage1();'}} src={{ $b->id1=='' ? "http://willloudenllc.com/_BetaDesigns/_MiscFiles/Small-Sample-Fl-Cover.jpg":url($b->image_file1)}} width="250" height="324"></td>
                <td width="50%">
              <img border="0"  {{$b->id2==''?'':'onclick=onclickImage2();'}} src={{ $b->id2=='' ? "http://willloudenllc.com/_BetaDesigns/_MiscFiles/Small-Rotating-Tee.jpg" :url($b->image_file2)}} width="250" height="324"></td>
              </tr>
              <tr>
                <td width="50%">
              <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber28">
                <tr>
                  <td width="100%">
                  <p align="center">{{$b->id1=='' ? "Read Book Description Here" : $b->description1}}</td>
                </tr>
              </table>
                </td>
                <td width="50%">
              <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber29">
                <tr>
                  <td width="100%">
                  <p align="center">{{$b->id2=='' ? "Purchase DM Tee's Here" : $b->description2}}</td>
                </tr>
              </table>
                </td>
              </tr>
              <tr>
                <td width="100%" colspan="2">
              <img border="0" src="http://willloudenllc.com/_BetaDesigns/_MiscFiles/B-Center-Bar.jpg" width="502" height="48"></td>
              </tr>
              <tr>
                <td width="50%">
              <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber31">
                <tr>
                  <td width="100%">
                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber33">
                    <tr>
                      <td width="100%">
                      <p align="center">
                      <span style="font-size: 12.0pt; font-family: Times New Roman">
                      {{$b->id3=='' ? "Digital Resources" : $b->nameofBanner3}}</span></td>
                    </tr>
                    <tr>
                      <td width="100%">
                      <p align="center">
                      <span style="font-size: 12.0pt; font-family: Times New Roman">
                      {{$b->id3=='' ? 'Products &amp; Services' : ''}}</span></td>
                    </tr>
                  </table>
                  </td>
                </tr>
              </table>
                </td>
                <td width="50%">
              <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber32">
                <tr>
                  <td width="100%">
                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber34">
                    <tr>
                      <td width="100%">
                      <p align="center">{{$b->id4=='' ? 'Sponsor, Advertise,' : $b->nameofBanner4}} </td>
                    </tr>
                    <tr>
                      <td width="100%">
                      <p align="center">
                      <span style="font-size: 12.0pt; font-family: Times New Roman">
                      {{$b->id4=='' ? 'Partner &amp; Promote Us!' : ''}}</span></td>
                    </tr>
                  </table>
                  </td>
                </tr>
              </table>
                </td>
              </tr>
              <tr>
                <td width="50%">
              <img border="0"  {{$b->id3==''?'':'onclick=onclickImage3();'}}  src={{$b->id3=='' ?"http://willloudenllc.com/_BetaDesigns/_MiscFiles/Reunion-Digital-Sm-Cvr.jpg":url($b->image_file3)}} width="250" height="324"></td>
                <td width="50%">
              <img border="0"  {{$b->id4==''?'':'onclick=onclickImage4();'}}  src={{$b->id4=='' ?"http://willloudenllc.com/_BetaDesigns/_MiscFiles/ReadThinkLead-Sm-Cvr.jpg":url($b->image_file4)}} width="250" height="324"></td>
              </tr>
              <tr>
                <td width="50%">
              <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber28">
                <tr>
                  <td width="100%">
                  <p align="center">{{$b->id3=='' ? "" : $b->description3}}</td>
                </tr>
              </table>
                </td>
                <td width="50%">
              <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber29">
                <tr>
                  <td width="100%">
                  <p align="center">{{$b->id4=='' ? "" : $b->description4}}</td>
                </tr>
              </table>
                </td>
              </tr>
            </table>
            </td>
            <td width="50%">
            <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber27">
              <tr>
                <td width="100%">
                <table border="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber30">
                  <tr>
                    <td width="20%"><a href="https://www.paypal.com/us/verified/pal=paypal%40willlouden%2ecom" target="_blank"><img src="https://www.paypal.com/en_US/i/icon/verification_seal.gif" border="0" alt="Official PayPal Seal" width="100" height="100"></A></td>
                    <td width="80%">
                    <p align="center"><b><span style="font-size: 12pt">Admin Maintenance Page: 1</span></b></td>
                  </tr>
                </table>
                </td>
              </tr>
              <tr>
                <td width="100%">
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
                  <table align="center" width="60%" border="0" cellpadding="5" cellspacing="2" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber8" class="bannerform">
                    <form method="POST" action="{{url('/banneradmin/Update')}}" enctype="multipart/form-data">
                    @csrf
                        <input  id="updateID" name="updateID" value="{{$b->id}}" type=hidden>
                        <tr>
                          <td width="40%"><label>Banner ID</label></td>
                          <td width="60%"><input type="text" id="id" name="id" style="background-color:#CDCDCD;" readonly value="{{$b->id}}"></td>
                        </tr>
                        <tr>
                          <td width="40%"><label>Banner Name</label></td>
                          <td width="60%" ><input type="text" id="nameofBanner" name="nameofBanner" style="background-color:#CDCDCD;" readonly value="{{$b->nameofBanner}}"></td>
                        </tr>
                        <tr>
                          <td width="40%"><label>Profiler Name</label></td>
                          <td width="60%"><input type="text" id="profilerName" name="profilerName" style="background-color:#CDCDCD;" readonly value="{{ Auth::user()->name }}"></td>
                        </tr>
                        <tr>
                          <td width="40%"><label>Description</label></td>
                          <td width="60%"><input type="text" id="description" name="description" value="{{$b->description}}"></td>
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
                          <td width="40%"><label>Master Counter</label></td>
                          <td width="60%"><input type="text" id="masterCounter" name="masterCounter" style="background-color:#CDCDCD;" readonly value="{{$b->masterCounter}}"></td>
                        </tr>
                        <tr>
                          <td width="40%"><label>Daily Counter</label></td>
                          <td width="60%"><input type="text" id="dailyCounter" name="dailyCounter" style="background-color:#CDCDCD;" readonly value="{{$b->dailyCounter}}"></td>
                        </tr>
                        <tr>
                          <td width="40%"><label>Impressions Counter</label></td>
                          <td width="60%"><input type="text" id="impressionsCounter" name="impressionsCounter" value="{{$b->impressionsCounter}}"></td>
                        </tr>
                        <tr>
                          <td width="40%"></td>
                          <td width="60%" align="left"><br><button>Submit</button></td>
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
              </tr>

              <tr>
                <td width="100%">
                <p align="center"><font color="#FFFFFF">---</font></td>
              </tr>
              <tr>
                <td width="100%">
                <p align="center"><font color="#FFFFFF">---</font></td>
              </tr>
              <tr>
                <td width="100%">
                <p align="center"><font color="#FFFFFF">---</font></td>
              </tr>
              <tr>
                <td width="100%">
                <p align="center"><font color="#FFFFFF">---</font></td>
              </tr>
              <tr>
                <td width="100%">
                <p align="center"><font color="#FFFFFF">---</font></td>
              </tr>
              <tr>
                <td width="100%">
                <p align="center"><font color="#FFFFFF">---</font></td>
              </tr>
              <tr>
                <td width="100%">
                <p align="center"><font color="#FFFFFF">---</font></td>
              </tr>
              <tr>
                <td width="100%">
                <p align="center"><font color="#FFFFFF">---</font></td>
              </tr>


            </table>
            </td>
          </tr>
          @endforeach
      </table>
    </td>
  </tr>
  <tr>
        <td width="100%" height="15">
        <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber40">
          <tr>
            <td width="30%">&nbsp;</td>
            <td width="70%">
            <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber41">
              <tr>
                <td width="33%">
                <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber42">
                  <tr>
                    <td width="100%">
                    <p align="center">
                    <span style="font-size: 12pt; font-family: Times New Roman">
                    Previous Page</span></td>
                  </tr>
                </table>
                </td>
                <td width="33%">
                <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber43">
                  <tr>
                    <td width="100%">
                    <p align="center">
                    <span style="font-size: 12pt; font-family: Times New Roman">
                    Admin System Start</span></td>
                  </tr>
                </table>
                </td>
                <td width="34%">
                <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber44">
                  <tr>
                    <td width="100%">
                    <p align="center"><u>
                    <span style="font-size: 12pt; font-family: Times New Roman"><a href ="{{url('newbanner')}}">
                    Next Page</span></u></td>
                  </tr>
                </table>
                </td>
              </tr>
            </table>
            </td>
          </tr>
        </table>
        </td>
      </tr>
      <tr>
        <td width="100%" height="15">
        <table border="0" cellpadding="7" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber38">
          <tr>
            <td width="33%">
              <p align="center">
              <a target="_parent" href="../contact_us.htm">Contact 
              Us</a></td>
            <td width="33%">
            <p align="center">
              <a target="_parent" href="pressmedia/index.html">Press/Media Releases</a></td>
            <td width="34%">
            <p align="center">
              <a target="_parent" href="../copyright.htm">Intellectual Property</a></td>
          </tr>
        </table>
        </td>
      </tr>
    <tr>
        <td width="100%" height="15">
        <small>
    <!--webbot bot="Include" U-Include="http://willlouden.com/sitemax/_footer/index.html" TAG="BODY" startspan --><div align="center">
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
              <img border="0" src="http://diynovice.com/sitemax/_footer/1st-line/\1.jpg" alt="™  Trademark and © Copyright - Intellectual Property Notices." width="143" height="18"></a></td>
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
        <img src="http://diynovice.com/sitemax/name-plate.jpg" alt="willlouden.com™" border="0" width="180" height="35"></a></td>
      </tr>
      <tr>
        <td width="100%"><hr color="#FFFFFF" width="77%" size="1"></td>
      </tr>
      <tr>
        <td width="100%">
        <p align="center"><a href="http://willglouden.com" target="_parent">
        <img src="http://diynovice.com/sitemax/_footer/sig.jpg" alt="Will G. Louden™ - Founder" width="66" height="52" border="0"></a></td>
      </tr>
    </table>
  </center>
  </div>
  </div>
  <!--webbot bot="Include" endspan i-checksum="25916" --></small></td>
      </tr>
  </table>
</center>
</div>
</body>
</html>