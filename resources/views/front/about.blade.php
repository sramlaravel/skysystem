@extends('layouts.site')

@section('content')

    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <ul>

                            <li><a href="{{route('Services')}}"> {{__('messages.About')}}</a></li>
                            <li><a href="{{route('home')}}">{{__('messages.Home')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Start About Section -->
    <section class="about-area section-padding">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-image">
                        <img src="{{ isset($abouts[2]) ? asset($abouts[2]->image) : '' }}" alt="img">
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
    <!-- Start How It Works Section -->
    <section class="workprocess-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h6>{{__('messages.process')}}</h6>
                        <h2>{{__('messages.profesional')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="workprocess-single-item">
                        <div class="workprocess-icon-box">
                            <span class="workprocess-icon-number"></span>
                        </div>
                        <div class="workprocess-info">
                            <h3>{{__('messages.delivary')}}</h3>
                            <p>{{__('messages.delivary1')}}</p>
                        </div>
                        <div class="workprocess-number-bg"><span></span></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="workprocess-single-item">
                        <div class="workprocess-icon-box">
                            <span class="workprocess-icon-number"></span>
                        </div>
                        <div class="workprocess-info">
                            <h3>{{__('messages.DESIGNING')}}</h3>
                            <p>{{__('messages.DESIGNING1')}}</p>
                        </div>
                        <div class="workprocess-number-bg"><span></span></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="workprocess-single-item">
                        <div class="workprocess-icon-box">
                            <span class="workprocess-icon-number"></span>
                        </div>
                        <div class="workprocess-info">
                            <h3>{{__('messages.IDEA')}}</h3>
                            <p>{{__('messages.IDEA1')}}</p>
                        </div>
                        <div class="workprocess-number-bg"><span>1</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End How It Works Section -->
    <!-- Start Counter Section -->
    {{--<section class="counter-area">--}}
        {{--<div class="container">--}}
            {{--<div class="counter-wrapper-box">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-lg-3 col-md-6 counter-item">--}}
                        {{--<div class="single-counter2">--}}
                            {{--<div class="counter-contents">--}}
                                {{--<h2>--}}
                                    {{--<span class="counter-number">20</span>--}}
                                    {{--<span>+</span>--}}
                                {{--</h2>--}}
                                {{--<h3 class="counter-heading">Years In Business</h3>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-3 col-md-6 counter-item">--}}
                        {{--<div class="single-counter2">--}}
                            {{--<div class="counter-contents">--}}
                                {{--<h2>--}}
                                    {{--<span class="counter-number">1.2</span>--}}
                                    {{--<span>k</span>--}}
                                {{--</h2>--}}
                                {{--<h3 class="counter-heading">Project Complete</h3>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-3 col-md-6 counter-item">--}}
                        {{--<div class="single-counter2">--}}
                            {{--<div class="counter-contents">--}}
                                {{--<h2>--}}
                                    {{--<span class="counter-number">750</span>--}}
                                    {{--<span>+</span>--}}
                                {{--</h2>--}}
                                {{--<h3 class="counter-heading">Reviews</h3>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-3 col-md-6 counter-item">--}}
                        {{--<div class="single-counter2">--}}
                            {{--<div class="counter-contents">--}}
                                {{--<h2>--}}
                                    {{--<span class="counter-number">150</span>--}}
                                    {{--<span>+</span>--}}
                                {{--</h2>--}}
                                {{--<h3 class="counter-heading">Team Members</h3>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
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
                        <div class="whychoose-number-bg"><span </span></div>
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
    <!-- Partner section -->
    <section class="partner-section-2 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h6>Trusted By Over 30,000</h6>
                        <h2>Our Customers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="partner-item-2">
                        <a href="#0">
                            <img src="assets/img/partner-logo/client-1.png" alt="image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="partner-item-2">
                        <a href="#0">
                            <img src="assets/img/partner-logo/client-2.png" alt="image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="partner-item-2">
                        <a href="#0">
                            <img src="assets/img/partner-logo/client-3.png" alt="image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="partner-item-2">
                        <a href="#0">
                            <img src="assets/img/partner-logo/client-4.png" alt="image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="partner-item-2">
                        <a href="#0">
                            <img src="assets/img/partner-logo/client-5.png" alt="image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="partner-item-2">
                        <a href="#0">
                            <img src="assets/img/partner-logo/client-6.png" alt="image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="partner-item-2">
                        <a href="#0">
                            <img src="assets/img/partner-logo/client-7.png" alt="image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="partner-item-2">
                        <a href="#0">
                            <img src="assets/img/partner-logo/client-8.png" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Partner section -->

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




    {{----}}
    {{----}}
    {{--<section class="breadcrumb-area">--}}
        {{--<img src="../assets/img/bg/innerpage-breadcrumb-bg-1.jpg" alt="" class="breadcrumb-bg">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="breadcrumb-box">--}}
                        {{--<h3 class="page-title">معلومات عنا</h3>--}}
                        {{--<ul class="breadcrumb-list">--}}
                            {{--<li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>--}}
                            {{--<li>معلومات عنا</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


    {{--<section class="about2-area">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="testimonial-img aboutp3-img">--}}
                        {{--<img src=" {{asset($about[0]->image)}}" alt="">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="section-text about1-text a2text">--}}
                        {{--<div class="section-titleV2">--}}
                            {{--<h3> حول {{ $about[0]->title }} </h3>--}}
                        {{--</div>--}}
                        {{--<p>{{ $about [0]->description }}--}}


                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="section-text about1-text a2text">--}}
                        {{--<div class="section-titleV2">--}}
                            {{--<h3>      قصتنا مع  {{ $about[1]->title }}  </h3>--}}
                        {{--</div>--}}
                        {{--<p>{{ $about [1]->description }}--}}
                        {{--</p>--}}

                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="aboutp4-img">--}}
                        {{--<img src=" {{asset($about[1]->image)}}" alt="">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


    {{--<section class="blog-area">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}

                {{--<div class="col-md-12">--}}
                    {{--<div class="section-titleV1">--}}
                        {{--<p>أخبارنا</p>--}}
                        {{--<h3>آخر المشاركات</h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--@isset($news)--}}
                {{--@foreach($news as $new)--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="single-blogV1">--}}
                            {{--<div class="sb-img">--}}
                                {{--<img src="{{asset( $new->news_img)}} " alt="">--}}
                            {{--</div>--}}
                            {{--<div class="sb-text">--}}
                                {{--<ul class="sb-meta">--}}
                                    {{--<li>بواسطة<a href="#">مشرف</a></li>--}}

                                    {{--<li>{{$new->created_at->toDateString() }}</li>--}}
                                {{--</ul>--}}
                                {{--<a href="{{URL::to('detail/'.$new->id) }}"><h4>{{$new->news_title}}</h4></a>--}}
                                {{--<p>{{ str_limit($new->news_desc,35,'...') }}--}}
                                {{--</p>--}}
                                {{--<a href="{{URL::to('detail/'.$new->id) }}" class="read-more-btn-1">اقرأ أكثر<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--@endforeach--}}
                {{--@endisset--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


@stop
