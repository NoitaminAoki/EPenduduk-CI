@extends('skeleton')
<title>Change Password</title>
@section('content')
@if(session('message'))
{{ session('message') }}
@endif
<form class="input" class="{{ $errors->first() ? " invalid" : "" }}" action="{{ url('user/password') }}" method="post">
	{!! csrf_field() !!}
	<input type="password" name="old_password" placeholder="Old password">
	@if($errors->first('old_password'))
	{{$errors->first('old_password')}}
	@endif
	<input type="password" name="password" placeholder="New password">
	@if($errors->first('password'))
	{{$errors->first('password')}}
	@endif
	<input type="password" name="password_confirmation" placeholder="Password confirmation">
	@if($errors->first('password_confirmation'))
	{{$errors->first('password_confirmation')}}
	@endif
	<div class="col-xs-4">
		<button type="submit" class="btn btn-primary">Save</button>
	</div>
</form>

</style>
@endsection