@extends('skeleton')
<title>Profile</title>
@section('content')
<head>
<h1> Change Profile </h1>
<form action="{{ url('user/profile') }}" method="post">
{!! csrf_field() !!}
@if($errors->first('name'))
	{{$errors->first('name')}}
	@endif
	<input type="text" name="nama" value="{{ Auth::user()->name }}" placeholder="Name">
	@if($errors->first('email'))
	{{$errors->first('email')}}
	@endif
	<input type="text" name="email" value="{{ Auth::user()->email }}" placeholder="Email">
	<div class="col-xs-4">
		<button type="submit" class="btn btn-primary btn-block ">Simpan</button>
	</div>
	
</form>
</head>
@endsection