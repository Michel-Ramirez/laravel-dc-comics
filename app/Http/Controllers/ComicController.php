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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

        $request->validate([

            'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
            'description' => 'nullable|string',
            'thumb' => 'nullable|url:http,https',
            'price' => 'required|string',
            'series' => 'nullable|string',
            'sale_date' => 'required',
            'type' => 'nullable|string',
            'artists' => 'nullable|string',
            'writers' => 'required|string',
        ], [
            'title.required' => "Questo campo è obbligatorio",
            'title.unique' => "Il fumetto $comic->title esiste già",
            'price.required' => 'Questo campo è ubbligatorio',
            'sale_date' => 'Questo campo è richiesto',
        ]);

        $data = $request->all();
        $comic->update($data);

        return to_route('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
