@extends('home')

@section('content')
<div class="container-fluid">
	<!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Adding Movies</a>
        </li>
    </ol>
    	<form action="{{ url('update2') }}" method="post">
		@csrf
			<div class="row">
            	<div class="col-sm-6">
                	<div class="card mb-3">
                    	<div class="card-header">Movie List</div>
                    		<div class="card-body">
            					<div class="table-responsive">
			      					<table class="table table-striped">
				               			<tbody>
				               				 <input type="hidden" name="id" value="{{ $movies->id }}">
				                     		<tr>
				                          		<td>Bollywood</td>
				                              		<td><input type="text" name="bollywood" value="{{ $movies->bollywood }}" class="form-control">
				                              	</td>
				                            </tr>
				                            <tr>
				                            	<td>Hollywood</td>
				                                 <td><input type="text" name="hollywood" value="{{ $movies->hollywood}}" class="form-control"></td>
				                            </tr>
				                            <tr>
				                            	<td>Kollywood</td>
				                                  <td><input type="text" name="kollywood" value="{{ $movies->kollywood}}" class="form-control"></td>
				                            </tr>
				                            <tr>
				                             	<td>South Indian</td>
				                                 <td><input type="text" name="south_indian" value="{{ $movies->south_indian}}" class="form-control"></td>
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