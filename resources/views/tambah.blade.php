<!DOCTYPE html>
<html>
<head>
	<title></title>
	@extends('layout.app')
</head>
<body>
 
	<h2>Data Buku</h2><br>
 
	<a href="/crud"> <h4>Kembali</h4></a>
	
	<br/>

	 {{-- menampilkan error validasi --}}
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
 
	<form action="/crud/store" method="post">
		<div class="form-group row">
			<label for="formGroupExampleInput" class="col-sm-2 col-form-label">Judul Buku</label>
			{{ csrf_field() }}
			<input type="text" class="form-control col-sm-4" required="required" name="book_judul" value="{{ old('book_judul') }}" >
		</div>
		<div class="form-group row">
			<label for="formGroupExampleInput" class="col-sm-2 col-form-label">Penulis Buku</label>
			{{ csrf_field() }}
			<input type="text" class="form-control col-sm-4" required="required" name="book_penulis"  value="{{ old('book_penulis') }}">
		</div>
		<div class="form-group row">
			<label for="formGroupExampleInput" class="col-sm-2 col-form-label">Penerbit Buku</label>
			{{ csrf_field() }}
			<input type="text" class="form-control col-sm-4" required="required" name="book_penerbit" value="{{ old('book_penerbit') }}" >
		</div>
		
		<input type="submit" value="Simpan Data">
	</form>
	
 
</body>
</html>