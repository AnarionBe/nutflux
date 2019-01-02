<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFilm;
use App\Http\Resources\FilmCollection;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $listFilms = Film::orderBy('updated_at', 'DESC')->get();
        return view('tests', compact('listFilms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('tests');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFilm $request) {
        $request->validated();
        Film::create($request->all())->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film) {
        return view('tests', compact('film'));
    }

    // public function show($string) {
    //     $rechercheFilms = Film::where('title', 'like', '%'.$string.'%')->get();
    //     return view('tests', compact('rechercheFilms'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film) {
        $filmToModify = Film::find($film->id);
        return view('tests', compact('filmToModify'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFilm $request, Film $film) {
        $request->validated();
        $film->update($request->all());
        $film->save();
        return view('tests');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film) {
        //
    }
}
