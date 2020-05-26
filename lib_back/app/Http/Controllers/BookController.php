<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    public function getAll(){
        $books = Book::all();
        return response()->json($books);
    }
    public function delete($id){
        $book = Book::findOrFail($id);
        $book->delete();

        return response()->json(['status' => 'ok']);
    }
    public function changeState($id){
        $book = Book::findOrFail($id);
        $book->status = !$book->status;
        $book->save();

        return response()->json(['status' => 'ok']);
    }
    public function create(Request $request){
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->status = true;
        $book->save();

        return response()->json(['status' => 'ok']);
    }
}
