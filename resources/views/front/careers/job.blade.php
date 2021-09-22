@extends('layouts.site')

@section('content')
    <style>


        .news-section {
            position: relative;

            padding-top: 70px;
            margin-top: 50px;
        }

        .news-section .title-text {
            margin-bottom: 43px;
        }

        .single-news-content {
            position: relative;
            display: block;
            padding: 20px 20px 30px 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.10);
            transform: scale(1.0);
            transition: all 500ms ease;
        }

        .single-news-content:hover {
            transform: scale(1.05);
        }

        .single-news-content .image-box {
            position: relative;
            overflow: hidden;
            margin-bottom: 24px;
        }

        .single-news-content .lower-content h4 a {
            display: inline-block;
            line-height: 30px;
            margin-bottom: 7px;
            font-size: 18px;
        }

        .single-news-content .lower-content .time {
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 15px;
            color: #e9732c;
        }

        .single-news-content .lower-content p {
            word-break: break-all;
            margin-bottom: 22px;
        }

        .single-news-content .lower-content .theme-btn-two {
            padding: 4px 28px 6px 28px;
        }

        .news-section .news-post {
            position: relative;
            padding: 45px 30px 40px 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.10);
        }

        .news-section .news-post .single-post {
            position: relative;
            border-bottom: 1px solid #e5e5e5;
            padding-bottom: 22px;
            margin-bottom: 25px;
        }

    </style>
<section class="news-section blog-grid blog-page section-padding overlay-style-one sec-pad-2">
    <div class="container">
        <div class="heading text-center site-width featured" style="background-color: #2e4066;padding-bottom: 50px;  padding-top: 20px; ">
            <h2 class="heading_1" style="    color: #FFF;">  الوظائف الشاغرة  </h2>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <h3 class="text-center alt-color mb-4 mt-2"  style="    color: #FFF;">
                     </h3>
        </div>
        <div class="row">
            @if(count($job)>0)

            @foreach($job as $item)
                    <div class="col-md-6 col-sm-12 news-column">
                        <div class="single-news-content inner-box">
                            <figure class="image-box">
                                <img src="{{ asset($item->image)}}"
                                     alt="" width="310" height="350">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <div class="time">
                                                <h5 class="main-color">متطلبات الوظيفة</h5>
                                                <hr>
                                                <ul>
                                                    <li class="requirements_text_color"> {{$item->requirements}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <h4 class="m-2">
                                    <a href="{{ url('careers/apply/'.$item->id)}}">{{$item->location}}-{{$item->title}}</a>
                                </h4>
                                <div class="link pull-left">
                                    <a href="{{ url('careers/apply/'.$item->id) }}" class="theme-btn-two">تقديم</a>
                                </div>
                            </div>
                        </div>
                    </div>



                        @endforeach
                    @else
                        <h4>لاتوجد وظائف حاليا عزيز الزائر!!</h4>
                    @endif
            </div>

        <ul class="pagination centred clearfix d-flex justify-content-center">

            <li>{{ $job->links() }}   </li>
        </ul>


        </div>
    </div>
</section>
 @stop
