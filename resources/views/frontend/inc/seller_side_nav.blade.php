<div class="sidebar sidebar--style-3 no-border stickyfill">
    <div class="widget mb-0">
        <div class="widget-profile-box text-center">
            <div class="image" style="background-image:url('{{ Auth::user()->avatar_original }}')"></div>
            <div class="name">{{ Auth::user()->name }}</div>
        </div>
        <div class="widget-profile-menu">
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
                        <i class="ion-calendar"></i>
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
                    <a href="{{ route('seller.products') }}" class="{{ areActiveRoutesHome(['seller.products', 'seller.products.upload', 'seller.products.edit'])}}">
                        <i class="ion-heart"></i>
                        <span class="category-name">
                            Products
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
    </div>
</div>
