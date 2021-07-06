@extends('layouts.app')
@section('title',$destination->title)
@section('content')
    <section class="ptb-100 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <!-- Start Pakage Detals -->
                    <div class="package__off">
                        <h2>{{$destination->title}} <span class="text-theme">20% OFF</span></h2>
                    </div>
                    <!-- End Pakage Detals -->
                </div>
            </div>
            <div class="row">

            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Start Tour Overview Area -->
                    <div class="tour__overview__wrap">
                        <h2 class="section__title__3">Destination Overview</h2>
                        <div class="tour__overview__inner">
                            <!-- Start Single Overview -->
                            <div class="single__overview">

                                <div class="overview__dewtails">
                                    <h2><a href="#">{{$destination->title}}</a></h2>
                                    {!! $destination->detail !!}
                                </div>
                                <div class="overview__thumd">
                                    <div class="overview__inner">
                                        <img src="{{$destination->photo}}" alt="overview images">
                                        <div class="overview__hover__info">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Overview -->

                        </div>
                    </div>
                    <!-- End Tour Overview Area -->
                </div>
            </div>
        </div>
    </section>
@endsection
