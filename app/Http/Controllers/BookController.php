<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book2;

class BookController extends Controller
{
        public function index()
    {
       
        $book2 = DB::table('book2')->paginate(5);

        return view('index',['book2' => $book2]);

    }

    public function tambah()
    {
 
	return view('tambah');
 
    }

 
    public function store(Request $request)
    {

        $this->validate($request,[
            'book_judul' => 'required|min:5|max:20',
            'book_penulis' => 'required|min:5|max:30',
            'book_penerbit' => 'required|min:5|max:30'
         ]);
	
        DB::table('book')->insert([
            'book_judul' => $request->book_judul,
            'book_penulis' => $request->book_penulis,
            'book_penerbit' => $request->book_penerbit,
            'book_kategori' => $request->book_kategori,
        ]);

        return redirect('/crud');
 
    }

    

    public function edit($id)
    {
        
        $book2 = DB::table('book2')->where('id',$id)->get();
        
        return view('edit',['book2' => $book2]);

    }

   
    public function update(Request $request)
    {
        $this->validate($request,[
            'book_judul' => 'required|min:3|max:20',
            'book_penulis' => 'required|min:3|max:30',
            'book_penerbit' => 'required|min:3|max:30'
         ]);
        DB::table('book2')->where('id',$request->id)->update([
            'book_judul' => $request->book_judul,
		    'book_penulis' => $request->book_penulis,
		    'book_penerbit' => $request->book_penerbit,
        ]);
      
        return redirect('/crud');
    }

    public function hapus($id)
    {
     
        DB::table('book')->where('id',$id)->delete();
            
        return redirect('/crud');
    }

    
}
