@extends('layouts.app')
@section('title','Packages List')
@section('content')

    <div class="select__option__area pt-100 pb-50 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="select__option__inner bg-cat-1 select__optionbg">
                        <div class="single__option">
                            <input type="text" placeholder="TOUR NAME">
                        </div>
                        <!-- Start Single option -->
                        <div class="single__option">
                            <select>
                                <option>tour typr</option>
                                <option>tour typr</option>
                                <option>tour typr</option>
                                <option>tour typr</option>
                            </select>
                        </div>
                        <!-- End Single option -->
                        <!-- Start Single option -->
                        <div class="single__option">
                            <select>
                                <option>destination</option>
                                <option>destination</option>
                                <option>destination</option>
                                <option>destination</option>
                            </select>
                        </div>
                        <!-- End Single option -->
                        <!-- Start Single option -->
                        <div class="single__option">
                            <select>
                                <option>month</option>
                                <option>janu</option>
                                <option>feb</option>
                                <option>march</option>
                            </select>
                        </div>
                        <!-- End Single option -->
                        <!-- Start Single option -->
                        <div class="single__option">
                            <a class="btn__search" href="#">search tours</a>
                        </div>
                        <!-- End Single option -->
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="special__package pb-100 bg-white">
        <div class="container">
            <!-- Start Our Section Title area -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">SPECIAL <span class="text-theme">PACKAGES</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utllaf </p>
                    </div>
                </div>
            </div>
            <!-- End Our Section Title area -->
            <div class="row">
                <div class="special__package__container clearfix mt-10">
                @foreach($packages->chunk(3) as $chunk)
                        <div class="row">
                        @foreach($chunk as $package)
                    <!-- Start Single Packages -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="packages">
                            <div class="package__thumb">
                                <img src="{{$package->thumb}}" alt="packages images">
                                <div class="packages__hover__info">
                                    <div class="package__hover__inner">
                                        <h4><a href="#">{{$package->title}}</a></h4>
                                        <h6><i class="fa fa-alarm"></i>{{$package->length}}</h6>
                                        <p> {{substr($package->detail,0,150)}}... </p>
                                        <div class="package--rating--btn">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <div class="packages__btn">
                                                <a class="view__btn" href="/package/{{$package->slug}}">view more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="package__details">
                                <div class="package__details__inner">
                                    <p>Offer Available</p>
                                    <p class="packg__prize">${{$package->offer}}</p>
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
            {{$packages->links()}}
            </div>
    </section>


@endsection
