<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::withCount('books')->get();
        //dd($genres);
        return view('genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre = Genre::create($validated);

        return redirect()
            ->route('genres.index')
            ->with('success', "O género {$genre->name} foi criado com sucesso, com o ID {$genre->id}!");
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        return view('genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre->update($validated);

        return redirect()
            ->route('genres.index')
            ->with('success', "O género {$genre->name} foi atualizado com sucesso!");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $nome = $genre->name;
        $genre->delete();

        return redirect()
            ->route('genres.index')
            ->with('success', "O género {$nome} foi removido com sucesso!");
    }
}
