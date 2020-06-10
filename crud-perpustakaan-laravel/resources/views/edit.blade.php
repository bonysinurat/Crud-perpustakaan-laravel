<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Edit Buku</h3>

	<a href="/crud"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($book as $b)
	<form action="/crud/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $b->id }}"> <br/>
		Judul <input type="text" required="required" name="book_judul" value="{{ $b->book_judul }}"> <br/>
		Penulis <input type="text" required="required" name="book_penulis" value="{{ $b->book_penulis }}"> <br/>
		Penerbit <input type="text" required="required" name="book_penerbit" value="{{ $b->book_penerbit }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>