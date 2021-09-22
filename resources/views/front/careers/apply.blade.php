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
            /* padding: 4px 28px 6px 28px; */
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
        <div class="row mt-5 pt-3">
           
            @include('admin.includes.alerts.success')
            @include('admin.includes.alerts.errors')
             <div class="col-md-6">
                 <h3 class="text-center alt-color mb-4 mt-2">
                    نسعد بأن تكون من عالئنتا               </h3>

                <!-- Contact Form -->
                 @foreach($newsDetail as $n)
                <form id="contact_form" name="contact_form" class="" action="{{route('fileUpload',['id' =>$n->id])}}" method="post" enctype='multipart/form-data'>
                    @endforeach
                    @csrf
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input name="name" class="form-control" type="text" placeholder="اسم المتقدم"   value="{{Request::old('name')}}"  required="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input name="age" class="form-control form__field phone  num required"type="text"  placeholder="العمر"  value="{{Request::old('age')}}"  required="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input name="degree" class="form-control" type="text" placeholder="المؤهل" value="{{Request::old('degree')}}"   required="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input name="email" class="form-control" type="email" placeholder="البريد الإلكتروني" value="{{Request::old('email')}}"  >
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">


                            <input name="phone"   type="text"  placeholder="التلفون" value="{{Request::old('phone')}}" class="form-control  form__field phone  num required" >
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input name="address" class="form-control" type="text" placeholder="عنوان السكن"  value="{{Request::old('address')}}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                 <textarea name="skills" class="form-control" rows="3" type="text"  placeholder="الكفاءات والخبرات"  value="{{Request::old('skills')}}" aria-required="true"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 row">
                            <div class="col-sm-4"><label class="col-form-label">السيرة الذاتية</label></div>
                            <div class="form-group col-sm-8">
                                <input class="form-control" id="CvUpload" name="cv" type="file" value="{{Request::old('cv')}}" accept="application/pdf">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group clearfix">
                                <div class="form-group clearfix">
                                    <button type="submit" name="SendEmployment"
                                            class="btn alt-btn w-100 form-control">ارسال
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
             <div class="col-md-6 mt-5 mt-md-0  wow slideInLeft ">
                <div class="story_banner">
                    <img src="{{asset('libraries/img/about_banner.png')}} " alt="صورة التوظيف" class="img-fluid">
                </div>
              </div>
        </div>
    </div>
</section>
    @stop
