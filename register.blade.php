<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BoutIt</title>

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
      <a href="{{ url('/') }}"><img src="http://diynovice.com/sitemax/_header/diyNovice-Large-Logo_7.10.16.jpg" alt="Welcome to: diynovice.com™" border="0" width="866" height="248"></a></td>
    </tr>
    <tr>
      <td width="100%">
      <table border="0" cellpadding="4" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber3">
        <tr>
          <td width="25%">
          <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber4">
            <tr>
              <td width="100%">
              <p align="center">
              <span style="font-size: 12pt; font-family: Times New Roman">Visit:
              </span><b><span style="font-size: 12pt; font-family: Arial"><a href="http://diynovice.com/">
              diyNovice.com</span></b><span style="font-size: 12pt; font-family: Times New Roman">™</span></td>
            </tr>
          </table>
          </td>
          <td width="25%">
          <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber5">
            <tr>
              <td width="100%">
              <p align="center">
              <span style="font-size: 12pt; font-family: Times New Roman">About:
              </span><b><span style="font-size: 12pt; font-family: Arial"><a href="http://BoutIt.com">
              BoutIt.com</span></b><span style="font-size: 12pt; font-family: Times New Roman">™</span></td>
            </tr>
          </table>
          </td>
          <td width="25%">
          <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber6">
            <tr>
              <td width="100%">
              <p align="center">
              <span style="font-size: 12pt; font-family: Times New Roman"><a href="{{route('login')}}">Log In 
              / Account Info.</a></span></td>
            </tr>
          </table>
          </td>
          <td width="25%">
          <table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber7">
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
      </td>
    </tr>
    </table>

    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

