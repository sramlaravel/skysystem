@extends('layouts.site')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <ul>
                            <li><a href="{{route('Services')}}">{{__('messages.Services Details')}}</a></li>
                            <li><a href="{{route('home')}}">{{__('messages.Home')}}</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Services Details Area -->
    <section class="services-details-area section-padding">
        <div class="container">
            <div class="services-details-overview">
                @isset($Service)
                @foreach($Service as $slider)
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="services-details-image services-details-image-1">
                            <img src="{{asset($slider->image)}}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="services-details-desc" style="    text-align: right;">
                            <h3>{{$slider->title}}</h3>
                            <p><strong>{{$slider->title}}</strong></p>

                            <ul class="feature-list-box">
                                <li><i class="icofont-tick-mark"></i>{{$slider->description}}</li>
                                {{--<li><i class="icofont-tick-mark"></i> Web Design</li>--}}
                                {{--<li><i class="icofont-tick-mark"></i> Logo & Branding</li>--}}
                                {{--<li><i class="icofont-tick-mark"></i> Brand Identity</li>--}}
                                {{--<li><i class="icofont-tick-mark"></i> Creative / Art Direction</li>--}}
                                {{--<li><i class="icofont-tick-mark"></i> Custom Web Development (Ruby/PHP)</li>--}}
                                {{--<li><i class="icofont-tick-mark"></i> WordPress & Custom CMS</li>--}}
                            </ul>
                            @endforeach
                            @endisset
                            <div class="features-text">
                                <h4>Network Design & Implementation</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Services Details Area -->

    <!-- Start Services Details Title Section -->
    <section class="services-details-bg-title-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-details-bg-title-content text-center">
                        <h2>Full Stack Development Services</h2>
                        <h3>Improve your business processes with the help of our custom platform development.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Details Title Section -->

    <!-- Start Services Details Area -->
    <section class="services-details-area section-padding">
        <div class="container">
            <div class="services-details-overview">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="services-details-desc">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="features-text">
                                        <h4>Front End Development:</h4>
                                        <ul class="feature-list-box">
                                            <li><i class="icofont-tick-mark"></i> HTML</li>
                                            <li><i class="icofont-tick-mark"></i> CSS</li>
                                            <li><i class="icofont-tick-mark"></i> JavaScript</li>
                                            <li><i class="icofont-tick-mark"></i> React</li>
                                        </ul>
                                    </div>
                                    <div class="features-text">
                                        <h4>Security Services</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation ullamco laboris nisi commodo consequat.</p>
                                    </div>
                                    <div class="features-text">
                                        <h4>API Integrations</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation ullamco laboris nisi commodo consequat.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="features-text">
                                        <h4>Back End Development:</h4>
                                        <ul class="feature-list-box">
                                            <li><i class="icofont-tick-mark"></i> PHP</li>
                                            <li><i class="icofont-tick-mark"></i> Ruby</li>
                                            <li><i class="icofont-tick-mark"></i> Python</li>
                                            <li><i class="icofont-tick-mark"></i> CMS</li>
                                        </ul>
                                    </div>
                                    <div class="features-text">
                                        <h4>Network Virtualization</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation ullamco laboris nisi commodo consequat.</p>
                                    </div>
                                    <div class="features-text">
                                        <h4>Application Development</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation ullamco laboris nisi commodo consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Details Area -->
    <!-- Start Hire Section -->
    <section class="hire-area pb-100">
        <div class="container">
            <div class="hire-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hire-content position-relative z-index text-center">
                            <h2>Discuss An Upcoming IT Project</h2>
                            <h5>For A Free Consultation Call Today  +707 555-321</h5>
                            <a href="#0" class="btn btn-primary mt-25">Contact Us Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hire Section -->
    <!-- Start Partner Logo Section -->
    <div class="partner-area">
        <div class="container">
            <div id="partner-carousel" class="partner-carousel owl-carousel owl-theme owl-loaded">
                <div class="partner-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-1.png" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-2.png" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-3.png" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-4.png" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-5.png" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-6.png" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-7.png" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-8.png" alt="partner-image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Logo Section -->
@stop
