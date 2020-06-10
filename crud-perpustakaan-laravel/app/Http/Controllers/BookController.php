<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
        public function index()
    {
       
            $book = DB::table('book')->paginate(10);

              
            return view('index',['book' => $book]);

    }

    public function tambah()
    {
 
	return view('tambah');
 
    }

   
    public function store(Request $request)
    {
	
	DB::table('book')->insert([
		'book_judul' => $request->book_judul,
		'book_penulis' => $request->book_penulis,
		'book_penerbit' => $request->book_penerbit,
	]);

	return redirect('/crud');
 
    }

    public function edit($id)
    {
        
        $book = DB::table('book')->where('id',$id)->get();
        
        return view('edit',['book' => $book]);

    }

   
    public function update(Request $request)
    {
    
        DB::table('book')->where('id',$request->id)->update([
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
