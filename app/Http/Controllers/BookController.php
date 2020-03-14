<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(){
        return view('createbook');
 
    }

    public function store(Request $request){

        $data = $request-> all();
        $bookModel = app(Book::class);
        $book = $bookModel->create([
            'name'=> $data['name'],
            'writer'=> $data['writer'],
            'page_numer'=> $data['page'],

        ]);
       return redirect()->route('book.create');
    }
}
