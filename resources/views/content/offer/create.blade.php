@extends('home') @section('content')
<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Add New Offer</a>
        </li>
    </ol>
    @if (Session::has('success')) {{ Session::get('success') }} @endif
    <form action="{{ route('store2') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="card mb-3">
                    <div class="card-header">Offer List</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Week End</td>
                                    <td><input type="text" name="week_end" value="" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Special Offer</td>
                                    <td><input type="text" name="special_offer" value="" class="form-control"></td>
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