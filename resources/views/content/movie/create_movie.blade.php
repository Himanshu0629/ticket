@extends('home') @section('content')
<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Adding Movies</a>
        </li>
    </ol>
    @if (Session::has('success')) {{ Session::get('success') }} @endif
    <form action="{{ route('storeMovie') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="card mb-3">
                    <div class="card-header">Movie List</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Bollywood</td>
                                    <td><input type="text" name="bollywood" value="" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Hollywood</td>
                                    <td><input type="text" name="hollywood" value="" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Kollywood</td>
                                    <td><input type="text" name="kollywood" value="" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>South Indian</td>
                                    <td><input type="text" name="south_indian" value="" class="form-control"></td>
                                </tr>
                            </tbody>
                        </table>                        
                        <input type="submit" value="Submit" class="btn btn-success" id="submitBtn">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

</html>

@endsection
@section('custom_js')
{{-- <script type="text/javascript">
    $(document).ready(function(){
        $('#submitBtn').on('click',function(event){
            event.preventDefault();
            alert('here');
            /*$.ajax({
                url:,
                method:'POST',
                data:


            })*/

        })
    })
</script> --}}
@endsection