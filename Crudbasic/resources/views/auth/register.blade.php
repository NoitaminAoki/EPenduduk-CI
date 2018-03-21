@extends('skeleton')
@section('content')
<div class="login-box-body">

<form action="{{ url('register') }}" method="post">
{!! csrf_field() !!}
<div class="form-group has-feedback">
	<input type="text" class="form-control{{ $errors->first('name') ? " invalid" : ""}}" placeholder="Name" name="name" value="{{old('name')}}">
	<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	@if($errors->first('name'))
	{{$errors->first('name')}}
	@endif
</div>
<div class="form-group has-feedback">
	<input type="text" class="form-control{{ $errors->first('email') ? " invalid" : ""}}" placeholder="Email" 
	name="email" value="{{old('name')}}">
	<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	@if($errors->first('email'))
	{{$errors->first('email')}}
	@endif
</div>
<div class="form-group has-feedback">
	<input type="password" class="form-control{{ $errors->first('password') ? " invalid" : ""}}" placeholder="Password" name="password">
	<span class="glyphicon glyphicon-lock form-control-feedback"></span>
	@if($errors->first('password'))
	{{$errors->first('password')}}
	@endif
</div>

<p>
<input type="checkbox" id="test5" name="remember" />
<label for="test5">Remember Me</label>
</p>
<div class="row">
<div class="col-xs-8">
</div>
	<div class="col-xs-4">
		<button type="submit" class="btn btn-primary btn-block ">Register</button>
	</div>
</div>
</form>



</div>
@endsection