@extends('home') @section('content')
<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Adding New Ticket</a>
        </li>
    </ol>
    @if (Session::has('success')) {{ Session::get('success') }} @endif
    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="card mb-3">
                    <div class="card-header">Ticket Description</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>
                                
                                <tr>
                                    <td>Seat Number</td>
                                    <td>
                                        <select class="form-control" name="seat_number"id="seat_number">
                                            <option value="">Select seat number</option>
                                            <?php for($i=1;$i<=100;$i++) :?>
                                                <option value="<?php echo $i?>">
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
                                                <option value="<?php echo $i?>">
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
                                                <option value="<?php echo $i?>">
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
                                            <option value="1">Premium</option>
                                            <option value="2">Platinum</option>
                                            <option value="3">Gold</option>
                                        </select>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Status</td>
                                    <td>
                                        <select class="form-control" name="status"id="status">
                                            <option value="">Ticket status</option>
                                            <option value="1">Reserved</option>
                                            <option value="2">Pending</option>
                                            <option value="3">Cancelled</option>
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
    </form>
</div>

</html>
@endsection