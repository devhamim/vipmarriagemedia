			<footer id="footer" class="bg-color-vipmm border-top-0 pt-5">
				<div class="container py-5">
					<div class="row py1">
						<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
							<h3 class="text-5 mb-3 " style="color: white">24 hours service</h3>

							<ul class="list list-icons list-icons-lg">
								<li><a class=" text-color-light" href="https://wa.me/+8801767506668">+8801767-506668 (Whatsapp)</a></li>
								{{-- <li class="py-3"><a class=" text-color-light" href="https://wa.me/+8801927157200">+8801927-157200 (Whatsapp)</a></li> --}}
                            </ul>


							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
							<div class="alert alert-danger d-none" id="newsletterError"></div>
							<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mr-4 mb-3 mb-md-0">
								<div class="input-group input-group-rounded">
									<input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
									<span class="input-group-append">
										<button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
									</span>
								</div>
							</form>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <h5 class="text-3 mb-3">FOLLOW US</h5>
                                    <ul class="social-icons">
                                        <li class="social-icons-facebook">
                                            <a href="{{$websiteParameter->fb_page_link}}" target="_blank" title="Facebook"><i
                                                    class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="social-icons-twitter">
                                            <a href="{{$websiteParameter->twitter_url}}" target="_blank" title="Twitter"><i
                                                    class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="social-icons-linkedin">
                                            <a href="{{$websiteParameter->linkedin_url}}" target="_blank" title="Linkedin"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </li>

                                        <li class="social-icons-linkedin">
                                            <a href="{{$websiteParameter->instagram_url}}" target="_blank" title="Instagram"><i
                                                    class="fab fa-instagram"></i></a>
                                        </li>

                                        <li class="social-icons-linkedin">
                                            <a href="{{$websiteParameter->pinterest_url}}" target="_blank" title="Pinterest"><i
                                                    class="fab fa-pinterest"></i></a>
                                        </li>

                                    </ul>
                                    @if(!Auth::check())
                                        <a type="button" href="{{ url('/register') }}" class="btn btn-rounded btn-primary mt-3">Registration</a>
                                    @endif
                                </div>
                            </div>
						</div>

                        <div class="col-md-6 col-lg-2 mb-4 mb-md-0">
							<h5 class="text-3 mb-3">Pages</h5>
							<ul class="list list-icons list-icons-lg">
                                @foreach($menupages as $page)
                                    <li><a class="m-2 text-color-light" href="{{ route('page',$page->route_name) }}"> {{$page->page_title}}</a></li>
                                @endforeach
                                    {{-- <a class="m-0 text-color-light" href="{{ url('https://www.vipmarriagemedia.com/blog/') }}"><i class="far fa-dot-circle text-color-light"></i> Blog</a> <br> --}}

                                    {{-- <a class="m-0 text-color-light" href="{{ route('sitemap') }}"><i class="far fa-dot-circle text-color-light"></i> Sitemap</a>
                                    <br>--}}
                                    {{-- @if(!Auth::check())

                                    <a class="m-0 text-color-light" href="{{ url('/register')}}"><i class="far fa-dot-circle text-color-light"></i> Registration</a> <br>

                                    @endif --}}

                            </ul>
						</div>

                        <div class="col-md-6 col-lg-2 mb-4 mb-md-0">
							<h5 class="text-3 mb-3">Useful Link</h5>
							<ul class="list list-icons list-icons-lg">
								<li><a class="m-2 text-color-light" href="{{ url('/') }}"> Home</a></li>
                                <li><a class="m-2 text-color-light" href="{{ url('/packages')}}"> Our Packages</a></li>
                                <li><a class="m-2 text-color-light" target="_blank" href="https://www.blog.vipmarriagemedia.com/"> Blog</a></li>

                            </ul>
						</div>

						<div class="col-md-6 col-lg-3 text-center">
							{{-- <h5 class="text-3  opacity-7">PAY WITH</h5> --}}

                                <img src="{{ asset('img/pay3.png') }}" alt="" class="img-fluid" style="margin-left: -30px">

							{{-- <ul class="header-social-icons social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
							</ul> --}}
						</div>
					</div>
				</div>
				<div class="footer-copyright bg-color-vipmm bg-color-scale-overlay bg-color-scale-overlay-1">
					<div class="bg-color-scale-overlay-wrapper" style="background-color: #150909">
						<div class="container py-2">
							<div class="row">
								<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
									<a href="{{url('/')}}" class="logo pr-0 pr-lg-3">
										<img alt="Porto Website Template" src="{{ asset('images/logo.png') }}" style="height: 33px;" class="" >
									</a>
								</div>
								<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
									<p class="text-color-light">© Copyright {{ date('Y') }}. All Rights Reserved. <a href="https://nugortechit.com/" target="_blank" title="https://nugortechit.com/">Site By: Nugortech</a></p>
								</div>
								<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
									<nav id="sub-menu">
										<ul>
											<li class="border-0"><i class="fas fa-angle-right text-color-light"></i><a href="{{ route('sitemap') }}" class="ml-1 text-decoration-none text-color-light"> Sitemap</a></li>
											<li class="border-0"><i class="fas fa-angle-right text-color-light"></i><a href="{{ route('page',"about-us") }}" class="ml-1 text-decoration-none text-color-light"> About Us</a></li>
											<li class="border-0"><i class="fas fa-angle-right text-color-light"></i><a href="{{ route('page',"contact-us") }}" class="ml-1 text-decoration-none text-color-light"> Contact Us</a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
