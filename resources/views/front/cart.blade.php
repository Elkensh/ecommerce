@extends('layouts.site')

@section('content')

<nav data-depth="1" class="breadcrumb-bg">

    <div class="container no-index">
        <div class="breadcrumb">
            <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="{{route('site')}}">
                        <span itemprop="name">الصفحه الرئيسيه</span>
                    </a>
                    <meta itemprop="position" content="1">
                </li>
            </ol>
        </div>
    </div>
</nav>
<div class="container no-index">
    <div class="row">
        <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <section id="main">
                <h1 class="page-title">Cart</h1>
                <div class="cart-grid row">

                    <!-- Left Block: cart product informations & shpping -->
                    <div class="cart-grid-body col-xs-12 col-lg-9">

                        <!-- cart products detailed -->
                        @if(isset($product_cart))
                        @foreach ($product_cart as $product)
                        <div class="cart-container">
                            <div class="cart-overview js-cart"
                                data-refresh-url="//demo.bestprestashoptheme.com/savemart/fr/panier?ajax=1&amp;action=refresh">
                                <ul class="cart-items">
                                    <li class="cart-item">
                                        <div class="product-line-grid row spacing-10">
                                            <!--  product left content: image-->
                                            <div class="product-line-grid-left col-sm-2 col-xs-4">
                                                <span class="product-image media-middle">
                                                    <img class="img-fluid" src="{{$product->images[0]->filename}}"
                                                        alt="Mauris molestie porttitor diam">
                                                </span>
                                            </div>
                                            <!--  product left body: description -->
                                            <div class="product-line-grid-body col-sm-10 col-xs-8">
                                                <div class="row">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="product-line-info">
                                                            <a class="label"
                                                                href="http://demo.bestprestashoptheme.com/savemart/fr/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-taille-s/13-colour-orange"
                                                                data-id_customization="0">Mauris molestie porttitor
                                                                diam</a>
                                                        </div>
                                                        <div class="product-line-info product-price">
                                                            <span class="value">30,00&nbsp;£</span>
                                                        </div>
                                                        <div class="product-line-info">
                                                            <span class="label-atrr">Taille:</span>
                                                            <span class="value">S</span>
                                                        </div>
                                                        <div class="product-line-info">
                                                            <span class="label-atrr">Colour:</span>
                                                            <span class="value">Orange</span>
                                                        </div>
                                                    </div>
                                                    <div class="text-center product-line-actions col-sm-6 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-sm-9 col-xs-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-xs-6 qty">
                                                                        <div class="label">Quantité:</div>
                                                                        <div class="input-group bootstrap-touchspin">
                                                                            <span
                                                                                class="input-group-addon bootstrap-touchspin-prefix"
                                                                                style="display: none;"></span><input
                                                                                id="quantity_wanted"
                                                                                class="js-cart-line-product-quantity form-control"
                                                                                data-down-url="http://demo.bestprestashoptheme.com/savemart/fr/panier?update=1&amp;id_product=3&amp;id_product_attribute=95&amp;token=28add935523ef131c8432825597b9928&amp;op=down"
                                                                                data-up-url="http://demo.bestprestashoptheme.com/savemart/fr/panier?update=1&amp;id_product=3&amp;id_product_attribute=95&amp;token=28add935523ef131c8432825597b9928&amp;op=up"
                                                                                data-update-url="http://demo.bestprestashoptheme.com/savemart/fr/panier?update=1&amp;id_product=3&amp;id_product_attribute=95&amp;token=28add935523ef131c8432825597b9928"
                                                                                data-product-id="3" type="text"
                                                                                value="4" name="product-quantity-spin"
                                                                                min="1" style="display: block;"><span
                                                                                class="input-group-addon bootstrap-touchspin-postfix"
                                                                                style="display: none;"></span><span
                                                                                class="input-group-btn-vertical"><button
                                                                                    class="btn btn-touchspin js-touchspin bootstrap-touchspin-up"
                                                                                    type="button"><i
                                                                                        class="material-icons touchspin-up"></i></button><button
                                                                                    class="btn btn-touchspin js-touchspin bootstrap-touchspin-down"
                                                                                    type="button"><i
                                                                                        class="material-icons touchspin-down"></i></button></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-xs-6 price">
                                                                        <div class="label">Total:</div>
                                                                        <div class="product-price total">
                                                                            120,00&nbsp;£
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-sm-3 col-xs-12 text-xs-right align-self-end">
                                                                <div class="cart-line-product-actions ">
                                                                    <a class="remove-from-cart" rel="nofollow"
                                                                        href="http://demo.bestprestashoptheme.com/savemart/fr/panier?delete=1&amp;id_product=3&amp;id_product_attribute=95&amp;token=28add935523ef131c8432825597b9928"
                                                                        data-link-action="delete-from-cart"
                                                                        data-id-product="3"
                                                                        data-id-product-attribute="95"
                                                                        data-id-customization="">
                                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                    </a>



                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>


                        @endforeach
                        @endif


                        <a class="label btn btn-primary" href="http://demo.bestprestashoptheme.com/savemart/fr/">
                            Continuer mes achats
                        </a>




                        <!-- shipping informations -->



                    </div>













                    <!-- Right Block: cart subtotal & cart total -->
                    <div class="cart-grid-right col-xs-12 col-lg-3">


                        <div class="cart-summary">







                            <div class="cart-detailed-totals">
                                <div class="cart-summary-products">
                                    <div class="summary-label">There are 4 articles in your cart</div>
                                </div>

                                <div class="">
                                    <div class="cart-summary-line" id="cart-subtotal-products">
                                        <span class="label js-subtotal">
                                            Total des produits:
                                        </span>
                                        <span class="value">120,00&nbsp;£</span>
                                    </div>
                                    <div class="cart-summary-line" id="cart-subtotal-shipping">
                                        <span class="label">
                                            Total Livraison:
                                        </span>
                                        <span class="value">gratuit</span>
                                        <div><small class="value"></small></div>
                                    </div>
                                </div>




                                <div class="">
                                    <div class="cart-summary-line cart-total">
                                        <span class="label">Total:</span>
                                        <span class="value">120,00&nbsp;£ TTC</span>
                                    </div>

                                </div>

                            </div>





                            <div class="checkout cart-detailed-actions">
                                <div class="text-xs-center">
                                    <a href="http://demo.bestprestashoptheme.com/savemart/fr/commande"
                                        class="btn btn-primary">Commander</a>

                                </div>
                            </div>



                        </div>



                        <div class="blockreassurance_product">
                            <div>
                                <span class="item-product">
                                    <img class="svg"
                                        src="/savemart/modules/blockreassurance/img/ic_verified_user_black_36dp_1x.png">
                                    &nbsp;
                                </span>
                                <p class="block-title" style="color:#000000;">Security policy (edit with Customer
                                    reassurance module)</p>
                            </div>
                            <div>
                                <span class="item-product">
                                    <img class="svg"
                                        src="/savemart/modules/blockreassurance/img/ic_local_shipping_black_36dp_1x.png">
                                    &nbsp;
                                </span>
                                <p class="block-title" style="color:#000000;">Delivery policy (edit with Customer
                                    reassurance module)</p>
                            </div>
                            <div>
                                <span class="item-product">
                                    <img class="svg"
                                        src="/savemart/modules/blockreassurance/img/ic_swap_horiz_black_36dp_1x.png">
                                    &nbsp;
                                </span>
                                <p class="block-title" style="color:#000000;">Return policy (edit with Customer
                                    reassurance module)</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>



                    </div>

                </div>
            </section>

        </div>
    </div>
</div>


@stop
