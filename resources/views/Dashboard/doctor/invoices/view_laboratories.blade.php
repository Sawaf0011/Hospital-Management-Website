@extends('Dashboard.layouts.master')
@section('title')
    Reports
@stop
@section('css')

@endsection
@section('page-header')
    <!-- Breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Test Images</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{$laboratories->Patient->name}}</span>
            </div>
        </div>
    </div>
    <!-- Breadcrumb -->
@endsection
@section('content')

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Lab Doctor Notes</label>
        <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3">{{$laboratories->description_employee}}</textarea>
    </div>

    <!-- Gallery -->
    <div class="demo-gallery">
        <ul id="lightgallery" class="list-unstyled row row-sm pr-0">

            @foreach($laboratories->images as $image)

                <li class="col-sm-6 col-lg-4" data-responsive="{{URL::asset('Dashboard/img/laboratories/'.$image->filename)}}" data-src="{{URL::asset('Dashboard/img/Rays/'.$image->filename)}}">
                    <a href="#">
                        <img width="50px" height="350px" class="img-responsive" src="{{URL::asset('Dashboard/img/laboratories/'.$image->filename)}}" alt="NoImg">
                    </a>
                </li>
            @endforeach
        </ul>
        <!-- /Gallery -->

    </div>
    <!-- Row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- Main-content closed -->

@endsection
@section('js')

@endsection
