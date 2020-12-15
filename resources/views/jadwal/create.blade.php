@extends('layout.index')

@section('title', 'Create Jadwal')

@section('content')

	<form action="{{ url('jadwal') }}" method="post">
		@csrf
		<label for="matkul">Mata Kuliah</label>
		<input type="text" name="matkul" id="matkul" class="form-control @error('matkul') is-invalid @enderror" value="{{ old('matkul') }}">
		@error('matkul')
			<p>matkul harus di isi</p>
		@enderror
		<label for="hari">Hari</label>
		<input type="text" name="hari" id="hari" value="{{ old('hari') }}" class="form-control @error('hari') is-invalid @enderror">
		@error('hari')
			<p>hari harus di isi</p>
		@enderror
		<label for="dosen">Dosen</label>
		<!-- <input type="text" name="dosen" id="dosen" value="{{ old('dosen') }}"> -->
		<select id="dosen" name="dosen" class="form-control @error('dosen') is-invalid @enderror">
			@foreach($dosen as $dosdos)
			<option>{{ $dosdos->nama }}</option>
			@endforeach
		</select>
		@error('dosen')
			<p>harus di isi</p>
		@enderror
		<label for="kelas">Kelas</label>
		<input type="text" name="kelas" id="kelas" value="{{ old('kelas') }}" class="form-control @error('kelas') is-invalid @enderror">
		@error('kelas')
			<p>kelas harus di isi</p>
		@enderror
		<button class="btn btn-primary" type="submit">Kirim!</button>
	</form>
	<a href="{{ url('jadwal') }}">kembali</a>

@endsection