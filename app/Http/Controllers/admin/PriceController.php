<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Price;
use App\Http\Controllers\Controller;


class PriceController extends Controller
{
    public function index2()

    {
    	$data['prices'] = Price::all();

    	return view('content.price.price')->with($data);
    }

    public function createPrice()
	 {
    	return view('content.price.create');
    }

    public function store1(Request $request)
    {
    	$request->validate([

    		'nepali_rupee' 		 => 'required|string',
    		'indian_rupee'		 => 'required|string',
    		'american_dollar'	 => 'required|string',
    		'australian_dollar'	 => 'required|string',
    		'pound_sterling' 	 => 'required|string',
    		'euro'				 => 'required|string',

    	]);

    	$price = Price::create($request->all());

    	return redirect('index2')->with('success', 'Added sucessfully');
    }

    public function edit4($id)
    {
    	$data['prices'] = Price::findOrFail($id);

    	return view('content.price.edit')->with($data);
    }

    public function update4(Request $request)
    {
    	$id = $request->all();
    	
    	$this->validate($request, [

    		'nepali_rupee' 		 => 'required|string',
    		'indian_rupee'		 => 'required|string',
    		'american_dollar'	 => 'required|string',
    		'australian_dollar'	 => 'required|string',
    		'pound_sterling' 	 => 'required|string',
    		'euro'				 => 'required|string',

    	]);

    	$data = Price::findOrFail($id['id'])->update($id);

    	return redirect('index2')->with('success', 'Update successfully');
    }

    public function delete4($id)
    {
    	$price = Price::find($id)->delete();

    	return redirect('index2')->with('success', 'Deleted successfuly');
    }

}
