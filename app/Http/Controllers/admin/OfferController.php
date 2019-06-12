<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Offer;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
    public function index3()
    {
    	$data['offers'] = Offer::all();

    	return view('content.offer.offer')->with($data);
    }

    public function createOffer()
    {
    	return view('content.offer.create');
    }

    public function store2(Request $request)
    {
    	$request->validate([

    		'week_end' 		=> 'required|string',
    		'special_offer' => 'required|string',
    	]);

    	$offer = Offer::create($request->all());

    	return redirect('index3')->with('success', 'Added successfully');

    }

    public function edit5($id)
    {
    	$data['offers'] = Offer::findOrFail($id);

    	return view('content.offer.edit')->with($data);
    }

    public function update5(Request $request)
    {
    	$id = $request->all();
    	$this->validate($request, 

   			[
    			'week_end' 		=> 'required|string',
    			'special_offer' => 'required|string',

    		]);

	    			$data = Offer::findOrFail($id['id'])->update($id);

	    			return redirect('index3')->with('success', 'Update successfully');

		 }
	 
	 	 public function delete5($id)

	 	 {
	 	 	$offer = Offer::find($id)->delete();

	 	 	return redirect('index3')->with('success', 'Deleted succefully');
	 	 }


}
