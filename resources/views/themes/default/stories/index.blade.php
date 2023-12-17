@extends('user.master.usermaster')
@section('content')
<style>
a:hover {
    background-color: transparent !important;
}
</style>
{{--Header Section ---}}
<div class="container py-2 mb-2" style="background: white">
<section>
    <div class="row">
        <div class="col-lg-6 m-auto text-center" style="font-weight: 700">
            <h2>Success Storie</h2>
        </div>
    </div>
</section>
<section class="mt-4 py-5">
    <div class="row">
        <div class="col-md-8">
            <div class="row px-3">
                <h4 class="w3-text-red">{{  $singleStory->title}}</h4>
                <div class="w3-border w-100" >
                    <img src="{{asset('storage/stories/'.$singleStory->image_name)}}" class="w3-border" alt=""  width="100%"/>
                </div>

            <div class="mt-3">

                <article class=" w3-text-gray">

                    <p class="m-0"> <strong>Location: </strong> {{ $singleStory->location}}</p>
                    <p class="m-0"><strong>Marriage Date: </strong> {{ $singleStory->marriage_date}}</p>
                    <p class="m-0"><strong>Bride Username: </strong> {{ $singleStory->bride_username}}</p>
                    <p class="m-0"><strong>Groom Username: </strong> {{ $singleStory->groom_username}}</p>
                     
                </article>
            </div>
            <div class="mt-4">
                <p>
                  <strong class="w3-text-green">Description:</strong>
                    <br>
                    {{ $singleStory->description}}
                </p>
            </div>



            </div>
        </div>
        <div class="col-md-4">
            <div class="pl-2">

            <div class="w3-border-bottom w3-border-red">
                <div class="w3-red w-50 text-center w3-border-red">
                    <span class="w3-text-white">More Success Stories</span>
                </div>
            </div>
            <div class="populer-post">
                    <div class="mt-1">
                        @foreach ($stories as $pp)
                        <div class="row mt-2">
                                <div class="col-4">
                                    <img src="{{ asset('storage/stories') }}/{{ $pp->image_name }}" class="img-thumbnail" alt="">
                                </div>
                                <div class="col-8 pl-0">
                                    <a href="{{route('success.stories_details', $pp->id)}}" class="w3-sans-serif w3-text-indigo"><b>{{Str::limit($pp->title,30,'...') }}</b></a>
                                    <p class="w3-sans-serif">{{Str::limit($pp->description,50,'...') }}</p>
                                </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

</div>
@endsection

