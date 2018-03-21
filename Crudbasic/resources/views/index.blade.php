@extends('skeleton')
<title>StudentData</title>
@section('content')
<!DOCTYPE HTML>
<html>
<head>
</head>
<body class="body">

<form action="{{  url('siswa/search') }}" method="get">
<div class="input-field col s6 m6">
  <select class="browser-default" name="pilihan">
    <option value="" disabled selected>Choose your option</option>
    <option value="nis">Search by NIS</option>
    <option value="nama">Search by Name</option>
    <option value="kelas">Search by Class</option>
  </select>
  </div>
  <div class="input-field col s6 m6">
  		<input type="text" name="nama" class="{{ $errors->first('nis') ?"
  		invalid" : "" }}" id="nis" data-success="complete" placeholder="Search">
  	</div>
</form>

<table class="striped">


</div>

<style media="screen">

table, th, td{
	font-color:white;
	text-align: center;
	border: 3px solid ;
	border-collapse: collapse;
}



th, td {
	padding: 15px;
	text-align: left;
}

.tdcolor{
	background: white;
}

a{
text-decoration: none;
}

.ubah{
	color: blue;
}

.hapus{
	color: red;
}


.a{
	font-family:'material icon';
	color:#FF6666;
}

</style>

<center>
<h2 class="a"> Student Data </h2>
<table class="table">
<thead style="background-color:#FF6666">
              <th data-field="nis">NIS</th>
              <th data-field="nama">Name</th>
              <th data-field="kelas">Class</th>
              @if(Auth::user()->nama_role == "admin")
              <th data-field="pilihan">Option</th>
              @endif
</thead>
<br>

<tbody>
	@foreach($stud as $siswa)
		<tr>
			<td class="tdcolor">{{ $siswa->nis }}</td>
			<td class="tdcolor">{{ $siswa->nama }}</td>
			<td class="tdcolor">{{ $siswa->kelas }}</td>
				@if(Auth::user()->nama_role == "admin")
			<td class="tdcolor">
				<a href="{{ url('siswa/edit/'.$siswa->id) }}" class="ubah">Edit</a>
				<a href="{{ url('siswa/delete/'.$siswa->id) }}" onclick="return confirm('Hapus data ?')"
				class="hapus">Delete</a>
			</td>
				@endif
		</tr>
	@endforeach
</tbody>
</table>
		</center>	
		</html>	
@endsection