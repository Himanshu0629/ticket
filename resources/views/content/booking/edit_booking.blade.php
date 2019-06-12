@extends('home')

@section('content')
<div class="container-fluid">
	<!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Movie Booking</a>
        </li>
    </ol>
    	<form action="{{ url('update1') }}" method="post">
		@csrf
			<div class="row">
            	<div class="col-sm-6">
                	<div class="card mb-3">
                    	<div class="card-header">Booking</div>
                    		<div class="card-body">
            					<div class="table-responsive">
			      					<table class="table table-striped">
				               			<tbody>
				               				 <input type="hidden" name="id" value="{{ $bookings->id }}">
				                     		<tr>
				                          		<td>Movie</td>
				                              		<td><input type="text" name="movie" value="{{ $bookings->movie }}" class="form-control">
				                              	</td>
				                            </tr>
				                            <tr>
				                            	<td>Name</td>
				                                 <td><input type="text" name="name" value="{{ $bookings->name}}" class="form-control"></td>
				                            </tr>
				                            <tr>
				                            	<td>Timing</td>
				                                  <td><input type="text" name="timing" value="{{ $bookings->timing}}" class="form-control"></td>
				                            </tr>
				                            <tr>
				                             	<td>Status</td>
				                                 <td><input type="text" name="status" value="{{ $bookings->status}}" class="form-control"></td>
				                            </tr>
				                        </tbody>
				                    </table>                        
				                    <input type="submit" value="Submit" class="btn btn-success">
			      				</div>
			      			</div>
			      		</div>
			      	</div>
			    </div>
			</form> 
		</div>
@endsection