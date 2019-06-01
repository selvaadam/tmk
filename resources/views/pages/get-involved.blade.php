@extends('layouts.tmk')
@section('content')
<!-- Page Heading -->
<section class="section page-heading animate-onscroll">
    <h1>Get Involved</h1>
    <p class="breadcrumb"><a href="main-v1">Home</a> / Get Involved</p>
</section>
<!-- Page Heading -->
<!-- Section -->
<section class="section full-width-bg gray-bg">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8">
            <div class="animate-onscroll">
                <h3 class="no-margin-top">Become a volunteer</h3>
                <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante
                    ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse sollicitudin
                    velit sed leo. Ut pharetra augue nec augue. Nam elit agna, endrerit sit amet, tincidunt ac, viverra
                    sed, nulla. Donec porta diam eu massa. <br><br>Fields marked * are mandatory.</p>
            </div>
            <form>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 animate-onscroll">
                        <h5>Contact Details</h5>
                        <label>First name*</label>
                        <input type="text">
                        <br><br>
                        <label>Last name*</label>
                        <input type="text">
                        <br><br>
                        <label>Email address*</label>
                        <input type="text">
                        <br><br>
                        <label>Address 1</label>
                        <input type="text">
                        <br><br>
                        <label>Address 2</label>
                        <input type="text">
                        <br><br>
                        <label>City</label>
                        <input type="text">
                        <br><br>
                        <div class="inline-inputs">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <label>State</label>
                                <select class="chosen-select">
                                    <option>Please Select</option>
                                    <option>United States</option>
                                    <option>United States</option>
                                    <option>United States</option>
                                    <option>United States</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label>ZIP code*</label>
                                <input type="text">
                            </div>
                        </div>
                        <br>
                        <label>Home Phone</label>
                        <input type="text">
                        <br><br>
                        <label>Cell Phone</label>
                        <input type="text">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 animate-onscroll">
                        <h5>What issues do you care about?</h5>
                        <input type="checkbox" id="job-creation-chbx"><label for="job-creation-chbx">Job Creation and
                            Growth</label><br>
                        <input type="checkbox" id="dept-ceiling-chbx"><label for="dept-ceiling-chbx">Capping The Debt
                            Ceiling</label><br>
                        <input type="checkbox" id="healthier-america-chbx"><label for="healthier-america-chbx">A
                            Healthier America</label><br>
                        <input type="checkbox" id="secure-nation-chbx"><label for="secure-nation-chbx">A More Secure
                            Nation </label><br>
                        <h5>How can you help?</h5>
                        <input type="checkbox" id="volunteer-chbx"><label for="volunteer-chbx">I would like to
                            volunteer my time</label><br>
                        <input type="checkbox" id="contribute-chbx"><label for="contribute-chbx">I would like to
                            contribute financially</label><br>
                        <input type="checkbox" id="contact-chbx"><label for="contact-chbx">Please contact me soon</label><br>
                        <h5>Forward to a friend?</h5>
                        <p>Etiam cursus leo vel metus. Nulla facilisi. </p>
                        <label>Your name</label>
                        <input type="text"><br><br>
                        <label>Friend Email Addresses<br><small>(Email addresses should be comma separated)</small></label>
                        <textarea rows="8"></textarea>
                    </div>
                </div>
                <div class="align-center animate-onscroll">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
        <!-- Sidebar -->
        <div class="col-lg-3 col-md-3 col-sm-4 sidebar">
            <div class="banner-wrapper">
                <a class="banner animate-onscroll" href="#">
                    <i class="icons icon-calendar"></i>
                    <h4>Find Events</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                </a>
            </div>
            <div class="banner-wrapper">
                <a class="banner animate-onscroll" href="#">
                    <i class="icons icon-check"></i>
                    <h4>Register to vote</h4>
                    <p>Nemo enim ipsam</p>
                </a>
            </div>
            <div class="banner-wrapper">
                <a class="banner animate-onscroll" href="#">
                    <i class="icons icon-user"></i>
                    <h4>Volunteer</h4>
                    <p>Pellentesque sed dolor</p>
                </a>
            </div>
            <div class="banner-wrapper">
                <div class="banner donate-banner animate-onscroll">
                    <h5>Make a <strong>quick donation</strong> here</h5>
                    <form>
                        <input id="donate-amount-1" type="radio" name="donate-amount">
                        <label for="donate-amount-1">$5</label>
                        <input id="donate-amount-2" type="radio" name="donate-amount">
                        <label for="donate-amount-2">$25</label>
                        <input id="donate-amount-3" type="radio" name="donate-amount">
                        <label for="donate-amount-3">$100</label>
                        <input type="submit" value="Donate">
                    </form>
                </div>
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
