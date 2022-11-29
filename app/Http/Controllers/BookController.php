<?php

namespace App\Http\Controllers;

use App\Models\Book;
use http\Message\Body;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        return Book::get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $book = new Book();
        $book->title = $request->title;
        $book->save();
        return $book;
    }


    public function show(Book $book)
    {
        return $book;
    }


    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $book->title = $request->title;
        $book->save();
        return $book;
    }


    public function destroy(Book $book)
    {
        $book->delete();
        return response()->noContent();
    }
}
