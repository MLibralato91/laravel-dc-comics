<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;

use App\Http\Requests\UpdateComicRequest;
use App\Http\Requests\StoreComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     *
     */
    public function store(StoreComicRequest $request)
    {
        $data = $request->validated();
        //$newComic = new Comic();

        //$newComic->fill($data);
        //$newComic->save();
        $newComic = Comic::create($data);
        return redirect()->route('comic.index')->with('message', "Il prodotto con id {$newComic->id} è stato salvato con successo");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     *
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     *
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     *
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $form_data = $request->validated();
        //$comic = Comic::findOrFail($id);
        $comic->update($form_data);
        return redirect()->route('comic.index', $comic->id)->with('message', "Il prodotto con id {$comic->id} è stato modificato con successo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     *
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comic.index')->with('message', "Il prodotto con id {$comic->id} è stato cancellato con successo");
    }
}
