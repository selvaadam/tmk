@extends('layouts.tmk')
@section('content')
<!-- Page Heading -->
<section class="section page-heading animate-onscroll">
    <h1>Contact</h1>
    <p class="breadcrumb"><a href="main-v1">Home</a> / Contact</p>
</section>
<!-- Page Heading -->
<!-- Section -->
<section class="section full-width-bg gray-bg">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8">
            <h3 class="animate-onscroll no-margin-top">Our Location</h3>
            <div class="contact-map">
                <iframe width="900" height="400" src="https://maps.google.rs/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=marmora+road&amp;sll=44.210767,20.922416&amp;sspn=4.606139,10.821533&amp;ie=UTF8&amp;hq=&amp;hnear=Marmora+Rd,+London+SE22+0RX,+United+Kingdom&amp;t=m&amp;z=14&amp;ll=51.451955,-0.055755&amp;output=embed"></iframe>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 animate-onscroll">
                    <h6>Mailing Address</h6>
                    <p>9863 - 9867 Mill Road, <br>
                        Cambridge, MG09 99HT </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 animate-onscroll">
                    <h6>Phone Numbers</h6>
                    <p>+1 800 559 6580<br>
                        1 800 603 6035 (Fax)</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 animate-onscroll">
                    <h6>Email Addresses</h6>
                    <p><a href="mailto:mail@companyname.com">mail@companyname.com</a><br>
                        <a href="mailto:info@companyname.com">info@companyname.com</a></p>
                </div>
            </div>
            <h3>We want to hear from you</h3>
            <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum
                primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin velit sed
                leo. <br><br>Fields marked * are mandatory.</p><br>
            <form id="contact-form" action="php/contact-form.php" method="POST">
                <div class="inline-inputs">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label>Email address*</label>
                        <input type="text" name="contact-email">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label>First name*</label>
                        <input type="text" name="contact-firstname">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label>Last name*</label>
                        <input type="text" name="contact-lastname">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label>Address</label>
                        <input type="text" name="contact-address">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label>City</label>
                        <input type="text" name="contact-city">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label>State</label>
                        <select name="contact-state" class="chosen-select">
                            <option value="United States">US</option>
                            <option value="Germany">Germany</option>
                            <option value="France">France</option>
                            <option value="Spain">Spain</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-5">
                        <label>Zip code*</label>
                        <input type="text" name="contact-zip">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-7">
                        <label>Phone</label>
                        <input type="text" name="contact-phone">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <label>Subject</label>
                        <input type="text" name="contact-subject">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Your questions/comments</label>
                        <textarea rows="10" name="contact-message"></textarea>
                    </div>
                </div>
                <input type="submit" value="submit">
            </form>
        </div>
        <!-- Sidebar -->
        <div class="col-lg-3 col-md-3 col-sm-4 sidebar">
            <div class="banner-wrapper">
                <a class="banner animate-onscroll" href="#">
                    <i class="icons icon-calendar"></i>
                    <h4>நிகழ்வுகள்</h4>
                    <p>மேலும் நிகழ்வுகள்</p>
                </a>
            </div>
            <div class="banner-wrapper">
                <a class="banner animate-onscroll" href="#">
                    <i class="icons icon-user"></i>
                    <h4>தொண்டு செய்ய </h4>
                    <p>ஒரு தன்னார்வ ஆக விண்ணப்பிக்கவும் </p>
                </a>
            </div>
            <div class="banner-wrapper">
                <a class="banner animate-onscroll" href="#">
                    <i class="icons icon-check"></i>
                    <h4>உங்கள் உரிமைகள் </h4>
                    <p>உங்கள் உரிமைகள் பற்றி தெரிந்துகொள்ளுங்கள் </p>
                </a>
            </div>
            <div class="social-media animate-onscroll">
                <span class="small-caption">Get connected:</span>
                <ul class="social-icons">
                    <li class="facebook"><a href="#" class="tooltip-ontop" title="Facebook"><i class="icons icon-facebook"></i></a></li>
                    <li class="twitter"><a href="#" class="tooltip-ontop" title="Twitter"><i class="icons icon-twitter"></i></a></li>
                    <li class="google"><a href="#" class="tooltip-ontop" title="Google Plus"><i class="icons icon-gplus"></i></a></li>
                    <li class="youtube"><a href="#" class="tooltip-ontop" title="Youtube"><i class="icons icon-youtube-1"></i></a></li>
                    <li class="flickr"><a href="#" class="tooltip-ontop" title="Flickr"><i class="icons icon-flickr-4"></i></a></li>
                    <li class="email"><a href="#" class="tooltip-ontop" title="Email"><i class="icons icon-mail"></i></a></li>
                </ul>
                <ul class="social-buttons">
                    <li>
                        <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35"
                            style="border:none; overflow:hidden; height:21px; padding-top:1px; width:50px;"></iframe>
                    </li>
                    <li class="facebook-share">
                        <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/"
                            data-type="button_count"></div>
                    </li>
                    <li class="twitter-share">
                        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                    </li>
                </ul>
            </div> <!-- Featured Video -->
            <div class="sidebar-box white featured-video animate-onscroll">
                <h3>Featured Video</h3>
                <iframe width="560" height="315" src="//www.youtube.com/embed/FBorRZnqtMo?wmode=transparent"
                    allowfullscreen></iframe>
                <a href="#" class="button transparent button-arrow">More videos</a>
            </div>
            <!-- /Featured Video -->
            <!-- Upcoming Events -->
            <div class="sidebar-box white animate-onscroll">
                <h3>Upcoming Events</h3>
                <ul class="upcoming-events">
                    <!-- Event -->
                    <li>
                        <div class="date">
                            <span>
                                <span class="day">25</span>
                                <span class="month">DEC</span>
                            </span>
                        </div>
                        <div class="event-content">
                            <h6><a href="event-post-v2">Sed in lacus ut enim</a></h6>
                            <ul class="event-meta">
                                <li><i class="icons icon-clock"></i> 4:00 pm - 6:00 pm</li>
                                <li><i class="icons icon-location"></i> 340 W 50th St.New York</li>
                            </ul>
                        </div>
                    </li>
                    <!-- /Event -->
                    <!-- Event -->
                    <li>
                        <div class="date">
                            <span>
                                <span class="day">5</span>
                                <span class="month">JAN</span>
                            </span>
                        </div>
                        <div class="event-content">
                            <h6><a href="event-post-v2">Sed in lacus ut enim</a></h6>
                            <ul class="event-meta">
                                <li><i class="icons icon-clock"></i> 4:00 pm - 6:00 pm</li>
                                <li><i class="icons icon-location"></i> 340 W 50th St.New York</li>
                            </ul>
                        </div>
                    </li>
                    <!-- /Event -->
                    <!-- Event -->
                    <li>
                        <div class="date">
                            <span>
                                <span class="day">8</span>
                                <span class="month">JAN</span>
                            </span>
                        </div>
                        <div class="event-content">
                            <h6><a href="event-post-v2">Sed in lacus ut enim</a></h6>
                            <ul class="event-meta">
                                <li><i class="icons icon-clock"></i> 4:00 pm - 6:00 pm</li>
                                <li><i class="icons icon-location"></i> 340 W 50th St.New York</li>
                            </ul>
                        </div>
                    </li>
                    <!-- /Event -->
                </ul>
                <a href="#" class="button transparent button-arrow">More events</a>
            </div>
            <!-- /Upcoming Events -->
            <!-- Image Banner -->
            <div class="sidebar-box image-banner animate-onscroll">
                <a href="issues">
                    <img src="img/main-issues.jpg" alt="">
                    <h3>The main issues</h3>
                    <span class="button transparent button-arrow">Find out more</span>
                </a>
            </div>
            <!-- /Image Banner -->
        </div>
        <!-- /Sidebar -->
    </div>
</section>
<!-- /Section -->
@endsection