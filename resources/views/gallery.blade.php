<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
@section('title','Our Photo Gallery')
<!-- Body main wrapper start -->
<div class="wrapper fixed-newslatter">
 @include('components.header')
     @include('components.breadcrumb')
    <!-- Start Gallery Area -->
    <section class="gallery__area ptb-100 bg-white">
        <div class="container">
            <!-- Start Our Section Title area -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">our <span class="text-theme">gallery</span></h2>
                        <p>Single Picture can tell million words. </p>
                    </div>
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 text-center">
                    <ul id="htc__filters" class="htc__port__filter__nav">
                        <li data-filter="*" class="is-checked">All</li>
                        @foreach($albums as $album)
                        <li data-filter=".album{{$album->id}}">{{$album->title}}</li>
                        @endforeach


                    </ul>
                </div>
            </div>
            <!-- End Our Section Title area -->
            <div class="row">
                <div class="htc__portfolio__container clearfix mt-20">

                  @foreach($photos as $photo)
                    <!-- Start Single Gallery -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item album{{$photo->album->id}}">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="{{$photo->thumb}}" alt="{{$photo->name}}">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="{{$photo->photo}}" data-lightbox="tfportimg" data-title="{{$photo->title}}"><i class="fa fa-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Gallery -->
                    @endforeach
                    <!-- Start Single Gallery -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item photography">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="/images/portfolio/width-variation/2.jpg" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="images/portfolio/width-variation/2.jpg" data-lightbox="tfportimg" data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Gallery -->
                    <!-- Start Single Gallery -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item wordpress html jomla">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="/images/portfolio/width-variation/3.jpg" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="images/portfolio/width-variation/3.jpg" data-lightbox="tfportimg" data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Gallery -->
                    <!-- Start Single Gallery -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item webdesign html">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="/images/portfolio/width-variation/4.jpg" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="images/portfolio/width-variation/4.jpg" data-lightbox="tfportimg" data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Gallery -->
                    <!-- Start Single Gallery -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item photography html">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="/images/portfolio/width-variation/5.jpg" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="images/portfolio/width-variation/5.jpg" data-lightbox="tfportimg" data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Gallery -->
                    <!-- Start Single Gallery -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item wordpress photography">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="/images/portfolio/width-variation/6.jpg" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="images/portfolio/width-variation/6.jpg" data-lightbox="tfportimg" data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Gallery -->
                    <!-- Start Single Gallery -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item webdesign jomla">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="/images/portfolio/width-variation/11.jpg" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="images/portfolio/width-variation/11.jpg" data-lightbox="tfportimg" data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Gallery -->
                    <!-- Start Single Gallery -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item photography html">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="/images/portfolio/width-variation/10.jpg" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="images/portfolio/width-variation/10.jpg" data-lightbox="tfportimg" data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Gallery -->
                    <!-- Start Single Gallery -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item wordpress">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="/images/portfolio/width-variation/2.jpg" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="images/portfolio/width-variation/2.jpg" data-lightbox="tfportimg" data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Gallery -->
                    <!-- Start Single Gallery -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item webdesign photography">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="/images/portfolio/width-variation/7.jpg" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="images/portfolio/width-variation/7.jpg" data-lightbox="tfportimg" data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Gallery -->
                    <!-- Start Single Gallery -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item photography">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="/images/portfolio/width-variation/10.jpg" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="images/portfolio/width-variation/10.jpg" data-lightbox="tfportimg" data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Gallery -->
                    <!-- Start Single Gallery -->
                    <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 pro__item wordpress photography">
                        <div class="portfolio">
                            <div class="portfolio__inner">
                                <div class="htc__hover__fornt">
                                    <img src="/images/portfolio/width-variation/12.jpg" alt="portfolio images">
                                </div>
                                <div class="htc__hover__information">
                                    <div class="htc__hover__action">
                                        <a href="images/portfolio/width-variation/12.jpg" data-lightbox="tfportimg" data-title="My caption"><i class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Gallery -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Area -->
    <!-- Start Contact Area -->
    <div class="contact__address bg-white">
        <div class="container">
            <div class="row">
                <div class="contact__wrap clearfix">
                    <!-- Start Single Address -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="contact bg-cat-1">
                            <div class="address__icon">
                                <i class="zmdi zmdi-pin"></i>
                            </div>
                            <div class="address__details">
                                <p>Alcatraz Island Photo Albf dhaka ,<br>New York</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Address -->
                    <!-- Start Single Address -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="contact bg-cat-1">
                            <div class="address__icon">
                                <i class="zmdi zmdi-email"></i>
                            </div>
                            <div class="address__details">
                                <p><a href="mailto:www.yourmail.com">www.yourmail.com</a></p>
                                <p><a href="mailto:www.yourmail.com">www.yourmail.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Address -->
                    <!-- Start Single Address -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="contact bg-cat-1">
                            <div class="address__icon">
                                <i class="zmdi zmdi-phone"></i>
                            </div>
                            <div class="address__details">
                                <p><a href="phone:+66025644424857">+660 256444 24857</a></p>
                                <p><a href="phone:+66025644424857">+660 256444 24857</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Address -->
                    <!-- Start Single Address -->
                    <div class="hidden-md hidden-lg col-sm-6 hidden-xs">
                        <div class="contact bg-cat-1">
                            <div class="address__icon">
                                <i class="zmdi zmdi-phone"></i>
                            </div>
                            <div class="address__details">
                                <p><a href="phone:+66025644424857">+660 256444 24857</a></p>
                                <p><a href="phone:+66025644424857">+660 256444 24857</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Address -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->
    <!-- Start Footer Area -->
    <footer class="footer__area bg-4">
        <div class="footer__top ptb-70" data-black-overlay="8">
            <div class="container">
                <div class="row">
                    <div class="footer__wrap clearfix">
                        <!-- Start Single Footer -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="footer__wedget">
                                <div class="footer__logo">
                                    <a href="#">
                                        <img src="/images/logo/ramble.png" alt="logo">
                                    </a>
                                </div>
                                <p class="footer__dtl">Lorem ipsum dolor sit amet, consectetur adipisicing ejlit, sed do eiusmod tempor incididunt ut labore egtt dolore magna aliqua. Ut enim ad minim veniam, quisgt nostrud exercitation ullamco laboris.</p>
                                <ul class="footer__social__icon">
                                    <li><a href="https://www.linkedin.com/"><i class="zmdi zmdi-linkedin"></i></a></li>
                                    <li><a href="https://www.pinterest.com/"><i class="zmdi zmdi-pinterest"></i></a></li>
                                    <li><a href="https://www.tumblr.com/"><i class="zmdi zmdi-tumblr"></i></a></li>
                                    <li><a href="https://plus.google.com/"><i class="zmdi zmdi-google"></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class="zmdi zmdi-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 xs--mt--40">
                            <div class="footer__wedget">
                                <div class="footer__inner">
                                    <h2 class="footer__title">latest tweets</h2>
                                    <!-- Start tweets Feed -->
                                    <div class="tweets">
                                        <div class="tweets__icon">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </div>
                                        <div class="tweets__details">
                                            <p>Lorem ipsum dolor sit am ectetur adip isicing elit, sed eiusmod ipsum dolo hgtfed</p>
                                            <a href="#">https://tweeterhrad.com</a>
                                        </div>
                                    </div>
                                    <!-- End tweets Feed -->
                                    <!-- Start tweets Feed -->
                                    <div class="tweets">
                                        <div class="tweets__icon">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </div>
                                        <div class="tweets__details">
                                            <p>Lorem ipsum dolor sit am ectetur adip isicing elit, sed eiusmod ipsum dolo hgtfed</p>
                                            <a href="#">https://tweeterhrad.com</a>
                                        </div>
                                    </div>
                                    <!-- End tweets Feed -->
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 xs--mt--40">
                            <div class="footer__wedget sm--mt--40">
                                <div class="footer__inner">
                                    <h2 class="footer__title">tag</h2>
                                    <ul class="tag_menu">
                                        <li><a href="#">Adventure</a></li>
                                        <li><a href="#">Traveling</a></li>
                                        <li><a href="#">Countries</a></li>
                                        <li><a href="#">Beach</a></li>
                                        <li><a href="#">Honeymoon</a></li>
                                        <li><a href="#">Island</a></li>
                                        <li><a href="#">Parks</a></li>
                                        <li><a href="#">Family</a></li>
                                        <li><a href="#">Travel</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__arera" data-black-overlay="9">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                        <div class="copyright__inner">
                            <div class="copyright__text">
                                <p>Copyright © 2017<a href="https://devitems.com">devitems.com</a> All Right Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->
    <!-- Start Newsletter Letter -->
    <div class="newsletter__area bg-cat-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="newsletter__wrap">
                        <div class="newsletter__inner">
                            <h4>join the newsletter</h4>
                            <input type="email" placeholder="Enter your E-mail">
                            <div class="news__letter__btn">
                                <a class="rm__btn btn--transparent" href="#">subcribes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Newsletter Letter -->
</div>
<!-- Body main wrapper end -->
 @include('components.footer')
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
