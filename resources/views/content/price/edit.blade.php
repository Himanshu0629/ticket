@extends('home')

@section('content')
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Adding New Price</a>
        </li>
    </ol>
        <form action="{{ route('update4') }}" method="post">
        @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="card mb-3">
                        <div class="card-header">Price List</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                             <input type="hidden" name="id" value="{{ $prices->id }}">
                                            <tr>
                                                <td>Nepali Rate</td>
                                                    <td><input type="text" name="nepali_rupee" value="{{ $prices->nepali_rupee }}" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Indian Rate</td>
                                                 <td><input type="text" name="indian_rupee" value="{{ $prices->indian_rupee}}" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>American Dollar</td>
                                                  <td><input type="text" name="american_dollar" value="{{ $prices->american_dollar}}" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Australian Dollar</td>
                                                 <td><input type="text" name="australian_dollar" value="{{ $prices->australian_dollar}}" class="form-control"></td>
                                            </tr>
                                             <tr>
                                                <td>Pound Sterling</td>
                                                 <td><input type="text" name="pound_sterling" value="{{ $prices->pound_sterling}}" class="form-control"></td>
                                            </tr>
                                             <tr>
                                                <td>Euro</td>
                                                 <td><input type="text" name="euro" value="{{ $prices->euro}}" class="form-control"></td>
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