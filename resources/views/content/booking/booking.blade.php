@extends('home') @section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item">
            <a href="index.html">Booking list</a>
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
                    <i class="fas fa-table"></i> Booking Listing
                </div>
                <div class="col-sm-6">
                   <button type="button" 
                   id="bookingCreate" 
                   data-title="create Booking"
                   data-id="" 
                   class="btn btn-primary"  
                   {{-- data-toggle="modal" data-target="#exampleModalCenter" --}}
                   >
  Launch
</button>
                   {{--  <a style="float:right !important" href="{{ url('add') }}" class="btn btn-success btn-md"><span class="fa fa-plus fa-circle"></span>&nbsp;Add New Booking</a> --}}
                </div>


            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="datatable">
                    <thead>
                        <tr>
                           
                            <th>Movie</th>
                            <th>Name</th>
                            <th>Timing</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                        <tr>
                            
                            <td>{{$booking->movie}}</td>
                            <td>{{$booking->name}}</td>
                            <td>{{$booking->timing}}</td>
                            <td>{{$booking->status}}</td>
                            <td>
                                <a href="{{url('edit1/'.$booking->id)}}" class="btn btn-success btn-sm"><span class="fa fa-edit"></span></a> 
                                <a href="{{url('delete1/' .$booking->id)}}" class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are You Sure to Delete this file?')"><span class="fa fa-times"></span></a>
                                <a href="" class="btn btn-primary btn-sm classAnchor"><span class="fa fa-plus fa-circle"></span>&nbsp;</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="createUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 <script>
     
$(document).ready(function () {

$('#bookingCreate').click(function (e) {
    console.log('callled');
var modal = $(this),
title = this.data('title'),
id = this.data('id');
console.log(button);
console.log(title);
console.log(id);

$('#createUpdate').modal('show');


});
});
 </script>
  <script>

    $(document).ready(function(){
      $(".classAnchor").click(function(e){
        e.preventDefault();
           var here =`<tr>
                <td><input type="text" ></td>
                <td><input type="text" ></td>
                <td><input type="text" ></td>
                <td><input type="text" ></td>
                <td><a href="#" class="btn btn-warning btn-sm removeBtn"><span class="fa fa-minus fa-circle"></span>&nbsp;</a>
                <a href="#" class="btn btn-success btn-sm saveBtn"><span class="fa fa-plus fa-circle"></span>&nbsp;</a></td>
           </tr>`;
           $("table tbody").append(here);
      });

          $(document).on('click','.removeBtn',function(e){
            e.preventDefault();
            $(this).closest('tr').remove();
          });

          $(document).on('click','saveBtn', function(e){
            e.preventDefault();
          })

      });


  </script>

@endsection