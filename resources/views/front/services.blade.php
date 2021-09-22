@extends('layouts.site')

@section('content')
    <section class="service-area-4 pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h6>IT Services</h6>
                        <h2>{{__('messages.Services')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @isset($Services)
                @foreach($Services as $slider)
                    <div class="col-lg-4 col-md-6 col-sm-12 services-item-4">
                        <a href="{{URL::to('services_detials/'.$slider->id) }}" class="single-services-4">
                            <div class="services-icon-4">
                                <i class="front-icon {{$slider->model}} icon"></i>
                                <i class="back-icon-4 {{$slider->model}} icon"></i>
                            </div>
                            <div class="services-text-4">
                                <h3>{{$slider->title}}</h3>
                                <p>{{ str_limit($slider->description,100,'...') }}  </p>
                            </div>
                            <div class="bg-back-icon-4">
                                <i class="{{$slider->model}} icon"></i>
                            </div>
                        </a>
                    </div>

                    {{--<div class="col-lg-4 col-md-6">--}}
                    {{--<div class="single-services-box">--}}
                    {{--<div class="services-icon">--}}
                    {{--<i class="{{$slider->model}} icon"></i>--}}
                    {{--</div>--}}
                    {{--<h3>{{$slider->title}}</h3>--}}
                    {{--<p>{{ str_limit($slider->description,100,'...') }}  </p>--}}
                    {{--<div class="services-btn">--}}
                    {{--<a href="single-services.html" class="services-btn-one">{{__('messages.read more')}} </a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                @endforeach
                @endisset
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-box">
                        <div class="services-icon">
                            <i class="machineLearning icon"></i>
                        </div>
                        <h3>Cyber Security</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
                        <div class="services-btn">
                            <a href="single-services.html" class="services-btn-one">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-box">
                        <div class="services-icon">
                            <i class="microservice icon"></i>
                        </div>
                        <h3>Business Improvement</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
                        <div class="services-btn">
                            <a href="single-services.html" class="services-btn-one">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-box">
                        <div class="services-icon">
                            <i class="cloudSecurity icon"></i>
                        </div>
                        <h3>Professional Services</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
                        <div class="services-btn">
                            <a href="single-services.html" class="services-btn-one">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-box">
                        <div class="services-icon">
                            <i class="iotSolutions icon"></i>
                        </div>
                        <h3>Cloud Services</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
                        <div class="services-btn">
                            <a href="single-services.html" class="services-btn-one">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">`
                    <div class="single-services-box">
                        <div class="services-icon">
                            <i class="migrationStrategies icon"></i>
                        </div>
                        <h3>Data Backup & Recovery</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
                        <div class="services-btn">
                            <a href="single-services.html" class="services-btn-one">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="services-more-btn-box text-center">

                        <a class="btn-primary" href="{{route('Services')}}">{{__('messages.More Services')}}  </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section -->
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
    <!-- End Partner Logo Section -->
@stop
