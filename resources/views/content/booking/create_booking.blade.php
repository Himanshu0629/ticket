@extends('home') @section('content')
<?php //dd($errors); exit;?>
<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Movies Booking</a>
            <a style="float:right !important" href="{{ url('booking') }}" class="btn btn-primary btn-md pull">&nbsp;Back</a>
        </li>
    </ol>

     
    @if (Session::has('success')) {{ Session::get('success') }} @endif
    <form action="{{ url('createBooking') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="card mb-3">
                    <div class="card-header">Booking</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Movie</td>
                                    <td>
                                        <input type="text" name="movie" value="" class="form-control @error('movie') is-invalid @enderror">
                                        @error('movie')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" name="name" value="" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Timing</td>
                                    <td><input type="text" name="timing" value="" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td><input type="text" name="status" value="" class="form-control"></td>
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