<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>

	<h3>Data Buku</h3>

	<a href="/crud/tambah"> + Tambah Buku</a>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Judul</th>
			<th>Penulis</th>
			<th>Penerbit</th>
		</tr>
		@foreach($book as $b)
		<tr>
		<td scope="row"> {{ $loop->iteration }} </td>
			<td>{{ $b->book_judul }}</td>
			<td>{{ $b->book_penulis }}</td>
			<td>{{ $b->book_penerbit }}</td>
			<td>
				<a href="/crud/edit/{{ $b->id }}">Edit</a>|
				<a href="/crud/hapus/{{ $b->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

	<br/>

	{{ $book->links() }}


</body>
</html>