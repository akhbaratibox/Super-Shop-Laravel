__<div class="sidebar sidebar--style-3 no-border stickyfill p-0">
    <div class="widget mb-0">
        <div class="widget-profile-box text-center p-3">
            <div class="image" style="background-image:url('{{ Auth::user()->avatar_original }}')"></div>
            <div class="name mb-0">{{ Auth::user()->name }}</div>
        </div>
        <div class="sidebar-widget-title py-3">
            <span>{{__('Menu')}}</span>
        </div>
        <div class="widget-profile-menu py-3">
            <ul class="categories categories--style-3">
                <li>
                    <a href="{{ route('dashboard') }}" class="{{ areActiveRoutesHome(['dashboard'])}}">
                        <i class="fa fa-dashboard"></i>
                        <span class="category-name">
                            {{__('dashboard')}}
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('purchase_history.index') }}" class="{{ areActiveRoutesHome(['purchase_history.index'])}}">
                        <i class="fa fa-cart-plus"></i>
                        <span class="category-name">
                            {{__('Purchase History')}}
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('wishlists.index') }}" class="{{ areActiveRoutesHome(['wishlists.index'])}}">
                        <i class="fa fa-heart"></i>
                        <span class="category-name">
                            {{__('Wishlist')}}
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('seller.products') }}" class="{{ areActiveRoutesHome(['seller.products', 'seller.products.upload', 'seller.products.edit'])}}">
                        <i class="fa fa-diamond"></i>
                        <span class="category-name">
                            {{__('products')}}
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('orders.index') }}" class="{{ areActiveRoutesHome(['orders.index'])}}">
                        <i class="fa fa-shopping-basket"></i>
                        <span class="category-name">
                            {{__('orders')}}
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('shop.index') }}" class="{{ areActiveRoutesHome(['shop.index'])}}">
                        <i class="fa fa-cog"></i>
                        <span class="category-name">
                            {{__('Shop Setting')}}
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('seller.products') }}" class="{{ areActiveRoutesHome([])}}">
                        <i class="fa fa-credit-card-alt"></i>
                        <span class="category-name">
                            {{__('Payment History')}}
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}" class="{{ areActiveRoutesHome(['profile'])}}">
                        <i class="fa fa-user-circle-o"></i>
                        <span class="category-name">
                            {{__('Manage Profile')}}
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="sidebar-widget-title py-3">
            <span>{{__('Earinngs')}}</span>
        </div>
        <div class="widget-balance pb-3 pt-1">
            <div class="text-center">
                <div class="heading-4 strong-700 mb-4">
                    <small class="d-block text-sm alpha-5 mb-2">{{__('your earnings')}}</small>
                    <span class="p-2 bg-base-1 rounded">$526.51</span>
                </div>
                <table class="text-left mb-0 table w-75 m-auto">
                    <tr>
                        <td class="p-1 text-sm">
                            {{__('Total earnings')}}:
                        </td>
                        <td class="p-1">
                            $1500.26
                        </td>
                    </tr>
                    <tr>
                        <td class="p-1 text-sm">
                            {{__('Last Month earnings')}}:
                        </td>
                        <td class="p-1">
                            $756.75
                        </td>
                    </tr>
                </table>
            </div>
            <table>

            </table>
        </div>
    </div>
</div>
