
<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>
<!-- dfhdgdgdgdgdgd -->
@extends('layout.app') 
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>

	<h2>Daftar Buku</h2> <br>

	<a href="/crud/tambah"><h4> + Tambah Buku</a></h4> <br>
	<table class="table table-bordered">
		<thead>
			<tr>
			<th scope="col">Id</th>
			<th scope="col">Judul</th>
			<th scope="col">Penulis</th>
			<th scope="col">Penerbit</th>
			<th scope="col">Kategori</th>
			</tr>
		</thead>
  
		@foreach($book as $b)
			<tr>
			<td scope="row"> {{ $loop->iteration }} </td>
				<td>{{ $b->book_judul }}</td>
				<td>{{ $b->book_penulis }}</td>
				<td>{{ $b->book_penerbit }}</td>
				
				<td>
					<a class="btn btn-warning btn-sm" href="/crud/edit/{{ $b->id }}">Edit</a>
					<a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm" href="/crud/hapus/{{ $b->id }}">Hapus</a>
				</td>
			</tr>
		@endforeach
	</table>
	<br/>

	{{ $book->links() }}


</body>
</html>