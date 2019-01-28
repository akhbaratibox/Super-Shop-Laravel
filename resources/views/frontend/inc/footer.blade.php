
<section class="slice-sm footer-top-bar">
    <div class="container sct-inner">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6">
                <div class="footer-top-box text-center">
                    <a href="{{ route('sellerpolicy') }}">
                        <i class="fa fa-tv"></i>
                        <h4 class="heading-5">{{__('Seller Policy')}}</h4>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-top-box text-center">
                    <a href="{{ route('returnpolicy') }}">
                        <i class="fa fa-tv"></i>
                        <h4 class="heading-5">{{__('Return Policy')}}</h4>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-top-box text-center">
                    <a href="{{ route('supportpolicy') }}">
                        <i class="fa fa-tv"></i>
                        <h4 class="heading-5">{{__('Support Policy')}}</h4>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-top-box text-center">
                    <a href="{{ route('profile') }}">
                        <i class="fa fa-tv"></i>
                        <h4 class="heading-5">{{__('My Profile')}}</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FOOTER -->
<footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                @php
                    $generalsetting = \App\GeneralSetting::first();
                @endphp
                <div class="col-lg-5 col-xl-4 text-center text-md-left">
                    <div class="col">
                        <a href="{{ route('home') }}" class="d-block">
                            @if($generalsetting->logo != null)
                                <img src="{{ asset($generalsetting->logo) }}" class="" height="44">
                            @else
                                <img src="{{ asset('frontend/images/logo/logo.png') }}" class="" height="44">
                            @endif
                        </a>
                        <p class="mt-3">{{ $generalsetting->description }}</p>
                        <div class="d-inline-block d-md-block">
                            <form class="form-inline" method="POST" action="{{ route('subscribers.store') }}">
                                @csrf
                                <div class="form-group mb-0">
                                    <input type="email" class="form-control" placeholder="Your Email Address" name="email" required>
                                </div>
                                <button type="submit" class="btn btn-base-1 btn-icon-left">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-xl-1 col-md-4">
                    <div class="col text-center text-md-left">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-2">
                            {{__('Contact Info')}}
                        </h4>
                        <ul class="footer-links contact-widget">
                            <li>
                               <span class="d-block opacity-5">Address:</span>
                               <span class="d-block">{{ $generalsetting->address }}</span>
                            </li>
                            <li>
                               <span class="d-block opacity-5">Phone:</span>
                               <span class="d-block">{{ $generalsetting->phone }}</span>
                            </li>
                            <li>
                               <span class="d-block opacity-5">Email:</span>
                               <span class="d-block">
                                   <a href="mailto:{{ $generalsetting->email }}">{{ $generalsetting->email  }}</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="col text-center text-md-left">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-2">
                            Useful Link
                        </h4>
                        <ul class="footer-links">
                            @foreach (\App\Link::all() as $key => $link)
                                <li>
                                    <a href="{{ $link->url }}" title="">
                                        {{ $link->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2">
                    <div class="col text-center text-md-left">
                       <h4 class="heading heading-xs strong-600 text-uppercase mb-2">
                          My Account
                       </h4>

                       <ul class="footer-links">
                            <li>
                                <a href="{{ route('user.login') }}" title="Home">
                                    Login
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('purchase_history.index') }}" title="About us">
                                    Order History
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('wishlists.index') }}" title="Services">
                                    My Wishlist
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col text-center text-md-left">
                        <div class="mt-4">
                            <h4 class="heading heading-xs strong-600 text-uppercase mb-2">
                                Be a Seller
                            </h4>
                            <button type="button" class="btn btn-base-1 btn-icon-left">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom py-3 sct-color-3">
        <div class="container">
            <div class="row row-cols-xs-spaced flex flex-items-xs-middle">
                <div class="col-md-4">
                    <div class="copyright text-center text-md-left">
                        <ul class="copy-links no-margin">
                            <li>
                                © 2018 Active Super Shop
                            </li>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="social-media social-media--style-1-v4 text-center my-3 my-md-0">
                        <li>
                            <a href="#" class="facebook" target="_blank" data-toggle="tooltip" data-original-title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="instagram" target="_blank" data-toggle="tooltip" data-original-title="Instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dribbble" target="_blank" data-toggle="tooltip" data-original-title="Dribbble">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dribbble" target="_blank" data-toggle="tooltip" data-original-title="Github">
                                <i class="fa fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="text-center text-md-right">
                        <ul class="inline-links">
                            <li>
                                <img src="{{ asset('frontend/images/icons/cards/visa.png') }}" width="30" class="img-grayscale">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/images/icons/cards/mastercard.png') }}" width="30" class="img-grayscale">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/images/icons/cards/maestro.png') }}" width="30" class="img-grayscale">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/images/icons/cards/paypal.png') }}" width="30" class="img-grayscale">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
