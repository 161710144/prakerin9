@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Perusahaan  
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Logo</label>	
			  			<input type="img" name="logo" class="form-control" value="{{ $per->logo }}"  readonly>
			  		</div>

        			<div class="form-group">
			  			<label class="control-label">Deskripsi</label>	
			  			<input type="text" name="deskripsi" class="form-control" value="{{ $per->deskripsi }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Kategori</label>	
			  			<input type="text" name="kategori" class="form-control" value="{{ $per->kategori }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">SubKategori</label>	
			  			<input type="text" name="SubKategori" class="form-control" value="{{ $per->SubKategori }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $per->judul }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Gaji</label>	
			  			<input type="text" name="gaji" class="form-control" value="{{ $per->gaji }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tanggal Mulai</label>	
			  			<input type="text" name="tgl_mulai" class="form-control" value="{{ $per->tgl_mulai }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Email</label>	
			  			<input type="text" name="email" class="form-control" value="{{ $per->email }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Telepon</label>	
			  			<input type="text" name="telepon" class="form-control" value="{{ $per->telepon }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Name</label>	
			  			<input type="text" name="user_id" class="form-control" value="{{ $per->User->name }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection