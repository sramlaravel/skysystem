@extends('layouts.site')

@section('content')



    <!-- End Navbar Area -->
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <ul>
                            <li><a href="{{route('home') }}">{{__('messages.Blog Details')}}</a></li>
                            <li>{{__('messages.Home')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Start Blog Details Area -->
    <section class="blog-details-area section-padding">
        <div class="container">
            <div class="row">
                @isset($newsDetail)
                @foreach($newsDetail as $new)
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image"> <img src="{{asset( $new->news_img)}}" alt="image"> </div>
                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li> <span>Posted On:</span> <a href="#">{{   date('Y-m-d', strtotime ($new-> created_at))  }}</a> </li>

                                </ul>
                            </div>
                            <h3>{{ $new->title }}</h3>
                            <p>{{  $new->description  }}</p>
                            </blockquote>
                            <p></p>
                            <ul class="wp-block-gallery columns-3">
                                <li class="blocks-gallery-item">
                                    <figure> <img src="{{asset( $new->news_img)}}" alt="image"> </figure>
                                </li>
                                <li class="blocks-gallery-item">
                                    <figure> <img src="{{asset( $new->news_img)}} "alt="image"> </figure>
                                </li>
                            </ul>
                        </div>


                        <div class="comments-area">
                             <h3 class="comments-title">3 Comments:</h3>
                            <ol class="comment-list">
                                <li class="comment">
                                    <article class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard"> <img src="assets/img/client/1.jpg" class="avatar" alt="image"> <b class="fn">Harry Lawson</b> <span class="says">says:</span> </div>
                                            <div class="comment-metadata">
                                                <a href="#"> <span>January 15 - 2021 12:30 PM</span> </a>
                                            </div>
                                        </footer>
                                        <div class="comment-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation.</p>
                                        </div>
                                        <div class="reply"> <a href="#" class="comment-reply-link">Reply</a> </div>
                                    </article>
                                    <ol class="children">
                                        <li class="comment">
                                            <article class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard"> <img src="assets/img/client/2.jpg" class="avatar" alt="image"> <b class="fn">Flora Malone</b> <span class="says">says:</span> </div>
                                                    <div class="comment-metadata">
                                                        <a href="#"> <span>January 15 - 2021 12:30 PM</span> </a>
                                                    </div>
                                                </footer>
                                                <div class="comment-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation.</p>
                                                </div>
                                                <div class="reply"> <a href="#" class="comment-reply-link">Reply</a> </div>
                                            </article>
                                        </li>
                                    </ol>
                                </li>
                                <li class="comment">
                                    <article class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard"> <img src="assets/img/client/4.jpg" class="avatar" alt="image"> <b class="fn">Tasha Benson</b> <span class="says">says:</span> </div>
                                            <div class="comment-metadata">
                                                <a href="#"> <span>January 15 - 2021 12:30 PM</span> </a>
                                            </div>
                                        </footer>
                                        <div class="comment-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation.</p>
                                        </div>
                                        <div class="reply"> <a href="#" class="comment-reply-link">Reply</a></div>
                                    </article>
                                </li>
                            </ol>
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a Reply</h3>
                                <form class="comment-form">
                                    <p class="comment-notes"> <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span> </p>
                                    <p class="comment-form-comment">
                                        <label>Comment</label>
                                        <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea>
                                    </p>
                                    <p class="comment-form-author">
                                        <label>Name <span class="required">*</span> </label>
                                        <input type="text" id="author" name="author" required="required"> </p>
                                    <p class="comment-form-email">
                                        <label>Email <span class="required">*</span> </label>
                                        <input type="email" id="email" name="email" required="required"> </p>
                                    <p class="comment-form-url">
                                        <label>Website</label>
                                        <input type="url" id="url" name="url"> </p>
                                    <p class="comment-form-cookies-consent">
                                        <input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
                                        <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                    </p>
                                    <p class="form-submit">
                                        <input type="submit" name="submit" id="submit" class="submit" value="Post Comment"> </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endisset
                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <section class="widget widget_search">
                            <form class="search-form search-top">
                                <label> <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search..."> </label>
                                <button type="submit"> <i class="fas fa-search"></i> </button>
                            </form>
                        </section>
                        <section class="widget widget_inspire_posts_thumb">
                            <h3 class="widget-title">{{__('messages.Recent Posts')}}</h3>
                            @isset($newss)
                            @foreach($newss as $key=> $new)

                                <article class="item">
                                    <a href="#" class="thumb"> <span class="fullimage cover bg{{$key+1}}" role="img"  ><img src="{{asset( $new->news_img)}}"> </span>
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

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
    <!-- Start Hire Section -->
    <section class="hire-area pb-100">
        <div class="container">
            <div class="hire-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hire-content position-relative z-index text-center">
                            <h2>Discuss An Upcoming IT Project</h2>
                            <h5>For A Free Consultation Call Today  +707 555-321</h5> <a href="#0" class="btn btn-primary mt-25">Contact Us Now</a> </div>
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
                    <a href="#0"> <img src="assets/img/partner-logo/client-1.png" alt="partner-image"> </a>
                </div>
                <div class="partner-item">
                    <a href="#0"> <img src="assets/img/partner-logo/client-2.png" alt="partner-image"> </a>
                </div>
                <div class="partner-item">
                    <a href="#0"> <img src="assets/img/partner-logo/client-3.png" alt="partner-image"> </a>
                </div>
                <div class="partner-item">
                    <a href="#0"> <img src="assets/img/partner-logo/client-4.png" alt="partner-image"> </a>
                </div>
                <div class="partner-item">
                    <a href="#0"> <img src="assets/img/partner-logo/client-5.png" alt="partner-image"> </a>
                </div>
                <div class="partner-item">
                    <a href="#0"> <img src="assets/img/partner-logo/client-6.png" alt="partner-image"> </a>
                </div>
                <div class="partner-item">
                    <a href="#0"> <img src="assets/img/partner-logo/client-7.png" alt="partner-image"> </a>
                </div>
                <div class="partner-item">
                    <a href="#0"> <img src="assets/img/partner-logo/client-8.png" alt="partner-image"> </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Logo Section -->
    <!-- Start Footer Section -->





@stop
