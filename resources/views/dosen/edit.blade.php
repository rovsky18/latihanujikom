@extends('layout.index')

@section('title', 'Edit Data Dosen')

@section('content')

<form method="post" action="/dosen/{{$dosen->id}}">
	@csrf
	@method('put')
	<label for="nama">Nama</label>
	<input type="text" name="nama" id="nama" value="{{ $dosen->nama }}">
	<label for="alamat">Alamat Dosen</label>
	<input type="text" name="alamat" id="alamat" value="{{ $dosen->alamat }}">
	<label for="hp">Nomor HP</label>
	<input type="text" name="hp" id="hp" value="{{ $dosen->hp }}">
	<button type="submit">Kirim</button>
</form>
@endsection