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

<link rel="shortcut icon" href="http://boutit.com/favicon.ic" type="image/x-icon" />
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
      
      <body bgcolor="#FFFFFF" text="#000000" link="#000000" vlink="#000000" alink="#000000">
    
    <div align="center">
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Loan Application') }}</div>

                <div class="card-body">
                <form method="POST" action="{{url('/loanapp')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="f_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="f_name" name="f_name" type="text" class="form-control @error('f_name') is-invalid @enderror" value="{{ old('f_name') }}" required autocomplete="f_name" autofocus>

                                @error('First Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="l_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="l_name" name="l_name" type="text" class="form-control @error('l_name') is-invalid @enderror" value="{{ old('l_name') }}" required autocomplete="l_name" autofocus>

                                @error('Last name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ssn" class="col-md-4 col-form-label text-md-right">{{ __('SSN') }}</label>

                            <div class="col-md-6">
                                <input id="ssn" name="ssn" type="text" class="form-control @error('ssn') is-invalid @enderror"  placeholder="XXX-XX-XXXX">

                                @error('ssn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="occupation" class="col-md-4 col-form-label text-md-right">{{ __('Occupation') }}</label>

                            <div class="col-md-6">
                                <input id="occupation" name="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror">

                                @error('Occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="maritalStatus" class="col-md-4 col-form-label text-md-right">{{ __('Marital Status') }}</label>

                            <div class="col-md-6">
                                <select id="maritalStatus" name="maritalStatus" type="text" class="form-control @error('maritalStatus') is-invalid @enderror">
                                <option value="single">Single</option>
                                <option value="married">Married</option>>
                                </select>

                                @error('Marital Status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input type="date" id="dob" name="dob" class="form-control @error('dob') is-invalid @enderror" placeholder="MM/DD/YYYY">

                                @error('Date of Birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dependents" class="col-md-4 col-form-label text-md-right">{{ __('Dependents (if any)') }}</label>

                            <div class="col-md-6">
                                <input id="dependents" name="dependents" type="number" class="form-control @error('dependents') is-invalid @enderror" min="0" max="100">

                                @error('Dependents (if any)')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="income" class="col-md-4 col-form-label text-md-right">{{ __('Annual Income') }}</label>

                            <div class="col-md-6">
                                <input id="income" name="income" type="text" class="form-control @error('income') is-invalid @enderror" placeholder="$">

                                @error('Annual Income')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="loanType" class="col-md-4 col-form-label text-md-right">{{ __('Type of Loan') }}</label>

                            <div class="col-md-6">
                                <select id="loanType" name="loanType" type="text" class="form-control @error('loanType') is-invalid @enderror"> 
                                <option value="none">None</option>
                                <option value="home">Home</option>
                                <option value="car">Car</option>
                                <option value="personal">Personal</option>
                                </select>

                                @error('Type of Loan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="loanRequestAmount" class="col-md-4 col-form-label text-md-right">{{ __('Expected Loan Amount') }}</label>

                            <div class="col-md-6">
                                <input id="loanRequestAmount" type="text" class="form-control @error('loanRequestAmount') is-invalid @enderror" name="loanRequestAmount" placeholder="$">

                                @error('Expected Loan Amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="loanDuration" class="col-md-4 col-form-label text-md-right">{{ __('Duration of Loan') }}</label>

                            <div class="col-md-6">
                                <select id="loanDuration" type="text" class="form-control @error('loanDuration') is-invalid @enderror" name="loanDuration"> 
                                <option value="none">None</option>
                                <option value="24">24 Months</option>
                                <option value="48">48 Months</option>
                                <option value="5">5 Years</option>
                                <option value="15">15 Years</option>
                                <option value="30">30 Years</option>
                                </select>

                                @error('Duration of Loan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button onclick="myFunction()" type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                                <script>
                                  function myFunction() {
                                    alert("Thank you for submitting a loan application!!!");
                                  }
                                </script>
                            </div>
                        </div>  
              @csrf
          
            </div>
        </form>
        </div>
    </body>
    </td>
</tr>
    