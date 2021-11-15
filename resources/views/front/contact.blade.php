@extends('layouts.site')

@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <ul>

                            <li>{{__('messages.Contact')}} </li>
                            <li><a href="{{route('home') }}">{{__('messages.Home')}}</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Start Contact Section -->
    <div class="contact-section section-padding">
        <div class="container">
            <div class="row" style="flex-direction: column">

                <div class="col-lg-12 col-md-12">
                    @include('admin.includes.alerts.success')
                    @include('admin.includes.alerts.errors')
                    <div class="contact-form contact-form-3">
                        <p class="form-message"></p>
                        <form id="contact-form" class="form" action="{{route('contact.create') }}" method="POST">
                            @csrf
                            <div class="row" style="flex-direction: column" >

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input style="text-align: right" type="text"  class="form-control" name="name" id="name"  placeholder="{{__('messages.name')}} *" value="{{Request::old('name')}}"> </div>
                                    @error("name")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input  style="text-align: right" type="text" name="phone" id="phone" required class="form-control" placeholder="{{__('messages.Your Phone')}}"
                                               laceholder="{{__('messages.Your Phone')}}"  value="{{Request::old('phone')}}"></div>
                                        @error("phone")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input style="text-align: right" type="email" name="email" id="email" class="form-control"
                                               placeholder="{{__('messages.Emial')}} " value="{{request::old('email')}}"> </div>

                                    @error("email")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                {{--<div class="col-lg-6 col-md-12">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type="text" name="subject" id="subject" class="form-control" required placeholder="Your Subject"> </div>--}}
                                {{--</div>--}}
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                          <textarea  style="text-align: right" cols="30" rows="6"  class="form-control m-input" name="message" id="message"
                                                    placeholder=" *{{__('messages.messages')}} "
                                                    onblur="this.placeholder ='{{__('messages.messages')}}  *'"></textarea>
                                        @error("message")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="btn btn-primary">{{__('messages.Send Message')}} </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="contact-information-box-3">
                        <div class="row" style="flex-direction: column">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="single-contact-info-box">
                                    <div class="contact-info">
                                        <i class="icofont-location-pin"></i>
                                        <h6 style="text-align: center" >   {{__('messages.Address')}}</h6>
                                        <p > {{__('messages.Address_details')}}</p>
                                        <p> {{__('messages.Address_details')}}</p>
                                    </div>
                                    <div class="contact-info-bg-icon">
                                        <i class="icofont-location-pin"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="single-contact-info-box">
                                    <div class="contact-info">
                                        <i class="icofont-phone-circle"></i>
                                        <h6 style="text-align: center">{{__('messages.Phones')}}</h6>
                                        <p>{{__('messages.Phones_details')}}</p>
                                        <p>{{__('messages.Phones_details')}}</p>
                                    </div>
                                    <div class="contact-info-bg-icon">
                                        <i class="icofont-phone-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="single-contact-info-box">
                                    <div class="contact-info">
                                        <i class="icofont-email"></i>
                                        <h6 style="text-align: center">  {{__('messages.emails')}} </h6>
                                        <p>{{__('messages.emails_details')}}</p>
                                        <p>{{__('messages.emails_details')}}</p>
                                    </div>
                                    <div class="contact-info-bg-icon">
                                        <i class="icofont-email"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Section -->




    <!-- Map Section Start -->
    <div class="map-area">
        <div class="map-content">
            <div class="map-canvas" id="contact-map"></div>
        </div>
    </div>



    <section class="g-map">
        <div class="map">
            <div class="" id="googleMap">
            </div>
        </div>
    </section>





@stop
