@extends('user.master.pageMaster')

@push('meta')



 <title> {{$page->meta_title ?: $websiteParameter->title}}</title>

 <meta name="keywords" content="{{ $page->meta_keywords ?: $websiteParameter->meta_keyword }}">
<meta name="description" content="{{ $page->meta_description ?: $websiteParameter->meta_description}}" />

@endpush


@push('css')
@endpush


@section('content')
<div role="main" class="main margin-start">

    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-sm">
    <div class="container">
        <div class="row mr-lg-n5">
            <div class="col-md-9 order-2 order-md-1 align-self-center p-static">
            <h1 class="text-danger">{{ $page->page_title }}</h1>
            </div>
            <div class="col-md-3 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-end">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">{{ $page->page_title }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>

    <div class="container main margin-start" style="background-color: #ffff; border-radius:25px">
        <div class="row">
            <div class="col-lg-12">
                <div class="py-3 text-center">
                    <h2 class="text-center color-vipmm " style="font-family: inherit; color: #2B161B;">Find Your <span class="color-vipmm2"> Dream Partner </span>With Us</h2>
                    <p class="pb-3">Our premium VIP matchmaking services are ready to make your dream come true!</p>

                    <div class="row">
                        <div class="col-lg-6 mt-5 pt-5">
                            <span class="text-center color-vipmm" style="font-size:14px; font-weight:600"> <span class="color-vipmm2">Our Bank
                                Accounts</span></span>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="200">
                                <div class="card border-0 border-radius-0 ">
                                    <div class="card-body ">

                                        <div class="row">


                                            <div class="col-md-6">
                                                <p class="card-text color-vipmm2">
                                                    Ab Bank
                                                </p>
                                                <span class="">
                                                    Name: VIP MARRIAGE MEDIA
                                                    A/c No: 1111200066300 <br>
                                                    Branch Code: 184 <br>
                                                    Branch: Uttara Branch <br>
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="card-text color-vipmm2">
                                                    City Bank
                                                </p>
                                                <span class="">
                                                    Name: VIP MARRIAGE MEDIA
                                                    A/c No: 1503437594001 <br>
                                                    Branch Code: 184 <br>
                                                    Branch: Nikunja <br>
                                                </span>
                                            </div>
                                            <div class="col-md-6 m-auto pt-3">
                                                <p class="card-text color-vipmm2">
                                                    Mobile Banking
                                                </p>
                                                <p class="card-text p-0" style="white-space: nowrap;">01767506668
                                                    <small>(Nagad)</small>
                                                </p>
                                                <p class="card-text p-0" style="white-space: nowrap;">01632-940557
                                                    <small>(Bkash)</small>
                                                </p>
                                                <p class="card-text p-0" style="white-space: nowrap;">01857-659958
                                                    <small>(Bkash)</small>
                                                </p>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-5 py-3">
                                <h3 class="text-center color-vipmm pb-3" >Send us a <span class="color-vipmm2">message</span></h3>
                                <form class="contact-form" action="{{ route('contactUsPost') }}" method="POST">

                                    @include('alerts.alerts')
                                    @csrf
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-12">
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <input type="text" name="name" value="{{ old('name') }}"
                                                        data-msg-required="Name.." placeholder="Name" maxlength="100"
                                                        class="form-control tarek-input" name="subject" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <input type="email" value="{{ old('business_email') }}"
                                                        data-msg-required="Please enter the subject." placeholder="Email"
                                                        name="business_email" maxlength="100" class="form-control tarek-input"
                                                        name="subject" required>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <input type="string" value="{{ old('phone_number') }}"
                                                        data-msg-required="Please enter the subject." name="phone_number"
                                                        placeholder="Phone Number" maxlength="100" class="form-control tarek-input"
                                                        name="subject" required>
                                                </div>
                                            </div>


                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <textarea maxlength="5000" data-msg-required="Please enter your message."
                                                        rows="4" class="form-control tarek-textarea-b-dark" name="message_body"
                                                        required>Your Message</textarea>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <input type="submit" value="Send Message"
                                                        class="btn bg-color-vipmm btn-rounded btn-block btn-modern text-white"
                                                        data-loading-text="Loading...">
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col-lg-4">
                            <span class="text-center color-vipmm2 " style="font-size:14px; font-weight:600">Address</span>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="200">
                                <div class="card border-0 border-radius-0 ">
                                    <div class="card-body text-center">

                                        <p class="card-text ">Nikunja 2 # Road 20,Plot 14,Dhaka-1229 Bangladesh</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <span class="text-center color-vipmm2 " style="font-size:14px; font-weight:600">Phone:</span>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="200">
                                <div class="card border-0 border-radius-0">
                                    <div class="card-body ">
                                        <div class="row ">
                                            <div class="col-md-6">
                                                <p class="card-text " style="white-space: nowrap;">+8801767-506668</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="card-text " style="white-space: nowrap;">+8801752-811261</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="card-text " style="white-space: nowrap;">+8801748-827666</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="card-text " style="white-space: nowrap;">+8801767-502889</p>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <span class="text-center color-vipmm2 m-auto" style="font-size:14px; font-weight:600">Matchmaker Contact</span>
                                            <div class="col-md-6">
                                                <p class="card-text " style="white-space: nowrap;">+8801722-363398</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="card-text " style="white-space: nowrap;">+8801795-207866</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <span class="text-center color-vipmm2 " style="font-size:14px; font-weight:600">Email:</span>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="200">
                                <div class="card border-0 border-radius-0 ">
                                    <div class="card-body ">
                                        <p class="card-text " style="white-space: nowrap;">vipmarriage.ceo@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-5 m-auto">

            </div>
            <div class="col-lg-12">
                <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d228.0954785022498!2d90.41674998661806!3d23.83538986256982!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c508e81ea951%3A0x77b955cf6739a040!2sVIP%20Marriage%20Media!5e0!3m2!1sen!2sbd!4v1724581812145!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </div>




</div>
@endsection

@push('js')

@endpush
