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
                                <a href="/#">
                                    <img src="/images/logo/kamilo.png" alt="logo">
                                </a>
                            </div>
                            <p class="footer__dtl">
                            {{\App\Models\About::about()->last()->name}}
                            </p>
                            <ul class="footer__social__icon">
                                <li><a href="/https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="/https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="/https://www.tumblr.com/"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="/https://plus.google.com/"><i class="fa fa-google"></i></a></li>
                                <li><a href="/https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Footer -->
                    <!-- Start Single Footer -->
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 xs--mt--40">
                        <div class="footer__wedget">
                            <div class="footer__inner">
                                <h2 class="footer__title">latest packages</h2>
                              @foreach(\App\Models\Product::lastN(3) as $package)
                                <!-- Start tweets Feed -->
                                <div class="tweets">
                                    <div class="tweets__icon">
                                        <i class="fa fa-paper-plane"></i>
                                    </div>
                                    <div class="tweets__details">
                                            <p>{{substr(strip_tags($package->detail),0,72)}}</p>
                                        <a href="/package/{{$package->slug}}">{{$package->title}}</a>
                                    </div>
                                </div>
                                <!-- End tweets Feed -->
                                  @endforeach
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
                                    <li><a href="/#">Adventure</a></li>
                                    <li><a href="/#">Traveling</a></li>
                                    <li><a href="/#">Countries</a></li>
                                    <li><a href="/#">Beach</a></li>
                                    <li><a href="/#">Honeymoon</a></li>
                                    <li><a href="/#">Island</a></li>
                                    <li><a href="/#">Parks</a></li>
                                    <li><a href="/#">Family</a></li>
                                    <li><a href="/#">Travel</a></li>
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
                            <p>Copyright © 2021<a href="/https://kamilotour.com">Kamilotour.com</a> All Right Reserved.</p>
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
                            <a class="rm__btn btn--transparent" href="/#">subcribes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Newsletter Letter -->
