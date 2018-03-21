 @extends('skeleton')
 @section('content')
 <html>
	<head>
	<link rel="stylesheet" href="{{ asset('assets/plugins/css/toastr.min.css') }}">
		<title> Login </title>
		<body class="body">
			<div class="pembuka">
				
				
					<div class="login-box-body">
					<p class="login-box-msg"> <h3>Sign in to your account!</h3></p>
				</div>

				<form action="{{ url('login') }}" method="post">
				{!! csrf_field() !!}

				<div class="form-group has-feedback">
				 <input class="form-control{{ $errors->first('email') ? " invalid" : ""}}" id="username" name="email" placeholder="Email" type="email">
         		 <div class="description">
         		 	@if($errors->first('email'))
					{{$errors->first('email')}}
					@endif 
         		 <span class="glyphicon glyphicon-envelope form-control-feedback"></span></div>
					<!-- test -->
        		</div>
        		

      	<div class="form-group has-feedback">
		 <input type="password" class="form-control{{ $errors->first('password') ? " invalid" : ""}}" id="password" name="password" placeholder="Password" type="password">	
          <div class="description">
          	@if($errors->first('password'))
			{{$errors->first('password')}}
			@endif
          <span class="glyphicon glyphicon-lock form-control-feedback"></span></div>
      	</div>
				
				<p>
				<input type="checkbox" id="test5" name="remember" />
				<label for="test5">Remember Me</label>
				</p>
					<br>
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary">Sign In</button>
					</div>
				</form>
				<br>

		<a href="{{ url('register') }}" class="text-center">Don't have an account? Register!</a>

			</div>
	
		</div>




 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ asset('assets/plugins/js/toastr.min.js')}}"></script>
		</body>
	</head>
</html>
@if(session('message'));
<script type="text/javascript">
	Command: toastr["error"]("{{ session('message') }}	")

toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
</script>

@endif
@endsection