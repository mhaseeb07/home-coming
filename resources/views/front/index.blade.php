@extends('front.layouts.app')
@section('title','TUF Convocation - The University of Faisalabad')
@section('content')
 <!-- banner start-->
<section class="hero-area">
    <div class="banner-item" style="background-image:url(front/images/hero_area/banner_bg.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="banner-content-wrap">

                <p class="banner-info wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">Eight Convocation of TUF & Seventh Convocation of UMDC 16 October, 2021 </p>
                <h1 class="banner-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">CONVOCATION</h1>

                <!-- <div class="countdown wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="800ms">
                    <div class="counter-item">
                        <i class="icon icon-ring-1Asset-1"></i>
                        <span class="days">16</span>
                        <div class="smalltext">Days</div>

                    </div>
                    <div class="counter-item">
                        <i class="icon icon-ring-4Asset-3"></i>
                        <span class="hours">00</span>
                        <div class="smalltext">Hours</div>
                    </div>
                    <div class="counter-item">
                        <i class="icon icon-ring-3Asset-2"></i>
                        <span class="minutes">00</span>
                        <div class="smalltext">Minutes</div>
                    </div>
                    <div class="counter-item">
                        <i class="icon icon-ring-4Asset-3"></i>
                        <span class="seconds">60</span>
                        <div class="smalltext">Seconds</div>
                    </div>
                </div> -->
                <div class="inline-block">
                    <div id="defaultCountdown" class="countdown countdown-s3"></div>
                </div>
                <!-- Countdown end -->
                <div class="banner-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="800ms">
                    <a href="{{route('register')}}" class="btn">Register Now</a>
                </div>

                </div>
                <!-- Banner content wrap end -->
            </div><!-- col end-->
            <div class="col-lg-4 align-self-end">
                <!-- <div class="banner-img">
                <img src="{{asset('front/images/hero_area/banner_img.png')}}" alt="">
                </div> -->
            </div>
        </div><!-- row end-->
    </div>
    <!-- Container end -->
    </div>
    <!-- banner slice image-->
    <div class="tiles">
    <div class="tile" data-scale="1.1" data-image="{{asset('front/images/hero_area/banner_slices.png')}}"></div>
    </div>
</section>
<!-- banner end-->

<!-- ts intro start -->

<section class="ts-intro-item section-bg">
    <div class="container">
    <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
            <div class="intro-left-content">
                <h2 class="column-title">
                <!-- <span>Why Join Exhibit</span> -->
                    CONVOCATION
                </h2>
                <p>
                    Convocation is more than just a formal ceremony for the conferral of degrees, it’s the recognition of a longstanding tradition whereby the University community – students, faculty, staff and alumni – applaud your achievements. At TUF Convocation ceremonies, as you look forward to beginning the newest chapter in your journey, you will celebrate with your family, friends and class fellows those days and long nights of study and hard work and be welcomed a​s our newest alumni.
                </p>
                {{-- <a href="#" class="btn">Register Now</a> --}}
            </div>
        </div><!-- col end-->

    </div><!-- row end-->
    </div><!-- container end-->
</section>
<!-- ts intro end-->


<!-- ts experience start-->
<section id="ts-experiences" class="ts-experiences" style="background-image:url(front/images/shap/cta_bg.png)">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 no-padding">
            <div class="exp-img" style="background-image:url(front/images/001.jpg)">
                <!-- <img class="img-fluid" src="{{asset('front/images/cta_img.jpg')}}" alt=""> -->
            </div>
        </div><!-- col end-->
        <div class="col-lg-6 no-padding align-self-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                <div class="pricing-item">
                    <img class="pricing-dot " src="{{asset('front/images/pricing/dot.png')}}" alt="">
                    <div class="ts-pricing-box">

                    <div class="ts-pricing-header">
                        <h2 class="ts-pricing-name">REGISTRATION</h2>
                    </div>
                    <div class="ts-pricing-progress">
                        <p class="amount-progres-text">CONVOCATION</p>
                        <!-- <div class="ts-progress">
                            <div class="ts-progress-inner" style="width: 100%"></div>
                        </div>
                        <p class="ts-pricing-value">500/500</p> -->
                    </div>
                    <div class="promotional-code">
                        <p class="promo-code-text">The University of Faisalabad</p>
                        <a href="{{route('register')}}" class="btn pricing-btn">Register Now</a>
                        <p class="vate-text"><a href="mailto:dcexam@tuf.edu.pk"><h4>dcexam@tuf.edu.pk</h4></a></p>
                    </div>
                    </div><!-- ts pricing box-->
                    <img class="pricing-dot1 " src="{{asset('front/images/pricing/dot.png')}}" alt="">
                </div>

        </div><!-- col end-->
    </div><!-- row end-->
    </div><!-- container fluid end-->
</section>
<!-- ts experience end-->

<!-- ts experience start-->
<section class="ts-schedule">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
            <div class="ts-schedule-content">
                <h2 class="column-title">
                <span>Schedule Details</span>
                Information of Event Schedules
                </h2>
                <div class="row">
                <div class="col-lg-6">
                    <p class="address-call">Address</p>
                    <p>Sargodha Road, University Town
                    Faisalabad.</p>
                </div>
                <div class="col-lg-6">
                    <p class="address-call">Call Us</p>
                    <p>+92 330 198 0607</p>
                    <p>+92 41 111 111 883</p>
                </div>
                </div>
            </div>
        </div><!-- col end-->
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
            <div class="ts-schedule-info mb-70">
                <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="active" title="Click Me" href="#date1" role="tab" data-toggle="tab">
                                <h3>16th October</h3>
                                <span>Saturday</span>
                            </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="" href="#date2" title="Click Me" role="tab" data-toggle="tab">
                                <h3>17th October</h3>
                                <span>Sunday</span>
                            </a>
                </li> -->
                </ul>
                <!-- Tab panes -->
            </div>
        </div><!-- col end-->
    </div><!-- row end-->
    <div class="row">
        <div class="col-lg-12">
            <div class="tab-content schedule-tabs">
                <div role="tabpanel" class="tab-pane active" id="date1">
                <div class="schedule-listing">
                    <div class="schedule-slot-time">
                        <span> 9:30 AM</span>
                        Venue
                    </div>
                    <div class="schedule-slot-info">
                        <div class="schedule-slot-info-content">
                            <img class="schedule-slot-speakers" src="{{asset('front/images/7.jpg')}}" alt="">
                            <h3 class="schedule-slot-title">Convocation Ceremony for TUF & UMDC
                            <!-- <strong>@ Fredric Martinsson</strong> -->
                            </h3>
                            <p>Health Sciences Wing, Sargodha Road Faisalabad.</p>
                        </div>
                        <!--Info content end -->
                    </div><!-- Slot info end -->
                </div>
                <!--schedule-listing end -->
                </div>
                <!-- <div role="tabpanel" class="tab-pane" id="date2">
                <div class="schedule-listing">
                    <div class="schedule-slot-time">
                        <span> 09.00 - 11.00 AM</span>
                        Venue
                    </div>
                    <div class="schedule-slot-info">
                        <div class="schedule-slot-info-content">
                            <img class="schedule-slot-speakers" src="{{asset('front/images/7.jpg')}}" alt="">
                            <h3 class="schedule-slot-title">UMDC!
                            </h3>
                            <p>Health Sciences Wing, Sargodha Road Faisalabad.</p>
                        </div>
                    </div>
                </div>
                <div class="schedule-listing">
                    <div class="schedule-slot-time">
                        <span> 12.00 - 02.00 PM</span>
                        Venue
                    </div>
                    <div class="schedule-slot-info">
                        <div class="schedule-slot-info-content">
                            <img class="schedule-slot-speakers" src="{{asset('front/images/7.jpg')}}" alt="">
                            <h3 class="schedule-slot-title">TUF
                            </h3>
                            <p>Health Sciences Wing, Sargodha Road Faisalabad. </p>
                        </div>
                    </div>
                </div>
                </div> -->


            </div>
        </div>
    </div>
    </div><!-- container end-->
</section>
<!-- ts experience end-->

<!-- ts pricing start-->
<section class="ts-pricing gradient" style="background-image: url(front/images/3.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title white">
                    <span>Glimpses of Seventh Convocation of TUF & Sixth Convocation of UMDC 16 October, 2021</span>
                    Glimpses
                </h2>
            </div><!-- section title end-->
        </div>

        <div class="grid ts-grid-item">
            <div class="grid-item">
                <a href="{{asset('front/images/gallery/1.jpg')}}" class="ts-popup"><img src="{{asset('front/images/gallery/1.jpg')}}" alt="" /></a>
            </div>
            <div class="grid-item">
                <a href="{{asset('front/images/gallery/2.jpg')}}" class="ts-popup"><img src="{{asset('front/images/gallery/2.jpg')}}" alt="" /></a>
            </div>
            <div class="grid-item">
                <a href="{{asset('front/images/gallery/3.jpg')}}" class="ts-popup"><img src="{{asset('front/images/gallery/3.jpg')}}" alt="" /></a>
            </div>
            <div class="grid-item">
                <a href="{{asset('front/images/gallery/4.jpg')}}" class="ts-popup"><img src="{{asset('front/images/gallery/4.jpg')}}" alt="" /></a>
            </div>
            <div class="grid-item">
                <a href="{{asset('front/images/gallery/5.jpg')}}" class="ts-popup"><img src="{{asset('front/images/gallery/5.jpg')}}" alt="" /></a>
            </div>
            <div class="grid-item">
            <a href="{{asset('front/images/gallery/6.jpg')}}" class="ts-popup"><img src="{{asset('front/images/gallery/6.jpg')}}" alt="" /></a>
            </div>
            <div class="grid-item">
            <a href="{{asset('front/images/gallery/7.jpg')}}" class="ts-popup"><img src="{{asset('front/images/gallery/7.jpg')}}" alt="" /></a>
            </div>
            <div class="grid-item">
            <a href="{{asset('front/images/gallery/8.jpg')}}" class="ts-popup"><img src="{{asset('front/images/gallery/8.jpg')}}" alt="" /></a>
            </div>
            <div class="grid-item">
            <a href="{{asset('front/images/gallery/9.jpg')}}" class="ts-popup"><img src="{{asset('front/images/gallery/9.jpg')}}" alt="" /></a>
            </div>
        </div>


    </div><!-- Conatiner end -->
    <div class="speaker-shap wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
    <img class="shap2" src="{{asset('front/images/shap/pricing_memphis1.png')}}" alt="">
    </div>
</section>
<!-- ts pricing end-->


<!-- ts map direction start-->
<section class="ts-map-direction wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
    <div class="container">
    <div class="row">
        <div class="col-lg-5">
            <h2 class="column-title">
                <span>Reach us</span>
                Get Direction to the
                Event Hall
            </h2>

            <div class="ts-map-tabs">
                <ul class="nav" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Venue</a>
                </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content direction-tabs">
                <div role="tabpanel" class="tab-pane active" id="profile">
                    <div class="direction-tabs-content">
                        <h3>The University of Faisalabad</h3>
                        <p class="derecttion-vanue">
                            Health Sciences Wing, Sargodha Road<br/>
                            Faisalabad
                        </p>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="contact-info-box">
                                    <!-- <h3>Tickets info </h3> -->
                                    <p><strong>Phone:</strong> +92 330 198 0607</p>
                                    <p><strong>Email: </strong> <a href="mailto:dcexam@tuf.edu.pk">dcexam@tuf.edu.pk</a></p>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="contact-info-box">
                                    <!-- <h3>Programme Details </h3> -->
                                    <p><strong>Phone:</strong> 041 111 111 883</p>
                                </div>
                            </div>
                            </div><!-- row end-->
                    </div><!-- direction tabs end-->
                </div><!-- tab pane end-->

                </div>

            </div><!-- map tabs end-->

        </div><!-- col end-->
        <div class="col-lg-6 offset-lg-1">
            <div class="ts-map">
                <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3402.0444009752364!2d73.07165209858422!3d31.49546335524307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392241f04e47505f%3A0xdc65c983536934ee!2sThe%20University%20of%20Faisalabad!5e0!3m2!1sen!2s!4v1631103373761!5m2!1sen!2s"></iframe>
                </div>

                </div>
            </div>
        </div>
    </div><!-- col end-->
    </div><!-- container end-->
    <div class="speaker-shap">
    <img class="shap1 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="300ms" src="{{asset('front/images/shap/Direction_memphis3.png')}}" alt="">
    <img class="shap2 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="400ms" src="{{asset('front/images/shap/Direction_memphis2.png')}}" alt="">
    <img class="shap3 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="500ms" src="{{asset('front/images/shap/Direction_memphis4.png')}}" alt="">
    <img class="shap4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms" src="{{asset('front/images/shap/Direction_memphis1.png')}}" alt="">
    </div>
</section>
<!-- ts map direction end-->

@endsection
@push('js')
    <script>
        (function ($) {
            $('#defaultCountdown').countdown({ until: new Date(2021, 9, 16) }); // year, month, date, hour
        })(jQuery);
    </script>
@endpush
