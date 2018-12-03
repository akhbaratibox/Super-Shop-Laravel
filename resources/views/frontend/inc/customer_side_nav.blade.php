<div class="sidebar sidebar--style-3 no-border stickyfill p-0">
    <div class="widget mb-0">
        <div class="widget-profile-box text-center p-3">
            <div class="image" style="background-image:url('{{ Auth::user()->avatar_original }}')"></div>
            <div class="name">{{ Auth::user()->name }}</div>
        </div>
        <div class="sidebar-widget-title py-3">
            <span>Menu</span>
        </div>
        <div class="widget-profile-menu py-3">
            <ul class="categories categories--style-3">
                <li>
                    <a href="{{ route('dashboard') }}" class="{{ areActiveRoutesHome(['dashboard'])}}">
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
                    <a href="{{ route('purchase_history.index') }}" class="{{ areActiveRoutesHome(['purchase_history.index'])}}">
                        <i class="fa fa-cart-plus"></i>
                        <span class="category-name">
                            Purchase History
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('wishlists.index') }}" class="{{ areActiveRoutesHome(['wishlists.index'])}}">
                        <i class="ion-heart"></i>
                        <span class="category-name">
                            Wishlist
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}" class="{{ areActiveRoutesHome(['profile'])}}">
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
