@extends('home') @section('content')
<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Adding New Price</a>
        </li>
    </ol>
    @if (Session::has('success')) {{ Session::get('success') }} @endif
    <form action="{{ route('store1') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="card mb-3">
                    <div class="card-header">Price List</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Nepali Rate</td>
                                    <td><input type="text" name="nepali_rupee" value="" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Indian Rate</td>
                                    <td><input type="text" name="indian_rupee" value="" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>American Dollar</td>
                                    <td><input type="text" name="american_dollar" value="" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Australian Dollar</td>
                                    <td><input type="text" name="australian_dollar" value="" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Pound Sterling</td>
                                    <td><input type="text" name="pound_sterling" value="" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Euro</td>
                                    <td><input type="text" name="euro" value="" class="form-control"></td>
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