<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
        $this->validate($request,[
           'book_judul' => 'required|min:5|max:20',
           'book_penulis' => 'required|min:5|max:20',
           'book_penerbit' => 'required|min:5|max:20'
        ]);
 
        return view('proses',['data' => $request]);
    }
}
