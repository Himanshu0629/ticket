@extends('home') @section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item">
            <a href="index.html">Ticket list</a>
        </li>

    </ol>

    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    <br> @endif
    
    <div class="card mb-3">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-6">
                    <i class="fas fa-table"></i>Recent Ticket Update
                </div>
                <div class="col-sm-6">
                    <a style="float:right !important" href="{{ url('createTicket') }}" class="btn btn-success btn-md"><span class="fa fa-plus fa-circle"></span>&nbsp;Add New Ticket</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="datatable">
                    <thead>
                        <tr>
                            
                            <th>Seat Number</th>
                            <th>Column</th>
                            <th>Row</th>
                            <th>Seat Status</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
                        <tr>
                           
                            <td>{{$ticket->seat_number}}</td>
                            <td>{{$ticket->column}}</td>
                            <td>{{$ticket->row}}</td>
                            <td>
                                @if ($ticket->seat_status == 1)
                                    {{'Premium'}}
                                @elseif($ticket->seat_status == 2)
                                    {{'Platinum'}}
                                @else
                                    {{'Gold'}}
                                @endif
                            </td>
                            <td>@if ($ticket->status == 1)
                                    {{'Reserved'}}
                                @elseif($ticket->status == 2)
                                    {{'Pending'}}
                                @else
                                    {{'Cancelled'}}
                                @endif</td>
                            <td>
                                <a href="{{url('edit3/'.$ticket->id)}}" class="btn btn-success btn-sm"><span class="fa fa-edit"></span></a> 
                                <a href="{{url('delete3/' .$ticket->id)}}" class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are You Sure to Delete this file?')"><span class="fa fa-times"></span></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection