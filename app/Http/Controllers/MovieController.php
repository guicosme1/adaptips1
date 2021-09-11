<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\Country;
use Carbon\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search');

        if($search) {

            $movies = Movie::where('title', 'like', '%'.$search.'%')->orWhere('genre', 'like', '%'.$search.'%')
            ->orWhere('release', 'like', '%'.$search.'%')->orWhere('country_id', 'like', '%'.$search.'%')
            ->orWhere('synopsis', 'like', '%'.$search.'%')->get();
            //return view('movies', compact('movies'));

        } else {

            $movies = Movie::all();
            //return view('movies', compact('movies'));

        }

        return view('movies',['movies' => $movies, 'search' => $search]);
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $data['image'] = $request->file('image')->store('movies','public');

        Movie::Create($data);

        return redirect(route('movie.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo('aaaa');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);

        $data = $request->all();

        if($request->hasFile('image')){
            Storage::delete('public/' . $movie->image);
            $data['image'] = $request->file('image')->store('movies','public');
        }

        $movie->update($data);

        return redirect(route('movie.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movie::findOrFail($id)->delete();

        return redirect(route('movie.index'));
    }
}
