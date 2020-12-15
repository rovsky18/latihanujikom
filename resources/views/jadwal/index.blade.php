@extends('layout.index')

@section('title', 'Dosen')

@section ('content')
	
<h1>Selamat datang di halaman jadwal</h1>
<hr>
<a href="jadwal/create" class="btn btn-info">tambahkan jadwal</a>
<br>
<br>
	<table class="table col-6">
		<tr align="center">
			<th>No</th>
			<th>Mata Kuliah</th>
			<th>Hari</th>
			<th>Dosen</th>
			<th>Kelas</th>
			<th>Aksi</th>
		</tr>
		@foreach ($jadwals as $jadwal)
		<tr align="center">
			<th>{{ $loop->iteration }}</th>
			<td>{{ $jadwal->matkul }}</td>
			<td>{{ $jadwal->hari }}</td>
			<td>{{ $jadwal->dosen }}</td>
			<td>{{ $jadwal->kelas }}</td>
			<td>
				<a class="btn btn-info" href="jadwal/{{ $jadwal->id }}/edit">Ubah</a>
				<form method="post" action="jadwal/{{ $jadwal->id }}" class="d-inline">
					@csrf
					@method('delete')
					<button class="btn btn-danger" type="submit">Hapus</button>	
				</form>
				
			</td>
		</tr>
		@endforeach
	</table>	

@endsection