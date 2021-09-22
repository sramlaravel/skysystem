@extends('layouts.site')

@section('content')


    <section class="mextreo-hero inner mar-bot-140">
        <div class="container">
            <div class="row">

                <div class="col-md-6">

                    <div class="hero-content">
                        <div class="col-md-12 text-center">

                            <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">
                            @include('admin.includes.alerts.success')
                            @include('admin.includes.alerts.errors')
                            </h6>
                        </div>
                        <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">اتصل</h6>
                        <h2 data-aos="fade-up" data-aos-duration="2000">ابقى على تواصل</h2>
                        <p data-aos="fade-up" data-aos-duration="2500">
                            نحن في انتظارك في مكتبنا في الدائري أو في الطريق ،
                            اتصل بنا عبر نموذج الاتصال أدناه .
                        </p>

                        <div class="mextreo-contact" data-aos="fade-up" data-aos-duration="3000">
                            <form   method="post"  action="{{route('contact.create') }}" >
                                @csrf
                                <div class="form-group mcfg">
                                    <input type="text" class="form-control m-input" name="name" id="name"
                                           placeholder="اسمك *" value="{{Request::old('name')}}"
                                       >
                                    @error("name")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group mcfg">
                                    <input type="text" class="form-control m-input" name="email" id="email"
                                           placeholder="بريدك الالكتروني *" value="{{request::old('email')}}"
                                          >
                                    @error("email")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group mcfg">
                                    <input type="text" class="form-control m-input" name="phone" id="phone"
                                           placeholder="رقم هاتفك الخلوي *"  value="{{Request::old('phone')}}"
                                       >
                                    @error("phone")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group mcfg">
                                <textarea rows="4" class="form-control m-input" name="message" id="message"
                                          placeholder="رسالة *"
                                          onblur="this.placeholder ='رسالة *'"></textarea>
                                    @error("message")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <button type="submit"   id="submit"   class="m-submit">أرسل رسالة</button>


                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero-inner-img">
                        <img src=" " alt="" data-aos="fade-left" data-aos-duration="2000">
                    </div>
                    <div class="contact-details" data-aos="fade-up" data-aos-duration="3000">
                        <img src="{{asset('assets/img/logo.png')}}" alt="">
                        <div class="single-info">
                            <h5>عنوان:</h5>
                            <p>شركة انجاز سوفت للانظمة الخاصة المحدوده
                                مجموعة الجيل الجديد، الدائري -برج كنتاكي -جوار, Sana'a, Yemen</p>

                        </div>
                        <div class="single-info">
                            <h5>هاتف:</h5>
                            <p>+967-776-016-060</p>
                            <p>01630502 - 771-110-033</p>
                        </div>
                        <div class="single-info">
                            <h5>البريد الإلكتروني:</h5>
                            <p><a href="https://demo.voidcoders.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                  data-cfemail="94f5f9f5fdf8d4f9f1ece0e6f1fbbaf7fbf9">info@engazsoftplus.com</a></p>
                            <p><a href="https://demo.voidcoders.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                  data-cfemail="8de3e8fae0ece4e1cde0e8f5f9ffe8e2a3eee2e0">https://www.facebook.com/Engaz</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="g-map">
        <div class="map">
            <div class="" id="googleMap">
            </div>
        </div>
    </section>





@stop
