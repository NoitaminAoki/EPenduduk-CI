<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>@yield('title')</title>
 
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{asset('assets/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="{{ asset('assets/plugins/css/tastr.min.css') }}">
</head>
<body>
 
<ul id="dropdown1" class="dropdown-content">
  <li><a href="{{url('user/profile')}}">Profile</a></li>
  <li><a href="{{url('user/password')}}">Password</a></li>
  <li><a href="{{url('siswa/create')}}">Create</a></li>
   <li><a href="{{url('logout')}}">Logout</a></li>
  <li class="divider"></li>
</ul>

<nav>
  <div class="nav-wrapper">
    <a href="{{url('siswa')}}" class="brand-logo"><b>Student</b>Data</a>
    <ul class="right hide-on-med-and-down">
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="" data-activates="dropdown1">Setting<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
       <h2 class="header center orange-text">@yield('title')</h2>
      @yield('content')
    </div>
  </div>
 
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{asset('js/materialize.js')}}"></script>
  <script src="{{asset('assets/js/init.js')}}"></script>
  <script src="{{asset('assets/plugins/js/toastr.min.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(".dropdown-button").dropdown();
    });
  </script>
 @yield('footer')
  </body>
</html>