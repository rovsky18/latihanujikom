@extends('layout.index')

@section('title', 'Dosen')

@section ('content')
	
<h1>Selamat datang di halaman dosen</h1>
<hr>
<a href="dosen/create" class="btn btn-info">tambahkan dosen</a>
<br>

@if (session('pesan'))
	<div class="alert alert-info">{{ session ('pesan') }}</div>
	@endif
	
<br>
	<table class="table col-5">
		<tr align="center">
			<th>No</th>
			<th>Dosen</th>
			<th>Nomor HP</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		@foreach ($dosens as $dosen)
		<tr align="center">
			<th>{{ $loop->iteration }}</th>
			<td>{{ $dosen->nama }}</td>
			<td>{{ $dosen->hp }}</td>
			<td>{{ $dosen->alamat }}</td>
			<td>
				<a class="btn btn-info" href="dosen/{{ $dosen->id }}/edit">Ubah</a>
				<form method="post" action="dosen/{{ $dosen->id }}" class="d-inline">
					@csrf
					@method('delete')
					<button class="btn btn-danger" type="submit">Hapus</button>	
				</form>
				
			</td>
		</tr>
		@endforeach
	</table>	

@endsection