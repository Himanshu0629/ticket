@extends('home') @section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item">
            <a href="index.html">Price list</a>
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
                    <i class="fas fa-table"></i>Now Pricing 
                </div>
                <div class="col-sm-6">
                    <a style="float:right !important" href="{{ route('createPrice') }}" class="btn btn-success btn-md"><span class="fa fa-plus fa-circle"></span>&nbsp;Add Price Rate</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="datatable">
                    <thead>
                        <tr>
                            
                            <th>Nepali Rate</th>
                            <th>Indian Rate</th>
                            <th>American Dollar</th>
                            <th>Australian Dollar</th>
                            <th>Pound Sterling</th>
                            <th>Euro</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prices as $price)
                        <tr>
                           
                            <td>{{$price->nepali_rupee}}</td>
                            <td>{{$price->indian_rupee}}</td>
                            <td>{{$price->american_dollar}}</td>
                            <td>{{$price->australian_dollar}}</td>
                            <td>{{$price->pound_sterling}}</td>
                            <td>{{$price->euro}}</td>
                            
                            <td>
                                <a href="{{url('edit4/'.$price->id)}}" class="btn btn-success btn-sm"><span class="fa fa-edit"></span></a> 
                                <a href="{{url('delete4/' .$price->id)}}" class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are You Sure to Delete this file?')"><span class="fa fa-times"></span></a>
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