
@extends('user.master.usermaster')
@php
    $me=auth()->user();
@endphp
@push('css')
<style>
    .grid-card-contact{
        display: grid;
        grid-template-columns: 33% 33% 33%;
        text-align: center;
    }
     /* Main card style */
    .profile-card {
        background: #f9f9f9;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 20px;
        display: flex;
        align-items: flex-start;
        transition: background 0.3s, color 0.3s;
    }
    .profile-card:hover {
        background: #ededed;
    }

    /* Profile image */
    .profile-image {
        border-radius: 50%;
        width: 80px;
        height: 80px;
        object-fit: cover;
        border: 5px solid #fff;
        transition: filter 0.3s;
    }
    .profile-image-blur {
        filter: blur(5px);
    }

    /* Profile info */
    .profile-info {
        flex-grow: 1;
        padding-left: 20px;
    }
    .profile-info h4 {
        font-weight: bold;
        font-size: 1.25em;
        margin: 0;
        color: #333;
    }
    .profile-info small {
        font-size: 0.875em;
        color: #555;
    }

    /* Action buttons below profile image */
    .profile-actions {
        display: flex;
        gap: 10px;
        margin-top: 10px;
        flex-direction: column;
    }
    .profile-button {
        background: #f15c62;
        color: #fff;
        border: 1px solid rgb(255, 255, 255);
        border-radius: 10px;
        padding: 8px 12px;
        font-size: 0.875em;
        display: flex;
        align-items: center;
        gap: 4px;
        cursor: pointer;
        transition: color 0.3s, border-color 0.3s;
    }
    .profile-button i {
        font-size: 1.2em;
    }
    .profile-actions a {
        text-decoration: none;
    }
    .profile-button:hover {
        color: #333;
        border-color: #333;
        background: #fff !important;
    }
    .profile-button-favorite .icon-heart {
        color: red;
    }
    .profile-button-proposal .icon-cursor {
        color: blue;
    }

    /* Modal styles */
    .modal-header,
    .modal-body {
        padding: 20px;
    }
    .modal-body .profile-image {
        height: 200px;
        margin-bottom: 15px;
    }
    .modal-body .message-options label {
        display: flex;
        align-items: center;
        cursor: pointer;
        margin: 5px 0;
    }
    .modal-footer {
        padding: 15px;
    }
    .profile-info p{
        margin: 0 0 5px;
        font-size: 13px;
    }
    .profile-info a{
        text-decoration: none;
    }

    .profile-icons {
        display: flex;
        gap: 10px;
    }
    .profile_seemore {
        font-size: 15px;
        padding: 10px 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
</style>
@endpush
@section('content')

<div class="container"  >
    <div class="row">
        <div class="col-lg-3">

            @include('user.parts.leftsidebar')

        </div>
        <div class="col-md-9" style="background-color: ">
            @include('alerts.alerts')
            {{-- @if ($me->email_verified==null)
                <div class="alert alert-warning">
                Your Email is not verified. Please,  <a class="btn btn-warning btn-xs" href="{{ route('user.verifyEmailCodeGenerate') }}">Click Here</a> to verify now
                </div>
            @endif --}}

          {{-- @if ($me->mobile_verified==null)
            <div class="alert alert-warning ">
            Your Mobile is not verified. Please,  <a class="btn btn-warning btn-xs" href="{{ route('user.verifyMobileCodeGenerate') }}">Click Here</a> to verify now
            </div>
          @endif --}}

            <div class="row my-3">
                <div class="col-md-12 bg-white">
                    <h4 class="color-vipmm2">Recent Profiles</h4>
                </div>
                @foreach($users as $user)
                    <div class="col-md-6 my-1">

                        <div class="profile-card">
                            <div class="col-4">
                                <a href="{{ route('user.profile', $user->id) }}">
                                <img src="{{ $user->profile_img ? asset('storage/users/pp/' . $user->profile_img) : asset('img/user.png') }}"
                                     class="profile-image {{ $user->profile_public != 1 ? 'profile-image-blur' : '' }}">
                                </a>
                                <!-- Action buttons below the profile image -->
                                <div class="profile-actions">
                                    <div>
                                        @if(auth()->user()->isMyFavourite($user))
                                            <a href="{{ $me->isValidate() ? route('user.removeFavourite', $user) : url('/packages') }}"
                                               class="profile-button profile-button-favorite">
                                               {{-- <i class="icon-heart icons text-danger font-weight-bold"></i> --}}
                                               <span>Unfavourite</span>
                                            </a>
                                        @else
                                            <a href="{{ $me->isValidate() ? route('user.removeFavourite', $user) : url('/packages') }}"
                                               class="profile-button">
                                               {{-- <i class="icon-heart icons"></i> --}}
                                               <span>Favourite</span>
                                            </a>
                                        @endif
                                    </div>
                                    <div>
                                        @if($user->isPending())
                                            <a href="{{ $me->isValidate() ? '' : url('/packages') }}"
                                               data-toggle="{{ $me->isValidate() ? 'modal' : '' }}"
                                               data-target="#feature_largeModal{{ $user->id }}"
                                               class="profile-button profile-button-proposal">
                                               {{-- <i class="fas fa-check-circle"></i> --}}
                                               <span>Accept</span>
                                            </a>
                                        @elseif($user->isMyPending())
                                            <a href="{{ $me->isValidate() ? '' : url('/packages') }}"
                                               data-toggle="{{ $me->isValidate() ? 'modal' : '' }}"
                                               data-target="#feature_largeModal{{ $user->id }}"
                                               class="profile-button profile-button-proposal">
                                               {{-- <i class="far fa-window-close"></i> --}}
                                               <span>Cancel</span>
                                            </a>
                                        @elseif($user->isConnected())
                                            <a href="{{ $me->isValidate() ? route('user.messageDashboard', $user->id) : url('/packages') }}"
                                               class="profile-button">
                                               <img src="{{ asset('icon/message.svg') }}" alt="" width="15">
                                               <span>Chat</span>
                                            </a>
                                        @else
                                            <a href="{{ $me->isValidate() ? '' : url('/packages') }}"
                                               data-toggle="{{ $me->isValidate() ? 'modal' : '' }}"
                                               data-target="#feature_largeModal{{ $user->id }}"
                                               class="profile-button profile-button-proposal">
                                               {{-- <i class="icon-cursor icons"></i> --}}
                                               <span>Proposal</span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Profile information on the right side -->
                            <div class="col-8 profile-info">
                                <a href="{{ route('user.profile', $user->id) }}">
                                <h4>{{ $me->isValidate() ? 'Name: '. $user->name : 'User Id: '. $user->username }}</h4>
                                <p>Age: {{ $user->age() }} | Gender: {{ $user->gender }}</p>
                                <p>Height: {{ $user->height }} | Profession: {{ $user->profession }}</p>
                                <p>Mother Tongue: {{ $user->mother_tongue }}</p>
                                <p>Location: {{ $user->present_district }}</p>

                                {{-- <div>
                                    <a href="{{ route('user.profile', $user->id) }}" class="profile-button" style="margin-top: 10px;">
                                        <span>More...</span>
                                    </a>
                                </div> --}}
                                 <!-- Bottom-right Corner Icons -->

                            </a>
                                {{-- <div class="profile-icons" style="bottom: 10px; right: 10px;">
                                    <!-- Favorite/Unfavorite Button -->
                                    @if(auth()->user()->isMyFavourite($user))
                                        <a href="{{ $me->isValidate() ? route('user.removeFavourite', $user) : url('/packages') }}"
                                        class="profile-button profile-button-favorite mx-1">
                                        <i class="icon-heart icons text-danger font-weight-bold"></i>
                                        </a>
                                    @else
                                        <a href="{{ $me->isValidate() ? route('user.addFavourite', $user) : url('/packages') }}"
                                        class="profile-button mx-1">
                                        <i class="icon-heart icons"></i>
                                        </a>
                                    @endif

                                    <!-- Proposal Button -->
                                    @if(!$user->isConnected())
                                        <a href="{{ $me->isValidate() ? '' : url('/packages') }}"
                                        data-toggle="{{ $me->isValidate() ? 'modal' : '' }}"
                                        data-target="#feature_largeModal{{ $user->id }}"
                                        class="profile-button profile-button-proposal mx-1">
                                        <i class="icon-cursor icons"></i>
                                        </a>
                                    @endif
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <!-- Modal Code (Unchanged, same functionality) -->
                    <div class="modal fade" id="feature_largeModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Modal content based on $user's status -->
                                <!-- ... Modal content unchanged for each condition ... -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12 text-center pt-4">
                    <a href="{{ $me->isValidate() ? route('featureProfiles') : url('/packages') }}" class="btn btn-light text-danger profile_seemore">See More</a>
                </div>
            </div>


            <div class="row my-3">
                <div class="col-md-12 bg-white">
                    <h4 class="color-vipmm2">Visitors</h4>
                </div>
                @php
                $me=auth()->user();
                @endphp
                {{-- {{dd($me->visitors()->count())}} --}}
                @foreach($me->visitors()->paginate(6); as $user)
                <div class="col-md-6 my-1">
                    <div class="card py-2" style="">
                       <div class="row">
                           <div class="col-5">
                            @if($user->profile_img)

                            <img src="{{asset('storage/users/pp/' .$user->profile_img)}}"
                                style="width:100%; height: 100%; border: 5px solid #fff; {{$user->profile_public == 1 ? " ":"filter: blur(5px); " }}"
                                class="img-fluid mt-1" alt="image">
                            @else

                            <img src="{{asset('img/user.png')}}"
                                style="width:100%; height: 100%; border: 5px solid #fff;"
                                class="img-fluid mt-1">
                            @endif
                           </div>

                           <div class="col-7">
                            <h4 class="font-weight-bold text-4">{{$me->isValidate() ? $user->name : $user->username}}</h4>
                            <small>{{$user->age()}}years, {{$user->gender}}, {{$user->height}}, {{$user->profession}}, {{$user->mother_tongue}}, {{$user->present_district}}, {{$user->profession}}</small> <br>


                            <div class="grid-card-contact py-2">
                                <div>
                                    @if (auth()->user()->isMyFavourite($user))

                                    <a class="btn btn-rounded card-text py-2" style="border: 1px solid red" href="{{$me->isValidate() ? route('user.removeFavourite', $user)  : url('/packages')}}"> <i class="icon-heart icons text-danger font-weight-bold"></i> </a> <br>
                                    <span style="white-space:nowrap; font-size:9px"> Unfavourite</span>

                                    @else
                                    <a class="btn btn-rounded card-text py-2 " style="border: 1px solid gray" href="{{$me->isValidate() ? route('user.removeFavourite', $user)  : url('/packages')}}"> <i class="icon-heart icons"></i> </a> <br>
                                    <span style="white-space:nowrap; font-size:9px">Favourite</span>
                                    @endif

                                </div>
                                <div>
                                    @if ($user->isPending())


                                        <a class="btn btn-rounded card-text py-2 " style="border: 1px solid gray" href="{{$me->isValidate() ? ""  : url('/packages')}}" data-toggle={{$me->isValidate() ? "modal" : ""}} data-target="#vis_largeModal{{$user->id}}"> <i class="fas fa-check-circle"></i></a> <br>
                                        <span style="white-space:nowrap; font-size:9px">Accept
                                            Proposal</span>


                                    @elseif($user->isMyPending())



                                        <a class="btn btn-rounded card-text py-2 " style="border: 1px solid gray" href="{{$me->isValidate() ? ""  : url('/packages')}}" data-toggle={{$me->isValidate() ? "modal" : ""}} data-target="#vis_largeModal{{$user->id}}"> <i class="far fa-window-close"></i></a> <br>
                                        <span style="white-space:nowrap; font-size:9px">Cancel
                                            Proposal</span>


                                    @elseif($user->isConnected())



                                    <a class="btn btn-rounded card-text py-2 " style="border: 1px solid gray" href="{{$me->isValidate() ? route('user.messageDashboard', $user->id)  : url('/packages')}}" > <img src="{{asset('icon/message.svg')}}" alt="" width="15"></a> <br>
                                    <span style="white-space:nowrap; font-size:9px">Chat</span>

                                    @else
                                    <a class="btn btn-rounded card-text py-2 " style="border: 1px solid gray" href="{{$me->isValidate() ? ""  : url('/packages')}}" data-toggle={{$me->isValidate() ? "modal" : ""}} data-target="#vis_largeModal{{$user->id}}"> <i class="icon-cursor icons"></i></a> <br>
                                    <span style="white-space:nowrap; font-size:9px"> Send
                                        Proposal</span>

                                    @endif
                                </div>
                                <div>
                                    <a class="card-text py-2 " href="{{route('user.profile', $user->id)}}">More...</a></div>
                                </div>
                           </div>
                       </div>

                    </div>
                </div>








                <div class="modal fade" id="vis_largeModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            @if ($user->isMyPending())
                                <div class="modal-header">
                                    <h4 class="modal-title" id="largeModalLabel">Send proposal to
                                        <strong>{{ $user->name }}</strong>
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-5 text-center">
                                            @if (auth()->user()->profile_img)
                                                <img src="{{ asset('storage/users/pp/' . auth()->user()->profile_img) }}" alt=""
                                                    class="img-fluid text-center" style="height: 200px; border:1px solid gray;{{auth()->user()->profile_public == 1 ? " ":"filter: blur(5px);" }}">
                                            @else
                                                <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                    style="height: 200px; border:1px solid gray;">
                                            @endif
                                        </div>

                                        <div class="col-md-2 d-flex align-items-center justify-content-center py-3">
                                            <i class="icon-arrow-right icons " style="color:red"></i><i
                                                class="icon-arrow-right icons " style="color:red"></i><i
                                                class="icon-arrow-right icons " style="color:red"></i>
                                        </div>

                                        <div class="col-md-5 text-center">

                                            @if ($user->profile_img)
                                                <img src="{{ asset('storage/users/pp/' . $user->profile_img) }}" alt=""
                                                    class="img-fluid text-center" style="height: 200px; border:1px solid gray; {{$user->profile_public == 1 ? " ":"filter: blur(5px); " }}">
                                            @else
                                                <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                    style="height: 200px; border:1px solid gray;">
                                            @endif

                                        </div>
                                    </div>

                                    <div class="row pt-3">
                                        <div class="col-md-12 text-center">
                                            @if ($user->pendingMy())
                                                {{ $user->pendingMy()->message }}
                                            @endif
                                        </div>
                                        <div class="col-md-12 text-right">
                                            <a href="{{ route('user.cancelProposal', $user->pendingMy()->id) }}"><i
                                                    class="far fa-window-close btn btn-danger"></i> Cancel Proposal</a>

                                        </div>
                                    </div>


                                </div>

                            @elseif($user->isPending())

                                <div class="modal-header">
                                    <h4 class="modal-title" id="largeModalLabel">Proposal From<strong>
                                            {{ $user->name }}</strong></h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-5 text-center">
                                            @if (auth()->user()->profile_img)
                                                <img src="{{ asset('storage/users/pp/' . auth()->user()->profile_img) }}" alt=""
                                                    class="img-fluid text-center" style="height: 200px; border:1px solid gray; {{auth()->user()->profile_public == 1 ? " ":"filter: blur(5px);" }}">
                                            @else
                                                <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                    style="height: 200px; border:1px solid gray; ">
                                            @endif
                                        </div>

                                        <div class="col-md-2 d-flex align-items-center justify-content-center py-3">
                                            <i class="icon-arrow-left icons " style="color:red"></i><i class="icon-arrow-left icons "
                                                style="color:red"></i><i class="icon-arrow-left icons " style="color:red"></i>
                                        </div>

                                        <div class="col-md-5 text-center">

                                            @if ($user->profile_img)
                                                <img src="{{ asset('storage/users/pp/' . $user->profile_img) }}" alt=""
                                                    class="img-fluid text-center" style="height: 200px; border:1px solid gray; {{$user->profile_public == 1 ? " ":"filter: blur(5px); " }}">
                                            @else
                                                <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                    style="height: 200px; border:1px solid gray;">
                                            @endif

                                        </div>
                                    </div>

                                    <div class="row pt-3">

                                        <div class="col-md-12 text-center">

                                            {{ $user->pendingOther()->message }}

                                        </div>
                                        <div class="col-md-12 text-right">
                                            <a href="{{ route('user.acceptProposal', $user->pendingOther()->id) }}"><i
                                                    class="fas fa-check-circle btn btn-success"></i> </a>
                                            <a href="{{ route('user.cancelProposal', $user->pendingOther()->id) }}"><i
                                                    class="far fa-window-close btn btn-danger"></i> </a>

                                        </div>

                                    </div>


                                </div>


                            @else
                                <div class="modal-header">
                                    <h4 class="modal-title" id="largeModalLabel">Send proposal to
                                        <strong>{{ $user->name }}</strong>
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-5 text-center">
                                            @if (auth()->user()->profile_img)
                                                <img src="{{ asset('storage/users/pp/' . auth()->user()->profile_img) }}" alt=""
                                                    class="img-fluid text-center" style="height: 200px; border:1px solid gray; {{auth()->user()->profile_public == 1 ? " ":"filter: blur(5px);" }}">
                                            @else
                                                <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                    style="height: 200px; border:1px solid gray;">
                                            @endif
                                        </div>

                                        <div class="col-md-2 d-flex align-items-center justify-content-center py-3">
                                            <i class="icon-arrow-right icons " style="color:red"></i><i
                                                class="icon-arrow-right icons  " style="color:red"></i><i
                                                class="icon-arrow-right icons  " style="color:red"></i>
                                        </div>

                                        <div class="col-md-5 text-center">

                                            @if ($user->profile_img)
                                                <img src="{{ asset('storage/users/pp/' . $user->profile_img) }}" alt=""
                                                    class="img-fluid text-center" style="height: 200px; border:1px solid gray; {{$user->profile_public == 1 ? " ":"filter: blur(5px); " }}">
                                            @else
                                                <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                    style="height: 200px; border:1px solid gray;">
                                            @endif

                                        </div>
                                    </div>

                                    <div class="row pt-3">
                                        <div class="col-md-12">
                                            <form class="form-send-proposal"
                                                action="{{ route('user.sendProposalPost', $user) }}" method="post">


                                                <div class="form-check form-check-radio">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="comment" id="exampleRadios1"
                                                            value="I like your profile, let me know your interest" checked>
                                                        I like your profile, let me know your interest
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-radio">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="comment" id="exampleRadios2"
                                                            value=" I am serious about your profile. Please respond at the
                                                        earliest">
                                                        I am serious about your profile. Please respond at the
                                                        earliest
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-radio">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="comment" id="exampleRadios2"
                                                            value="We like your profile and would like to communicate
                                                        your parents/guardian.">
                                                        We like your profile and would like to communicate
                                                        your parents/guardian.
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-radio">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="comment" id="exampleRadios3"
                                                            value="I have found your profile to be a good match. Please
                                                        contact for proceeding.">
                                                        I have found your profile to be a good match. Please
                                                        contact for proceeding.
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-radio">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="comment" id="exampleRadios3"
                                                            value="">
                                                        None(send interest without a message)
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>


                                                {{ csrf_field() }}



                                                <div class="text-right">
                                                    <button type="submit" class="bg-white text-right"
                                                        style="border: none; margin:0px; padding:0px;"><i
                                                            class="icon-cursor icons btn btn-danger"></i> Send Proposal</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

                        <div class="col-md-12 text-center pt-1">
                            <a href="{{ $me->isValidate() ? route('visitorProfiles') : url('/packages') }}" class="btn btn-light text-danger">See More</a>
                        </div>


            </div>






            <div class="row my-3">
                <div class="col-md-12 bg-white">
                    <h4 class="color-vipmm2">My Favourites</h4>
                </div>
                @php
                $me=auth()->user();
                @endphp
                @foreach($me->favs()->paginate(4); as $user)

                <div class="col-md-6 my-1">
                    <div class="card py-2" style="">
                       <div class="row">
                           <div class="col-5">
                            @if($user->profile_img)
                            <img src="{{asset('storage/users/pp/' .$user->profile_img)}}"
                                style="width:100%; height: 100%; border: 5px solid #fff; {{$user->profile_public == 1 ? " ":"filter: blur(5px); " }} "
                                class="img-fluid mt-1">
                            @else

                            <img src="{{asset('img/user.png')}}"
                                style="width:100%; height: 100%; border: 5px solid #fff;"
                                class="img-fluid mt-1">
                            @endif
                           </div>

                           <div class="col-7">
                            <h4 class="font-weight-bold text-4">{{$me->isValidate() ? $user->name : $user->username}}</h4>
                            <small>{{$user->age()}}years, {{$user->gender}}, {{$user->height}}, {{$user->profession}}, {{$user->mother_tongue}}, {{$user->present_district}}, {{$user->profession}}</small> <br>


                            <div class="grid-card-contact py-2">
                                <div>
                                    @if (auth()->user()->isMyFavourite($user))

                                    <a class="btn btn-rounded card-text py-2" style="border: 1px solid red" href="{{$me->isValidate() ? route('user.removeFavourite', $user)  : url('/packages')}}"> <i class="icon-heart icons text-danger font-weight-bold"></i> </a> <br>
                                    <span style="white-space:nowrap; font-size:9px"> Unfavourite</span>

                                    @else
                                    <a class="btn btn-rounded card-text py-2 " style="border: 1px solid gray" href="{{$me->isValidate() ? route('user.removeFavourite', $user)  : url('/packages')}}"> <i class="icon-heart icons"></i> </a> <br>
                                    <span style="white-space:nowrap; font-size:9px">Favourite</span>
                                    @endif

                                </div>
                                <div>
                                    @if ($user->isPending())


                                        <a class="btn btn-rounded card-text py-2 " style="border: 1px solid gray" href="{{$me->isValidate() ? ""  : url('/packages')}}" data-toggle={{$me->isValidate() ? "modal" : ""}} data-target="#fav_largeModal{{$user->id}}"> <i class="fas fa-check-circle"></i></a> <br>
                                        <span style="white-space:nowrap; font-size:9px">Accept
                                            Proposal</span>


                                    @elseif($user->isMyPending())



                                        <a class="btn btn-rounded card-text py-2 " style="border: 1px solid gray" href="{{$me->isValidate() ? ""  : url('/packages')}}" data-toggle={{$me->isValidate() ? "modal" : ""}} data-target="#fav_largeModal{{$user->id}}"> <i class="far fa-window-close"></i></a> <br>
                                        <span style="white-space:nowrap; font-size:9px">Cancel
                                            Proposal</span>


                                    @elseif($user->isConnected())



                                    <a class="btn btn-rounded card-text py-2 " style="border: 1px solid gray" href="{{$me->isValidate() ? route('user.messageDashboard', $user->id)  : url('/packages')}}" > <img src="{{asset('icon/message.svg')}}" alt="" width="15"></a> <br>
                                    <span style="white-space:nowrap; font-size:9px">Chat</span>

                                    @else
                                    <a class="btn btn-rounded card-text py-2 " style="border: 1px solid gray" href="{{$me->isValidate() ? ""  : url('/packages')}}" data-toggle={{$me->isValidate() ? "modal" : ""}} data-target="#fav_largeModal{{$user->id}}"> <i class="icon-cursor icons"></i></a> <br>
                                    <span style="white-space:nowrap; font-size:9px"> Send
                                        Proposal</span>

                                    @endif
                                </div>
                                <div>
                                    <a class="card-text py-2 " href="{{route('user.profile', $user->id)}}">More...</a></div>
                                </div>
                           </div>
                       </div>

                    </div>
                </div>





                <div class="modal fade" id="fav_largeModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        @if ($user->isMyPending())
                            <div class="modal-header">
                                <h4 class="modal-title" id="largeModalLabel">Send proposal to
                                    <strong>{{ $user->name }}</strong>
                                </h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-md-5 text-center">
                                        @if (auth()->user()->profile_img)
                                            <img src="{{ asset('storage/users/pp/' . auth()->user()->profile_img) }}" alt=""
                                                class="img-fluid text-center" style="height: 200px; border:1px solid gray; {{auth()->user()->profile_public == 1 ? " ":"filter: blur(5px);" }}">
                                        @else
                                            <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                style="height: 200px; border:1px solid gray;">
                                        @endif
                                    </div>

                                    <div class="col-md-2 d-flex align-items-center justify-content-center py-3">
                                        <i class="icon-arrow-right icons " style="color:red"></i><i
                                            class="icon-arrow-right icons " style="color:red"></i><i
                                            class="icon-arrow-right icons " style="color:red"></i>
                                    </div>

                                    <div class="col-md-5 text-center">

                                        @if ($user->profile_img)
                                            <img src="{{ asset('storage/users/pp/' . $user->profile_img) }}" alt=""
                                                class="img-fluid text-center" style="height: 200px; border:1px solid gray; {{$user->profile_public == 1 ? " ":"filter: blur(5px); " }}">
                                        @else
                                            <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                style="height: 200px; border:1px solid gray;">
                                        @endif

                                    </div>
                                </div>

                                <div class="row pt-3">
                                    <div class="col-md-12 text-center">
                                        @if ($user->pendingMy())
                                            {{ $user->pendingMy()->message }}
                                        @endif
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('user.cancelProposal', $user->pendingMy()->id) }}"><i
                                                class="far fa-window-close btn btn-danger"></i> Cancel Proposal</a>

                                    </div>
                                </div>


                            </div>

                        @elseif($user->isPending())

                            <div class="modal-header">
                                <h4 class="modal-title" id="largeModalLabel">Proposal From<strong>
                                        {{ $user->name }}</strong></h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-md-5 text-center">
                                        @if (auth()->user()->profile_img)
                                            <img src="{{ asset('storage/users/pp/' . auth()->user()->profile_img) }}" alt=""
                                                class="img-fluid text-center" style="height: 200px; border:1px solid gray; {{auth()->user()->profile_public == 1 ? " ":"filter: blur(5px);" }}">
                                        @else
                                            <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                style="height: 200px; border:1px solid gray; ">
                                        @endif
                                    </div>

                                    <div class="col-md-2 d-flex align-items-center justify-content-center py-3">
                                        <i class="icon-arrow-left icons " style="color:red"></i><i class="icon-arrow-left icons "
                                            style="color:red"></i><i class="icon-arrow-left icons " style="color:red"></i>
                                    </div>

                                    <div class="col-md-5 text-center">

                                        @if ($user->profile_img)
                                            <img src="{{ asset('storage/users/pp/' . $user->profile_img) }}" alt=""
                                                class="img-fluid text-center" style="height: 200px; border:1px solid gray; {{$user->profile_public == 1 ? " ":"filter: blur(5px); " }}">
                                        @else
                                            <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                style="height: 200px; border:1px solid gray;">
                                        @endif

                                    </div>
                                </div>

                                <div class="row pt-3">

                                    <div class="col-md-12 text-center">

                                        {{ $user->pendingOther()->message }}

                                    </div>
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('user.acceptProposal', $user->pendingOther()->id) }}"><i
                                                class="fas fa-check-circle btn btn-success"></i> </a>
                                        <a href="{{ route('user.cancelProposal', $user->pendingOther()->id) }}"><i
                                                class="far fa-window-close btn btn-danger"></i> </a>

                                    </div>

                                </div>


                            </div>


                        @else
                            <div class="modal-header">
                                <h4 class="modal-title" id="largeModalLabel">Send proposal to
                                    <strong>{{ $user->name }}</strong>
                                </h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-md-5 text-center">
                                        @if (auth()->user()->profile_img)
                                            <img src="{{ asset('storage/users/pp/' . auth()->user()->profile_img) }}" alt=""
                                                class="img-fluid text-center" style="height: 200px; border:1px solid gray; {{auth()->user()->profile_public == 1 ? " ":"filter: blur(5px);" }}">
                                        @else
                                            <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                style="height: 200px; border:1px solid gray;">
                                        @endif
                                    </div>

                                    <div class="col-md-2 d-flex align-items-center justify-content-center py-3">
                                        <i class="icon-arrow-right icons " style="color:red"></i><i
                                            class="icon-arrow-right icons  " style="color:red"></i><i
                                            class="icon-arrow-right icons  " style="color:red"></i>
                                    </div>

                                    <div class="col-md-5 text-center">

                                        @if ($user->profile_img)
                                            <img src="{{ asset('storage/users/pp/' . $user->profile_img) }}" alt=""
                                                class="img-fluid text-center" style="height: 200px; border:1px solid gray; {{$user->profile_public == 1 ? " ":"filter: blur(5px); " }}">
                                        @else
                                            <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                style="height: 200px; border:1px solid gray;">
                                        @endif

                                    </div>
                                </div>

                                <div class="row pt-3">
                                    <div class="col-md-12">
                                        <form class="form-send-proposal"
                                            action="{{ route('user.sendProposalPost', $user) }}" method="post">


                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="comment" id="exampleRadios1"
                                                        value="I like your profile, let me know your interest" checked>
                                                    I like your profile, let me know your interest
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="comment" id="exampleRadios2"
                                                        value=" I am serious about your profile. Please respond at the
                                                     earliest">
                                                    I am serious about your profile. Please respond at the
                                                    earliest
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="comment" id="exampleRadios2"
                                                        value="We like your profile and would like to communicate
                                                     your parents/guardian.">
                                                    We like your profile and would like to communicate
                                                    your parents/guardian.
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="comment" id="exampleRadios3"
                                                        value="I have found your profile to be a good match. Please
                                                     contact for proceeding.">
                                                    I have found your profile to be a good match. Please
                                                    contact for proceeding.
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="comment" id="exampleRadios3"
                                                        value="">
                                                    None(send interest without a message)
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>


                                            {{ csrf_field() }}



                                            <div class="text-right">
                                                <button type="submit" class="bg-white text-right"
                                                    style="border: none; margin:0px; padding:0px;"><i
                                                        class="icon-cursor icons btn btn-danger"></i> Send Proposal</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
                </div>

                @endforeach


                <div class="col-md-12 text-center pt-1">
                    <a href="{{ $me->isValidate() ? route('favouriteProfiles') : url('/packages') }}" class="btn btn-light text-danger">See More</a>
                </div>



            </div>



            <div class="row my-3">
                <div class="col-md-12 bg-white">
                    <h4 class="color-vipmm2">Matches</h4>
                </div>
                @php
                $me=auth()->user();
                @endphp

                @foreach($me->searchPreferenceUsers(4) as $user)

                <div class="col-md-6 my-1">
                    <div class="card py-2" style="">
                       <div class="row">
                           <div class="col-5">
                            @if($user->profile_img)

                            <img src="{{asset('storage/users/pp/' .$user->profile_img)}}"
                                style="width:100%; height: 100%; border: 5px solid #fff; {{$user->profile_public == 1 ? " ":"filter: blur(5px); " }} "
                                class="img-fluid mt-1">
                            @else

                            <img src="{{asset('img/user.png')}}"
                                style="width:100%; height: 100%; border: 5px solid #fff;"
                                class="img-fluid mt-1">
                            @endif
                           </div>

                           <div class="col-7">
                            <h4 class="font-weight-bold text-4">{{$me->isValidate() ? $user->name : $user->username}}</h4>
                            <small>{{$user->age()}}years, {{$user->gender}}, {{$user->height}}, {{$user->profession}}, {{$user->mother_tongue}}, {{$user->present_district}}, {{$user->profession}}</small> <br>


                            <div class="grid-card-contact py-2">
                                <div>
                                    @if (auth()->user()->isMyFavourite($user))

                                    <a class="btn btn-rounded card-text py-2" style="border: 1px solid red" href="{{$me->isValidate() ? route('user.removeFavourite', $user)  : url('/packages')}}"> <i class="icon-heart icons text-danger font-weight-bold"></i> </a> <br>
                                    <span style="white-space:nowrap; font-size:9px"> Unfavourite</span>

                                    @else
                                    <a class="btn btn-rounded card-text py-2 " style="border: 1px solid gray" href="{{$me->isValidate() ? route('user.removeFavourite', $user)  : url('/packages')}}"> <i class="icon-heart icons"></i> </a> <br>
                                    <span style="white-space:nowrap; font-size:9px">Favourite</span>
                                    @endif

                                </div>
                                <div>
                                    @if ($user->isPending())


                                        <a class="btn btn-rounded card-text py-2 " style="border: 1px solid gray" href="{{$me->isValidate() ? ""  : url('/packages')}}" data-toggle={{$me->isValidate() ? "modal" : ""}} data-target="#fav_largeModal{{$user->id}}"> <i class="fas fa-check-circle"></i></a> <br>
                                        <span style="white-space:nowrap; font-size:9px">Accept
                                            Proposal</span>


                                    @elseif($user->isMyPending())



                                        <a class="btn btn-rounded card-text py-2 " style="border: 1px solid gray" href="{{$me->isValidate() ? ""  : url('/packages')}}" data-toggle={{$me->isValidate() ? "modal" : ""}} data-target="#fav_largeModal{{$user->id}}"> <i class="far fa-window-close"></i></a> <br>
                                        <span style="white-space:nowrap; font-size:9px">Cancel
                                            Proposal</span>


                                    @elseif($user->isConnected())



                                    <a class="btn btn-rounded card-text py-2 " style="border: 1px solid gray" href="{{$me->isValidate() ? route('user.messageDashboard', $user->id)  : url('/packages')}}" > <img src="{{asset('icon/message.svg')}} " class="filter-green" alt="" width="15" style="color:red"></a> <br>
                                    <span style="white-space:nowrap; font-size:9px">Chat
                                     </span>

                                    @else
                                    <a class="btn btn-rounded card-text py-2 " style="border: 1px solid gray" href="{{$me->isValidate() ? ""  : url('/packages')}}" data-toggle={{$me->isValidate() ? "modal" : ""}} data-target="#fav_largeModal{{$user->id}}"> <i class="icon-cursor icons"></i></a> <br>
                                    <span style="white-space:nowrap; font-size:9px"> Send
                                        Proposal</span>

                                    @endif
                                </div>
                                <div>
                                    <a class="card-text py-2 " href="{{route('user.profile', $user->id)}}">More...</a></div>
                                </div>
                           </div>
                       </div>

                    </div>
                </div>





                <div class="modal fade" id="fav_largeModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        @if ($user->isMyPending())
                            <div class="modal-header">
                                <h4 class="modal-title" id="largeModalLabel">Send proposal to
                                    <strong>{{ $user->name }}</strong>
                                </h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-md-5 text-center">
                                        @if (auth()->user()->profile_img)
                                            <img src="{{ asset('storage/users/pp/' . auth()->user()->profile_img) }}" alt=""
                                                class="img-fluid text-center" style="height: 200px; border:1px solid gray; {{$user->profile_public == 1 ? " ":"filter: blur(5px); " }}">
                                        @else
                                            <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                style="height: 200px; border:1px solid gray;">
                                        @endif
                                    </div>

                                    <div class="col-md-2 d-flex align-items-center justify-content-center py-3">
                                        <i class="icon-arrow-right icons " style="color:red"></i><i
                                            class="icon-arrow-right icons " style="color:red"></i><i
                                            class="icon-arrow-right icons " style="color:red"></i>
                                    </div>

                                    <div class="col-md-5 text-center">

                                        @if ($user->profile_img)
                                            <img src="{{ asset('storage/users/pp/' . $user->profile_img) }}" alt=""
                                                class="img-fluid text-center" style="height: 200px; border:1px solid gray; {{$user->profile_public == 1 ? " ":"filter: blur(5px); " }}">
                                        @else
                                            <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                style="height: 200px; border:1px solid gray;">
                                        @endif

                                    </div>
                                </div>

                                <div class="row pt-3">
                                    <div class="col-md-12 text-center">
                                        @if ($user->pendingMy())
                                            {{ $user->pendingMy()->message }}
                                        @endif
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('user.cancelProposal', $user->pendingMy()->id) }}"><i
                                                class="far fa-window-close btn btn-danger"></i> Cancel Proposal</a>

                                    </div>
                                </div>


                            </div>

                        @elseif($user->isPending())

                            <div class="modal-header">
                                <h4 class="modal-title" id="largeModalLabel">Proposal From<strong>
                                        {{ $user->name }}</strong></h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-md-5 text-center">
                                        @if (auth()->user()->profile_img)
                                            <img src="{{ asset('storage/users/pp/' . auth()->user()->profile_img) }}" alt=""
                                                class="img-fluid text-center" style="height: 200px; border:1px solid gray; {{auth()->user()->profile_public == 1 ? " ":"filter: blur(5px); " }}">
                                        @else
                                            <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                style="height: 200px; border:1px solid gray; ">
                                        @endif
                                    </div>

                                    <div class="col-md-2 d-flex align-items-center justify-content-center py-3">
                                        <i class="icon-arrow-left icons " style="color:red"></i><i class="icon-arrow-left icons "
                                            style="color:red"></i><i class="icon-arrow-left icons " style="color:red"></i>
                                    </div>

                                    <div class="col-md-5 text-center">

                                        @if ($user->profile_img)
                                            <img src="{{ asset('storage/users/pp/' . $user->profile_img) }}" alt=""
                                                class="img-fluid text-center" style="height: 200px; border:1px solid gray; {{$user->profile_public == 1 ? " ":"filter: blur(5px); " }}">
                                        @else
                                            <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                style="height: 200px; border:1px solid gray;">
                                        @endif

                                    </div>
                                </div>

                                <div class="row pt-3">

                                    <div class="col-md-12 text-center">

                                        {{ $user->pendingOther()->message }}

                                    </div>
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('user.acceptProposal', $user->pendingOther()->id) }}"><i
                                                class="fas fa-check-circle btn btn-success"></i> </a>
                                        <a href="{{ route('user.cancelProposal', $user->pendingOther()->id) }}"><i
                                                class="far fa-window-close btn btn-danger"></i> </a>

                                    </div>

                                </div>


                            </div>


                        @else
                            <div class="modal-header">
                                <h4 class="modal-title" id="largeModalLabel">Send proposal to
                                    <strong>{{ $user->name }}</strong>
                                </h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-md-5 text-center">
                                        @if (auth()->user()->profile_img)
                                            <img src="{{ asset('storage/users/pp/' . auth()->user()->profile_img) }}" alt=""
                                                class="img-fluid text-center" style="height: 200px; border:1px solid gray; {{ auth()->user()->profile_public == 1 ? " ":"filter: blur(5px); " }}">
                                        @else
                                            <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                style="height: 200px; border:1px solid gray;">
                                        @endif
                                    </div>

                                    <div class="col-md-2 d-flex align-items-center justify-content-center py-3">
                                        <i class="icon-arrow-right icons " style="color:red"></i><i
                                            class="icon-arrow-right icons  " style="color:red"></i><i
                                            class="icon-arrow-right icons  " style="color:red"></i>
                                    </div>

                                    <div class="col-md-5 text-center">

                                        @if ($user->profile_img)
                                            <img src="{{ asset('storage/users/pp/' . $user->profile_img) }}" alt=""
                                                class="img-fluid text-center" style="height: 200px; border:1px solid gray; {{$user->profile_public == 1 ? " ":"filter: blur(5px); " }}">
                                        @else
                                            <img src="{{ asset('img/user.png') }}" alt="" class="img-fluid text-center"
                                                style="height: 200px; border:1px solid gray;">
                                        @endif

                                    </div>
                                </div>



                                <div class="row pt-3">
                                    <div class="col-md-12">
                                        <form class="form-send-proposal"
                                            action="{{ route('user.sendProposalPost', $user) }}" method="post">


                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="comment" id="exampleRadios1"
                                                        value="I like your profile, let me know your interest" checked>
                                                    I like your profile, let me know your interest
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="comment" id="exampleRadios2"
                                                        value=" I am serious about your profile. Please respond at the
                                                     earliest">
                                                    I am serious about your profile. Please respond at the
                                                    earliest
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="comment" id="exampleRadios2"
                                                        value="We like your profile and would like to communicate
                                                     your parents/guardian.">
                                                    We like your profile and would like to communicate
                                                    your parents/guardian.
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="comment" id="exampleRadios3"
                                                        value="I have found your profile to be a good match. Please
                                                     contact for proceeding.">
                                                    I have found your profile to be a good match. Please
                                                    contact for proceeding.
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="comment" id="exampleRadios3"
                                                        value="">
                                                    None(send interest without a message)
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>


                                            {{ csrf_field() }}



                                            <div class="text-right">
                                                <button type="submit" class="bg-white text-right"
                                                    style="border: none; margin:0px; padding:0px;"><i
                                                        class="icon-cursor icons btn btn-danger"></i> Send Proposal</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

                @endforeach


                <div class="col-md-12 text-center pt-1">

                    @if(Auth::user()->packageDuration())
                    <a href="{{route('user.mymatch')}}" class="btn btn-light text-danger">See More</a>
                    @else
                    <a href="{{route('packagelist')}}" class="btn btn-light text-danger">See More</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <a href="{{route('partner')}}" class="btn btn-info">See List</a> --}}
<br>
@endsection
