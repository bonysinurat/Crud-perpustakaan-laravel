<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<h3>Data Buku</h3>
 
	<a href="/crud"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/crud/store" method="post">
		{{ csrf_field() }}
		Judul <input type="text" name="book_judul" required="required"> <br/>
		Penulis <input type="text" name="book_penulis" required="required"> <br/>
		Penerbit <input type="text" name="book_penerbit" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>