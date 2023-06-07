<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10); // Default to 10 cars per page
        $page = $request->input('page', 1);
        $query = Movie::query();
        $title = $request->input('title');
        if ($title) {
            return $query->searchByTitle($title);
        }else
        {
            $movies = Movie::paginate($perPage, ['*'], 'page', $page);
        }
        
        return response()->json($movies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => 'required|min:2|unique:movies,title'.$movie->title,
            'director' => 'required|min:2',
            'image_url' => 'required',
            'duration' => 'required|numeric|min:1|max:500',
            'release_date' => 'required|numeric|min:2|max:5',
            'genre' => 'nullable|',
        ]);

        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->director  = $request->input('director');
        $movie->image_url  = $request->input('image_url');
        $movie->duration  = $request->input('duration');
        $movie->release_date  = $request->input('release_date');
        $movie->genre  = $request->input('genre');
        $movie->save();

        return $movie;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::findOrFail($id);

        return $movie;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->title = $request->input('title', $movie->title);
        $movie->director  = $request->input('director', $movie->director);
        $movie->image_url  = $request->input('image_url', $movie->image_url);
        $movie->duration  = $request->input('duration', $movie->duration);
        $movie->release_date  = $request->input('release_date',$movie->release_date);
        $movie->genre  = $request->input('genre',$movie->genre);
        $movie->save();

        return $movie;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return response()->json(null, 204);
    }
}
