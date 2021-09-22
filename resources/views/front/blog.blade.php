@extends('layouts.site')

@section('content')

    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <ul>
                            <li>{{__('messages.blog')}} </li>
                            <li><a href="{{route('home') }}">{{__('messages.Home')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Start Blog Section -->
    <section class="blog-area pt-70 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        @isset($news)
                        @foreach($news as $new)
                        <div class="col-lg-6 col-md-6 blog-item">
                            <div class="single-blog">
                                <div class="post-img">
                                    <a href="#">
                                        <img src="{{asset( $new->news_img)}}" alt="" />
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-date">
                                        <ul class="blog-list">
                                            <li>
                                                <h6>{{   date('Y-m-d', strtotime ($new-> created_at))  }}</h6>
                                            </li>
                                            <li><span class="blog-inline-sep">|</span></li>
                                            <li><a href="#">Technology</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-body-title">
                                        <h3><a href="{{URL::to('detail/'.$new->id) }}">{{ $new->title}}</a></h3>
                                    </div>
                                    <div class="blog-body-text">
                                        <p>{{ str_limit($new->description,50,'...') }}</p>
                                    </div>
                                    <div class="blog-bottom-text-link"> <a href="{{URL::to('detail/'.$new->id) }}">{{__('messages.read more')}}</a></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endisset

                        <div class="col-lg-12 col-md-12">
                            <div class="pagination-area mt-45">

                                <a href="{{  $news->previousPageUrl()  }}" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
                                <a href="{{ $news->count()  }}" class="page-numbers">{{ $news->currentPage() }}  </a>

                                <a href="{{  $news->nextPageUrl()   }}" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area mt-35" id="secondary">
                        <section class="widget widget_search">
                            <form class="search-form search-top">
                                <label> <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search...">
                                </label>
                                <button type="submit"> <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </section>
                        <section class="widget widget_inspire_posts_thumb">
                            <h3 class="widget-title">{{__('messages.Recent Posts')}}</h3>
                            @isset($newss)
                            @foreach($newss as $key=> $new)


                            <article class="item">
                                <a href="#" class="thumb"> <span class="fullimage cover bg{{$key+1}}" role="img"  ><img src="{{asset( $new->news_img)}}" ></span>
                                </a>
                                <div class="info">
                                    <span>{{   date('Y-m-d', strtotime ($new-> created_at))  }}</span>
                                    <h4 class="title usmall">
                                        <a href="{{URL::to('detail/'.$new->id) }}">{{ $new->title}}</a>
                                    </h4>
                                </div>
                            </article>
                            @endforeach
                            @endisset

                        </section>
                        {{--<section class="widget widget_categories">--}}
                            {{--<h3 class="widget-title">Categories</h3>--}}
                            {{--<ul>--}}
                                {{--<li> <a href="#">Cyber Solutions</a>--}}
                                {{--</li>--}}
                                {{--<li> <a href="#">Digital Marketing</a>--}}
                                {{--</li>--}}
                                {{--<li> <a href="#">Consulting</a>--}}
                                {{--</li>--}}
                                {{--<li> <a href="#">Tips & Guide</a>--}}
                                {{--</li>--}}
                                {{--<li> <a href="#">IT Services</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</section>--}}
                        {{--<section class="widget widget_recent_entries">--}}
                            {{--<h3 class="widget-title">Recent Posts</h3>--}}
                            {{--<ul>--}}
                                {{--<li> <a href="#">What Could 5g Change About The Way We Use Technology?</a>--}}
                                {{--</li>--}}
                                {{--<li> <a href="#">3 Factors To Consider When Choosing A Managed It Services</a>--}}
                                {{--</li>--}}
                                {{--<li> <a href="#">How To Quickly Shift To A Work-from-home Business Model</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</section>--}}
                        {{--<section class="widget widget_archive">--}}
                            {{--<h3 class="widget-title">Archives</h3>--}}
                            {{--<ul>--}}
                                {{--<li> <a href="#">January 2021</a>--}}
                                {{--</li>--}}
                                {{--<li> <a href="#">February 2021</a>--}}
                                {{--</li>--}}
                                {{--<li> <a href="#">March 2021</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}

                        {{--<section class="widget widget_tag_cloud">--}}
                            {{--<h3 class="widget-title">Tags</h3>--}}
                            {{--<div class="tagcloud section-bottom">--}}
                                {{--<a href="#"> IT Solution--}}
                                    {{--<span class="tag-link-count"> (10)</span>--}}
                                {{--</a>--}}
                                {{--<a href="#">--}}
                                    {{--Managed Services--}}
                                    {{--<span class="tag-link-count"> (15)</span>--}}
                                {{--</a>--}}
                                {{--<a href="#">--}}
                                    {{--Digital Marketing--}}
                                    {{--<span class="tag-link-count"> (10)</span>--}}
                                {{--</a>--}}
                                {{--<a href="#">--}}
                                    {{--Industry--}}
                                    {{--<span class="tag-link-count"> (12)</span>--}}
                                {{--</a>--}}
                                {{--<a href="#">--}}
                                    {{--Cyber Solutions--}}
                                    {{--<span class="tag-link-count"> (7)</span>--}}
                                {{--</a>--}}
                                {{--<a href="#">--}}
                                    {{--Technology--}}
                                    {{--<span class="tag-link-count"> (3)</span>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</section>--}}
                    </aside>
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
      {{--<section class="mextreo-blog">--}}
    {{--<div class="container">--}}
    {{--<div class="mex-blog-top">--}}
    {{--<h6 class="ht-tittle" data-aos="fade-up" data-aos-duration="2000">أحدث الأخبار</h6>--}}
    {{--<h2 data-aos="fade-up" data-aos-duration="3000">من مدونتنا</h2>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--@isset($news)--}}
    {{--@foreach($news as $new)--}}
    {{--<div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">--}}
    {{--<div class="single-blog">--}}
    {{--<img src="{{asset( $new->news_img)}} " alt="">--}}
    {{--<div class="sb-content">--}}
    {{--<a href="{{URL::to('detail/'.$new->id) }}">--}}
    {{--<h3>{{$new->news_title}} </h3>--}}
    {{--<p>{{ str_limit($new->news_desc,35,'...') }}--}}
    {{--</a>--}}
    {{--<p>{{$new->created_at->toDateString() }}</p>--}}
    {{--<a href="{{URL::to('detail/'.$new->id) }}" class="read-more-btn-1">اقرأ أكثر<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--@endforeach--}}
    {{--@endisset--}}
    {{--</div>--}}


            <div class="col-md-12">
                <div class="pagination-area">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li  >    {{ $news->links()  }}  </li>


                        </ul>
                    </nav>
                </div>
            </div>
            </div>
        </div>
    </section>



    {{--<section class="blog-page-area">--}}
        {{--<div class="container">--}}
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

                {{--<div class="col-md-12">--}}
                    {{--<div class="pagination-area">--}}
                        {{--<nav aria-label="Page navigation">--}}
                            {{--<ul class="pagination">--}}
                                {{--<li  >    {{ $news->links()  }}  </li>--}}


                            {{--</ul>--}}
                        {{--</nav>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


@stop
