@extends('skeleton')
<title> Create Data Siswa </title>
@section('content')


<style media="screen">

input, textarea{
	padding:3px;
	vertical-align: middle;
}


.textField {
	margin: 5px;
	padding: 7px;
	font-size: 13pt;
	margin-right: 5px;
	
}

</style>

<h2>Create Student Data</h2>

<form action="{{ url('siswa/create') }}" method="post">
	{!! csrf_field() !!}

	<div class="textField">
		<input type="text" class="{{ $errors->first() ? " invalid" : "" }}" name="nis" placeholder="NIS" data-mask="00000">
	@if($errors->first('nis'))
	{{$errors->first('nis')}}
	@endif
	</div>

	<div class="textField">
		<input type="text" class="{{ $errors->first() ? " invalid" : "" }}" name="nama" placeholder="Name">
		@if($errors->first('nama'))
		{{$errors->first('nama')}}
		@endif
	</div>

	<div class="textField">
		<input type="text" class="{{ $errors->first() ? " invalid" : "" }}" name="kelas" placeholder="Class">
		@if($errors->first('kelas'))
		{{$errors->first('kelas')}}
		@endif
	</div>

	<div class="col-xs-4">
		<button type="submit" class="btn btn-primary btn-block ">Submit</button>
	</div>
</div>

</form>

	@endsection
	@section('footer')
		<script src="{{asset('assets/plugins/js/jquery.mask.min.js')}}"></script>
	@endsection