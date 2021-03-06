@extends('layouts.main')
@section('content')
<!-- Add your site or application content here -->
<!-- Navigation Html
=================== -->
<div class="main-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo">
                    <a href="index-2.html">
                        <img class="img-responsive" src="{{asset('public/assets/img/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="menu-container">
                    <div class="menu">
                        <ul class="main-ul">
                            <li><a class="active" href="index-2.html">Home</a></li>
                            <li><a href="javascript:void(0)">+ Courses</a>
                                <ul>
                                    <li><h6>Courses pages</h6>
                                        <ul>
                                            <li><a href="courses.html">Courses</a></li>
                                            <li><a href="courses-list.html">Courses list</a></li>
                                            <li><a href="courses-grid.html">Courses grid</a></li>
                                            <!-- <li><a href="courses-slide.html">Courses grid Slider</a></li> -->
                                            <li><a href="courses-list-fullwidth.html">Courses list Fullwidth</a></li>
                                            <li><a href="courses-grid-fullwidth.html">Courses grid Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li><h6>Single course</h6>
                                        <ul>
                                            <li><a href="single-courses.html">Single Course Version 1</a></li>
                                            <li><a href="single-course-left.html">Single Course Version 2</a></li>
                                            <li><a href="single-course-right.html">Single Course Version 3</a></li>
                                        </ul>
                                    </li>
                                    <li><h6>Availability</h6>
                                        <ul>
                                            <li><a href="courses.html">Current</a></li>
                                            <li><a href="courses.html">Starting Soon</a></li>
                                            <li><a href="courses.html">upcoming</a></li>
                                            <li><a href="courses.html">self-paced</a></li>
                                            <li><a href="courses.html">Archived</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            
                            <li><a href="javascript:void(0)">+ Instructors</a>
                                <ul>
                                    <li><a href="instructors.html">Instructors</a></li>
                                    <li><a href="single-instructors.html">Single Instructor</a></li>
                                </ul>
                            </li>
                            <li><a href="about_page.html">About</a>
                            <li><a href="contact.html">Contact</a>
                        </ul>
                    </div>
                    <div class="menu-search" >

                        <button id="test" class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                        <div id="myNav" class="overlay">
                            <a href="javascript:void(0)" class="closebtn" id="closeNav">×</a>
                            <div class="search-input">
                                <input type="text" class="form-control" placeholder="What do you want to learn today?">
                                <button class="rex-bottom-medium rex-btn-icon search-btn" type="submit">
                                    <span class="rex-btn-text"><i class="fa fa-search"></i></span>
                                </button>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- slider Html 
====================-->
<div class="silder">
    <div class="rex-slider">

        <!-- slider 1 -->
        <div class="slide-list" data-lazy-background="{{asset('public/assets/js/script.js')}}">
            <h1 data-pos="['0', '0']" data-duration="1000" data-effect="fadein">
                <span class="highlight-text">LEARN FROM THE BEST. </span>
                ANYTIME. ANYWHERE.
            </h1>
            <div class="slider-text" data-pos="['0', '0']" data-duration="700" data-effect="fadein">
                <p>Advance and build on existing skills with our <br>
                    Professional Development programs</p>
            </div>
            <div class="slider-btn" data-pos="['0', '0']" data-duration="700" data-effect="fadein">
                <a href="#" target="_self" class="rex-bottom-medium rex-btn-icon">
                    <span class="rex-btn-text">learn more</span>
                    <span class="rex-btn-text-icon"><i class="fa fa-arrow-circle-o-right"></i></span>
                </a>
            </div>
        </div>    

        <!-- slider 2 -->
        <div class="slide-list slide-center" data-lazy-background="{{asset('public/assets/img/slider/slider-img2.jpg')}}">
            <h1 data-pos="['0', '0']" data-duration="1000" data-effect="fadein">
                <span class="highlight-text">getting started </span><br>
                improve your skills
            </h1>                
            <div class="slider-btn" data-pos="['0', '0']" data-duration="700" data-effect="fadein">
                <a href="#" target="_self" class="rex-bottom-medium rex-btn-icon">
                    <span class="rex-btn-text">Check out</span>
                    <span class="rex-btn-text-icon"><i class="fa fa-arrow-circle-o-right"></i></span>
                </a>
            </div>
        </div>    

        <!-- slider 3 -->
        <div class="slide-list slider-last-child" data-lazy-background="{{asset('public/assets/img/slider/slider-img3.jpg')}}">
            <h1 data-pos="['0', '0']" data-duration="1000" data-effect="fadein">
                Online course
            </h1>
            <div class="slider-text" data-pos="['0', '0']" data-duration="700" data-effect="fadein">
                <p>Start a creative and exciting career with <br>
                    our online programs</p>
            </div>
            <div class="slider-btn" data-pos="['0', '0']" data-duration="700" data-effect="fadein">
                <a href="#" target="_self" class="rex-bottom-medium rex-btn-icon">
                    <span class="rex-btn-text">learn more</span>
                    <span class="rex-btn-text-icon"><i class="fa fa-arrow-circle-o-right"></i></span>
                </a>
            </div>
        </div>    
    </div>
</div>

<!-- Features Html 
====================-->
<section class="features">
    <div class="container">
        <div class="row">
            <div id="features">
                <div class="col-lg-4 col-md-4 col-sm-12 features-list">
                    <div class="">
                        <div class="features-icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <h5>Earn a Certificate</h5>
                        <div class="features-content">
                            <p>This is Photoshop's version  of Lorem Ipsum.
                                bhvel velit auctor aliquet. Aenean sollicitudin, oreme
                                bibendum auctor, nisi elit consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 features-list">
                    <div class="">
                        <div class="features-icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <h5>Earn University Credit</h5>
                        <div class="features-content">
                            <p>This is Photoshop's version  of Lorem Ipsum.
                                bhvel velit auctor aliquet. Aenean sollicitudin, oreme
                                bibendum auctor, nisi elit consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 features-list">
                    <div class=" features-last-child">
                        <div class="features-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <h5>Advance your Career</h5>
                        <div class="features-content">
                            <p>This is Photoshop's version  of Lorem Ipsum.
                                bhvel velit auctor aliquet. Aenean sollicitudin, oreme
                                bibendum auctor, nisi elit consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About_Us html 
====================-->
<section class="About_Us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-7">
                <img class="img-responsive" src="{{asset('public/assets/img/about_us/about_img1.png')}}" alt="">
            </div>
            <div class="col-md-12 col-lg-5 about-content">
                <h2>Learning at edureX</h2>
                <p>This is Photoshop's version  of Lorem Ipsum.bhvel velit auctor aliquet. <br>
                    Aenean sollicitudin, oremebibendum auctor, nisi elit consequat ipsu <br>
                    nec sagituis sed odio sit amet nibh</p>
                <!-- About list -->
                <div class="col-md-12">
                    <div class="media hover-effect">
                        <div class="media-left">
                            <a href="#">
                                <div class="icon-style">
                                    <i class="fa fa-desktop"></i>
                                </div>
                            </a>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Learn Anything Online</h5>
                            <p>This is Photoshop's version  of Lorem Ipsumbhvel velit <br>
                                auctor aliquet. Aenean sollicitudin, oreme</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="media hover-effect">
                        <div class="media-left">
                            <a href="#">
                                <div class="icon-style">
                                    <i class="fa fa-film"></i>
                                </div>
                            </a>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">1000+ VIDEO Lessons</h5>
                            <p>This is Photoshop's version  of Lorem Ipsumbhvel velit <br>
                                auctor aliquet. Aenean sollicitudin, oreme</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="media hover-effect">
                        <div class="media-left">
                            <a href="#">
                                <div class="icon-style">
                                    <i class="fa fa-bookmark-o"></i>
                                </div>
                            </a>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Trusted Certifications</h5>
                            <p>This is Photoshop's version  of Lorem Ipsumbhvel velit <br>
                                auctor aliquet. Aenean sollicitudin, oreme</p>
                        </div>
                    </div>
                </div>
                <!-- end about list -->
                <!-- <div class="wow fadeIn animated" data-wow-duration="2s" data-wow-delay="2.5s"> -->
                <a href="#" target="_self" class="rex-bottom-medium rex-btn-icon">
                    <span class="rex-btn-text">About edurex</span>
                    <span class="rex-btn-text-icon"><i class="fa fa-arrow-circle-o-right"></i></span>
                </a>
                <!-- </div> -->
            </div>
        </div>
    </div>
</section>

<!-- popular_courses html 
====================-->
<section class="popular_courses">
    <div class="container">
        <div class="row">
            <div class="title-section col-md-12">
                <h2>Popular Course</h2>
                <p>Starting Soon</p>
            </div>
            <div class="col-md-12">
                <div id="popular_courses" class="owl-carousel">
                    <div>
                        <div class="col-md-12">
                            <div class="block-content">
                                <div class="courses-img">
                                    <img class="img-responsive" src="{{asset('public/assets/img/popular_courses/image01.jpg')}}" alt="">
                                    <div class="courses-overlay">
                                        <h6>$45</h6>
                                    </div>
                                </div>
                                <div class="content">

                                    <div class="tag">
                                        <i class="fa fa-bookmark"></i>
                                    </div>

                                    <a href="single-courses.html"><h6>introduction to Marketing</h6></a>
                                    <div class="entry-meta">
                                        <div class="author">
                                            <p>By <a href="#">Eric Grimso</a></p>
                                        </div>
                                        <div class="date">
                                            <p>Starts: Jan 11, 2016</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-md-12">
                            <div class="block-content">
                                <div class="courses-img">
                                    <img class="img-responsive" src="img/popular_courses/image02.jpg" alt="">
                                    <div class="courses-overlay">
                                        <h6>$49</h6>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="single-courses.html"><h6>Science of Happiness <span class="label label-primary">NEW</span></h6></a>
                                    <div class="entry-meta">
                                        <div class="author">
                                            <p>By <a href="#">John Guttag</a></p>
                                        </div>
                                        <div class="date">
                                            <p>Starts: Jan 12, 2016</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-md-12">
                            <div class="block-content">
                                <div class="courses-img">
                                    <img class="img-responsive" src="img/popular_courses/image03.jpg" alt="">
                                    <div class="courses-overlay">
                                        <h6>Free</h6>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="single-courses.html"><h6>How to Write a Novel <span class="label label-primary">Free</span></h6></a>
                                    <div class="entry-meta">
                                        <div class="author">
                                            <p>By <a href="#">Dany Hoter</a></p>
                                        </div>
                                        <div class="date">
                                            <p>Starts: Jan 13, 2016</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-md-12">
                            <div class="block-content">
                                <div class="courses-img">
                                    <img class="img-responsive" src="img/popular_courses/image01.jpg" alt="">
                                    <div class="courses-overlay">
                                        <h6>$40</h6>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="single-courses.html"><h6>introduction to Marketing</h6></a>
                                    <div class="entry-meta">
                                        <div class="author">
                                            <p>By <a href="#">Eric Grimso</a></p>
                                        </div>
                                        <div class="date">
                                            <p>Starts: Jan 11, 2016</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-md-12">
                            <div class="block-content">
                                <div class="courses-img">
                                    <img class="img-responsive" src="img/popular_courses/image02.jpg" alt="">
                                    <div class="courses-overlay">
                                        <h6>$43</h6>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="single-courses.html"><h6>The Science of Happiness</h6></a>
                                    <div class="entry-meta">
                                        <div class="author">
                                            <p>By <a href="#">Eric Grimso</a></p>
                                        </div>
                                        <div class="date">
                                            <p>Starts: Jan 11, 2016</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-md-12">
                            <div class="block-content">
                                <div class="courses-img">
                                    <img class="img-responsive" src="img/popular_courses/image03.jpg" alt="">
                                    <div class="courses-overlay">
                                        <h6>$44</h6>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="single-courses.html"><h6>How to Write a Novel</h6></a>
                                    <div class="entry-meta">
                                        <div class="author">
                                            <p>By <a href="#">Eric Grimso</a></p>
                                        </div>
                                        <div class="date">
                                            <p>Starts: Jan 11, 2016</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call To Action html 
====================-->
<section class="call_to_action" data-parallax="scroll" data-image-src="img/CallToAction/img1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Take great online courses <br>
                    from Edurex!</h1>
                <h4>This is Photoshop's version  of Lorem Ipsum. Proin gravida <br>
                    vel velit auctor aliquet. Aenean sollicitudin, </h4>
                <a href="courses.html" target="_self" class="rex-bottom-medium rex-btn-icon">
                    <span class="rex-btn-text">Browse Courses</span>
                    <span class="rex-btn-text-icon"><i class="fa fa-arrow-circle-o-right"></i></span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials html 
====================-->
<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section">
                    <h2>Testimonials</h2>
                    <p>What Our Students Say About us</p>
                </div>
            </div>
            <div class="col-md-12">
                <div id="testimonials" class="owl-carousel">
                    <div>
                        <div class="media">
                            <div class="media-left testimonials-img col-md-4">
                                <a href="#">
                                    <img class="media-object testimonial-author" src="{{asset('public/assets/img/Testimonials/img1.png')}}" alt="...">
                                </a>
                                <h5>SCOTT EASTWOOD</h5>
                                <span>Student Of Edurex</span>
                            </div>

                            <div class="media-body  testimonials-body">
                                <p>"Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis es
                                    eligendi optio cumque nihil impedid quo minus id quos maxime placeat facere possimus, omnis vo
                                    eligendi optio cumque nihil impedid quo minus id quos maxime placeat facere possimus, omnis vo
                                    luptas assumenda est, omnis dolor repellendus."</p>
                                <img class="quotation" src="{{asset('public/assets/img/Testimonials/quotation.png')}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="media">
                            <div class="media-left testimonials-img col-md-4">
                                <a href="#">
                                    <img class="media-object testimonial-author" src="{{asset('public/assets/img/Testimonials/img2.png')}}" alt="...">
                                </a>
                                <h5>SCOTT EASTWOOD</h5>
                                <span>Student Of Edurex</span>
                            </div>
                            <div class="media-body  testimonials-body">
                                <p>"Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis es
                                    eligendi optio cumque nihil impedid quo minus id quos maxime placeat facere possimus, omnis vo
                                    eligendi optio cumque nihil impedid quo minus id quos maxime placeat facere possimus, omnis vo
                                    luptas assumenda est, omnis dolor repellendus."</p>
                                <img class="quotation" src="{{asset('public/assets/img/Testimonials/quotation.png')}}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Instructors html 
====================-->
<section class="Instructors">
    <div class="container">
        <div class="row">
            <div class="title-section">
                <h2>Meet the instructors</h2>
                <p>We build Edurex with Professional and Love</p>
            </div>
            <div id="Instructors">
                <div class="col-md-3">
                    <div class="block-content">
                        <img class="img-responsive" src="{{asset('public/assets/img/Instructors/img1.jpg')}}" alt="">
                        <div class="content">
                            <div class="content-title">
                                <a href="single-instructors.html"><h4>Eric Grimson</h4></a>
                                <span>Director of Research</span>
                            </div>
                            <div class="content-text">
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                                <div class="instructors-media-link">
                                    <a data-toggle="tooltip" data-placement="top" title="Go facebook Profile" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Go twitter Profile" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Go linkedin Profile" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block-content">
                        <img class="img-responsive" src="{{asset('public/assets/img/Instructors/img2.jpg')}}" alt="">
                        <div class="content">
                            <div class="content-title">
                                <a href="single-instructors.html"><h4>Simon Thomas</h4></a>
                                <span>Medicine Physician</span>
                            </div>
                            <div class="content-text">
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                                <div class="instructors-media-link">
                                    <a data-toggle="tooltip" data-placement="top" title="Go facebook Profile" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Go twitter Profile" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Go linkedin Profile" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block-content Instructors-last-child">
                        <img class="img-responsive" src="{{asset('public/assets/img/Instructors/img4.jpg')}}" alt="">
                        <div class="content">
                            <div class="content-title">
                                <a href="single-instructors.html"><h4>Laurie Stach</h4></a>
                                <span>Physiotherapist</span>
                            </div>
                            <div class="content-text">
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                                <div class="instructors-media-link">
                                    <a data-toggle="tooltip" data-placement="top" title="Go facebook Profile" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Go twitter Profile" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Go linkedin Profile" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="block-content Instructors-last-child">
                        <img class="img-responsive" src="{{asset('public/assets/img/partners/img3.png')}}img/Instructors/img3.jpg" alt="">
                        <div class="content">
                            <div class="content-title">
                                <a href="single-instructors.html"><h4>Steven Blair</h4></a>
                                <span>Behavioural Science</span>
                            </div>
                            <div class="content-text">
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                                <div class="instructors-media-link">
                                    <a data-toggle="tooltip" data-placement="top" title="Go facebook Profile" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Go twitter Profile" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Go linkedin Profile" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Counter box html 
====================-->
<section class="Counter">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="counter-box">
                    <div class="icon-style">
                        <i class="fa fa-group"></i>
                    </div>	
                    <div class="content">
                        <div class="counter">2737</div>
                        <span>+</span>
                        <h5>Happy Students
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter-box">
                    <div class="icon-style">
                        <i class="fa fa-graduation-cap"></i>
                    </div>	
                    <div class="content">
                        <div class="counter">1433</div>
                        <span>+</span>
                        <h5>PASSED GRADUATES
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 Counter-last-child">
                <div class="counter-box">
                    <div class="icon-style">
                        <i class="fa fa-trophy"></i>
                    </div>	
                    <div class="content">
                        <div class="counter">324</div>
                        <span>+</span>
                        <h5>Quiz Completed
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- latest_news html 
====================-->
<section class="latest_news">
    <div class="container">
        <div class="row">
            <div class="title-section">
                <h2>our Latest news </h2>
                <p>We Shared Awesome Articles for Your Next Sites</p>
            </div>
            <div id="latest_news">
                <div class="col-md-4">
                    <div class="block-content">
                        <div class="img-hover">
                            <img class="img-responsive" src="{{asset('public/assets/img/blog/blog-image-01.jpg')}}" alt="">
                        </div>
                        <div class="content">
                            <div class="block-date">
                                <p>24 <br> Dec</p>
                            </div>
                            <a href="single-blog.html"><h6 class="block-title">2016 International <br>
                                    Summer Programmes</h6></a>
                            <div class="clearfix"></div>
                            <div class="entry-meta">
                                <div class="author">
                                    <p>By <a href="#">Eric Grimso</a></p>
                                </div>
                                <div class="categories-links">
                                    <a href="#"><p> Marketing </p></a>
                                </div>
                                <div class="rex-comments">
                                    <p><i class="fa fa-comments"></i>16</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-content">
                        <div class="img-hover">
                            <img class="img-responsive" src="{{asset('public/assets/img/blog/blog-image-02.jpg')}}" alt="">
                        </div>
                        <div class="content">
                            <div class="block-date">
                                <p>24 <br> Dec</p>
                            </div>
                            <a href="single-blog.html"><h6 class="block-title">2016 International <br>
                                    Summer Programmes</h6></a>
                            <div class="clearfix"></div>
                            <div class="entry-meta">
                                <div class="author">
                                    <p>By <a href="#">Eric Grimso</a></p>
                                </div>
                                <div class="categories-links">
                                    <a href="#"><p> Marketing </p></a>
                                </div>
                                <div class="rex-comments">
                                    <p><i class="fa fa-comments"></i>16</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-content latest_news-last-child">
                        <div class="img-hover">
                            <img class="img-responsive" src="{{asset('public/assets/img/blog/blog-image-03.jpg')}}" alt="">
                        </div>
                        <div class="content">
                            <div class="block-date">
                                <p>24 <br> Dec</p>
                            </div>
                            <a href="single-blog.html"><h6 class="block-title">2016 International <br>
                                    Summer Programmes</h6></a>
                            <div class="clearfix"></div>
                            <div class="entry-meta">
                                <div class="author">
                                    <p>By <a href="#">Eric Grimso</a></p>
                                </div>
                                <div class="categories-links">
                                    <a href="#"><p> Marketing </p></a>
                                </div>
                                <div class="rex-comments">
                                    <p><i class="fa fa-comments"></i>16</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- newsletter html 
====================-->
<section class="newsletter">
    <div class="container">
        <div class="row">
            <div class="newsletter-area">
                <div class="title-section">
                    <h2>STAY UPDATED WITH Edurex</h2>
                    <p>Get notified about new courses, events, news &amp; more</p>
                </div>
                <div class="search-full-width">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12">
                            <input type="text" class="form-control" placeholder="Enter your email address">
                            <!-- <button class="rex-bottom-medium rex-btn-icon search-btn" type="submit">
                                <span class="rex-btn-text"><i class="fa fa-arrow-right"></i></span>
                            </button> -->								
                            <a class="rex-bottom-medium rex-btn-icon search-btn" href="#">
                                <span class="rex-btn-text-icon"><i class="fa fa-arrow-circle-o-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- partners.htm html 
=====================-->
<section class="partners">
    <div class="container">
        <div class="row">
            <div class="col-md-3 partners-content">
                <a href="#">
                    <div class="partners-logo">
                        <img src="{{asset('public/assets/img/partners/img1.png')}}" alt="">
                    </div>
                </a>
            </div>
            <div class="col-md-3 partners-content">
                <a href="#">
                    <div class="partners-logo">
                        <img src="{{asset('public/assets/img/partners/img2.png')}}" alt="">
                    </div>
                </a>
            </div>
            <div class="col-md-3 partners-content">
                <a href="#">
                    <div class="partners-logo">
                        <img src="{{asset('public/assets/img/partners/img3.png')}}" alt="">
                    </div>
                </a>
            </div>
            <div class="col-md-3 partners-content">
                <a href="#">
                    <div class="partners-logo partners-last-child">
                        <img src="{{asset('public/assets/img/partners/img4.png')}}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection