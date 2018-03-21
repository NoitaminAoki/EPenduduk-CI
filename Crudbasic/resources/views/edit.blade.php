@extends('skeleton')
@section('content')
<style>
input, textarea{
	padding:3px;
	vertical-align: middle;
}



.textField {
	margin: 5px;
}

</style>

<h2>Edit {{$siswa->nama}}</h2>

<form action="{{ url('siswa/edit') }}" method="post">
	{!! csrf_field() !!}
	<input type="hidden" name="id" value="{{ $siswa->id }}">

	<div class="textField">
		<input type="text" name="nis" placeholder="NIS" data-mask="00000" value="{{ $siswa->NIS }}">
		@if($errors->first('nis'))
		{{$errors->first('nis')}}
		@endif
	</div>

	<div class="textField">
		<input type="text" name="nama" placeholder="Name" value="{{ $siswa->Nama }}">
		@if($errors->first('nama'))
		{{$errors->first('nama')}}
		@endif
	</div>

	<div class="textField">
		<input type="text" name="kelas" placeholder="Class" value="{{ $siswa->Kelas }}">
		@if($errors->first('kelas'))
		{{$errors->first('kelas')}}
		@endif
	</div>
	
	<div class="col-xs-4">
		<button type="submit" class="btn btn-primary btn-block ">Submit</button>
	</div>
</form>

	@endsection
	@section('footer')
		<script src="{{asset('assets/plugins/js/jquery.mask.min.js')}}"></script>
	@endsection