<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;

class AppController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Book List',
            'books' => Book::all(),
            'categories' => Category::all(),
        ]);
    }

    public function detail(Book $book)
    {
        return view('detail', [
            'title' => 'Book Detail',
            'book' => $book,
            'categories' => Category::all(),
        ]);
    }

    public function category(Category $category)
    {
        return view('index', [
            'title' => $category->name,
            'books' => $category->books,
            'categories' => Category::all(),
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Contact',
            'categories' => Category::all(),
        ]);
    }

    public function publisher()
    {
        return view('publisher', [
            'title' => 'Publisher List',
            'publishers' => Publisher::all(),
            'categories' => Category::all(),
        ]);
    }

    public function publisherDetail(Publisher $publisher)
    {
        return view('publisherdetail', [
            'publisher' => $publisher,
            'books' => $publisher->books,
            'categories' => Category::all(),
        ]);
    }


}