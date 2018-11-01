<a href="{{ route('wishlists.index') }}" class="nav-box-link">
    <i class="ion-ios-heart-outline d-inline-block nav-box-icon"></i>
    <span class="nav-box-text d-none d-lg-inline-block">Wishlist</span>
    @if(Auth::check())
        <span class="nav-box-number">{{ count(Auth::user()->wishlists)}}</span>
    @else
        <span class="nav-box-number">0</span>
    @endif
</a>
