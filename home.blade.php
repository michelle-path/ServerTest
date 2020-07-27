<html>
<head>

<meta charset="utf-8">
    <meta  name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>diyNovice</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


<link rel="shortcut icon" href="http://boutit.com/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Will G. Louden&#153;&nbsp; (willglouden.com&#153;) &amp; Boutit.com&#153;!</title>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
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

<body bgcolor="#FFFFFF" text="#000000" link="#000000" vlink="#000000" alink="#000000">

<div align="center">
  <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="50%" id="AutoNumber2">
    <tr>
      <td width="100%">
      <a href="{{ url('/') }}">    <img src="http://diynovice.com/sitemax/_header/diyNovice-Large-Logo_7.10.16.jpg" alt="Welcome to: diynovice.com™" border="0" width="866" height="248"></a></td>
    </tr>
    <tr>
        <td width="100%">
        <table border="0" cellpadding="4" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber15">
          <tr>
          <td width="25%">
            <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber17">
              <tr>
                <td width="100%">
                <p align="center">
                <span style="font-size: 12pt; font-family: Times New Roman"><a href="http://BoutIt.com">
                Visit: BoutIt.com™</span></td>
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
            <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber17">
              <tr>
                <td width="100%">
                <p align="center">
                <span style="font-size: 12pt; font-family: Times New Roman"><a href="{{url('/additionalresources')}}">
                Additional Site Resources</a>
              </span></td>
              </tr>
            </table>
            </td>
          
            <td width="25%">
            <table border="1" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber17">
              <tr>
                <td width="100%">
                <p align="center">
                <span style="font-size: 12pt; font-family: Times New Roman">
              @guest
              <div class="dropdown"><a href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                        @else
                            <li class="nav-item dropdown">
                            
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="dropdown-content"></span>
                                </a>
                                

                                <div class="dropdown-content">
                                <a class="dropdown-item" href="{{url('/profile')}}"> Profile</a>
                                <a class="dropdown-item" href="{{url('/banner')}}"> Banner</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>

                                </div>
                                </div>
                            
                            </li>
                            
                        @endguest
                        </span></td>
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
        
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>You are logged in!</p>

                    <a href="{{url('/loanapp')}}">Apply for Loan Here!</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
