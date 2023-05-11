<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $newBook = new Book();

        $newBook->id = 5;
        $newBook->title = 'ciao mondo';
        $newBook->vote = 4;
        $newBook->save();

        $books = Book::where('vote', '>=', 4)->get();
        return view('home', compact('books'));

    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}
