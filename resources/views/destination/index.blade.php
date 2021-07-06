@extends('layouts.app')
@section('title','Destinations List')
@section('content')



    <section class="special__package pb-100 bg-white">
        <div class="container">
            <!-- Start Our Section Title area -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">SPECIAL <span class="text-theme">DESTINATIONS</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utllaf </p>
                    </div>
                </div>
            </div>
            <!-- End Our Section Title area -->
            <div class="row">
                <div class="special__package__container clearfix mt-10">
                    @foreach($destinations->chunk(3) as $chunk)
                        <div class="row">
                        @foreach($chunk as $destination)
                            <!-- Start Single Packages -->
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="packages">
                                        <div class="package__thumb">
                                            <img src="{{$destination->thumb}}" alt="packages images">
                                            <div class="packages__hover__info">
                                                <div class="package__hover__inner">
                                                    <h4><a href="#">{{$destination->title}}</a></h4>
                                                    <p> {{substr($destination->detail,0,150)}}... </p>
                                                    <div class="package--rating--btn">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <div class="packages__btn">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package__details">
                                            <div class="package__details__inner">
                                                <a class="view__btn" href="/destination/{{$destination->slug}}">view more</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Packages -->
                            @endforeach
                        </div>
                    @endforeach
                </div>

            </div> 
        </div>
    </section>


@endsection
