@extends('master.master')

@push('css')
    <style>
        ul.list li {
            line-height: 24px !important;
            white-space: nowrap !important;
        }

        .list.list-icons li {
            position: relative !important;
            color: black;
        }

        .list li {
            margin-bottom: 0px !important;

        }

        .li-uniq-pri {
            color: #0274CB !important;
        }

        .viptextcolor {
            color: #A2248E !important;
        }

        html .featured-box-effect-3.featured-box-secondary:hover .icon-featured {
            background: #FFF !important;
        }

        .featured-box-effect-3:hover .icon-featured {
            color: var(--branding-color) !important;
        }

    </style>

    <style>
        .cta-box-wrapper {
            margin: 0 25px;


        }

        .cta-box {

            border: none;
            box-shadow: none;
        }

        .cta-box .box-content {
            cursor: pointer;
            background-color: var(--branding-color) !important;
            border-radius: 20px;
            display: inline-block;
            min-width: 250px;
        }

        .iti__country {
            padding: 5px 10px;
            outline: none;
            /* background: var(--blue); */
            color: var(--branding-color);
            z-index: 101000;
        }
    </style>
@endpush
@section('content')
    @include('alerts.alerts')

    <section style="">
        <div class="container my-5">
            {{-- <div class="row" style="">
        <div class="col">
            <div class="
                    heading
                    heading-border
                    heading-middle-border
                    heading-middle-border-center
                    heading-border-xl
                ">
                <h2 class="font-weight-normal color-vipmm w3-cursive">
                    <span class="w3-text-gray">  Find Your </span>
                    <strong class="font-weight-extra-bold viptextcolor">Special</strong>
                    <span class="w3-text-gray">Soulmate </span>
                </h2>
            </div>
        </div>
        </div> --}}
            <h2 class="text-center mb-4 ">Find Your Perfect Match</h2>
            <div
                class="mb-5
            featured-boxes
            featured-boxes-style-3
            featured-boxes-flat
            d-flex justify-content-between
        ">
                <div class="d-flex flex-column flex-md-row">
                    <div class="col-lg-4">
                        <a href="{{ url('register') }}" class="text-decoration-none">
                            <div class="" style="">
                                <div class="featured-box featured-box-secondary featured-box-effect-3 cta-box "data-toggle="modal-"
                                    data-target="#registion-">
                                    <div
                                        class="box-content box-content-border-0 w3-card w3-hover-shadow">
                                        <i class="icon-featured far fa-edit"></i>
                                        <h4
                                            class="font-weight-normal text-5 mt-3">
                                            <strong class="font-weight-extra-bold text-white">100% Verified Profiles</strong>
                                        </h4>
                                        <p class="mb-2 mt-2 text-2 text-white">
                                            Find your soulmate by profession, community and location preferences.
                                        </p>
                                    </div>
                                </div>
                                <div>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ url('page/contact-us') }}" class="text-decoration-none">

                            <div class="">
                                <div
                                    class="featured-box featured-box-secondary featured-box-effect-3 cta-box">
                                    <div
                                        class="
                                    box-content box-content-border-0
                                    w3-card w3-hover-shadow
                                ">
                                        <i class="icon-featured fas fa-users"></i>
                                        <h4
                                            class="
                                        font-weight-normal
                                        text-5
                                        mt-3
                                    ">
                                            <strong class="font-weight-extra-bold text-white">Privacy Guaranteed
                                            </strong>
                                        </h4>
                                        <p class="mb-2 mt-2 text-2 text-white">
                                            Your privacy is secured with us Privacy Guaranteed.
                                        </p>
                                    </div>
                                </div>
                                <div>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ url('https://www.facebook.com/vipmarriagemedia/') }}" class="text-decoration-none">

                            <div class="">
                                <div
                                    class="
                                featured-box
                                featured-box-secondary
                                featured-box-effect-3
                                cta-box
                            ">
                                    <div
                                        class="
                                    box-content box-content-border-0
                                    w3-card w3-hover-shadow
                                ">
                                        <i
                                            class="
                                        icon-featured
                                        far
                                        fa-comments
                                    "></i>


                                        <h4
                                            class="
                                        font-weight-normal
                                        text-5
                                        mt-3
                                    ">
                                            <strong class="font-weight-extra-bold text-white">
                                                Most Reliable
                                            </strong>
                                        </h4>
                                        <p class="mb-2 mt-2 text-2 text-white">
                                            1000s of ID verified, high-quality Bangladeshi profiles.
                                        </p>
                                    </div>
                                </div>
                                <div>

                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="overflow-hidden space-bottom" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="img-box8">
                        <div class="img1"><img src="assets/img/update1/normal/Best Matchmaking & Matrimony Service..jpg" alt="About"></div>
                        <div class="about-counter2" data-bg-src="assets/img/update1/shape/counter_bg.png">
                            <h3 class="counter-title"><span class="counter-number">16</span></h3><span
                                class="counter-text">Years Experience</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 ps-xxl-5">
                    <div class="title-area mb-30">
                        <span class="sub-title7"><span class="box">
                        </span> WELCOME TO</span>
                        <h4 class="sec-title">VIP Marriage Media – Best Matchmaking & Matrimony Service.</h4>
                    </div>
                    <p class="mt-n2 mb-4">We aim to offer you the best experience in finding your perfect life partner. With 16 years of serving clients on their journey of a beautiful new begining in life - VIP Marriage Media is proudly one of the best Bangladeshi matrimony sites.</p>
                    <p class="mt-n2 mb-4">We are dedicated to cater diverse Bangladeshi communities all around the world, including - Hindus, Muslims, Christians and Buddhists.</p>
                    <p class="mt-n2 mb-4">We are on a mission to ensure seamless experience to all our clients through our secured,
                        personalized and user-friendly system.
                        </p>
                    <p class="mt-n2 mb-4">Find your perfect match from thousands of high-quality verified brides’ and grooms’ profiles. Our
                        premium services are active and ready to serve you both online and off-line.
                        </p>
                    <div class="list-collumn2">
                        <div class="checklist style5">
                            <ul>
                                <li>Verification</li>
                                <li>Confidentiality</li>
                            </ul>
                        </div>
                        <div class="checklist style5">
                            <ul>
                                <li>Service Promise</li>
                                <li>Counselling</li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-group style2">
                        {{-- <a href="{{ url('page',"about-us") }}" class="th-btn">Loren More
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>  --}}
                        <a href="{{ url('register') }}" class="th-btn">Register
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                            <a href="https://www.youtube.com/watch?v=ExmauSZqkno" class="video-btn style2 popup-video">
                        <div class="play-btn">
                            <i class="fas fa-play d-none d-lg-block"></i>
                        </div>
                        <span class="btn-text">Watch The Video</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup movingX d-none d-sm-block" data-top="0%" data-left="0"><img src="assets/img/update1/shape/building_2.png"
                alt="shapes"></div>
    </div>
    {{-- <section class="bg-title space overflow-hidden" data-bg-src="assets/img/update1/bg/service_bg_2.png"
        id="service-sec">
        <div class="container">
            <div class="row justify-content-lg-between align-items-end">
                <div class="col-lg-7 mb-n2 mb-lg-0">
                    <div class="title-area">
                        <h2 class="sec-title text-white">We help Every Stage</h2>
                    </div>
                </div>
                <div class="col-auto">

                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-8">
                    <div class="row th-carousel" id="serviceGridSlider" data-asnavfor="#serviceSlideThumb"
                        data-slide-show="1" data-vertical="true">
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="service-grid">
                                <div class="service-grid_img"><img src="assets/img/update1/service/service_2_1_v2.jpg"
                                        alt="service image"></div>
                                <div class="service-grid_content">
                                    <div class="service-grid_icon"><img src="assets/img/update1/icon/service_1_1.svg"
                                            alt="Icon"></div>
                                    <div class="service-grid_icon-overlay"><img
                                            src="assets/img/update1/icon/service_2_1.svg" alt="Icon"></div>
                                    <h3 class="service-grid_title"><a>Countrys</a></h3>
                                    <div class="checklist style5">
                                        <ul>
                                            <li>US</li>
                                            <li>UK</li>
                                            <li>Canada</li>
                                            <li>Australia</li>
                                            <li>Germany</li>
                                            <li>France</li>
                                            <li>Italy & All Europe</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="service-grid">
                                <div class="service-grid_img"><img src="assets/img/update1/service/service_2_2_v2.jpg"
                                        alt="service image"></div>
                                <div class="service-grid_content">
                                    <div class="service-grid_icon"><img src="assets/img/update1/icon/service_1_2.svg"
                                            alt="Icon"></div>
                                    <div class="service-grid_icon-overlay"><img
                                            src="assets/img/update1/icon/service_2_2.svg" alt="Icon"></div>
                                    <h3 class="service-grid_title"><a href="service-details.html">University</a>
                                    </h3>
                                    <div class="checklist style5">
                                        <ul>
                                            <li>BUET</li>
                                            <li>KUET</li>
                                            <li>CUET</li>
                                            <li>RUET</li>
                                            <li>DU</li>
                                            <li>DMC</li>
                                            <li>SSMC</li>
                                            <li>CU</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="service-grid">
                                <div class="service-grid_img"><img src="assets/img/update1/service/service_2_3_v2.jpg"
                                        alt="service image"></div>
                                <div class="service-grid_content">
                                    <div class="service-grid_icon"><img src="assets/img/update1/icon/service_1_3.svg"
                                            alt="Icon"></div>
                                    <div class="service-grid_icon-overlay"><img
                                            src="assets/img/update1/icon/service_2_3.svg" alt="Icon"></div>
                                    <h3 class="service-grid_title"><a href="service-details.html">Occupation</a></h3>
                                    <div class="checklist style5">
                                        <ul>
                                            <li>Army Officer</li>
                                            <li>Bcs Admin Cadre</li>
                                            <li>Bcs Doctor</li>
                                            <li>Phd</li>
                                            <li>Professor</li>
                                            <li>Celebrities</li>
                                            <li>Doctor</li>
                                            <li>Barrister</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="service-grid">
                                <div class="service-grid_img"><img src="assets/img/update1/service/service_2_4.jpg"
                                        alt="service image"></div>
                                <div class="service-grid_content">
                                    <div class="service-grid_icon"><img src="assets/img/update1/icon/service_1_4.svg"
                                            alt="Icon"></div>
                                    <div class="service-grid_icon-overlay"><img
                                            src="assets/img/update1/icon/service_2_4.svg" alt="Icon"></div>
                                    <h3 class="service-grid_title"><a href="service-details.html">Occupation</a></h3>
                                    <div class="checklist style5">
                                        <ul>
                                            <li>Govt. Officer</li>
                                            <li>Engineer</li>
                                            <li>Businessman</li>
                                            <li>Industrialist</li>
                                            <li>MP</li>
                                            <li>Minister</li>
                                            <li>Secretary</li>
                                            <li>Navy officer</li>
                                            <li>Bcs Police Cadre</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="service-thumb-wrap"><button data-slick-prev="#serviceSlideThumb"
                            class="arrow-btn prev"><i class="far fa-arrow-up"></i></button>
                        <div class="th-carousel" id="serviceSlideThumb" data-asnavfor="#serviceGridSlider"
                            data-slide-show="3" data-md-slide-show="3" data-sm-slide-show="3" data-xs-slide-show="3"
                            data-vertical="true">
                            <div>
                                <div class="service-thumb">
                                    <div class="service-thumb_img"><img
                                            src="assets/img/update1/service/service_thumb_2_1_v2.png"
                                            alt="service image"></div>
                                    <h3 class="service-thumb_title">Countrys</h3>
                                </div>
                            </div>
                            <div>
                                <div class="service-thumb">
                                    <div class="service-thumb_img"><img
                                            src="assets/img/update1/service/service_thumb_2_2_v2.png"
                                            alt="service image"></div>
                                    <h3 class="service-thumb_title">University</h3>
                                </div>
                            </div>
                            <div>
                                <div class="service-thumb">
                                    <div class="service-thumb_img"><img
                                            src="assets/img/update1/service/service_thumb_2_3_v2.png"
                                            alt="service image"></div>
                                    <h3 class="service-thumb_title">Occupation</h3>
                                </div>
                            </div>
                            <div>
                                <div class="service-thumb">
                                    <div class="service-thumb_img"><img
                                            src="assets/img/update1/service/service_thumb_2_4.jpg" alt="service image">
                                    </div>
                                    <h3 class="service-thumb_title">Occupation</h3>
                                </div>
                            </div>
                        </div><button data-slick-next="#serviceSlideThumb" class="arrow-btn next"><i
                                class="far fa-arrow-down"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section style="position: relative; height: 530px; overflow: hidden;">
        <iframe src="https://www.blog.vipmarriagemedia.com" width="100%" height="700px" frameborder="0" scrolling="no" style="position: absolute; top: -130px; z-index: 1;"></iframe>
        <div onclick="openOriginalWebsite()" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: transparent; z-index: 2; cursor: pointer;"></div>
    </section>

    <div class="space overflow-hidden">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-xl-5 mb-30 mb-xl-0 d-none d-sm-block">
                    <div class="wcu-img-5">
                        <div class="img1 d-none d-sm-block"><img src="assets/img/update1/normal/Great Experience With Vip Marriage Media.jpg" alt="why"></div>
                        <div class="mission-box">
                            <h3 class="h4 mission-title">Mission</h3>
                            <p class="mission-text">Assertively deliver client-centered communities without frictionless
                                services.</p>
                            <div class="checklist-wrap">
                                <div class="mission-img">
                                    {{-- <img src="assets/img/update1/normal/mission_2_1.jpg"
                                        alt="mission img"> --}}
                                    </div>
                                <div class="checklist style5">
                                    <ul>
                                        <li>100% Privacy</li>
                                        <li>Verified Profiles</li>
                                        <li>Best Matches</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 pe-xxl-5">
                    <div class="title-area mb-30"><span class="sub-title7"><span class="box"></span> WHY CHOOSE
                            US</span>
                        <h2 class="sec-title">Great Experience With Vip Marriage Media</h2>
                    </div>
                    <p class="mt-n2 mb-35 pe-xl-4">We are leading Matrimonial services Almost all communities in bangladesh and out of Bangladesh.TOUCHED OVER 70 THOUSAND LIVES PROFILE INFORMATION
                        THOUSAND OF HAPPY MARRIAGE YOURS COULD BE NEXT</p>
                    <div class="skill-feature style3">
                        <p class="skill-feature_title">Privacy</p>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%;">
                                <div class="progress-value">100%</div>
                            </div>
                        </div>
                    </div>
                    <div class="skill-feature style3">
                        <p class="skill-feature_title">Verified Profiles</p>
                        <div class="progress">
                            <div class="progress-bar" style="width: 100%;">
                                <div class="progress-value">100%</div>
                            </div>
                        </div>
                    </div>
                    <div class="skill-feature style3">
                        <p class="skill-feature_title">Best Matches</p>
                        <div class="progress">
                            <div class="progress-bar" style="width: 95%;">
                                <div class="progress-value">95%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup movingX d-none d-sm-block" data-top="0%" data-right="0"><img
                src="assets/img/update1/shape/building_2.png" alt="shapes"></div>
    </div>

    <section class="space bg-top-center " data-bg-src="assets/img/update1/bg/Best_Marriage_Media_in_Bangladesh.jpg">
        <div class="container">
            <div class="row justify-content-lg-between align-items-end">
                <div class="col-lg-6 mb-n2 mb-lg-0">
                    <div class="title-area"><span class="sub-title7"><span class="box"></span> VIDEOS GELLARY</span>
                        <h2 class="sec-title text-white">Our Latest Videos</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn"><a href="https://www.youtube.com/@vipmarriagemedia" class="th-btn style3">View All Videos<i
                                class="fas fa-arrow-right ms-2"></i></a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="" id="projectSlide2">
                        <div>
                            <div class="project-grid">
                                <div class="project-img ">
                                        <img src="assets/img/update1/normal/marriage sites in bangladesh.jpg" alt="mockup">
                                        <div class="play-bg" style="position: absolute; top: 50%; left: 50%;">
                                            <a
                                                href="https://www.youtube.com/watch?v=Pbrb11dyQq8" class="play-btn style4 popup-video"><i
                                                    class="fas fa-play"></i></a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="project-grid">
                                <div class="project-img ">
                                        <img src="assets/img/update1/normal/Best matrimonial site in bangladesh.jpg" alt="mockup">
                                        <div class="play-bg" style="position: absolute; top: 50%; left: 50%;">
                                            <a
                                                href="https://www.youtube.com/watch?v=Pbrb11dyQq8" class="play-btn style4 popup-video"><i
                                                    class="fas fa-play"></i></a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="project-grid">
                                <div class="project-img ">
                                        <img src="assets/img/update1/normal/Best Marriage Media in Bangladesh.jpg" alt="mockup">
                                        <div class="play-bg" style="position: absolute; top: 50%; left: 50%;">
                                            <a
                                                href="https://www.youtube.com/watch?v=Pbrb11dyQq8" class="play-btn style4 popup-video"><i
                                                    class="fas fa-play"></i></a>
                                        </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="row projectSlideThumb">
                        <div class="col-auto">
                            <div class="project-6thumb">
                                <div class="project-thumb_img">
                                    <img src="assets/img/update1/normal/marriage sites in bangladesh.jpg"
                                        alt="project image"></div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="project-6thumb">
                                <div class="project-thumb_img">
                                    <img src="assets/img/update1/normal/Best matrimonial site in bangladesh.jpg"
                                        alt="project image"></div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="project-6thumb">
                                <div class="project-thumb_img">
                                    <img src="assets/img/update1/normal/Best Marriage Media in Bangladesh.jpg"
                                        alt="project image"></div>
                            </div>
                        </div>
                    </div>
                    <div class="icon-box style3" data-bg-src="assets/img/update1/bg/bg_pattern_13.png"><button
                            data-slick-prev="#projectSlide2" class="slick-arrow default"><i
                                class="far fa-arrow-left"></i></button> <button data-slick-next="#projectSlide2"
                            class="slick-arrow default"><i class="far fa-arrow-right"></i></button></div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative bg-contain-repeat" data-bg-src="assets/img/update1/bg/mockup_bg_1.jpg"
        data-overlay="title" data-opacity="8">
        <div class="img-right th-video2"><img src="assets/img/update1/normal/Best Bengali Matrimony site.jpg" alt="mockup">
            <div class="play-bg"><img src="assets/img/update1/normal/Best Bengali Matrimony sites.png" alt="shape"> <a
                    href="https://www.youtube.com/watch?v=Pbrb11dyQq8" class="play-btn style4 popup-video"><i
                        class="fas fa-play"></i></a></div>
        </div>
        <div class="container z-index-common">
            <div class="row">
                <div class="col-xl-6 space">
                    <div class="title-area mb-30"><span class="sub-title7"><span class="box"></span> Free Consultations</span>
                        <h4 class="sec-title text-white">Discover Our Capability & Free Consultations</h4>
                    </div>
                    <p class="mt-n2 mb-30 text-white">VIP Marriage Media is one of the best Bengali Matrimony sites in Bangladesh that assists people looking for the perfect & suitable life partner for their lives.</p>
                    <div class="btn-group">
                        <a href="{{ url('register') }}" class="th-btn style3">Register
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                        <a class="th-btn style4" data-target="#smallModal" data-toggle="modal">LogIn
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space" data-bg-src="assets/img/update1/bg/blog_bg_2.png" id="blog-sec">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title7 justify-content-center"><span
                        class="box"></span>Success Stories</span>
                <h2 class="sec-title">Our Success Stories</h2>
            </div>
            <div class="row slider-shadow th-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2"
                data-sm-slide-show="1">
                @foreach ($stories as $post)
                <div class="col-md-6 col-xl-4">
                    <div class="blog-card">
                        <a href="{{ route('success.stories_details', $post->id) }}" style="text-decoration: none">
                            <div class="blog-img"><img src="{{ asset('storage/stories') }}/{{ $post->image_name }}" alt="blog image"></div>
                            <div class="blog-content">
                                <h3 class="box-title"><a href="{{ route('success.stories_details', $post->id) }}">{{ Str::limit($post->title, 25, '...') }}</a></h3>
                                <p class="blog-text">{{ Str::limit($post->description, 70, '...') }}</p><a href="{{ route('success.stories_details', $post->id) }}" class="link-btn style3">Read More<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        function openOriginalWebsite() {
            window.open("https://www.blog.vipmarriagemedia.com", "_blank");
        }
    </script>
    @endsection
    @push('js')

    @endpush
