@extends('layouts.app')
@section('title',$package->title)
@section('content')
    <section class="ptb-100 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <!-- Start Pakage Detals -->
                    <div class="package__off">
                        <h2>{{$package->title}} <span class="text-theme">20% OFF</span></h2>
                    </div>
                    <!-- End Pakage Detals -->
                </div>
            </div>
            <div class="row">
                <!-- Start Unick Tour -->
                <div class="unick__tour__wrap">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <h2 class="section__title__3">Unique Tour</h2>
                    </div>
                    <!-- Start Single Unick -->
                    <div class="unick__tour__inner clearfix">
                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-12">
                            <div class="single__unick bg-cat-4">
                                <div class="unick__icon">
                                    <img src="/images/tour-details/shape/1.png" alt="unick images">
                                </div>
                                <h4><a href="#">All drink included</a></h4>
                            </div>
                        </div>
                        <!-- End Single Unick -->
                        <!-- Start Single Unick -->
                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-12">
                            <div class="single__unick bg-cat-4">
                                <div class="unick__icon">
                                    <img src="/images/tour-details/shape/2.png" alt="unick images">
                                </div>
                                <h4><a href="#">Insurrance</a></h4>
                            </div>
                        </div>
                        <!-- End Single Unick -->
                        <!-- Start Single Unick -->
                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-12">
                            <div class="single__unick bg-cat-4">
                                <div class="unick__icon">
                                    <img src="/images/tour-details/shape/3.png" alt="unick images">
                                </div>
                                <h4><a href="#">Tour guide</a></h4>
                            </div>
                        </div>
                        <!-- End Single Unick -->
                        <!-- Start Single Unick -->
                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-12">
                            <div class="single__unick bg-cat-4">
                                <div class="unick__icon">
                                    <img src="/images/tour-details/shape/4.png" alt="unick images">
                                </div>
                                <h4><a href="#">Lunch in restaurant</a></h4>
                            </div>
                        </div>
                        <!-- End Single Unick -->
                        <!-- Start Single Unick -->
                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-12">
                            <div class="single__unick bg-cat-4">
                                <div class="unick__icon">
                                    <img src="/images/tour-details/shape/5.png" alt="unick images">
                                </div>
                                <h4><a href="#">All tickets museum</a></h4>
                            </div>
                        </div>
                        <!-- End Single Unick -->
                        <!-- Start Single Unick -->
                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-12">
                            <div class="single__unick bg-cat-4">
                                <div class="unick__icon">
                                    <img src="/images/tour-details/shape/6.png" alt="unick images">
                                </div>
                                <h4><a href="#">Travel insurrance</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Unick -->
                </div>
                <!-- End Unick Tour -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Start Tour Overview Area -->
                    <div class="tour__overview__wrap">
                        <h2 class="section__title__3">Tour Overview</h2>
                        <div class="tour__overview__inner">
                            <!-- Start Single Overview -->
                            <div class="single__overview">
                                <div class="overview__days">
                                    <span>{{$package->length}}</span>

                                </div>
                                <div class="overview__dewtails">
                                    <h2><a href="#">{{$package->title}}</a></h2>
                                    {!! $package->detail !!}
                                </div>
                                <div class="overview__thumd">
                                    <div class="overview__inner">
                                        <img src="{{$package->photo}}" alt="overview images">
                                        <div class="overview__hover__info">
                                            <a class="rm__btn btn--transparent" href="#">book now</a>
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
