<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    public function index()
    {
    	$data['movies'] = Movie::all();

    	return view('content.movie.movie')->with($data);
    }

    public function create()
    {
    	return view('content.movie.create_movie');
    }

    public function storeMovie(Request $request)
    {
    
    	$request->validate([

    		'bollywood' 	 =>  '',
    		'hollywood'	 	 =>  '',
    		'kollywood'		 =>  '',
    		'south_indian'	 =>  '',

    	]);

		$movie = Movie::create($request->all());

    		return redirect('index')->with('success', 'Added successfully');
    }

    public function edit2($id)

    {
    	 $data['movies'] = Movie::findOrFail($id);

    	return view('content.movie.edit_movie')->with($data);
    }

    public function update2(Request $request)
    {
    	$id = $request->all();

    	$this->validate($request, [

    		'bollywood' 	=> '',
    		'hollywood' 	=> '',
    		'kollywood' 	=> '',
    		'south_indian'	=> '',
    	]);

    	$data = Movie::findOrFail($id['id'])->update($id);

    	return redirect('index')->with('success','Update successfully');
    }

    public function delete2($id)
    {
    	$movie = Movie::find($id)->delete();

    	return redirect('index')->with('success', 'Deleted successfully');
    }

}
