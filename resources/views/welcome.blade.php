<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="/css/core.css">
    <!-- Template shortcodes/elements style -->
    <link rel="stylesheet" href="/css/shortcode/shortcodes.css">
    <!-- Template main style -->
    <link rel="stylesheet" href="/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="/css/custom.css">


    <!-- Modernizr JS -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>


</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class="wrapper fixed-newslatter">
   @include('components.header')
    <!-- Start Slider Area -->
    <div class="slider__container slider__full--screen slider__position--relative">
        <div class="slider-activetion-wrap control__style--left  owl-carousel owl-theme">
            <!-- Start Single Slide -->
            <div class="slide slider__bg--2 htc__slider__animation--center" data-black-overlay="6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="slide__align--center">
                                <div class="slider__inner">
                                    <h2 class="wow">Find your special ture today</h2>
                                    <h1 class="wow">with Kamilo tours and travel agency.</h1>
                                    <div class="slider__btn wow">
                                        <a class="rm__btn btn--transparent" href="/package">view tours</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slide -->
            <!-- Start Single Slide -->
            <div class="slide slider__bg--3 htc__slider__animation--center" data-black-overlay="6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="slide__align--center">
                                <div class="slider__inner">
                                    <h2 class="wow">Find your special ture today</h2>
                                    <h1 class="wow">with Kamilo tours and travel agency</h1>
                                    <div class="slider__btn wow">
                                        <a class="rm__btn btn--transparent" href="/package">view tours</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slide -->
            <!-- Start Single Slide -->
            <div class="slide slider__bg--4 htc__slider__animation--center" data-black-overlay="6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="slide__align--center">
                                <div class="slider__inner">
                                    <h2 class="wow">Find your special ture today</h2>
                                    <h1 class="wow">with Kamilo tours and travel agency</h1>
                                    <div class="slider__btn wow">
                                        <a class="rm__btn btn--transparent" href="/package">view tours</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slide -->
        </div>
        <!-- End Slider Area -->
        <!-- Start Select Option -->
        <div class="select__option__wrap">
            <div class="container">
                <form action="/search" method="post">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="select__option__inner">
                            <div class="single__option">
                                <input type="text" name="key" placeholder="tour name">
                            </div>
                            <!-- Start Single option -->
                            <div class="single__option">
                                <select name="tour_type">
                                    <option value=""> Select Tour Type</option>
                                    <option value="sightseeing">Sightseeing Tours</option>
                                    <option value="shore">Shore Excursion Tours</option>
                                    <option value="adventure">Adventure or Sporting Tours</option>
                                    <option value="combing">Combining Tours</option>
                                </select>
                            </div>
                            <!-- End Single option -->
                            <!-- Start Single option -->
                            <div class="single__option">
                                <select name="destination">
                                    <option value="">Select Destination</option>
                                    @foreach(\App\Models\Destination::all() as $destination)
                                    <option value="{{$destination->id}}">{{$destination->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- End Single option -->
                            <!-- Start Single option -->
                            <div class="single__option">
                                <input type="date" placeholder="plan">

                            </div>
                            <!-- End Single option -->
                            <!-- Start Single option -->
                            <div class="single__option">
                             <button type="submit" class="btn__search">Search</button>
                            </div>
                            <!-- End Single option -->
                        </div>
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->
    <!-- Start Choose Area -->
    <section class="choose__area bg-white ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">why  <span class="text-theme">choose us</span></h2>
                        <p>At Kamilotours, we will provide a travel experience you will never forget.
                            Witness the magic of Ethiopia’s religious holidays, learn about the ancient kingdoms that shaped Ethiopia on the Northern Historical Route,
                            walk amongst the tribes of the South Omo Valley, feel the thrill of adventure on an overland expedition into the Danakil Depression,
                            measure up the size of the Simien and Bale Mountains from your tent, or see endemic bird species in the Rift Valley.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="choose__wrap clearfix mt-50 sm-mt-20">
                    <!-- Start Single Choose -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="choose">
                            <div class="choose__inner text-center">
                                <div class="choose__icon">
                                    <i class="flaticon-mountain-1 icon"></i>
                                </div>
                                <h4><a href="/#">Diverse Destination</a></h4>
                                <p>An extensive knowledge about all the facets of unique Ethiopia and the joy of meeting travellers from all over the world represent the foundation of our company </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Choose -->
                    <!-- Start Single Choose -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="choose">
                            <div class="choose__inner text-center">
                                <div class="choose__icon">
                                    <i class="flaticon-travel icon"></i>
                                </div>
                                <h4><a href="/#">Value of Money</a></h4>
                                <p>Our prices really are lower – guaranteed. Because of the way we work, our costs are lower and most of our tours are made with a reasonable price.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Choose -->
                    <!-- Start Single Choose -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="choose">
                            <div class="choose__inner text-center">
                                <div class="choose__icon">
                                    <i class="flaticon-tool icon"></i>
                                </div>
                                <h4><a href="/#">Passionate Travel</a></h4>
                                <p>Our Company work with the best hotels and guesthouses all over Ethiopia to guarantee you stay in a clean, comfortable and tourist standard accommodations.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Choose -->
                    <!-- Start Single Choose -->
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="choose">
                            <div class="choose__inner text-center">
                                <div class="choose__icon">
                                    <i class="flaticon-mountain icon"></i>
                                </div>
                                <h4><a href="/#">Beautiful Places</a></h4>
                                <p>Our company is fully run and owned by Ethiopians so we know the inside out of the country.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Choose -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Choose Area -->
    <!-- Start Welcome Area -->
    <section class="welcome__area bg-gray">
        <div class="welcome__images">
            <div class="info-bg" style="background-image:url(/images/others/welcome/1.jpg)"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-6">
                    <div class="welcome__inner">
                        <h2 class="title__line">welcome to <span class="text-theme">Kamilo</span></h2>
                        <p>provides outstanding, personalized service to our clients. Come travel with us to see the beauty, the tradition, the majesty of Ethiopia.</p>
                        <p>Kamilo Tour and Travel Agency is committed to develop and promote Ethiopian tourism to the local and worldwide. For that matter, we are traveling and attending at several continental and international tourism trade fares held in different countries.</p>
                        <ul class="social__icon social--bg--color">
                            <li><a href="/https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="/https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="/https://www.tumblr.com/"><i class="fa fa-tumblr"></i></a></li>
                            <li><a href="/https://plus.google.com/"><i class="fa fa-google"></i></a></li>
                            <li><a href="/https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Welcome Area -->
    <!-- Start Service Area -->
    <section class="service__area ptb-100 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">our <span class="text-theme">services</span></h2>
                        <p>We offer our clients customized domestic and international tour packages that are designed to suit to the requirement and budget of the traveler.
                            We offer the following outstanding services to our esteemed clients, so that they travel comfortably.
                            For the satisfaction of our clients, we offer these services with affordable price. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="service__wrap clearfix mt-50">
                    <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                        <div class="service__inner">
                            <!-- Start Single Service -->
                            <div class="service">
                                <div class="service__icon">
                                    <i class="flaticon-telephone icon"></i>
                                </div>
                                <div class="service__details">
                                    <h4><a href="/#">Online Booking Services</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dliluptatem sequi nesciunt. Neque porro quisquam est</p>
                                </div>
                            </div>
                            <!-- End Single Service -->
                            <!-- Start Single Service -->
                            <div class="service">
                                <div class="service__icon">
                                    <i class="flaticon-shape icon"></i>
                                </div>
                                <div class="service__details">
                                    <h4><a href="/#">Book Cheap Online</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dliluptatem sequi nesciunt. Neque porro quisquam est</p>
                                </div>
                            </div>
                            <!-- End Single Service -->
                            <!-- Start Single Service -->
                            <div class="service">
                                <div class="service__icon">
                                    <i class="flaticon-sleeping icon"></i>
                                </div>
                                <div class="service__details">
                                    <h4><a href="/#">Hotel Booking</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dliluptatem sequi nesciunt. Neque porro quisquam est</p>
                                </div>
                            </div>
                            <!-- End Single Service -->
                            <!-- Start Single Service -->
                            <div class="service">
                                <div class="service__icon">
                                    <i class="flaticon-transport icon"></i>
                                </div>
                                <div class="service__details">
                                    <h4><a href="/#">Taxi Cap Booking</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dliluptatem sequi nesciunt. Neque porro quisquam est</p>
                                </div>
                            </div>
                            <!-- End Single Service -->
                            <!-- Start Single Service -->
                            <div class="service">
                                <div class="service__icon">
                                    <i class="flaticon-tool icon"></i>
                                </div>
                                <div class="service__details">
                                    <h4><a href="/#">Amazing Tour</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed dliluptatem sequi nesciunt. Neque porro quisquam est</p>
                                </div>
                            </div>
                            <!-- End Single Service -->
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12 service-images">
                        <img src="/images/others/service/1.png" alt="service images">
                    </div>
                </div>
            </div>
        </div>
        <div class="service__images service__feature_images">
            <img src="/images/others/service/1.png" alt="service images">
        </div>
    </section>
    <!-- End Service Area -->
    <!-- Start Funfact Area -->
    <section class="funfact__area ptb-90 bg-1" data-black-overlay="6">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="funfact__wrap">
                        <!-- Start Single Fact -->
                        <div class="single__fact__flex">
                            <div class="fact__icon">
                                <i class="flaticon-shape icon"></i>
                            </div>
                            <div class="funfact__count__inner">
                                <div class="fact__count">
                                    <span class="count">94604</span>
                                </div>
                            </div>
                            <div class="fact__title">
                                <h2>customers</h2>
                            </div>
                        </div>
                        <!-- End Single Fact -->
                        <!-- Start Single Fact -->
                        <div class="single__fact__flex">
                            <div class="fact__icon">
                                <i class="flaticon-island-with-palm-trees icon"></i>
                            </div>
                            <div class="funfact__count__inner">
                                <div class="fact__count">
                                    <span class="count">1020</span>
                                </div>
                            </div>
                            <div class="fact__title">
                                <h2>destination</h2>
                            </div>
                        </div>
                        <!-- End Single Fact -->
                        <!-- Start Single Fact -->
                        <div class="single__fact__flex">
                            <div class="fact__icon">
                                <i class="flaticon-internet icon"></i>
                            </div>
                            <div class="funfact__count__inner">
                                <div class="fact__count">
                                    <span class="count">25465</span>
                                </div>
                            </div>
                            <div class="fact__title">
                                <h2>tours</h2>
                            </div>
                        </div>
                        <!-- End Single Fact -->
                        <!-- Start Single Fact -->
                        <div class="single__fact__flex">
                            <div class="fact__icon">
                                <i class="flaticon-business-man icon"></i>
                            </div>
                            <div class="funfact__count__inner">
                                <div class="fact__count">
                                    <span class="count">15</span>
                                </div>
                            </div>
                            <div class="fact__title">
                                <h2>tour types</h2>
                            </div>
                        </div>
                        <!-- End Single Fact -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Funfact Area -->
    <!-- Start Special Packages Area -->
    <section class="special__package ptb-100 bg-white">
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
            <!-- End Our Section Title area -->
            <div class="row">
                <div class="special__package__container clearfix mt-10">
                    @foreach(\App\Models\Product::lastN(6)->chunk(3) as $chunk)
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
        </div>
    </section>
    <!-- End Special Packages Area -->
    <!-- Start Countdown Area -->
    <section class="countdown__area ptb-100 bg-2" data-black-overlay="7">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="count__down__inner text-center">
                        <h2>special tour in june, discover Ethiopia for 100</h2>
                        <h4>customers with discount <span class="text-theme">40%</span></h4>

                        <div class="time-wrap ptb-50">
                            <div  datape-countdown="2020/01/01"></div>
                        </div>

                        <div class="count__down__btn">
                            <a class="rm__btn btn--transparent" href="/book">get tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Countdown Area -->

    <!-- Start Top Destination Area -->
    <section class="top__distination__area bg-white pb-100">
        <div class="container">
            <!-- Start Our Section Title area -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">top <span class="text-theme">destination</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utllaf </p>
                    </div>
                </div>
            </div>
            <!-- End Our Section Title area -->
            <div class="row">
                <div class="top__distination__wrap clearfix mt-50">
                    <!-- Start Single distanation -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="top__distanation__inner">

                            <!-- Start Single -->
                            <div class="distanation">
                                <div class="distanation__thumb bg-theme">
                                    <img src="/images/top/1.jpg" alt="distanation images">
                                </div>
                                <div class="distanation__details">
                                    <h4>Axum</h4>
                                    <h6>Heun Church</h6>
                                </div>
                            </div>
                            <!-- End Single -->
                            <!-- Start Single -->
                            <div class="distanation">
                                <div class="distanation__thumb bg-theme">
                                    <img src="/images/top/2.jpg" alt="distanation images">
                                </div>
                                <div class="distanation__details">
                                    <h4>Afar</h4>
                                    <h6>Dankale</h6>
                                </div>
                            </div>
                            <!-- End Single -->
                        </div>
                    </div>
                    <!-- End Single distanation -->

                    <!-- Start Single distanation -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="top__distanation__inner xs--mt--30">
                            <!-- Start Single -->
                            <div class="distanation">
                                <div class="distanation__thumb bg-theme">
                                    <img src="/images/top/3.jpg" alt="distanation images">
                                </div>
                                <div class="distanation__details">
                                    <h4>Harar</h4>
                                    <h6>Harar Old City</h6>
                                </div>
                            </div>
                            <!-- End Single -->
                            <!-- Start Single -->
                            <div class="distanation">
                                <div class="distanation__thumb bg-theme">
                                    <img src="/images/top/4.jpg" alt="distanation images">
                                </div>
                                <div class="distanation__details">
                                    <h4>Bahir Dar</h4>
                                    <h6>Birth Place of Blue Nile</h6>
                                </div>
                            </div>
                            <!-- End Single -->
                        </div>
                    </div>
                    <!-- End Single distanation -->
                    <!-- Start Single distanation -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="top__distanation__inner sm-mt-30 xs--mt--30">
                            <!-- Start Single -->
                            <div class="distanation distanation--big--images">
                                <div class="distanation__thumb bg-theme">
                                    <img src="/images/top/big-img/1.jpg" alt="distanation images">
                                </div>
                                <div class="distanation__details distanation--big--images--hover">
                                    <h3>season</h3>
                                    <h2>special & amazing</h2>
                                    <h6>tour</h6>
                                    <p>price drop <span class="text-theme">$499</span></p>
                                    <div class="distanation__btn">
                                        <a class="rm__btn btn--transparent" href="/book-the-tour.html">book now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single -->
                        </div>
                    </div>
                    <!-- End Single distanation -->
                    <!-- Start Single distanation -->
                    <div class="hidden-md hidden-lg col-sm-6 hidden-xs">
                        <div class="top__distanation__inner sm-mt-30">
                            <!-- Start Single -->
                            <div class="distanation distanation--big--images">
                                <div class="distanation__thumb bg-theme">
                                    <img src="/images/top/big-img/1.jpg" alt="distanation images">
                                </div>
                                <div class="distanation__details distanation--big--images--hover">
                                    <h3>season</h3>
                                    <h2>special & amazing</h2>
                                    <h6>tour</h6>
                                    <p>price drop <span class="text-theme">$499</span></p>
                                    <div class="distanation__btn">
                                        <a class="rm__btn btn--transparent" href="/#">book now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single -->
                        </div>
                    </div>
                    <!-- End Single distanation -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Top Destination Area -->
    <!-- Start Testimonial Area -->
    <section class="testimonial__area ptb-100 bg-3" data-black-overlay="7">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="testimonial__outer">
                        <div class="testimonial__carousel__active owl-carousel owl-theme">
                            <!-- Start Single Testimonial Area -->
                            <div class="testimoaial__wrap">
                                <div class="testimonial__inner text-center">
                                    <div class="tesimoaial__thumb">
                                        <img src="/images/test/client/1.png" alt="testimonial images">
                                    </div>
                                    <div class="testimoaial__details">
                                        <p>Brilliant. We have travelled a lot and using an in country, agent kamilo tour and travel
                                            to organise the trip within this fascinating country was perfect.</p>
                                        <h4><a href="/#">ANGELA MORRISON</a></h4>
                                        <h6>Tourist</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Testimonial Area -->
                            <!-- Start Single Testimonial Area -->
                            <div class="testimoaial__wrap">
                                <div class="testimonial__inner text-center">
                                    <div class="tesimoaial__thumb">
                                        <img src="/images/test/client/2.png" alt="testimonial images">
                                    </div>
                                    <div class="testimoaial__details">
                                        <p>Arranging a bespoke adventure was a new experience for me. However, from the moment we were met at Lalibela airport,
                                            we knew we were in safe hands.
                                            The places we stayed in were all great , and our needs were taken care of every step of the way.
                                            I won't hesitate to contact kamilo agency next time I'm in Ethiopia (for there will be a next time!)
                                            and I heartily recommend this agency to all fellow Travellers.</p>
                                        <h4><a href="/#">HANNAH SMITH</a></h4>
                                        <h6>Tourist</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Testimonial Area -->
                            <!-- Start Single Testimonial Area -->
                            <div class="testimoaial__wrap">
                                <div class="testimonial__inner text-center">
                                    <div class="tesimoaial__thumb">
                                        <img src="/images/test/client/3.png" alt="testimonial images">
                                    </div>
                                    <div class="testimoaial__details">
                                        <p>
                                            I would recommend any traveler do plenty research on the countries they plan to visit prior in addition to using a travel guide.

                                        </p>
                                        <p>
                                            The vacation was wonderful.
                                        </p>
                                        <h4><a href="/#">NIPA Bali</a></h4>
                                        <h6>ceo</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Testimonial Area -->
                            <!-- Start Single Testimonial Area -->
                            <div class="testimoaial__wrap">
                                <div class="testimonial__inner text-center">
                                    <div class="tesimoaial__thumb">
                                        <img src="/images/test/client/4.png" alt="testimonial images">
                                    </div>
                                    <div class="testimoaial__details">
                                        <p>
                                            I can't thank Kamilo Tour and Travel enough for the itinerary he put together for us.
                                            We did and saw so much in the 3 weeks we were in Ethiopia. There were no hitches and all the
                                            guides were incredibly knowledgeable and so evidently proud of their own areas - and rightly so.
                                            We were really looked after and every effort was made to make us feel welcome where ever we went.
                                            Seeing how hard the people work just to survive a basic life is such a humbling experience and we both came away from
                                            Ethiopia feeling lucky to have experienced it.
                                        </p>
                                        <h4><a href="/#">SUE TODD</a></h4>
                                        <h6>Tourist</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Testimonial Area -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Area -->
    <!-- Start Blog Area -->
    <section class="contact__wrap ptb-100 bg-white">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.673660552166!2d38.74025561511851!3d9.002145593539513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b859ceee0ccf1%3A0x8dd38cb91b9a08ec!2zRXRoaW9waWEgVG91ciBhbmQgVHJhdmVscyAtIOGKouGJteGLruGMteGLqyDhi6jhjInhiaXhip3hibUsIOGMieGLniDhiqXhipMg4Yuo4YiY4Yqq4YqTIOGKquGIq-GLrQ!5e0!3m2!1sen!2set!4v1625432073191!5m2!1sen!2set"
                width="100%" height="400"
                style="border:0;" allowfullscreen="" loading="lazy">

        </iframe>
        <!-- Start Contact Area -->
        @foreach(\App\Models\Address::address() as $address)
        <div class="contact__address bg-white">
            <div class="container">

                <div class="row">
                    <div class="contact__wrap clearfix">

                        <!-- Start Single Address -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="contact bg-cat-1">
                                <div class="address__icon">
                                    <i class="fa fa-pin"></i>
                                </div>
                                <div class="address__details">
                                    <p>{{$address->address1}}</p>
                                    <p>{{$address->address2}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address -->
                        <!-- Start Single Address -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="contact bg-cat-1">
                                <div class="address__icon">
                                    <i class="fa fa-email"></i>
                                </div>
                                <div class="address__details">
                                    <p><a href="mailto:{{$address->email}}">{{$address->email}}</a></p>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Address -->
                        <!-- Start Single Address -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="contact bg-cat-1">
                                <div class="address__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="address__details">
                                    <p><a href="tel:{{$address->tel}}">{{$address->tel}}</a></p>
                                    <p><a href="tel:{{$address->tel2}}">{{$address->tel2}}</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address -->


                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </section>
    <!-- End Blog Area -->

@include('components.footer')

</div>
<!-- Body main wrapper end -->
@include('components.modals')
<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="/js/vendor/jquery-1.12.0.min.js"></script>
<!-- Bootstrap framework js -->
<script src="/js/bootstrap.min.js"></script>
<!-- All js plugins included in this file. -->
<script src="/js/plugins.js"></script>
<script src="/js/slick.min.js"></script>
<!-- Waypoints.min.js. -->
<script src="/js/waypoints.min.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="/js/main.js"></script>

</body>

</html>
