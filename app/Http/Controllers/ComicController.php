<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('home', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Comic $comic)
    {
        $comic = new Comic();
        return view('pages.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $request->validate([

            'title' => ['required', 'string', Rule::unique('comics')],
            'description' => 'required|string',
            'thumb' => 'required|url:http,https',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ]);

        $comic = new Comic();

        $comic->fill($data);

        $comic->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {

        return view('pages.comic', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('pages.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        //validazione prima di portare i dati nel DB
        $request->validate([

            'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
            'description' => 'required|string',
            'thumb' => 'required|url:http,https',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ], [
            'title.required' => "Questo campo è obbligatorio",
            'title.unique' => "Il fumetto $comic->title esiste già",
            'price.required' => 'Questo campo è ubbligatorio',
            'sale_date' => 'Questo campo è richiesto',
        ]);

        $data = $request->all();
        $comic->update($data);


        //ritorna al dettaglio del fumetto appena aggiunto
        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $comic = Comic::findOrFail($id);

        $comic->delete();

        return to_route('home');
    }
}
