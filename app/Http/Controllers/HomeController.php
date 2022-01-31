<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function home() {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function show($id) {
        $movie = Movie::findOrFail($id);
        return view('show', compact('movie'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'release_date' => 'required|date'
        ]);

        $movie = Movie::create($data);
        return redirect() -> route('show', $movie -> id);
    }

    public function update($id) {
        $movie = Movie::findOrFail($id);
        return view('update', compact('movie'));
    }

    public function edit(Request $request, $id) {
        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'release_date' => 'required|date'
        ]);
        $movie = Movie::findOrFail($id);
        $movie -> update($data);
        return redirect() -> route('show', $movie -> id);
    }

    public function delete($id) {
        $movie = Movie::findOrFail($id);
        $movie -> delete();
        return redirect() -> route('home');
    }
}
