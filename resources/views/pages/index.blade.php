@extends('layouts.tmk')
@section('content')
<section class="section full-width-bg">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- Revolution Slider -->
            <div class="tp-banner-container main-revolution">
                <span class="Apple-tab-span"></span>
                <div class="tp-banner">
                    <ul>
                        <li data-transition="papercut" data-slotamount="7">
                            <img src="{{asset('img/slide1.jpg')}}" alt="">
                            <div class="tp-caption" data-x="100" data-y="115" data-speed="700" data-start="1000"
                                data-easing="easeOutBack">
                                <h2>புதிய<br>ஆரம்பம் </h2>
                            </div>
                            <div class="tp-caption" data-x="100" data-y="310" data-speed="500" data-start="1200"
                                data-easing="easeOutBack"><a href="#" class="button big">மேலும் வாசிக்க </a></div>
                        </li>
                        <li data-transition="papercut" data-slotamount="7">
                            <img src="{{asset('img/slide2.jpg')}}" alt="">
                            <div class="tp-caption align-center" data-x="center" data-y="135" data-speed="700"
                                data-start="1000" data-easing="easeOutBack">
                                <h4 class="great-vibes">ஒற்றுமையே</h4>
                            </div>
                            <div class="tp-caption align-center" data-x="center" data-y="220" data-speed="500"
                                data-start="1200" data-easing="easeOutBack">
                                <h2>வெற்றியின் முதல் படி </h2>
                            </div>
                            <div class="tp-caption align-center" data-x="center" data-y="300" data-speed="300"
                                data-start="1400"><a href="#" class="button big button-arrow">ஒன்றிணைந்து
                                    செயற்பட </a></div>
                        </li>
                        <li data-transition="papercut" data-slotamount="7">
                            <img src="{{asset('img/slide1.jpg')}}" alt="">
                            <div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="150"
                                data-speed="700" data-start="1000" data-easing="easeOutBack">
                                <h2>தமிழர் வரலாறு </h2>
                            </div>
                            <div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="225"
                                data-speed="500" data-start="1200" data-easing="easeOutBack">
                                <p>உங்கள் ஆரம்பத்தை அறிந்து கொள்ளுங்கள் </p>
                            </div>
                            <div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="305"
                                data-speed="300" data-start="1400"><a href="#" class="button big button-arrow">மேலும்
                                    வாசிக்க</a></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Revolution Slider -->
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="banners-inline">
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
            </div>
        </div>
    </div>
</section>
@endsection