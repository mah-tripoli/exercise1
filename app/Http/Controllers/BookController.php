<?php

namespace App\Http\Controllers;

use App\Data\BookData;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    public function index()
    {
        $books = BookData::getBooks();

        return view('books.index', compact('books'));
    }

    public function rentBook(Request $request)
    {
        $bookId = $request->input('book_id');

        // Implement your logic to rent the book

        return redirect()->route('books.index')->with('success', 'Book rented successfully!');
    }

    public function returnBook(Request $request)
    {
        $bookId = $request->input('book_id');

        // Implement your logic to return the book

        return redirect()->route('books.index')->with('success', 'Book returned successfully!');
    }
}
