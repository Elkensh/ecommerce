@extends('layouts.site')

@section('content')

<nav data-depth="2" class="breadcrumb-bg">
    <div class="container no-index">
        <div class="breadcrumb">
            <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="http://demo.bestprestashoptheme.com/savemart/ar/">
                        <span itemprop="name">{{$category->name}}</span>
                    </a>
                    <meta itemprop="position" content="1">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="">
                        <span itemprop="name"></span>
                    </a>
                    <meta itemprop="position" content="2">
                </li>
            </ol>
        </div>
    </div>
</nav>
<div class="container no-index">
    <div class="row">
        <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <section id="main">
                @include('front.includes.alert')
                <div class="block-category hidden-sm-down">
                    <h1 class="h1">{{$category->name}}</h1>
                </div>


                <section id="products">

                    <div id="nav-top">

                        <div id="js-product-list-top" class="row products-selection">
                            <div class="col-md-6 col-xs-6">
                                <div class="change-type">
                                    <span class="grid-type active" data-view-type="grid"><i
                                            class="fa fa-th-large"></i></span>
                                    <span class="list-type" data-view-type="list"><i class="fa fa-bars"></i></span>
                                </div>
                                <div class="hidden-sm-down total-products">
                                    <p>يوجد {{$products->count()}} منتجا.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <div class="d-flex sort-by-row justify-content-end">

                                    <span class="hidden-sm-down sort-by">Sort by:</span>
                                    <div class="products-sort-order dropdown">
                                        <a class="select-title" rel="nofollow" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span>أفضل تطابق</span>
                                            <i class="material-icons pull-xs-right"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a rel="nofollow"
                                                href="http://demo.bestprestashoptheme.com/savemart/ar/2-%D8%A7%D9%84%D8%B5%D9%81%D8%AD%D8%A9-%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9?order=product.position.asc"
                                                class="select-list current js-search-link">
                                                أفضل تطابق
                                            </a>
                                            <a rel="nofollow"
                                                href="http://demo.bestprestashoptheme.com/savemart/ar/2-%D8%A7%D9%84%D8%B5%D9%81%D8%AD%D8%A9-%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9?order=product.name.asc"
                                                class="select-list js-search-link">
                                                الإسم، A الى Z
                                            </a>
                                            <a rel="nofollow"
                                                href="http://demo.bestprestashoptheme.com/savemart/ar/2-%D8%A7%D9%84%D8%B5%D9%81%D8%AD%D8%A9-%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9?order=product.name.desc"
                                                class="select-list js-search-link">
                                                الإسم، Z الى A
                                            </a>
                                            <a rel="nofollow"
                                                href="http://demo.bestprestashoptheme.com/savemart/ar/2-%D8%A7%D9%84%D8%B5%D9%81%D8%AD%D8%A9-%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9?order=product.price.asc"
                                                class="select-list js-search-link">
                                                السعر: منخفض إلى مرتفع
                                            </a>
                                            <a rel="nofollow"
                                                href="http://demo.bestprestashoptheme.com/savemart/ar/2-%D8%A7%D9%84%D8%B5%D9%81%D8%AD%D8%A9-%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9?order=product.price.desc"
                                                class="select-list js-search-link">
                                                السعر: عالي إلى منخفض
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                    <div id="categories-product">

                        <div id="js-product-list">
                            <div class="products product_list row grid" data-default-view="grid">
                                @isset($products)
                                @foreach ($products as $product)

                                <div class="item  col-lg-4 col-md-6 col-xs-12 text-center no-padding">
                                    <div class="product-miniature js-product-miniature item-one" data-id-product="2"
                                        data-id-product-attribute="60" itemscope=""
                                        itemtype="http://schema.org/Product">
                                        <div class="thumbnail-container">


                                            <a href="{{route('product.details',$product->id)}}"
                                                class="thumbnail product-thumbnail two-image">
                                                <img class="img-fluid image-cover"
                                                    src="{{$product->images[0]->filename ?? ''}}" alt=""
                                                    data-full-size-image-url="{{$product->images[0]->filename ?? ''}}"
                                                    width="600" height="600">
                                                <img class="img-fluid image-secondary"
                                                    src="{{$product->images[0]->filename ?? ''}}" alt=""
                                                    data-full-size-image-url="{{$product->images[0]->filename ?? ''}}"
                                                    width="600" height="600">
                                            </a>


                                            <div class="product-flags new">New</div>


                                        </div>
                                        <div class="product-description">
                                            <div class="product-groups">

                                                <div class="category-title"><a
                                                        href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-brown-bear-printed-sweater.html">Smartphone
                                                        &amp; Tablet</a></div>

                                                <div class="group-reviews">
                                                    <div class="product-comments">
                                                        <div class="star_content">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                        </div>
                                                        <span>0 review</span>
                                                    </div>
                                                    <p class="seller_name">
                                                        <a title="View seller profile"
                                                            href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                            <i class="fa fa-user"></i>
                                                            David James
                                                        </a>
                                                    </p>

                                                    <div class="info-stock ml-auto">
                                                        <label class="control-label">Availability:</label>
                                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                        {{$product->in_stock ? 'in stock' : 'out of stock'}}
                                                    </div>
                                                </div>

                                                <div class="product-title" itemprop="name">
                                                    <a href="#">{{$product->name}}</a></div>

                                                <div class="product-group-price">

                                                    <div class="product-price-and-shipping">



                                                        <span itemprop="price" class="price">{{$product->price}}</span>





                                                    </div>

                                                </div>
                                                <div class="product-desc" itemprop="desciption">Vestibulum varius, massa
                                                    sed luctus ornare, enim arcu sollicitudin velit, in ornare ex mauris
                                                    eleifend nibh. Quisque id rhoncus diam,...</div>
                                            </div>
                                            <div class="product-buttons d-flex justify-content-center" itemprop="offers"
                                                itemscope="" itemtype="http://schema.org/Offer">
                                                <form action="{{route('addToCart',$product->id)}}" method="get"
                                                    class="formAddToCart">
                                                    @csrf
                                                    {{-- <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
            <input type="hidden" name="id_product" value="2"> --}}
                                                    <a class="add-to-cart" href="{{route('addToCart',$product->id)}}">
                                                        <i class="novicon-cart"></i><span>أضف للسلة</span></a>
                                                </form>
                                                {{-- <form action="{{route('wishlist.store',$product->id)}}"
                                                method="POST"> --}}
                                                <a class="addToWishlist" href="{{route('wishlist.store',$product->id)}}"
                                                    data-product-id="{{$product->id}}">
                                                    <i class="fa fa-heart"></i>
                                                    <span>Add to Wishlist</span>
                                                </a>
                                                {{-- </form> --}}

                                                <a href="#" class="quick-view hidden-sm-down"
                                                    data-link-action="quickview">
                                                    <i class="fa fa-search"></i><span> نظرة سريعة</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                                @endisset

                            </div>


                            <div id="js-product-list-bottom">

                                <nav class="pagination row justify-content-around">
                                    <div class="col col-xs-12 col-lg-6 col-md-12">

                                        <span class="showing">
                                            Showing 1-12 of 23 item(s)
                                        </span>

                                    </div>
                                    <div class="col col-xs-12 col-lg-6 col-md-12">

                                        <ul class="page-list">
                                            <li class="current">
                                                <a rel="nofollow"
                                                    href="http://demo.bestprestashoptheme.com/savemart/ar/2-%D8%A7%D9%84%D8%B5%D9%81%D8%AD%D8%A9-%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9"
                                                    class="disabled js-search-link">
                                                    1
                                                </a>
                                            </li>
                                            <li>
                                                <a rel="nofollow"
                                                    href="http://demo.bestprestashoptheme.com/savemart/ar/2-%D8%A7%D9%84%D8%B5%D9%81%D8%AD%D8%A9-%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9?page=2"
                                                    class="js-search-link">
                                                    2
                                                </a>
                                            </li>
                                            <li>
                                                <a rel="next"
                                                    href="http://demo.bestprestashoptheme.com/savemart/ar/2-%D8%A7%D9%84%D8%B5%D9%81%D8%AD%D8%A9-%D8%A7%D9%84%D8%B1%D8%A6%D9%8A%D8%B3%D9%8A%D8%A9?page=2"
                                                    class="next js-search-link">
                                                    التالي
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </nav>

                            </div>


                </section>

            </section>

        </div>
    </div>
</div>



{{-- @include('front.includes.not-logged') --}}

@stop

@section('script')

{{-- ??????????????????????????????????????? --}}
{{-- <script>
            $(document).on('click','.addToWishlist' , function(e){
                e.preventDefault();
                @guest()
                    $('.not-loggedin-modal').css('display','block');
                @endguest()

               // @auth() ## I dont need [@auth()] because use middleware in route ##
                $.ajax({
                    type:'post',
                    url:"{{route('wishlist.store')}}",
data:{
'productId':$(this).attr('data-product-id'),
},
success: function(data){

}
});
// @endauth()
});
</script> --}}


@endsection
