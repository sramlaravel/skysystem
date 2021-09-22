@extends('layouts.site')

@section('content')

    <!-- Start Page Title Area -->


    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <ul>

                            <li><a href="{{route('project')}}"> {{__('messages.project')}}</a></li>
                            <li><a href="{{route('home')}}">{{__('messages.Home')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Start Project Section -->
    <section class="project-area-4 pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h6>{{__('messages.project')}}</h6>
                        <h2> {{__('messages.Latest Projects')}} </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @isset($Apps)
                @foreach($Apps as $slider)
                <div class="col-lg-4 col-md-6">
                    <div class="single-project-4">
                        <div class="project-image-4">
                            <img src="{{asset( $slider->image)}}" alt="image">
                        </div>
                        <div class="image-hover-4">
                            <div class="overlay-text-4">
                                <h3><a   href="{{URL::to('project_detials/'.$slider->id) }}">{{ str_limit($slider->description,100,'...') }}  </a></h3>
                                <a href="{{URL::to('project_detials/'.$slider->id) }}" class="read-more">{{ $slider->title}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endisset

                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area mt-15">
            <i class="fas fa-angle-double t">{{$Apps->links()}}</i>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Projects Section -->
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
    <!-- Start Footer Section -->
@stop
