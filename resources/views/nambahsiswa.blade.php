@extends('master.master')
@section('title', 'Laravel')

@section('content')
<div class="container">
	<div class="mt-5">
		<div class="card-header text-center">
			Tambah Siswa
		</div>
		<div class="card=body">
			<br>
			
			<br>
			<br>

			<form action="/siswa/store" method="post">
				@csrf
			  <div class="form-group">
			    <label>Nama</label>
			    <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
			  </div>
			  <div class="form-group">
			    <label>Umur</label>
			    <input type="number" class="form-control" placeholder="Masukkan Umur" name="umur">
			  </div>
			  <input type="submit" value="Simpan" class="btn btn-primary">
			  <a href="{{url('/siswa')}}" class="btn btn-primary ">Kembali</a>
			  </form>
		</div>		
	</div>
	
</div>
@endsection
