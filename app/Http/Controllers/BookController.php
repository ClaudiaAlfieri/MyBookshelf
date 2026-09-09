<?php

namespace App\Http\Controllers;
use App\Models\Genre;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books  = Book::with('genre')->latest()->get();
        $genres = Genre::all();

        return view('books.index', compact('books', 'genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();

        return view('books.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'      => 'required|string|max:255',
            'author'     => 'required|string|max:255',
            'genre_id'   => 'required|exists:genres,id',
            'year_read'  => 'required|integer|min:1900|max:' . date('Y'),
            'rating'     => 'required|integer|min:1|max:5',
            'notes'      => 'nullable|string',
        ]);

        $book = Book::create($validated);

        return redirect()
            ->route('books.index')
            ->with('success', "O livro {$book->title} foi adicionado com sucesso!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $book->load('genre');

        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $genres = Genre::all();

        return view('books.edit', compact('book', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title'      => 'required|string|max:255',
            'author'     => 'required|string|max:255',
            'genre_id'   => 'required|exists:genres,id',
            'year_read'  => 'required|integer|min:1900|max:' . date('Y'),
            'rating'     => 'required|integer|min:1|max:5',
            'notes'      => 'nullable|string',
        ]);

        $book->update($validated);

        return redirect()
            ->route('books.index')
            ->with('success', "O livro {$book->title} foi atualizado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
