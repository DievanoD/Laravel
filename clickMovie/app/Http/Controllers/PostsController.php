<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Movie;

class PostsController extends Controller
{
    public function index()
    {
    	$movies = Movie::all();
    	return view('movies.index', compact('movies'));
    }

	public function create()
	{
	    return view('movies.create');
	}

	public function store(Request $request)
	{
	    Movie::create($request->all());
	    return redirect('movies');
	}

	public function show ($id)
	{
		$movie=Movie::find($id);
	    return view('movies.show', compact('movie'));
	}

	public function edit($id)
	{
		$movie=Movie::find($id);

		//return view('edit', ['movie' -> $movie]);
		return view('movies.edit', compact('movie'));
	}

	public function update(Request $request, $id)
	{	
		Movie::find($id)->update($request->all());   
	    return redirect('movies');
	}

	public function destroy($id)
	{	
		Movie::find($id)->delete();   
	    return redirect('movies');
	}
}
