<div class="sidebar sidebar--style-3 no-border stickyfill">
    <div class="widget mb-0">
        <div class="widget-profile-box text-center">
            <div class="image" style="background-image:url('{{ Auth::user()->avatar_original }}')"></div>
            <div class="name">{{ Auth::user()->name }}</div>
        </div>
        <div class="widget-profile-menu">
            <ul class="categories categories--style-3">
                <li>
                    <a href="{{ route('dashboard') }}" class="active">
                        <i class="ion-calendar"></i>
                        <span class="category-name">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="ion-gear-b"></i>
                        <span class="category-name">
                            Settings
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="ion-calendar"></i>
                        <span class="category-name">
                            Orders
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('wishlists.index') }}">
                        <i class="ion-heart"></i>
                        <span class="category-name">
                            Wishlist
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="ion-heart"></i>
                        <span class="category-name">
                            Manage Profile
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="widget-seller-btn pt-4">
            <a href="" class="btn btn-anim-primary w-100">Be A Seller</a>
        </div>
    </div>
</div>
