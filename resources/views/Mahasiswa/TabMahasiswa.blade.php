@extends('layouts/index')

@section('content')
	<table id="tabelMahasiswa" class="cell-border">
		<thead>
			<tr>
				<td>NIM</td>
				<td>Nama Mahasiswa</td>
				<td>Alamat Mahasiswa</td>
				<td>Jenis Kelamin</td>
				<td>Edit</td>
				<td>Hapus</td>	
			</tr></thead>
		<tbody>
		@foreach($mahasiswa as $mhs)
		<tr>
			<td>{{ $mhs->mhId }}</td>
			<td>{{ $mhs->mhNama }}</td>
			<td>{{ $mhs->mhAlamat }}</td>
			@if($mhs->mhJk == "lk")
				<td>Laki-Laki</td>
			@else
				<td>Perempuan</td>
			@endif
			<td><a href="{{ url('Mahasiswa/Form/Ubah', $mhs->mhId) }}"><span  class="fa fa-pencil"></span></a></td>
			<td><a href="{{ url('Mahasiswa/Hapus', $mhs->mhId) }}"><span class="fa fa-trash" onclick="return hapus()"></span></a></td>
		</tr>
		@endforeach</tbody>
	</table>
@endsection