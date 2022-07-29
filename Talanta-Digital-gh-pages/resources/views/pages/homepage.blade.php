@extends('layouts.app')

@section('title', env('APP_NAME') . ' | Homepage')
@section('content')
    <!-- banner section -->
    <div id="banner" style="background-image:linear-gradient(to right,#a517ba,#5f1782);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-white" style="font-size: 40px; font-weight: 600; margin-top: 100px;">
                        WEB DEVELOPMENT, DIGITAL MARKETING AND GRAPHICS TRAINING
                    </p>
                    <p class="text-white">
                        Sign-up for Web Development, Digital Marketing and Graphics Design Classes<br> for online and
                        in-person tutoring
                    </p>
                    <a href="{{route('demo.page')}}" class="bg-white rounded text-primary p-2 text-decoration-none">
                        Register now
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="IMAGES/website2.jpg" class="img-fluid w-100 mt-2 rounded">
                </div>
            </div>
        </div>
        <img src="IMAGES/wave1.png" class="bottom-img img-fluid w-100 rounded">
    </div>

    <div class="container-fluid">
        <!-- SERVICES SECTION -->
        <section id="services" class="p-5">
            <div class="container text-center">
                <h1 class="title">WHAT WE DO</h1>
                <div class="row text-center">
                    <div class="col-md-4 services">
                        <img src="IMAGES/service1.png" class="service-img" style="width:100px; margin-top:20px;">
                        <h4>Web Development</h4>
                        <p>Sign Up for Web Development based on HTML,CSS and Javascript</p>
                    </div>
                    <div class="col-md-4 services">
                        <img src="IMAGES/service2.png" class="service-img" style="width:100px; margin-top:20px;">
                        <h4>Digital Marketing</h4>
                        <p>We offer corporate and individual training of Facebook, and Google Marketing, Metrics and
                            Marketing
                            Campaigns</p>
                    </div>
                    <div class="col-md-4 services">
                        <img src="IMAGES/service3.png" class="service-img" style="width:100px; margin-top:20px;">
                        <h4>Coding</h4>
                        <p>Sign Up for coding classes including Python and Javascript and the associated Frameworks</p>
                    </div>
                </div>
                <button type="button" class="btn btn-primary">All Services</button>
            </div>
        </section>

        <!-- About Us -->

        <section id="about-us" style="background:#f8f9fa; padding-bottom: 50px; padding-top: 50px;">
            <div class="container">
                <h1 class="title text-center">WHY CHOOSE US</h1>
                <div class="row">
                    <div class="col-md-6 about-us">
                        <p class="about-title" style="font-size: 40px; font-weight: 600; margin-top: 8%;">We are the Best in Digital Services</p>
                        <ul class="margin-left: 20px;">
                            <li class="margin: 10px 0;">We offer Practical Market-Oriented Solutions</li>
                            <li class="margin: 10px 0;">We bring many years experience handling different clients</li>
                            <li class="margin: 10px 0;">We use market metrics to prove our results</li>
                            <li class="margin: 10px 0;">We protect your online reputation</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img src="IMAGES/network.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section id="testimonials" class="margin: 100px 0;">
            <div class="container">
                <h1 class="title text-center">WHAT CLIENTS SAY</h1>
            </div>
            <div class="row offset-1">
                <div class="col-md-5 testimonials" style="border-left: 4px solid #7b1798; margin-top: 50px; margin-bottom: 50px;">
                    <p>I have had my best experience learning digital marketing at Talanta Online
                        School.<br> I am now work as a digital marketer using Facebook and Google platforms.</p>
                    <img src="IMAGES/user1.jpg" style="height:90px; width:90px; border-radius: 50%; margin:0 10px;">
                    <p class="user-details" style="display: inline-block; font-size: 12px;"><b>Elizabeth</b><br>Digital Marketer</p>
                </div>
                <div class="col-md-5 testimonials">
                    <p>I have had my best experience learning digital marketing at Talanta Online
                        School.<br> I am now work as a digital marketer using Facebook and Google platforms.</p>
                    <img src="IMAGES/user2.jpg" style="height:90px; width:90px; border-radius: 50%; margin:0 10px;">
                    <p class="user-details" style="display:inline-block; font-size: 12px;"><b>Steve</b><br>Web Developer</p>
                </div>
            </div>
        </section>

        <!-- Social Media -->
        <section id="social-media" style="background:#f8f9fa; padding:100px 0;">
            <div class="container text-center">
                <p style="font-size: 36px;font-weight: 600; margin-bottom: 30px;">FIND US ON SOCIAL MEDIA</p>
                <div class="social-icons">
                    <a href="#"><img style="width:60px; transition: 0.5s;" src="IMAGES/facebook-icon.png"></a>
                    <a href="#"><img style="width:60px; transition: 0.5s;" src="IMAGES/instagram-icon.png"></a>
                    <a href="#"><img style="width:60px; transition: 0.5s;" src="IMAGES/twitter-icon.png"></a>
                    <a href="#"><img style="width:60px; transition: 0.5s;" src="IMAGES/whatsapp-icon.png"></a>
                    <a href="#"><img style="width:60px; transition: 0.5s;" src="IMAGES/snapchat-icon.png"></a>
                    <a href="#"><img style="width:60px; transition: 0.5s;" src="IMAGES/linkedin-icon.png"></a>
                </div>
            </div>
        </section>
    </div>
@endsection
