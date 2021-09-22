
<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="inspire-nav-top-bar d-none d-lg-block" >
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6"  >
                    <div class="call-to-action" >

                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <p><i class="icofont-pin "></i><a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            </i> {{ $properties['native'] }}  </a>
                                {{--<ul class="account-dropdown">--}}

                                {{--<li><a href="login-register.html"> {{ $properties['native'] }} </a></li>--}}

                                {{--</ul>--}}

                        @endforeach
                        {{--<p><i class="icofont-pin"></i> 526 Melrose Street,New York.</p>--}}
                        {{--<p><i class="icofont-envelope"></i> <a href="mailto:info@example.com">info@example.com</a> </p>--}}
                        {{--<p><i class="icofont-ui-touch-phone"></i> <a href="tel:50530722233">+505 307 222-33</a> </p>--}}
                    </div>
                </div>
                {{--<div class="col-lg-4 col-md-6">--}}
                    {{--<ul class="top-social">--}}
                        {{--<li><a href="#"><i class="fab fa-facebook-f"></i></a> </li>--}}
                        {{--<li><a href="#"><i class="fab fa-twitter"></i></a> </li>--}}
                        {{--<li><a href="#"><i class="fab fa-linkedin-in"></i></a> </li>--}}
                        {{--<li><a href="#"><i class="fab fa-instagram"></i></a> </li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    <div class="inspire-responsive-nav inspire-fixed-nav">
        <div class="container">
            <div class="inspire-responsive-menu">
                <div class="logo">
                    <a href="index-2.html"> <img src="assets/img/logo-black.png" alt="logo"> </a>
                </div>
            </div>
        </div>
    </div>



    <div class="inspire-nav inspire-fixed-nav">
        <div class="container">

            <nav class="navbar navbar-expand-md navbar-light">
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

                    {{--<div class="option-item navber-search-box d-none d-lg-block">--}}
                        {{--<i class="search-btn fa fa-search"></i> <i class="close-btn fa fa-times"></i>--}}
                        {{--<div class="search-overlay search-popup">--}}
                            {{--<div class='search-box'>--}}
                                {{--<form class="search-form">--}}
                                    {{--<input class="search-input" name="search" placeholder="Search" type="text">--}}
                                    {{--<button class="search-button" type="submit"><i class="fa fa-search"></i> </button>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="other-option"> <a class="btn btn-primary" href="mailto:info@example.com">{{__('messages.Get It Support')}}</a> </div>
                    <ul class="navbar-nav">


                                <li class="nav-item">
                                    <a href="#" class="nav-link">{{__('messages.jobs')}} </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">{{__('messages.Contact Us')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('blog') }}" class="nav-link">{{__('messages.News')}} </a>
                                </li>

                        <li class="nav-item"> <a href="{{route('Services') }}" class="nav-link">{{__('messages.Services')}}   </a>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link">Pages </a>

                        </li>
                        <li class="nav-item"> <a href="{{route('about') }}" class="nav-link">{{__('messages.About')}}   </a>

                        </li>
                        <li class="nav-item"> <a href="{{route('home') }}" class="nav-link">{{__('messages.Home')}} </a>

                        </li>
                    </ul>


                </div>
                <a class="navbar-brand" href="index-2.html"> <img src="{{asset('assets/img/logo-black.png')}}" alt="logo"> </a>
            </nav>
        </div>
    </div>

</div>
<!-- End Navbar Area -->

