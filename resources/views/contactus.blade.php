@extends('layouts.app')
@section('title','Contact Us')
@section('content')
    <div class="conntact__from bg-white ptb-100">
        <div class="container">
            <div class="row">
                <div class="contact__form__wrap clearfix">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="contact__img">
                            <img src="images/others/contact/1.jpg" alt="contact iamges">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="contact-form-wrap bg-cat-3">
                            <h2 class="contact__title">contact <span class="text-theme">form</span></h2>
                            <form id="contact-form" action="mail.php" method="post">
                                <div class="single-contact-form">
                                    <div class="contact-box">
                                        <input type="text" name="name" placeholder="Your Nme*">
                                        <input type="email" name="email" placeholder="Mail*">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box subject">
                                        <input type="text" name="subject" placeholder="Subject*">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box message">
                                        <textarea name="message" placeholder="Type Your Massage..."></textarea>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit" class="htc__contact__btn">SEND MESSAGE</button>
                                </div>
                            </form>
                        </div>
                        <div class="form-output">
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="our__information__area pb-100 bg-white">
        <div class="container">
            <!-- Start Our Section Title area -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">get <span class="text-theme">informed</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utllaf</p>
                    </div>
                </div>
            </div>
            <!-- End Our Section Title area -->
            <div class="row">



            </div>
        </div>
    </section>


    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.673660552166!2d38.74025561511851!3d9.002145593539513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b859ceee0ccf1%3A0x8dd38cb91b9a08ec!2zRXRoaW9waWEgVG91ciBhbmQgVHJhdmVscyAtIOGKouGJteGLruGMteGLqyDhi6jhjInhiaXhip3hibUsIOGMieGLniDhiqXhipMg4Yuo4YiY4Yqq4YqTIOGKquGIq-GLrQ!5e0!3m2!1sen!2set!4v1625432073191!5m2!1sen!2set"
                width="100%" height="400"
                style="border:0;" allowfullscreen="" loading="lazy">

        </iframe>
    </section>


@endsection
