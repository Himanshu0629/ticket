<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Ticket;
use App\Http\Controllers\Controller;


class TicketController extends Controller
{
    public function index1()
    {
    	$data['tickets'] = Ticket::all();

    	return view('content.ticket.ticket')->with($data);
    }

    public function createTicket()
    {
    	return view('content.ticket.create');
    }

    public function store(Request $request)
    {
    	$request->validate([

    		'seat_number' 	=> 'required|string',
    		'column' 		=> 'required|string',
    		'row' 			=> 'required|string',
    		'seat_status'	=> 'required|string',
    		'status'		=> 'required|string',

    	]);

    	$ticket =Ticket::create($request->all());

    	return redirect('index1')->with('success', 'Added successfully');
    }

    public function edit3($id)
    {
    	$data['tickets'] = Ticket::findOrFail($id);

    	return view('content.ticket.edit')->with($data);
    }
    public function update3(Request $request)
    {
    	$id = $request->all();

    	$this->validate($request, [

    		'seat_number'   =>  'required|string',
    		'column'		=>  'required|string',
    		'row'			=>  'required|string',
    		'seat_status'	=>	'required|string',
    		'status'		=>	'required|string',

	   		]);

    	$data = Ticket::findOrFail($id['id'])->update($id);

    	return redirect('index1')->with('success', 'Update successfully');

    }

    public function delete3($id)
    {
    	$ticket = Ticket::find($id)->delete();

    	 return redirect('index1')->with('success', 'Deleted successfully');
    }
}
