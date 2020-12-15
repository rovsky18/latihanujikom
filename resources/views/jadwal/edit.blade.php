@extends('layout.index')

@section('title', 'Edit Jadwal')

@section('content')

<form method="post" action="/jadwal/{{ $jadwal->id }}">
	@csrf
	@method('put')
	<label for="matkul">Mata Kuliah</label>
	<input type="text" name="matkul" id="matkul" value="{{ $jadwal->matkul }}" class="form-control @error('matkul') is-invalid @enderror">
	<label for="hari">Hari</label>
	<input type="text" name="hari" id="hari" value="{{ $jadwal->hari }}" class="form-control @error('hari') is-invalid @enderror">
	<label for="dosen">Dosen</label>
		<!-- <input type="text" name="dosen" id="dosen" value="{{ old('dosen') }}"> -->
		<select id="dosen" name="dosen" class="form-control @error('dosen') is-invalid @enderror">
			@foreach($dosen as $dosdos)
			<option>{{ $dosdos->nama }}</option>
			@endforeach
		</select>
	<label for="kelas">Ruang Kelas</label>
	<input type="text" name="kelas" id="kelas" value="{{ $jadwal->kelas }}" class="form-control @error('kelas') is-invalid @enderror">
	<br>
	<button class="btn btn-primary" type="submit">Kirim</button>
</form>
@endsection