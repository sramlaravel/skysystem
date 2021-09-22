@extends('layouts.site')

@section('content')


    <!-- Start Home Slider Area -->
    <div class="home-slider-area">
        <div class="home-slider flickity-dots-absolute" data-flickity='{ "bgLazyLoad": 1, "bgLazyLoad": true, "fade": true, "prevNextButtons": true, "autoPlay": 7000, "pauseAutoPlayOnHover": false }'>
            @isset($sliders)
            @foreach($sliders as $slider)
            <div class="home-slider-single-item" data-flickity-bg-lazyload="{{asset($slider -> image)}}">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col">
                            <div class="home-slider-content">
                                <h1 class="home-slider-title">  {{$slider->title}}</h1>
                                <div class="home-slider-description">
                                    <p>  {{$slider->description}}</p>
                                </div>
                                <div class="home-slider-btn-box">
                                    <a href="#0" class="btn btn-primary mr-15">{{__('messages.Contact Us')}}</a>
                                    <a href="#0" class="btn btn-primary">{{__('messages.IT Solution')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endisset
            <div class="home-slider-single-item" data-flickity-bg-lazyload="{{asset('assets/img/slider-2.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home-slider-content">
                                <h1 class="home-slider-title">We Provide Best Technology Solutions</h1>
                                <div class="home-slider-description">
                                    <p>We are passionate about bringing enterprise-level productivity, scalability, and security to small and medium businesses.</p>
                                </div>
                                <div class="home-slider-btn-box">
                                    <a href="#0" class="btn btn-primary mr-15">How it Works</a>
                                    <a href="#0" class="btn btn-primary">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-slider-single-item" data-flickity-bg-lazyload="{{asset('assets/img/slider-3.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home-slider-content">
                                <h1 class="home-slider-title">Our IT Experience Ensures Your IT Success</h1>
                                <div class="home-slider-description">
                                    <p>We are passionate about bringing enterprise-level productivity, scalability, and security to small and medium businesses.</p>
                                </div>
                                <div class="home-slider-btn-box">
                                    <a href="#0" class="btn btn-primary mr-15">About Us</a>
                                    <a href="#0" class="btn btn-primary">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Home Slider Area -->
    <!-- Start About Section -->
    <section class="about-area section-padding">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-image">
                        <img src="{{ isset($abouts[0]) ? $abouts[0]->image : '' }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-content">
                        <h6>{{__('messages.About us')}}</h6>
                        <h2>{{ isset($abouts[0]) ? $abouts[0]->title : '' }}</h2>
                        <p>{{ isset($abouts[0]) ? $abouts[0]->description : '' }}</p>
                        <ul class="about-list-box">
                            <li>
                                <div class="about-list-icon">
                                    <i class="icofont-certificate-alt-1"></i>
                                </div>
                                <div class="about-list-info">
                                    <h3>{{ isset($abouts[1]) ? $abouts[1]->title : '' }}</h3>
                                    <p>{{ isset($abouts[1]) ? $abouts[1]->description : '' }} </p>
                                </div>
                            </li>
                            <li>
                                <div class="about-list-icon">
                                    <i class="icofont-safety"></i>
                                </div>
                                <div class="about-list-info">
                                    <h3>{{ isset($abouts[2]) ? $abouts[2]->title : '' }}</h3>
                                    <p>{{ isset($abouts[2]) ? $abouts[2]->description : '' }} </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- Start Call Button Section -->
    <section class="consultation-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="consultation-content text-center">
                        <h2>{{__('messages.More Information')}}</h2>
                        <p>{{__('messages.With Experience')}}</p>
                        <a href="{{route('about')}}" class="btn btn-primary"> {{__('messages.read more')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call Button Section -->
    <!-- Start Services Category Section -->
    {{--<section class="services-category-area pt-70">--}}
        {{--<div class="container">--}}
            {{--<div class="row d-flex align-items-center">--}}
                {{--<div class="col-lg-6 col-md-12 col-sm-12 home-services-category-box-item">--}}
                    {{--<a href="#0" class="services-single-category">--}}
                        {{--<div class="services-single-category-icon">--}}
                            {{--<i class="machineLearning icon"></i>--}}
                        {{--</div>--}}
                        {{--<div class="services-single-category-info">--}}
                            {{--<h3>IT Solutions</h3>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="col-lg-6 offset-lg-4">--}}
        {{--<a href="#0" class="services-single-category">--}}
            {{--<div class="services-single-category-icon">--}}
                {{--<i class="devops icon"></i>--}}
            {{--</div>--}}
            {{--<div class="services-single-category-info">--}}
                {{--<h3>{{__('messages.Services')}}</h3>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>--}}
            {{--</div>--}}
        {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    {{--<!-- End Services Category Section -->--}}
    <!-- Start Services Section -->
{{--x--}}
{{--Start Services Section -->--}}
    <section class="service-area-4 pt-100 pb-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="section-title">
                                    <h6> </h6>
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
                <div class="col-lg-4 col-md-6">
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

                        <a class="btn-primary" href="{{route('Services')}}"> {{__('messages.More Services')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->
    <!-- Start Counter Section -->
    <section class="counter-area2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 counter-item">
                    <div class="single-counter2">
                        <div class="counter-contents">
                            <h2>
                                <span class="counter-number">20</span>
                                <span>+</span>
                            </h2>
                            <h3 class="counter-heading">Years In Business</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 counter-item">
                    <div class="single-counter2">
                        <div class="counter-contents">
                            <h2>
                                <span class="counter-number">1.2</span>
                                <span>k</span>
                            </h2>
                            <h3 class="counter-heading">Project Complete</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 counter-item">
                    <div class="single-counter2">
                        <div class="counter-contents">
                            <h2>
                                <span class="counter-number">750</span>
                                <span>+</span>
                            </h2>
                            <h3 class="counter-heading">Reviews</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 counter-item">
                    <div class="single-counter2">
                        <div class="counter-contents">
                            <h2>
                                <span class="counter-number">150</span>
                                <span>+</span>
                            </h2>
                            <h3 class="counter-heading">Team Members</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Section -->
    <!-- Start Why Choose Us Section -->
    <section class="whychoose-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h6> {{__('messages.differnet')}}  </h6>
                        <h2> {{__('messages.Why Choose Us')}}    </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="whychoose-single-item">
                        <div class="whychoose-icon-box">
                            <span class="whychoose-icon-number">*</span>
                        </div>
                        <div class="whychoose-info">
                            <h3>  {{__('messages.Staff')}} </h3>
                            <p>{{__('messages.staff1')}}  </p>
                        </div>
                        <div class="whychoose-number-bg"><span> </span></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="whychoose-single-item">
                        <div class="whychoose-icon-box">
                            <span class="whychoose-icon-number"> </span>
                        </div>
                        <div class="whychoose-info">
                            <h3>{{__('messages.Performance')}}  </h3>
                            <p>{{__('messages.Performance1')}}  </p>
                        </div>
                        <div class="whychoose-number-bg"><span> </span></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="whychoose-single-item">
                        <div class="whychoose-icon-box">
                            <span class="whychoose-icon-number"> </span>
                        </div>
                        <div class="whychoose-info">
                            <h3>{{__('messages.advanc')}}
                            </h3>
                            <p>{{__('messages.advanc1')}}  </p>
                        </div>
                        <div class="whychoose-number-bg"><span> </span></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="whychoose-single-item">
                        <div class="whychoose-icon-box">
                            <span class="whychoose-icon-number"> </span>
                        </div>
                        <div class="whychoose-info">
                            <h3>
                                {{__('messages.coding')}} </h3>
                            <p>  {{__('messages.coding1')}}</p>
                        </div>
                        <div class="whychoose-number-bg"><span> </span></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="whychoose-single-item">
                        <div class="whychoose-icon-box">
                            <span class="whychoose-icon-number"> </span>
                        </div>
                        <div class="whychoose-info">
                            <h3>   {{__('messages.IT')}} </h3>
                            <p>{{__('messages.IT1')}} </p>
                        </div>
                        <div class="whychoose-number-bg"><span> </span></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="whychoose-single-item">
                        <div class="whychoose-icon-box">
                            <span class="whychoose-icon-number"> </span>
                        </div>
                        <div class="whychoose-info">
                            <h3>  {{__('messages.price')}} </h3>
                            <p>  {{__('messages.price1')}}  </p>
                        </div>
                        <div class="whychoose-number-bg"><span> </span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Why Choose Us Section -->
    <!-- Start Project Section -->
    <section class="project-flip-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h6>{{__('messages.Featured Works')}}</h6>
                        <h2></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @isset($items)

                    <div class="project-flip-list">
                        <ul class="nav" id="project-flip-flters">
                            <li class="filter filter-active" data-filter=".all"> </li>
                            <li class="filter" data-filter=".itsolution">{{$items[0]->name}} </li>
                            <li class="filter" data-filter=".digitalsolution">{{$items[1]->name}}</li>
                            <li class="filter" data-filter=".appsdevelopment">{{$items[2]->name}}</li>
                        </ul>
                    </div>

                    @endisset
                </div>

                <div class="project-flip-container">
                    <!-- project-item -->
                    @isset($Apps)
                    @foreach($Apps as $slider)
                    <div class="col-lg-4 col-md-6 project-flip-grid all itsolution">
                        <div class="project-flip-box">
                            <div class="project-flip-content">
                                <div class="project-flip-box-front text-center">
                                    <img src="{{asset( $slider->image)}}" alt="project image">
                                    <div class="inner">
                                        <h3>{{ $slider->title}}</h3>
                                        <p> {{$slider->description}}</p>
                                    </div>
                                </div>
                                <div class="project-flip-box-back text-center">
                                    <img src="{{asset( $slider->image)}}" alt="project image">
                                    <div class="inner">
                                        <h3>{{ $slider->title}}</h3>
                                        <p>{{ str_limit($slider->description,100,'...') }}</p>
                                        <a href="{{URL::to('project_detials/'.$slider->id) }}">   <button class="btn-primary flip-box-button">   View Project</button> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
                @endisset

                    <!-- project-item -->
                    @isset($its)
                    @foreach($its as $slider)
                    <div class="col-lg-4 col-md-6 project-flip-grid all appsdevelopment">
                        <div class="project-flip-box">
                            <div class="project-flip-content">
                                <div class="project-flip-box-front text-center">
                                    <img src="{{asset( $slider->image)}}" alt="project image">
                                    <div class="inner">
                                        <h3>{{ $slider->title}}</h3>
                                        <p>{{$slider->description}}</p>
                                    </div>
                                </div>
                                <div class="project-flip-box-back text-center">
                                    <img src="{{asset( $slider->image)}}" alt="project image">
                                    <div class="inner">
                                        <h3>{{ $slider->title}}</h3>
                                        <p> {{ str_limit($slider->description,100,'...') }}}</p>
                                        <a href="{{URL::to('project_detials/'.$slider->id) }}">   <button class="btn-primary flip-box-button">   {{__('messages.View Project')}}</button> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endisset
                    <!-- project-item -->
                    <div class="col-lg-4 col-md-6 project-flip-grid all digitalsolution">
                        <div class="project-flip-box">
                            <div class="project-flip-content">
                                <div class="project-flip-box-front text-center">
                                    <img src="assets/img/projects/projects-3.jpg" alt="project image">
                                    <div class="inner">
                                        <h3>Technology Solutions</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
                                    </div>
                                </div>
                                <div class="project-flip-box-back text-center">
                                    <img src="assets/img/projects/projects-3.jpg" alt="project image">
                                    <div class="inner">
                                        <h3>Technology Solutions</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
                                        <button class="btn-primary flip-box-button">View Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- project-item -->
                    <div class="col-lg-4 col-md-6 project-flip-grid all itsolution">
                        <div class="project-flip-box">
                            <div class="project-flip-content">
                                <div class="project-flip-box-front text-center">
                                    <img src="assets/img/projects/projects-4.jpg" alt="project image">
                                    <div class="inner">
                                        <h3>Web Development</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
                                    </div>
                                </div>
                                <div class="project-flip-box-back text-center">
                                    <img src="assets/img/projects/projects-3.jpg" alt="project image">
                                    <div class="inner">
                                        <h3>Web Development</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
                                        <button class="btn-primary flip-box-button">View Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- project-item -->
                    <div class="col-lg-4 col-md-6 project-flip-grid all digitalsolution">
                        <div class="project-flip-box">
                            <div class="project-flip-content">
                                <div class="project-flip-box-front text-center">
                                    <img src="assets/img/projects/projects-5.jpg" alt="project image">
                                    <div class="inner">
                                        <h3>Digital Marketing</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
                                    </div>
                                </div>
                                <div class="project-flip-box-back text-center">
                                    <img src="assets/img/projects/projects-1.jpg" alt="project image">
                                    <div class="inner">
                                        <h3>Digital Marketing</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
                                        <button class="btn-primary flip-box-button">View Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- project-item -->
                    <div class="col-lg-4 col-md-6 project-flip-grid all appsdevelopment">
                        <div class="project-flip-box">
                            <div class="project-flip-content">
                                <div class="project-flip-box-front text-center">
                                    <img src="assets/img/projects/projects-6.jpg" alt="project image">
                                    <div class="inner">
                                        <h3>Trouble Shooting</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
                                    </div>
                                </div>
                                <div class="project-flip-box-back text-center">
                                    <img src="assets/img/projects/projects-3.jpg" alt="project image">
                                    <div class="inner">
                                        <h3>Trouble Shooting</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
                                        <button class="btn-primary flip-box-button">View Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- project more button -->
                <div class="col-lg-12 col-md-12">
                    <div class="project-flip-more-btn-box text-center">

                        <a class="btn-primary" href="{{route('project')}}">{{__('messages.View All Projects')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Project Section -->

    <!-- Start Testimonials Section -->
    {{--<section class="testimonial-area section-padding">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-12">--}}
                    {{--<div class="section-title">--}}
                        {{--<h6>What Our Client Say</h6>--}}
                        {{--<h2>Resent Feedback</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-12 col-md-12">--}}
                    {{--<div id="testimonial-slide" class="owl-carousel owl-theme owl-loaded owl-drag">--}}
                        {{--<!-- testimonials item -->--}}
                        {{--<div class="single-testimonial">--}}
                            {{--<div class="testimonial-avatar-img">--}}
                                {{--<img src="{{asset('assets/img/client/testimonial-1.jpg')}}" alt="testimonial">--}}
                                {{--<div class="testimonial-bio-info">--}}
                                    {{--<h3 class="name">Stevie Wills</h3><span>Founder of Apple</span>--}}
                                    {{--<div class="rating-box">--}}
                                        {{--<ul>--}}
                                            {{--<li><i class="fa fa-star"></i>--}}
                                            {{--</li>--}}
                                            {{--<li><i class="fa fa-star"></i>--}}
                                            {{--</li>--}}
                                            {{--<li><i class="fa fa-star"></i>--}}
                                            {{--</li>--}}
                                            {{--<li><i class="fa fa-star"></i>--}}
                                            {{--</li>--}}
                                            {{--<li><i class="fa fa-star"></i>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<img class="quote" src="{{asset('assets/img/client/quote-1.svg')}}" alt="icon">--}}
                            {{--</div>--}}
                            {{--<div class="testimonial-content">--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- testimonials item -->--}}
                        {{--<div class="single-testimonial">--}}
                            {{--<div class="testimonial-avatar-img">--}}
                                {{--<img src="{{asset('assets/img/client/testimonial-2.jpg')}}" alt="testimonial">--}}
                                {{--<div class="testimonial-bio-info">--}}
                                    {{--<h3 class="name">Rose Hopkins</h3><span>Founder of Apple</span>--}}
                                    {{--<div class="rating-box">--}}
                                        {{--<ul>--}}
                                            {{--<li><i class="fa fa-star"></i>--}}
                                            {{--</li>--}}
                                            {{--<li><i class="fa fa-star"></i>--}}
                                            {{--</li>--}}
                                            {{--<li><i class="fa fa-star"></i>--}}
                                            {{--</li>--}}
                                            {{--<li><i class="fa fa-star"></i>--}}
                                            {{--</li>--}}
                                            {{--<li><i class="fa fa-star"></i>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<img class="quote" src="{{asset('assets/img/client/quote-2.svg')}}" alt="icon">--}}
                            {{--</div>--}}
                            {{--<div class="testimonial-content">--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- testimonials item -->--}}
                        {{--<div class="single-testimonial">--}}
                            {{--<div class="testimonial-avatar-img">--}}
                                {{--<img src="{{asset('assets/img/client/testimonial-3.jpg')}}" alt="testimonial">--}}
                            {{--<div class="testimonial-bio-info">--}}
                                {{--<h3 class="name">Ellis Austin</h3><span>Founder of Apple</span>--}}
                                {{--<div class="rating-box">--}}
                                    {{--<ul>--}}
                                        {{--<li><i class="fa fa-star"></i>--}}
                                        {{--</li>--}}
                                        {{--<li><i class="fa fa-star"></i>--}}
                                        {{--</li>--}}
                                        {{--<li><i class="fa fa-star"></i>--}}
                                        {{--</li>--}}
                                        {{--<li><i class="fa fa-star"></i>--}}
                                        {{--</li>--}}
                                        {{--<li><i class="fa fa-star"></i>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<img class="quote" src="{{asset('assets/img/client/quote-1.svg')}}" alt="icon">--}}
                            {{--</div>--}}
                            {{--<div class="testimonial-content">--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- testimonials item -->--}}
                        {{--<div class="single-testimonial">--}}
                            {{--<div class="testimonial-avatar-img">--}}
                                {{--<img src="{{asset('assets/img/client/testimonial-4.jpg')}}" alt="testimonial">--}}
                                {{--<div class="testimonial-bio-info">--}}
                                    {{--<h3 class="name">Zahra Burnett</h3><span>Founder of Apple</span>--}}
                                    {{--<div class="rating-box">--}}
                                        {{--<ul>--}}
                                            {{--<li><i class="fa fa-star"></i>--}}
                                            {{--</li>--}}
                                            {{--<li><i class="fa fa-star"></i>--}}
                                            {{--</li>--}}
                                            {{--<li><i class="fa fa-star"></i>--}}
                                            {{--</li>--}}
                                            {{--<li><i class="fa fa-star"></i>--}}
                                            {{--</li>--}}
                                            {{--<li><i class="fa fa-star"></i>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<img class="quote" src="{{asset('assets/img/client/quote-2.svg')}}" alt="icon">--}}
                            {{--</div>--}}
                            {{--<div class="testimonial-content">--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- End Testimonials Section -->
    <!-- Start Blog Section -->
    <section class="blog-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h6>{{__('messages.OUR LATEST BLOG')}}</h6>
                        <h2> {{__('messages.News & Updates')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                @isset($news)
                @foreach($news as $slider)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="post-img">
                            <a href="#">
                                <img src="{{asset( $slider->news_img)}}" alt="" />
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-date">
                                <ul class="blog-list">
                                    <li>
                                        <h6>{{   date('Y-m-d', strtotime ($slider-> created_at))  }}</h6>
                                    </li>
                                    <li><span class="blog-inline-sep">|</span></li>
                                    <li><a href="#">Technology</a></li>
                                </ul>
                            </div>
                            <div class="blog-body-title">
                                <h3><a href="{{URL::to('detail/'.$slider->id) }}">{{ $slider->title}}</a></h3>
                            </div>
                            <div class="blog-body-text">
                                <p>{{ str_limit($slider->description,50,'...') }}</p>
                            </div>
                            <div class="blog-bottom-text-link"> <a href="{{URL::to('detail/'.$slider->id) }} ">  {{__('messages.read more')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endisset

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="blog-more-btn-box mt-45 text-center">

                        <a href="{{route('blog')}}" class="btn btn-primary">{{__('messages.View All Blog')}} </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section -->
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
                        <img src="{{asset('assets/img/partner-logo/client-1.png')}}" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="{{asset('assets/img/partner-logo/client-2.png')}}" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="{{asset('assets/img/partner-logo/client-3.png')}}" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="{{asset('assets/img/partner-logo/client-4.png')}}" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="{{asset('assets/img/partner-logo/client-5.png')}}" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="{{asset('assets/img/partner-logo/client-6.png')}}" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="{{asset('assets/img/partner-logo/client-7.png')}}" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="{{asset('assets/img/partner-logo/client-8.png')}}" alt="partner-image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Logo Section
  @stop
