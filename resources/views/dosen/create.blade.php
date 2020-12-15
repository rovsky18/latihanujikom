@extends('layout.index')

@section('title', 'Create Dosen')

@section('content')
<!-- <style type="text/css">
	form{
		display: grid;
		grid-template-columns: 150px 2fr;
		width: 300px;
	}
</style> -->
	<form action="{{ url('dosen') }}" method="post">
		@csrf
		<label for="nama">Nama Dosen</label>
		<input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}">
		@error('nama')
			<p>Nama harus dimasukkan</p>
		@enderror
		<label for="alamat">Alamat Dosen</label>
		<input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}">
		@error('alamat')
			<p>Alamat harus dimasukkan</p>
		@enderror
		<label for="hp">Nomor HP</label>
		<input type="text" name="hp" id="hp" value="{{ old('hp') }}">
		@error('hp')
			<p>Nomor HP harus dimasukkan</p>
		@enderror
		<button type="submit">Kirim!</button>
	</form>

	<a href="{{ url('dosen') }}">kembali</a>

@endsection