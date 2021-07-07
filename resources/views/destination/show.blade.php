@extends('layouts.app')
@section('title',$destination->title)
@section('content')
    <section class="ptb-100 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <img src="{{$destination->photo}}" alt="overview images" class="img img-responsive">
                    <!-- Start Pakage Detals -->
                    <div class="package__off">
                        <h2>{{$destination->title}}
                    </div>
                    <!-- End Pakage Detals -->
                </div>
            </div>
            <div class="row">

            </div>
            <div class="row">
                <h2 class="section__title__3">Destination Overview</h2>


                <div class="col-md-12">
                    <!-- Start Tour Overview Area -->
                    <div class="distanation__details">
                        <div class="tour__overview__inner">

                        </div>
                    </div>
                    <!-- End Tour Overview Area -->
                    {!! $destination->detail !!}
                </div>
            </div>
        </div>
    </section>
@endsection
