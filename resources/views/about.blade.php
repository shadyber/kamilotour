@extends('layouts.app')
@section('title','About Us')
@section('content')

    <section class="htc__about__area bg-6">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="htc__about__details pt-100 pb-70">
                        <div class="htc__about__inner">
                            <h2>about <span class="text-theme">Kamilo Tour and Travel Agency </span></h2>
                            <p> {{$about->about}} </p>
                        </div>
                        <div class="about__sig">
                            <img src="{{$about->photo}}" alt="images">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="about__images p-4">

                        <iframe width="560" height="315" src="{{$about->video}}" title="YouTube video player"
                                frameborder="0" allow="accelerometer;
                        autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="our__service__area pt-100 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <!-- Start Our Service -->
                    <div class="service__inner">
                        <!-- Start Single Service -->
                        <div class="service">
                            <div class="service__icon">
                                <i class="flaticon-telephone icon"></i>
                            </div>
                            <div class="service__details">
                                <h4><a href="#">Online Booking Services</a></h4>
                                <p>Online Booking Services</p>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="service">
                            <div class="service__icon">
                                <i class="flaticon-shape icon"></i>
                            </div>
                            <div class="service__details">
                                <h4><a href="#">Book Cheap Online</a></h4>
                                <p>Book Cheap Online</p>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="service">
                            <div class="service__icon">
                                <i class="flaticon-sleeping icon"></i>
                            </div>
                            <div class="service__details">
                                <h4><a href="#">Hotel Booking</a></h4>
                                <p>Hotel Booking</p>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="service">
                            <div class="service__icon">
                                <i class="flaticon-transport icon"></i>
                            </div>
                            <div class="service__details">
                                <h4><a href="#">Taxi Cap Booking</a></h4>
                                <p>Taxi Cap Booking</p>
                            </div>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <!-- End Our Service -->
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 sm-mt-30 xs--mt--40">
                    <!-- Start Tab Menu -->
                    <ul class="view-mode" role="tablist">
                        <li role="presentation" class="about"><a href="#about" role="tab" data-toggle="tab" aria-expanded="false">about</a></li>
                        <li role="presentation" class="mission"><a href="#mission" role="tab" data-toggle="tab" aria-expanded="false">mission</a></li>
                        <li role="presentation" class="vision active"><a href="#vision" role="tab" data-toggle="tab" aria-expanded="true">Vision</a></li>
                    </ul>
                    <!-- End Tab Menu -->
                    <!-- Start Tab Content -->
                    <div class="htc__tab__content">
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="about" class="single__tab__content tab-pane fade bg-cat-1">
                            <div class="tab__content__inner">
                                <h2>About Us</h2>
                                <p>{{$about->about}}</p>

                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="mission" class="single__tab__content tab-pane fade bg-cat-1">
                            <div class="tab__content__inner">
                                <h2>Our Mission </h2>
                                <p>{{$about->mission}}</p>

                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="vision" class="single__tab__content tab-pane fade bg-cat-1 active in">
                            <div class="tab__content__inner">
                                <h2>Our Vision</h2>
                                <p>{{$about->vision}}</p>
                            </div>
                        </div>
                        <!-- End Single Content -->
                    </div>
                    <!-- End Tab Content -->
                </div>
            </div>
        </div>
    </section>




@endsection
