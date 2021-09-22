<!-- Start Footer Section -->
<section class="footer-area">
    <div class="container">
        <div class="row">











            <div class="col-lg-6 col-md-6 footer-box-item">
                <div class="footer-list">
                    <h5 class="title">{{__('messages.Contact Us')}}</h5>
                    <div class="footer-contact-info">
                        <ul class="footer-contact-list">
                            <li>  {{__('messages.address')}} </li>
                            <li><span></span>  <a href="tel:009677753550031">{{__('messages.Phone')}} </a>
                            </li>
                            <li>  <span></span> <a href="mailto:skyforsystems@gmail.com">{{__('messages.email')}}</a>
                            </li>
                        </ul>
                        {{--<div class="footer-info-newsletter">--}}
                            {{--<form class="newsletter-form">--}}
                                {{--<input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required="" autocomplete="off">--}}
                                {{--<button class="btn btn-primary" type="submit">Subscribe Now</button>--}}
                                {{--<div id="validator-newsletter" class="form-result"></div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 footer-box-item">
                <div class="footer-list">
                    <h5 class="title">الشركة</h5>
                    <ul class="footer-nav-links">
                        <li> <a href="{{route('about') }}">{{__('messages.About')}} </a></li>
                        <li> <a href="{{route('Services') }}">{{__('messages.Services')}} </a></li>
                        <li> <a href="{{route('blog') }}">{{__('messages.News')}}</a></li>
                        <li> <a href="{{route('Services') }}">{{__('messages.jobs')}}</a></li>

                        <li> <a   href="{{route('project')}}"> {{__('messages.project')}}</a></li>
                        <li> <a href="{{route('Services') }}">{{__('messages.Contact Us')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 footer-box-item">
                <div class="footer-about footer-list">
                    <a class="footer-logo" href="#">
                        <img src="{{asset('assets/img/logo-black.png')}}"calass="white-logo" alt="logo">
                        <p>{{ isset($abouts[0]) ? $abouts[0]->description : '' }}</p>
                    </a>
                    <p> </p>
                    <ul class="footer-social-icon">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Footer Section -->
<!-- Start Footer Copyright Section -->
<div class="copyright-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <p> {{__('messages.2021')}} <span class="author-name">{{__('messages.company')}} </span>
                </p>
            </div>
            <div class="col-lg-6 col-md-6">
                <ul>
                    <li> <a href="terms-condition.html">Terms & Conditions</a>
                    </li>
                    <li> <a href="privacy-policy.html">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Copyright Section -->
