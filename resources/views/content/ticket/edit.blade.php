@extends('home')

@section('content')
<div class="container-fluid">
	<!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Adding New Ticket</a>
        </li>
    </ol>
    	<form action="{{ url('update3') }}" method="post">
		@csrf
			<div class="row">
            	<div class="col-sm-6">
                	<div class="card mb-3">
                    	<div class="card-header">Ticket Description</div>
                    		<div class="card-body">
            					<div class="table-responsive">
			      					<table class="table table-striped">
				               			<tbody>
				               				 <input type="hidden" name="id" value="{{ $tickets->id }}">
				                     		 <tr>
                                    <td>Seat Number</td>
                                    <td>
                                        <select class="form-control" name="seat_number"id="seat_number">
                                            <option value="">Select seat number</option>
                                            <?php for($i=1;$i<=100;$i++) :?>
                                                <option value="<?php echo $i?>" <?php echo ($tickets->seat_number == $i) ? 'selected' : '' ?>>
                                                    <?php echo $i ?>
                                                </option>
                                            <?php endfor?>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Column</td>
                                    <td>
                                        <select class="form-control" name="column"id="column">
                                            <option value="">Select column</option>
                                            <?php for($i=1;$i<=10;$i++) :?>
                                                <option value="<?php echo $i?>" <?php echo ($tickets->column == $i) ? 'selected' : '' ?>>
                                                    <?php echo $i ?>
                                                </option>
                                            <?php endfor?>
                                        </select>
                                    </td>
                                </tr>

                                 <tr>
                                    <td>Row</td>
                                    <td>
                                        <select class="form-control" name="row"id="row">
                                            <option value="">Select row</option>
                                            <?php for($i=1;$i<=10;$i++) :?>
                                                <option value="<?php echo $i?>" <?php echo ($tickets->row == $i) ? 'selected' : ''?>> 
                                                    <?php echo $i ?>
                                                </option>
                                            <?php endfor?>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                     <tr>
                                    <td>Seat Status</td>
                                    <td>
                                        <select class="form-control" name="seat_status"id="seat_status">
                                            <option value="">Category</option>
                                            <option value="1" <?php echo ($tickets->seat_status ==1) ? 'selected':''?>>Premium</option>
                                            <option value="2" <?php echo ($tickets->seat_status ==2) ? 'selected':''?>>Platinum</option>
                                            <option value="3" <?php echo ($tickets->seat_status ==3) ? 'selected':''?>>Gold</option>
                                        </select>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Status</td>
                                    <td>
                                        <select class="form-control" name="status"id="status">
                                            <option value="">Ticket status</option>
                                            <option value="1" <?php echo ($tickets->status ==1) ? 'selected' : '' ?>>Reserved</option>
                                            <option value="2" <?php echo ($tickets->status ==2) ? 'selected':'' ?>>Pending</option>
                                            <option value="3" <?php echo ($tickets->status ==3) ? 'selected': ''?>>Cancelled</option>
                                        </select>
                                    </td>
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