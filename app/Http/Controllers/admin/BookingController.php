<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Booking;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;

class BookingController extends Controller
{
    public function booking(){
    	
    	$data['bookings'] = Booking::all();
        // $hello = 'greeting';

    	return view('content.booking.booking')->with($data);
    }

    public function add()
   	
   	 { 
        dd('aaa'); 
    	return view('content.booking.create_booking');
     }

     public function createBooking(BookingRequest $request)
     {
        echo "here"; exit;
     	$booking = Booking::create($request->all());
     	// echo "string";exit;

     	if ($booking) {
     		// echo "string";exit;

     		return redirect('booking')->with('success', 'Added successfully');
     	}
     		else {

     		return view('content.create_booking');
     	}

     }

     public function edit1($id)
     
     {
        // echo "string";exit;
        $data['bookings'] = Booking::findOrFail($id);
        // var_dump($data['bookings']); exit;

        return view('content.booking.edit_booking')->with($data);

     }

    public function update1(Request $request)
    {
        $id = $request->all();
       
        $this->validate($request, [

            'movie'   =>     'required|string',
            'name'    =>     'required|string',
            'timing'  =>     'required|string',
            'status'  =>     'required|string',
            
            ]);

        $data = Booking::findOrFail($id['id'])->update($id);

        return redirect('booking')->with('success', 'Update successfully');
    }

    public function delete1($id)

    {
    
        $booking = Booking::find($id)->delete();

        return redirect('booking')->with('success', 'Delete succesfully');
    }
}
