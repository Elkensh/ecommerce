<div class="header-center hidden-sm-down">

    <div class="container">
        <div class="row d-flex align-items-center">
            <div id="_desktop_logo" class="contentsticky_logo d-flex align-items-center justify-content-start col-lg-3 col-md-3">
                <a href="{{route('site')}}">
                    <img class="logo img-fluid" src="/savemart/modules/novthemeconfig/images/logos/logo-1.png" alt="Prestashop_Savemart">
                </a>
            </div>
            <div class="col-lg-9 col-md-9 header-menu d-flex align-items-center justify-content-end">
                <div class="data-contact d-flex align-items-center">
                    <div class="title-icon">support<i class="icon-support icon-address"></i></div>
                    <div class="content-data-contact">
                        <div class="support">Call customer services :</div>
                        <div class="phone-support">
                            1234 567 899
                        </div>
                    </div>
                </div>
                <div class="contentsticky_group d-flex justify-content-end">
                    <div class="header_link_myaccount">
                        <a class="login" href="http://demo.bestprestashoptheme.com/savemart/ar/������ ������" rel="nofollow" title="����� ������ ��� �����"><i class="header-icon-account"></i></a>
                    </div>
                    <div class="header_link_wishlist">
                        <a href="{{route('site.wishlist')}}" title="My Wishlists">
                            <i class="header-icon-wishlist"></i>
                        </a>
                    </div>

                    <!-- begin module:ps_shoppingcart/ps_shoppingcart.tpl -->
                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_shoppingcart/ps_shoppingcart.tpl -->
                    <div id="_desktop_cart">
                        <div class="blockcart cart-preview active" data-refresh-url="">
                            <div class="header-cart">
                                <div class="cart-left">

                                    @if(auth()->user())
                                    <a href="{{route('cart')}}" title="My Cart">
                                    <div class="shopping-cart">
                                        <i class="zmdi zmdi-shopping-cart"></i></div>
                                        </a>
                                    <div class="cart-products-count">
                                        {{auth()->user()->cart()->count()}}
                                    </div>
                                    @else
                                    <div class="shopping-cart">
                                        <i class="zmdi zmdi-shopping-cart"></i></div>
                                        <div class="cart-products-count">
                                            0
                                        </div>
                                    @endif
                                </div>
                                <div class="cart-right d-flex flex-column align-self-end ml-13">
                                    <span class="title-cart">��� ������</span>
                                    <span class="cart-item"> items</span>
                                </div>
                            </div>
                            @if(auth()->user())
                                @if(auth()->user()->cart->count() == 0)
                                <div class="cart_block ">
                                    <div class="cart-block-content">
                                        <div class="no-items">
                                            No products in the cart
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @else
                            <div class="cart_block ">
                                <div class="cart-block-content">
                                    <div class="no-items">
                                       You are not authnticated
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div><!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_shoppingcart/ps_shoppingcart.tpl -->
                    <!-- end module:ps_shoppingcart/ps_shoppingcart.tpl -->

                </div>
            </div>
        </div>
    </div>
</div>
