<section class=" page-header page-header-modern page-header-background page-header-background-md mt-0" style="background: url('img/vip-cover2.jpg');height: 700px;background-size: cover;background-position: center;background-repeat: no-repeat;">

    <div class="card bg-transparent border-0  d-none d-md-block " style="top: 230px;">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card bg-transparent border-0">
                    <div class="card-body text-center   p-2 ">
                        <span class="bg-white shadow p-2 rounded">
                            <h1 class="w3-xlarge text-black font-weight-bold" style="color: #000">#1 Marriage Media in Bangladesh</h1>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="home-login px-3 py-4" style="position: absolute; bottom:13%;">
            <div class="box-content text-white">

                
                <form class="user-mobile-check-form" id="userform" action="{{ route('register.custom') }}"
                    method="post">
                    @csrf
                    <div class="form-row align-items-center">
                        <div class="col-12 col-md-2">
                            <label for="" style="color: #fff">Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="col-12 col-md-2">
                            <label for="" style="color: #fff">Phone</label>
                            <span class="text-danger msg"></span>
                            <input type="tel" required class="form-control input-mobile " id="input-user-mobile"
                                name="phone" placeholder="Phone">
                        </div>
                        <input type="hidden" name="full_mobile" id="hidden">
                        <div class="col-12 col-md-2">
                            <label for="" style="color: #fff">Email</label>
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="col-12 col-md-2">
                            <label for="" style="color: #fff">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="col-12 col-md-2">
                            <label for="" style="color: #fff">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>
                        <div class="col-12 col-md-2 align-self-end ">
                            <label for=""></label>
                            <input type="submit"
                                class="form-control btn btn-info p-0 th-btn " value="Let's Begin!">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>



    {{-- {{ dd($errors->count()) }} --}}
</section>


@php
    $errorMessages = "";
  if ($errors->any()){
           foreach ($errors->all() as $error){
              $errorMessages .= "<li>" . $error ."</li>";
           }
  }
@endphp

@push('js')
    <script>
        var errorCount = {{ $errors->count() }};
        if (errorCount > 0) {

            $(document).ready(function() {
                $("#global_modal").modal("show");
                $("#global_modal_title").html("Errors !")
                $("#global_modal_body").html(`<ul class="text-danger">{!!$errorMessages !!}</ul>`)
            })
        }
    </script>
@endpush
