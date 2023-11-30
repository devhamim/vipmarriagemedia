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
            <h1 class="text-center h1 mb-4 ">Find Your Special Soulmate</h1>
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
                                            <strong class="font-weight-extra-bold text-white">Register Free</strong>
                                        </h4>
                                        <p class="mb-2 mt-2 text-2 text-white">
                                            Most trusted plateform in our country, Sign up to find the best partner.
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
                                            <strong class="font-weight-extra-bold text-white">Contact</strong>
                                        </h4>
                                        <p class="mb-2 mt-2 text-2 text-white">
                                            Feeling connected to each other is a basic human need.
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
                                                Message
                                            </strong>
                                        </h4>
                                        <p class="mb-2 mt-2 text-2 text-white">
                                            Good communication is the bridge between confusion and clarity.
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
    <section>
        <div class="" style="background-color: #d0d0d0">
            <h1 class="text-center h1  pt-5">We help Every Stage</h1>
            <div class="container py-5 text-center">
                {!! $websiteParameter->home_1st_part_content !!}
            </div>
        </div>
    </section>
    <section class="mt-0">
        <div class="py-5" style="background-color: #E2E2E2">
            {{-- <h1 style="margin: 0" class="text-center h1 mb-4 pt-5">About Us</h1> --}}
            <div class="container py-4">
                <div class="d-flex justify-content-center flex-column flex-md-row">
                    <div class="col-md-6">
                        <p class="pt-2">
                            <img src="{{ asset("storage/homePage/".$websiteParameter->home_2nd_part_image) }}" alt="" class="img-fluid">
                        </p>
                    </div>
                    <div class="col-md-6">{!! $websiteParameter->home_2nd_part_content !!}
                        <a class="btn btn-danger" href="{{ url('page',"about-us") }}">Loren More</a>
                        <a class="btn btn-danger" href="{{ route('packagelist') }}">Package</a>
                    </div>
                </div>
            </div>
        </div>

    </section>



        {{-- @if ($everyStagePage)
@foreach ($everyStagePage->items as $item)
{!! $item->content !!}

@endforeach
@endif --}}





        {{-- <div class="row mt-n5">
    <div class="col">
        <div class="
                heading
                heading-middle-border
                heading-middle-border-center
                heading-border-xl
            ">
            <h2 class="font-weight-normal viptextcolor w3-cursive"><strong class="font-weight-extra-bold">
                    𝑾𝒆 𝒉𝒆𝒍𝒑 </strong>
                <strong class="font-weight-extra-bold"> 𝒆𝒗𝒆𝒓𝒚 𝒔𝒕𝒂𝒈𝒆 </strong>
            </h2>
        </div>
    </div>
</div>


        <section class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-color-secondary overlay-show overlay-op-8 mb-5" style="background-image: url({{ asset('img/1.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">

                <ul class="list list-icons">
                    <li><i class="fas fa-check"></i> <b>Army Officer</b> <i class="fas fa-check"></i> Major & Captains
                        </li>
                    <li><i class="fas fa-check"></i> Secretary <i class="fas fa-check"></i> Army officer Divorce
                    </li>

                    <li><i class="fas fa-check"></i> <span class="li-uniq-pri">Bcs Admin Cadre</span> <i
                            class="fas fa-check"></i> Navy officer</li>
                    <li><i class="fas fa-check"></i> Magistrate <i class="fas fa-check"></i> Judicial Magistrate</li>
                    <li><i class="fas fa-check"></i> Bcs Police Cadre</li>
                    <li><i class="fas fa-check"></i><span class="li-uniq-pri">Divorce</span> <i
                            class="fas fa-check"></i> Single <i class="fas fa-check"></i> Widow</li>
                </ul>

            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">

                <ul class="list list-icons">
                    <li><i class="fas fa-check"></i> <b><span class="li-uniq-pri">𝐁𝐜𝐬 𝐃𝐨𝐜𝐭𝐨𝐫 </span></b>
                    </li>
                    <li><i class="fas fa-check"></i> Govt. Officer  <i class="fas fa-check"></i> Engineer</li>

                    <li><i class="fas fa-check"></i> Buet Kuet Cuet Ruet  </li>
                    <li><i class="fas fa-check"></i><span class="li-uniq-pri">Industrialist</span> <i
                            class="fas fa-check"></i> businessman</li>

                    <li><i class="fas fa-check"></i><span class="li-uniq-pei">Group OF Companies</span> <i
                            class="fas fa-check"></i> MP <i class="fas fa-check"></i> Minister</li>
                </ul>

            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">

                <ul class="list list-icons">
                    <li><i class="fas fa-check"></i> <b>𝐂𝐢𝐭𝐢𝐳𝐞𝐧𝐬𝐡𝐢𝐩 𝐏𝐫𝐨𝐟𝐢𝐥𝐞</b> </li>
                    <li><i class="fas fa-check"></i> <span class="li-uniq-pri">USA</span> <i class="fas fa-check"></i>
                        UK <i class="fas fa-check"></i> Canada </li>

                    <li><i class="fas fa-check"></i> Australia <i class="fas fa-check"></i> Germany <i
                            class="fas fa-check"></i> France </li>
                    <li><i class="fas fa-check"></i> Italy & All Europe</li>
                    <li><i class="fas fa-check"></i> <span class="li-uniq-pri">PHD</span> <i class="fas fa-check"></i>
                        Doctor <i class="fas fa-check"></i> Barrister</li>

                </ul>

            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">

                <ul class="list list-icons">
                    <li><i class="fas fa-check"></i> <b><span class="li-uniq-pri">𝐂𝐡𝐚𝐫𝐭𝐞𝐫𝐞𝐝
                                𝐀𝐜𝐜𝐨𝐮𝐧𝐭𝐚𝐧𝐭</span></b> </li>
                    <li><i class="fas fa-check"></i> Multinational Company</li>

                    <li><i class="fas fa-check"></i> Airforce <i class="fas fa-check"></i> armed forces doctor</li>
                    <li><i class="fas fa-check"></i> <span class="li-uniq-pri">University professor</span> <i
                            class="fas fa-check"></i> Banker</li>
                    <li><i class="fas fa-check"></i> <span class="li-uniq-pri">celebrities</span></li>

                </ul>

            </div>
        </div>



    </div>
</section> --}}

{{-- <section class="

        section
        section-text-light
        section-parallax
        mt-0
    " data-plugin-parallax data-plugin-options="{'speed': 1.5}" >
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">

                <ul class="list list-icons">
                    <li><i class="fas fa-check"></i> <b>Army Officer</b> <i class="fas fa-check"></i> Major & Captains
                        (300+)</li>
                    <li><i class="fas fa-check"></i> Secretary <i class="fas fa-check"></i> Army officer(150+) Divorce
                    </li>

                    <li><i class="fas fa-check"></i> <span class="li-uniq-pri">Bcs Admin Cadre</span> <i
                            class="fas fa-check"></i> Navy officer</li>
                    <li><i class="fas fa-check"></i> Magistrate <i class="fas fa-check"></i> Judicial Magistrate</li>
                    <li><i class="fas fa-check"></i> Bcs Police Cadre) (350+)</li>
                    <li><i class="fas fa-check"></i><span class="li-uniq-pri">Divorce</span> <i
                            class="fas fa-check"></i> Single <i class="fas fa-check"></i> Widow</li>
                </ul>

            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">

                <ul class="list list-icons">
                    <li><i class="fas fa-check"></i> <b><span class="li-uniq-pri">𝐁𝐜𝐬 𝐃𝐨𝐜𝐭𝐨𝐫 </span></b>(100+)
                    </li>
                    <li><i class="fas fa-check"></i> Govt. Officer (500+) <i class="fas fa-check"></i> Engineer</li>

                    <li><i class="fas fa-check"></i> Buet Kuet Cuet Ruet (500+) </li>
                    <li><i class="fas fa-check"></i><span class="li-uniq-pri">Industrialist</span> <i
                            class="fas fa-check"></i> businessman (1200+)</li>

                    <li><i class="fas fa-check"></i><span class="li-uniq-pei">Group OF Companies</span> <i
                            class="fas fa-check"></i> MP <i class="fas fa-check"></i> Minister</li>
                </ul>

            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">

                <ul class="list list-icons">
                    <li><i class="fas fa-check"></i> <b>𝐂𝐢𝐭𝐢𝐳𝐞𝐧𝐬𝐡𝐢𝐩 𝐏𝐫𝐨𝐟𝐢𝐥𝐞</b> </li>
                    <li><i class="fas fa-check"></i> <span class="li-uniq-pri">USA</span> <i class="fas fa-check"></i>
                        UK <i class="fas fa-check"></i> Canada </li>

                    <li><i class="fas fa-check"></i> Australia <i class="fas fa-check"></i> Germany <i
                            class="fas fa-check"></i> France </li>
                    <li><i class="fas fa-check"></i> Italy & All Europe (2000+)</li>
                    <li><i class="fas fa-check"></i> <span class="li-uniq-pri">PHD</span> <i class="fas fa-check"></i>
                        Doctor <i class="fas fa-check"></i> Barrister</li>

                </ul>

            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">

                <ul class="list list-icons">
                    <li><i class="fas fa-check"></i> <b><span class="li-uniq-pri">𝐂𝐡𝐚𝐫𝐭𝐞𝐫𝐞𝐝
                                𝐀𝐜𝐜𝐨𝐮𝐧𝐭𝐚𝐧𝐭</span></b> </li>
                    <li><i class="fas fa-check"></i> Multinational Company</li>

                    <li><i class="fas fa-check"></i> Airforce <i class="fas fa-check"></i> armed forces doctor</li>
                    <li><i class="fas fa-check"></i> <span class="li-uniq-pri">University professor</span> <i
                            class="fas fa-check"></i> Banker</li>
                    <li><i class="fas fa-check"></i> <span class="li-uniq-pri">celebrities</span></li>

                </ul>

            </div>
        </div>



    </div>
</section> --}}


{{-- <section style="min-height: 400px" class="w3-light-gray text-center">
    <h2 class="text-lg-10 text-sm-5 text-md-10 pt-5" style="text-shadow: 1px 1px 2px #000">
        <strong>Download </strong> Our App
    </h2>

    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid rounded" src="{{ asset('img/intro-mobile.png') }}" />
        </div>

        <div class="col-md-6">
            <br />
            <img class="img-fluid rounded" src="{{
                    asset('img/mobile-app.png')
                }}" />

            <br />
            <img class="img-fluid rounded" src="{{
                    asset(
                        'img/Matrimony-App-Shaadi.com-Playstore.svg'
                    )
                }}" />
        </div>
    </div>
</section> --}}



        {{-- <section style="min-height: 250px">
            <div class="container">
                <h1 class="text-center h1 mb-4 mt-5">Blog Posts</h1>
                <iframe style="width: 100%; height:400px;border:none;" src="https://www.blog.vipmarriagemedia.com/" title="Blog"></iframe>
            </div>
        </section> --}}





        <section style="min-height: 250px" class="my-5 pb-5">
            <div class="container">
                <div class="row mt-5">
                    <div class="col">
                        <h1 class="text-center h1 mb-4" style="color:#f05b62">Videos</h1>
                        <p class="text-center pb-4">Some video talk about VIP Marriage Media and success store</p>
                        <div class="row">
                            <div class="col-lg-4">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/9YNdGhI6MJU?si=GAhG2UUGSTe0smuC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-4">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/Pbrb11dyQq8?si=rTh4CmIsE4C8oLOZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-4">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/Cb-AL9pS0RU?si=a5aPgJsv6D-Cm-cS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-4">
                                <div class="col-md-4">
                                    <blockquote class="instagram-media" style="width: 100%; height:480px;border:none;" data-instgrm-permalink="https://www.instagram.com/vipmarriagemedia" data-instgrm-version="13"></blockquote>
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fb-page" data-href="https://www.facebook.com/vipmarriagemedia"
                                    data-width="350" data-height="480" data-hide-cover="false"
                                    data-tabs="timeline,messages" data-show-facepile="true"></div>
                            </div>
                            <div class="col-md-4">
                                <iframe width="350" height="480" src="https://twitter.com/vipmarriagemed1"></iframe>
                            </div>

                        </div> --}}
                    </div>
                </div>

            </div>
        </section>
        <section style="" class="w3-light-gray">
            {{-- <h2 class="text-lg-10 text-sm-5 text-md-10 pt-5 color-vipmm w3-cursive" style="text-shadow: 1px 1px 2px #000">
        Sale<strong class="viptextcolor"> 30% OFF</strong>
    </h2> --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img width="100%" src="{{ asset('images/offter.jpg') }}" alt="">
                </div>
                <div class="col-lg-8 mt-5 py-5">
                    <h1 class=" h1 my-2" style="width: 80%; margin: 0 auto; padding: 20px 0 0 0">Sale 30% OFF </h1>
                <p style="width: 80%; margin: 0 auto; padding: 20px 0">VIP Marriage Media is one of the best Bengali Matrimony sites in Bangladesh that assists people looking for the perfect & suitable life partner for their lives.</p>
                @guest
                    <div class="p-2" style="width: 80%; margin: 0 auto;">
                        <a class="
                    w3-btn
                    btn btn-lg
                    text-white
                    w3-round-xxlarge
                    w3-border
                    w3-border-white
                    w3-hover-shadow
                "
                            href="{{ url('register') }}" style="background: #f05b62">Register</a>
                        <a class="
                    w3-btn
                    btn btn-lg
                    text-white
                    w3-round-xxlarge
                    w3-border
                    w3-border-white
                    w3-hover-shadow
                "
                            href="" data-toggle="modal" data-target="#smallModal" style="background: #f05b62">Login</a>
                    </div>
                @else
                    <div class="p-4">
                        <a class="
                    w3-btn
                    btn btn-lg
                    w3-red
                    w3-round-xxlarge
                    w3-border
                    w3-border-white
                    w3-hover-shadow
                "
                            href="{{ route('user.packeges') }}" style="background: #f05b62">Get your package</a>
    
                    </div>
                @endguest
                </div>
            </div>
        </div>
        </section>

        <section style="min-height: 250px">
            <div class="container">
                {{-- <div class="row mt-5">
            <div class="col">
                <div class="
                        heading
                        heading-border
                        heading-middle-border
                        heading-middle-border-center
                        heading-border-xl
                    ">
                    <h2 class="font-weight-normal color-vipmm pb-3 w3-cursive">
                        <strong class="font-weight-extra-bold viptextcolor">VIP Marriage Media</strong>
                        with Thousands of
                        <strong class="font-weight-extra-bold viptextcolor">
                            Success Stories
                        </strong>
                    </h2>
                </div>
            </div>
        </div> --}}
                <h1 class="text-center h1 mt-5 pt-5 mb-4">Our Success Stories</h1>

                <div class="owl-carousel owl-theme"
                    data-plugin-options="{'items': 4, 'autoplay': true, 'autoplayTimeout': 3000}">
                    @foreach ($stories as $post)
                        {{-- <div class="py-1">
                <div class="card w3-card-2 w3-hover-opacity w3-round-small">
                    <img class="card-img-top" src="{{ asset('/storage/stories/' . $story->image_name) }}" alt="Card Image" />
                    <div class="card-body">
                        <h4 class="
                                card-title
                                mb-1
                                text-4
                                font-weight-bold
                            ">
                            {{$story->title}}
                        </h4>
                        <p class="card-text text-justify">
                         {{$story->description}}
                        </p>
                        <a href="/" class="
                                read-more
                                text-color-primary
                                font-weight-semibold
                                text-2
                            ">Read More
                            <i class="
                                    fas
                                    fa-angle-right
                                    position-relative
                                    top-1
                                    ml-1
                                "></i></a>
                    </div>
                </div>
            </div> --}}

                        <div class="p-1 mx-2">
                            <a href="{{ route('success.stories_details', $post->id) }}" style="text-decoration: none">
                                <div class="card w3-card-2 w3-hover-border w3-hover-border-gray w3-round-small">
                                    
                                    <img class="card-img-top" src="{{ asset('storage/stories') }}/{{ $post->image_name }}" alt="Card Image" />
                                    <div class="card-body" style="padding:0px">
                                        <h4 class="
                        card-title
                        text-4
                        font-weight-bold
                        w3-Verdana
                        text-center
                         m-0 py-3"
                                            style="height: 60px;overflow:hidden">

                                            {{ Str::limit($post->title, 30, '...') }}

                                            {{-- <br><small class="color-vipmm">{{custom_title( \Carbon\Carbon::parse($post->created_at)->format('F'), 3) }} {{ \Carbon\Carbon::parse($post->created_at)->format('d, Y')}}</small> --}}
                                        </h4>
                                        <p class="card-text text-justify w3-serif text-center p-0 mb-1"
                                            style="min-height: 60px;max-height: 60px;">
                                            {{ Str::limit($post->description, 70, '...') }}
                                        </p>
                                        {{-- <a href="{{route('success.stories_details', $post->id)}}" class="
                            my-2 ml-2
                            read-more
                            text-color-primary
                            font-weight-semibold
                            text-2 w3-hover-text-red
                            ">Read More
                            <i class="
                                    fas
                                    fa-angle-right
                                    position-relative
                                    ml-1
                                "></i>
                            </a> --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach




                </div>
            </div>
        </section>
    @endsection
    @push('js')
    @endpush

