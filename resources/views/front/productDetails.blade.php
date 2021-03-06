@extends('layouts.site')

@section('content')


<nav data-depth="3" class="breadcrumb-bg">
    <div class="container no-index">
      <div class="breadcrumb">

      <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="http://demo.bestprestashoptheme.com/savemart/ar/">
              <span itemprop="name">الصفحة الرئيسية</span>
            </a>
            <meta itemprop="position" content="1">
          </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="http://demo.bestprestashoptheme.com/savemart/ar/9-smartphone-tablet">
              <span itemprop="name">Smartphone &amp; Tablet</span>
            </a>
            <meta itemprop="position" content="2">
          </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/الحجم-ص/اللون_-اسود">
              <span itemprop="name">Lorem ipsum dolor sit amet ege</span>
            </a>
            <meta itemprop="position" content="3">
          </li>
            </ol>

      </div>
    </div>
  </nav>



  <div class="no-index">
    <div id="content-wrapper">

        <section id="main" itemscope="" itemtype="https://schema.org/Product">
            @include('front.includes.alert')
          <meta itemprop="url" content="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">
          <div class="product-detail-top">
            <div class="container">



              <div class="row main-productdetail" data-product_layout_thumb="list_thumb" style="position: relative;">
                <div class="col-lg-5 col-md-4 col-xs-12 box-image">

                    <section class="page-content" id="content">



    <div class="images-container list_thumb">
        @if (isset($images))


        <div class="product-cover">
          <img class="js-qv-product-cover img-fluid" src="{{$images[0]->filename}}" alt="" title="" style="width:100%;" itemprop="image">
          <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
            <i class="fa fa-expand"></i>
          </div>
        </div>

        @foreach ($images as $image)

        @if($image->filename != $images[0]->filename)
        <div class="js-qv-mask mask only-product">
            <div class="row">
                            <div class="item thumb-container col-md-6 col-xs-12 pt-30">
                  <img class="img-fluid thumb js-thumb  selected " data-image-medium-src="{{$image->filename}}" data-image-large-src="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg" src="{{$image->filename}}" alt="" title="" itemprop="image">
                </div>

                        </div>
          </div>
          @endif
        @endforeach


          @endif
    </div>



                    </section>

                </div>

                <div class="col-lg-7 col-md-8 col-xs-12 mt-sm-20">
                  <div class="product-information">
                    <div class="product-actions">

                        <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" id="add-to-cart-or-refresh" class="row">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="2" id="product_page_product_id">
                          <input type="hidden" name="id_customization" value="0" id="product_customization_id">
                          <div class="productdetail-right col-12 col-lg-6 col-md-6">
                            <div class="product-reviews">
                               <div id="product_comments_block_extra">

      <div class="comments_note">
          <span>Review: </span>
          <div class="star_content clearfix">
                                      <div class="star"></div>
                                                  <div class="star"></div>
                                                  <div class="star"></div>
                                                  <div class="star"></div>
                                                  <div class="star"></div>
                              </div>
      </div>


      <div class="comments_advices">
                          <a class="open-comment-form" data-toggle="modal" data-target="#new_comment_form" href="#"><i class="fa fa-edit"></i>Write your review</a>
              </div>
  </div>


  <!--  /Module NovProductComments -->

                            </div>

                            <h1 class="detail-product-name" itemprop="name">{{$product->name}}</h1>



                            <div class="group-price d-flex justify-content-start align-items-center">

                                        <div class="product-prices">


        <div class="product-price " itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
          <link itemprop="availability" href="https://schema.org/InStock">
          <meta itemprop="priceCurrency" content="GBP">

          <div class="current-price">

            <span itemprop="price" class="price" content="36">{{$product->price}}&nbsp;UK£</span>
                    </div>



        </div>













      <div class="tax-shipping-delivery-label">
                شامل للضريبة


      </div>
    </div>




                            </div>





                            <div class="in_border end">

                                                          <div class="sku">
                                  <label class="control-label">Sku:</label>
                                  <span itemprop="sku" content="demo_3">{{$product->sku}}</span>
                              </div>
                                                                                      <div class="pro-cate">
                                  <label class="control-label">Categories:</label>
                                  <div>
                                                                                                                 <span><a href="{{route('site')}}" title="الصفحة الرئيسية">الصفحة الرئيسية</a></span>
                                                                                                                <span><a href="{{route('category',$main_category->slug)}}" title="Computer &amp; Networking">{{$main_category->name}}</a></span>
                                                                                                                    <span><a href="{{route('category',$sub_category->slug)}}" title="Home Appliance">{{$sub_category->name}}</a></span>

                                                                                                          </div>
                              </div>
                                                                                      <div class="pro-tag">
                                  <label class="control-label">Tags:</label>
                                  <div>
                                                                                                        <span><a href="http://demo.bestprestashoptheme.com/savemart/ar/بحث?tag=iphone">iphone</a></span>
                                                                      <span><a href="http://demo.bestprestashoptheme.com/savemart/ar/بحث?tag=smart+phone">smart phone</a></span>
                                                                      <span><a href="http://demo.bestprestashoptheme.com/savemart/ar/بحث?tag=samsung">samsung</a></span>
                                                                      <span><a href="http://demo.bestprestashoptheme.com/savemart/ar/بحث?tag=apple">apple</a></span>
                                                                                                      </div>
                              </div>
                                                        </div>


                            <div id="_desktop_productcart_detail">
                                <div class="product-add-to-cart in_border">
      <div class="add">
          <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit">
              <div class="icon-cart">
                  <i class="shopping-cart"></i>
              </div>
              <span>أضف للسلة</span>
          </button>
      </div>

  <a class="addToWishlist wishlistProd_2" href="{{route('wishlist.store',$product->id)}}"
    data-product-id="{{$product->id}}">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>

      <div class="clearfix"></div>

      <div id="product-availability" class="info-stock mt-20">
                      <label class="control-label">Availability:</label>
                      {{$product->in_stock ? 'in stock' : 'out of stock'}}
                              <i class="fa fa-check-square-o" aria-hidden="true"></i>
                          </div>


      <p class="product-minimal-quantity mt-20">
              </p>

  </div>
                            </div>


                              <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="تحديث" style="display: none;">

                          </div>
                          <div class="productdetail-left col-12 col-lg-6 col-md-6">


                                <div class="product-quantity">
                                  <span class="control-label">الكميَّة : </span>
                                  <div class="qty">
                                    <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="text" name="qty" id="quantity_wanted" value="1"  class="input-group form-control" min="1"  style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical"><button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button"><i class="material-icons touchspin-up"></i></button><button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button"><i class="material-icons touchspin-down"></i></button></span></div>
                                  </div>
                                </div>







                <div class="product-variants in_border">
                      <div class="product-variants-item">
          <span class="control-label">الحجم : </span>
                    <select id="group_1" data-product-attribute="1" name="group[1]">
                            <option value="1" title="ص" selected="selected">ص</option>
                            <option value="2" title="م">م</option>
                            <option value="3" title="ك">ك</option>
                            <option value="4" title="XL">XL</option>
                        </select>
                </div>


                  <div class="product-variants-item">
          <span class="control-label">اللون: : </span>
                    <ul id="group_2">
                            <li class="pull-xs-left input-container">
                  <input class="input-color" type="radio" data-product-attribute="2" name="group[2]" value="10">
                  <span class="color" style="background-color: #E84C3D"><span class="sr-only">احمر</span></span>
                </li>
                            <li class="pull-xs-left input-container">
                  <input class="input-color" type="radio" data-product-attribute="2" name="group[2]" value="11">
                  <span class="color" style="background-color: #434A54"><span class="sr-only">اسود</span></span>
                </li>
                            <li class="pull-xs-left input-container">
                  <input class="input-color" type="radio" data-product-attribute="2" name="group[2]" value="14" checked="checked">
                  <span class="color" style="background-color: #5D9CEC"><span class="sr-only">ازرق</span></span>
                </li>
                            <li class="pull-xs-left input-container">
                  <input class="input-color" type="radio" data-product-attribute="2" name="group[2]" value="17">
                  <span class="color" style="background-color: #964B00"><span class="sr-only">بنّي</span></span>
                </li>
                            <li class="pull-xs-left input-container">
                  <input class="input-color" type="radio" data-product-attribute="2" name="group[2]" value="18">
                  <span class="color" style="background-color: #FCCACD"><span class="sr-only">وردي</span></span>
                </li>
                        </ul>
                </div>

            </div>













                            <div id="_mobile_productcart_detail"></div>

                            <div class="productbuttons">
                                  <div class="tabs">
          <h4 class="buttons_bottom_block">
              Information of seller
          </h4>
          <div class="seller_info">
              <span class="seller_name">
                  David James
              </span>
                              <div class="average_rating">
                      <a href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/comments" title="View comments about David James">
                                                                                      <div class="star"></div>
                                                                                                                  <div class="star"></div>
                                                                                                                  <div class="star"></div>
                                                                                                                  <div class="star"></div>
                                                                                                                  <div class="star"></div>
                                                      (0)
                      </a>
                  </div>
                      </div>
          <div class="seller_links">
                              <p class="link_seller_profile">
                      <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                          <i class="icon-user fa fa-user"></i>
                          View seller profile
                      </a>
                  </p>
                                          <p class="link_contact_seller">
                      <a title="Contact seller" href="http://demo.bestprestashoptheme.com/savemart/ar/module/jmarketplace/contactseller?id_seller=1&amp;id_product=2">
                          <i class="fa fa-comment"></i>
                          Contact seller
                      </a>
                  </p>
                                          <p class="link_seller_favorite">
                      <a title="Add to favorite seller" href="http://demo.bestprestashoptheme.com/savemart/ar/module/jmarketplace/favoriteseller?id_seller=1&amp;id_product=2">
                          <i class="icon-heart fa fa-heart"></i>
                          Add to favorite seller
                      </a>
                  </p>
                          <p class="link_seller_products">
                  <a title="View more products of this seller" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/products">
                      <i class="icon-list fa fa-list"></i>
                      View more products of this seller
                  </a>
              </p>
          </div>
      </div>
  <script type="text/javascript">
  var PS_REWRITING_SETTINGS = "1";
  </script>


      <div class="dropdown social-sharing">
      <button class="btn btn-link" type="button" id="social-sharingButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share With :</span>
      </button>
      <div class="dropdown-menu" aria-labelledby="social-sharingButton">
                          <a class="dropdown-item" href="http://www.facebook.com/sharer.php?u=http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-brown-bear-printed-sweater.html" title="مشاركة" target="_blank"><i class="fa fa-facebook"></i>Facebook</a>
                                  <a class="dropdown-item" href="https://twitter.com/intent/tweet?text=Lorem ipsum dolor sit amet ege http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-brown-bear-printed-sweater.html" title="تغريدة" target="_blank"><i class="fa fa-twitter"></i>تغريدة</a>
                                  <a class="dropdown-item" href="https://plus.google.com/share?url=http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-brown-bear-printed-sweater.html" title="جوجل +" target="_blank"><i class="fa fa-google-plus"></i>جوجل +</a>
                                  <a class="dropdown-item" href="http://www.pinterest.com/pin/create/button/?media=http://demo.bestprestashoptheme.com/savemart/29/brown-bear-printed-sweater.jpg&amp;url=http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-brown-bear-printed-sweater.html" title="بنترست" target="_blank"><i class="fa fa-pinterest"></i>بنترست</a>
                    </div>
    </div>


                              <a class="btn btn-link" href="javascript:print();">
                                <span><i class="fa fa-print" aria-hidden="true"></i>Print</span>
                              </a>
                            </div>
                          </div>
                        </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-detail-middle">
            <div class="container">
              <div class="row">
                              <div class="tabs col-lg-9 col-md-7 ">
                  <ul class="nav nav-tabs">
                                      <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#description">الوصف</a>
                    </li>
                                      <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#product-details">Product Detail</a>
                    </li>
                                                        <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#reviews">Write Your Own Review<span class="count-comment"> (0)</span></a>
  </li>
                                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-custom">Custom Tab</a>
                      </li>

                  </ul>

                  <div class="tab-content" id="tab-content">
                     <div class="tab-pane in active" id="description">

                         <div class="product-description"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
  <h3>Lorem ipsum dolor sit amet</h3>
  <div class="image-des"><a href="#"><img class="img-fluid" src="http://images.vinovathemes.com/prestashop_savemart/image-product-1.jpg" alt="#"></a></div>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br> Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
  <div class="image-des"><a href="#"><img class="img-fluid" src="http://images.vinovathemes.com/prestashop_savemart/image-product-2.jpg" alt="#"></a></div>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br> Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p></div>

                     </div>

                       <div class="tab-pane fade" id="product-details" data-product="{&quot;id_shop_default&quot;:&quot;1&quot;,&quot;id_manufacturer&quot;:&quot;1&quot;,&quot;id_supplier&quot;:&quot;0&quot;,&quot;reference&quot;:&quot;demo_3&quot;,&quot;is_virtual&quot;:&quot;0&quot;,&quot;delivery_in_stock&quot;:&quot;&quot;,&quot;delivery_out_stock&quot;:&quot;&quot;,&quot;id_category_default&quot;:&quot;9&quot;,&quot;on_sale&quot;:&quot;0&quot;,&quot;online_only&quot;:&quot;0&quot;,&quot;ecotax&quot;:0,&quot;minimal_quantity&quot;:&quot;1&quot;,&quot;low_stock_threshold&quot;:null,&quot;low_stock_alert&quot;:&quot;0&quot;,&quot;price&quot;:&quot;36.00\u00a0UK\u00a3&quot;,&quot;unity&quot;:&quot;&quot;,&quot;unit_price_ratio&quot;:&quot;0.000000&quot;,&quot;additional_shipping_cost&quot;:&quot;0.00&quot;,&quot;customizable&quot;:&quot;0&quot;,&quot;text_fields&quot;:&quot;0&quot;,&quot;uploadable_files&quot;:&quot;0&quot;,&quot;redirect_type&quot;:&quot;404&quot;,&quot;id_type_redirected&quot;:&quot;0&quot;,&quot;available_for_order&quot;:&quot;1&quot;,&quot;available_date&quot;:null,&quot;show_condition&quot;:&quot;0&quot;,&quot;condition&quot;:&quot;new&quot;,&quot;show_price&quot;:&quot;1&quot;,&quot;indexed&quot;:&quot;1&quot;,&quot;visibility&quot;:&quot;both&quot;,&quot;cache_default_attribute&quot;:&quot;60&quot;,&quot;advanced_stock_management&quot;:&quot;0&quot;,&quot;date_add&quot;:&quot;2018-07-13 03:39:59&quot;,&quot;date_upd&quot;:&quot;2018-08-29 04:12:04&quot;,&quot;pack_stock_type&quot;:&quot;3&quot;,&quot;meta_description&quot;:&quot;&quot;,&quot;meta_keywords&quot;:&quot;&quot;,&quot;meta_title&quot;:&quot;&quot;,&quot;link_rewrite&quot;:&quot;brown-bear-printed-sweater&quot;,&quot;name&quot;:&quot;Lorem ipsum dolor sit amet ege&quot;,&quot;description&quot;:&quot;<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<\/p>\r\n<h3>Lorem ipsum dolor sit amet<\/h3>\r\n<div class=\&quot;image-des\&quot;><a href=\&quot;#\&quot;><img class=\&quot;img-fluid\&quot; src=\&quot;http:\/\/images.vinovathemes.com\/prestashop_savemart\/image-product-1.jpg\&quot; alt=\&quot;#\&quot; \/><\/a><\/div>\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br \/> Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<\/p>\r\n<div class=\&quot;image-des\&quot;><a href=\&quot;#\&quot;><img class=\&quot;img-fluid\&quot; src=\&quot;http:\/\/images.vinovathemes.com\/prestashop_savemart\/image-product-2.jpg\&quot; alt=\&quot;#\&quot; \/><\/a><\/div>\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br \/> Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br \/> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<\/p>&quot;,&quot;description_short&quot;:&quot;<p>Vestibulum varius, massa sed luctus ornare, enim arcu sollicitudin velit, in ornare ex mauris eleifend nibh. Quisque id rhoncus diam, eget elementum nisl. Nam lectus neque, dignissim sit amet efficitur ut, porta quis turpis. Pellentesque eget rutrum lacus, ut mollis nulla. Donec egestas metus tellus, et scelerisque arcu eleifend non. Nunc sit amet lorem placerat, scelerisque elit sit amet, rhoncus ex. Nulla congue libero sit amet laoreet bibendum. Nunc in magna lectus.<\/p>&quot;,&quot;available_now&quot;:&quot;in stock&quot;,&quot;available_later&quot;:&quot;out stock&quot;,&quot;id&quot;:2,&quot;id_product&quot;:2,&quot;out_of_stock&quot;:2,&quot;new&quot;:1,&quot;id_product_attribute&quot;:76,&quot;quantity_wanted&quot;:1,&quot;extraContent&quot;:[],&quot;allow_oosp&quot;:0,&quot;category&quot;:&quot;smartphone-tablet&quot;,&quot;category_name&quot;:&quot;Smartphone &amp; Tablet&quot;,&quot;link&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/smartphone-tablet\/2-brown-bear-printed-sweater.html&quot;,&quot;attribute_price&quot;:0,&quot;price_tax_exc&quot;:30,&quot;price_without_reduction&quot;:36,&quot;reduction&quot;:0,&quot;specific_prices&quot;:[],&quot;quantity&quot;:100,&quot;quantity_all_versions&quot;:1896,&quot;id_image&quot;:&quot;ar-default&quot;,&quot;features&quot;:[],&quot;attachments&quot;:[],&quot;virtual&quot;:0,&quot;pack&quot;:0,&quot;packItems&quot;:[],&quot;nopackprice&quot;:0,&quot;customization_required&quot;:false,&quot;attributes&quot;:{&quot;1&quot;:{&quot;id_attribute&quot;:&quot;1&quot;,&quot;id_attribute_group&quot;:&quot;1&quot;,&quot;name&quot;:&quot;\u0635&quot;,&quot;group&quot;:&quot;\u0627\u0644\u062d\u062c\u0645&quot;,&quot;reference&quot;:&quot;&quot;,&quot;ean13&quot;:&quot;&quot;,&quot;isbn&quot;:&quot;&quot;,&quot;upc&quot;:&quot;&quot;},&quot;2&quot;:{&quot;id_attribute&quot;:&quot;14&quot;,&quot;id_attribute_group&quot;:&quot;2&quot;,&quot;name&quot;:&quot;\u0627\u0632\u0631\u0642&quot;,&quot;group&quot;:&quot;\u0627\u0644\u0644\u0648\u0646:&quot;,&quot;reference&quot;:&quot;&quot;,&quot;ean13&quot;:&quot;&quot;,&quot;isbn&quot;:&quot;&quot;,&quot;upc&quot;:&quot;&quot;}},&quot;rate&quot;:20,&quot;tax_name&quot;:&quot;VAT UK 20%&quot;,&quot;ecotax_rate&quot;:0,&quot;unit_price&quot;:&quot;&quot;,&quot;customizations&quot;:{&quot;fields&quot;:[]},&quot;id_customization&quot;:0,&quot;is_customizable&quot;:false,&quot;show_quantities&quot;:true,&quot;quantity_label&quot;:&quot;\u0639\u0646\u0627\u0635\u0631&quot;,&quot;quantity_discounts&quot;:[],&quot;customer_group_discount&quot;:0,&quot;images&quot;:[{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-small_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-home_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:&quot;1&quot;,&quot;id_image&quot;:&quot;29&quot;,&quot;position&quot;:&quot;1&quot;,&quot;associatedVariants&quot;:[&quot;60&quot;]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/30-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/30-small_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/30-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/30-home_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/30-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/30-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/30-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/30-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:null,&quot;id_image&quot;:&quot;30&quot;,&quot;position&quot;:&quot;2&quot;,&quot;associatedVariants&quot;:[&quot;60&quot;]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/31-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/31-small_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/31-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/31-home_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/31-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/31-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/31-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/31-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:null,&quot;id_image&quot;:&quot;31&quot;,&quot;position&quot;:&quot;3&quot;,&quot;associatedVariants&quot;:[&quot;60&quot;]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/32-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/32-small_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/32-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/32-home_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/32-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/32-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/32-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/32-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:null,&quot;id_image&quot;:&quot;32&quot;,&quot;position&quot;:&quot;4&quot;,&quot;associatedVariants&quot;:[&quot;60&quot;]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/33-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/33-small_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/33-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/33-home_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/33-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/33-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/33-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/33-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:null,&quot;id_image&quot;:&quot;33&quot;,&quot;position&quot;:&quot;5&quot;,&quot;associatedVariants&quot;:[&quot;60&quot;]}],&quot;cover&quot;:{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;small_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-small_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:150,&quot;height&quot;:150},&quot;medium_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;home_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-home_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;large_default&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600}},&quot;small&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-cart_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:125,&quot;height&quot;:125},&quot;medium&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-medium_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:210,&quot;height&quot;:210},&quot;large&quot;:{&quot;url&quot;:&quot;http:\/\/demo.bestprestashoptheme.com\/savemart\/29-large_default\/brown-bear-printed-sweater.jpg&quot;,&quot;width&quot;:600,&quot;height&quot;:600},&quot;legend&quot;:&quot;&quot;,&quot;cover&quot;:&quot;1&quot;,&quot;id_image&quot;:&quot;29&quot;,&quot;position&quot;:&quot;1&quot;,&quot;associatedVariants&quot;:[&quot;60&quot;]},&quot;has_discount&quot;:false,&quot;discount_type&quot;:null,&quot;discount_percentage&quot;:null,&quot;discount_percentage_absolute&quot;:null,&quot;discount_amount&quot;:null,&quot;discount_amount_to_display&quot;:null,&quot;price_amount&quot;:36,&quot;unit_price_full&quot;:&quot;&quot;,&quot;show_availability&quot;:true,&quot;availability_date&quot;:null,&quot;availability_message&quot;:&quot;in stock&quot;,&quot;availability&quot;:&quot;available&quot;}">

            <div class="product-manufacturer">
                    <a href="http://demo.bestprestashoptheme.com/savemart/ar/1_lorem-ipsum">
              <img src="http://demo.bestprestashoptheme.com/savemart/img/m/1.jpg" class="img img-thumbnail manufacturer-logo">
            </a>
                </div>
                <div class="product-reference">
          <label class="label">المرجع </label>
          <span itemprop="sku">demo-3</span>
        </div>



            <div class="product-quantities">
          <label class="label">المتوفر في المخزن</label>
          <span>100 عناصر</span>
        </div>






      <div class="product-out-of-stock">

      </div>






            <section class="product-features">
          <h3>مراجع محددة</h3>
            <dl class="data-sheet">
                        </dl>
        </section>




  </div>








                                       <script type="text/javascript">
  var novproductcomments_controller_url = 'http://demo.bestprestashoptheme.com/savemart/ar/module/novproductcomments/default';
  var confirm_report_message = 'Are you sure that you want to report this comment?';
  var secure_key = 'c0d88cffbca7857951c1805219eba7c2';
  var novproductcomments_url_rewrite = '1';
  var productcomment_added = 'Your comment has been added!';
  var productcomment_added_moderation = 'Your comment has been submitted and will be available once approved by a moderator.';
  var productcomment_title = 'New comment';
  var productcomment_ok = 'OK';
  var moderation_active = 1;
  </script>

  <div class="tab-pane fade in" id="reviews">
                      <p class="text-center mt-10">
              <a id="new_comment_tab_btn" class="open-comment-form" data-toggle="modal" data-target="#new_comment_form" href="#">Be the first to write your review !</a>
          </p>

  </div>


  <div class="modal fade in" id="new_comment_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title text-xs-center"><i class="fa fa-edit"></i> Write your review</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="material-icons close">close</i>
              </button>
          </div>
          <div class="modal-body">
              <form id="id_new_comment_form" action="#">
                                  <div class="product row no-gutters">
                      <div class="product-image col-4">
                          <img class="img-fluid" src="http://demo.bestprestashoptheme.com/savemart/29-medium_default/brown-bear-printed-sweater.jpg" alt="Lorem ipsum dolor sit amet ege" width="" height="">
                      </div>
                      <div class="product_desc col-8">
                          <p class="product_name">Lorem ipsum dolor sit amet ege</p>
                          <p>Vestibulum varius, massa sed luctus ornare, enim arcu sollicitudin velit, in ornare ex mauris eleifend nibh. Quisque id rhoncus diam, eget elementum nisl. Nam lectus neque, dignissim sit amet efficitur ut, porta quis turpis. Pellentesque eget rutrum lacus, ut mollis nulla. Donec egestas metus tellus, et scelerisque arcu eleifend non. Nunc sit amet lorem placerat, scelerisque elit sit amet, rhoncus ex. Nulla congue libero sit amet laoreet bibendum. Nunc in magna lectus.</p>
                      </div>
                  </div>
                                  <div class="new_comment_form_content">
                      <div id="new_comment_form_error" class="error alert alert-danger">
                          <ul></ul>
                      </div>
                                              <ul id="criterions_list">
                                                      <li>
                                  <label>Quality</label>
                                  <div class="star_content">
                                      <input type="hidden" name="criterion[1]" value="5"><div class="cancel"><a title="Cancel Rating"></a></div><div class="star star_on"><a title="1">1</a></div>
                                      <div class="star star_on"><a title="2">2</a></div>
                                      <div class="star star_on"><a title="3">3</a></div>
                                      <div class="star star_on"><a title="4">4</a></div>
                                      <div class="star star_on"><a title="5">5</a></div>
                                  </div>
                                  <div class="clearfix"></div>
                              </li>
                                                  </ul>
                                          <label for="comment_title">Title for your review<sup class="required">*</sup></label>
                      <input id="comment_title" name="title" type="text" value="">

                      <label for="content">Your review<sup class="required">*</sup></label>
                      <textarea id="content" name="content"></textarea>

                                          <label>Your name<sup class="required">*</sup></label>
                      <input id="commentCustomerName" name="customer_name" type="text" value="">

                      <div id="new_comment_form_footer">
                          <input id="id_product_comment_send" name="id_product" type="hidden" value="2">
                          <div class="fl"><sup class="required">*</sup> Required fields</div>
                          <div class="fr">
                              <button id="submitNewMessage" data-dismiss="modal" aria-label="Close" class="btn btn-primary" name="submitMessage" type="submit">ارسل</button>
                          </div>
                      </div>
                  </div>
              </form><!-- /end new_comment_form_content -->
          </div>
          </div>
      </div>
  </div>


                                        <div class="tab-pane fade in" id="tab-custom">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla congue ultricies. Nam cursus velit in erat rutrum, sed ullamcorper nunc dictum. Sed volutpat, mauris ac pulvinar lobortis, felis ipsum commodo diam, nec vehicula lorem dui eu urna. Proin sodales nisi vitae diam congue, viverra congue metus iaculis. Pellentesque ultricies erat purus, ut commodo sapien imperdiet quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu sagittis nibh, sed scelerisque nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed elit tortor, scelerisque id pellentesque nec, facilisis ut urna. Etiam scelerisque eleifend eros. Donec consectetur aliquam magna ac tristique</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla congue ultricies. Nam cursus velit in erat rutrum, sed ullamcorper nunc dictum. Sed volutpat, mauris ac pulvinar lobortis, felis ipsum commodo diam, nec vehicula lorem dui eu urna. Proin sodales nisi vitae diam congue, viverra congue metus iaculis. Pellentesque ultricies erat purus, ut commodo sapien imperdiet quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu sagittis nibh, sed scelerisque nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed elit tortor, scelerisque id pellentesque nec, facilisis ut urna. Etiam scelerisque eleifend eros. Donec consectetur aliquam magna ac tristique</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla congue ultricies. Nam cursus velit in erat rutrum, sed ullamcorper nunc dictum. Sed volutpat, mauris ac pulvinar lobortis, felis ipsum commodo diam, nec vehicula lorem dui eu urna. Proin sodales nisi vitae diam congue, viverra congue metus iaculis. Pellentesque ultricies erat purus, ut commodo sapien imperdiet quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu sagittis nibh, sed scelerisque nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed elit tortor, scelerisque id pellentesque nec, facilisis ut urna. Etiam scelerisque eleifend eros. Donec consectetur aliquam magna ac tristique</p>
                      </div>
                                    </div>
                </div>
                              <div class="col-lg-3 col-md-5">

  <div class="nov-productlist     productlist-liststyle-3  col-xl-12 col-lg-12 col-md-12 col-xs-12 no-padding">
      <div class="block block-product clearfix">
                      <h2 class="title_block">
                                  Bestseller
              </h2>
                  <div class="block_content">
                              <div id="productlist284460039" class="product_list grid owl-carousel owl-theme multi-row owl-rtl owl-loaded owl-drag" data-autoplay="false" data-autoplaytimeout="6000" data-loop="false" data-margin="0" data-dots="false" data-nav="true" data-items="1" data-items_large="1" data-items_tablet="1" data-items_mobile="1">


                                  <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 540px;"><div class="owl-item active lastActiveItem" style="width: 270px;"><div class="item  text-center">
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="1" data-id-product-attribute="40" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/24-home_default/hummingbird-printed-t-shirt.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/25-home_default/hummingbird-printed-t-shirt.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                  </div>
      <span>5 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
              <i class="fa fa-user"></i>
              David James
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن">Nullam sed sollicitudin mauris</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">{{$product->price}}&nbsp;UK£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="2" data-id-product-attribute="60" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/29-home_default/brown-bear-printed-sweater.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/30-home_default/brown-bear-printed-sweater.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
              <i class="fa fa-user"></i>
              David James
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">Lorem ipsum dolor sit amet ege</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">{{$product->price}}&nbsp;UK£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item" data-id-product="3" data-id-product-attribute="95" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/34-home_default/the-best-is-yet-to-come-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/34-large_default/the-best-is-yet-to-come-framed-poster.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/35-home_default/the-best-is-yet-to-come-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/35-large_default/the-best-is-yet-to-come-framed-poster.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                  </div>
      <span>5 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
              <i class="fa fa-user"></i>
              Taylor Jonson
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Mauris molestie porttitor diam</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">{{$product->price}}&nbsp;UK£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
      </div></div><div class="owl-item" style="width: 270px;"><div class="item  text-center">
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="4" data-id-product-attribute="112" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/39-home_default/the-adventure-begins-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/39-large_default/the-adventure-begins-framed-poster.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/43-home_default/the-adventure-begins-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/43-large_default/the-adventure-begins-framed-poster.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
              <i class="fa fa-user"></i>
              Taylor Jonson
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي">Maecenas vulputate ligula vel</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">18.00&nbsp;UK£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="5" data-id-product-attribute="134" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-134-today-is-a-good-day-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/44-home_default/today-is-a-good-day-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/44-large_default/today-is-a-good-day-framed-poster.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/45-home_default/today-is-a-good-day-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/45-large_default/today-is-a-good-day-framed-poster.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
              <i class="fa fa-user"></i>
              Taylor Jonson
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/5-134-today-is-a-good-day-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Vehicula vel tempus sit amet ulte</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">34.80&nbsp;UK£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item" data-id-product="6" data-id-product-attribute="0" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/49-home_default/nullam-tempor-orci-eu-pretium.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/49-large_default/nullam-tempor-orci-eu-pretium.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/50-home_default/nullam-tempor-orci-eu-pretium.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/50-large_default/nullam-tempor-orci-eu-pretium.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
              <i class="fa fa-user"></i>
              Taylor Jonson
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html">Nullam tempor orci eu pretium</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">14.28&nbsp;UK£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
      </div></div></div></div><div class="owl-nav"><div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div>
                      </div>
      </div>
  </div>

  <div class="nov-productlist     productlist-liststyle-3  col-xl-12 col-lg-12 col-md-12 col-xs-12 no-padding">
      <div class="block block-product clearfix">
                      <h2 class="title_block">
                                  TRENDING NOW
              </h2>
                  <div class="block_content">
                              <div id="productlist266216132" class="product_list grid owl-carousel owl-theme multi-row owl-rtl owl-loaded owl-drag" data-autoplay="false" data-autoplaytimeout="6000" data-loop="false" data-margin="0" data-dots="false" data-nav="true" data-items="1" data-items_large="1" data-items_tablet="1" data-items_mobile="1">


                                  <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 540px;"><div class="owl-item active lastActiveItem" style="width: 270px;"><div class="item  text-center">
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="1" data-id-product-attribute="40" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/24-home_default/hummingbird-printed-t-shirt.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/25-home_default/hummingbird-printed-t-shirt.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                  </div>
      <span>5 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
              <i class="fa fa-user"></i>
              David James
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن">Nullam sed sollicitudin mauris</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">24.00&nbsp;UK£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="2" data-id-product-attribute="60" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/29-home_default/brown-bear-printed-sweater.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/30-home_default/brown-bear-printed-sweater.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
              <i class="fa fa-user"></i>
              David James
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">Lorem ipsum dolor sit amet ege</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">36.00&nbsp;UK£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item" data-id-product="3" data-id-product-attribute="95" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/34-home_default/the-best-is-yet-to-come-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/34-large_default/the-best-is-yet-to-come-framed-poster.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/35-home_default/the-best-is-yet-to-come-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/35-large_default/the-best-is-yet-to-come-framed-poster.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                  </div>
      <span>5 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
              <i class="fa fa-user"></i>
              Taylor Jonson
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/3-95-the-best-is-yet-to-come-framed-poster.html#/1-الحجم-ص/13-اللون_-برتقالي">Mauris molestie porttitor diam</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">30.00&nbsp;UK£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
      </div></div><div class="owl-item" style="width: 270px;"><div class="item  text-center">
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="4" data-id-product-attribute="112" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/39-home_default/the-adventure-begins-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/39-large_default/the-adventure-begins-framed-poster.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/43-home_default/the-adventure-begins-framed-poster.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/43-large_default/the-adventure-begins-framed-poster.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
              <i class="fa fa-user"></i>
              Taylor Jonson
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/4-112-the-adventure-begins-framed-poster.html#/1-الحجم-ص/9-اللون_-ابيض_مطفي">Maecenas vulputate ligula vel</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">18.00&nbsp;UK£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="6" data-id-product-attribute="0" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/49-home_default/nullam-tempor-orci-eu-pretium.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/49-large_default/nullam-tempor-orci-eu-pretium.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/50-home_default/nullam-tempor-orci-eu-pretium.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/50-large_default/nullam-tempor-orci-eu-pretium.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
              <i class="fa fa-user"></i>
              Taylor Jonson
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/6-nullam-tempor-orci-eu-pretium.html">Nullam tempor orci eu pretium</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">14.28&nbsp;UK£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
              <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item" data-id-product="7" data-id-product-attribute="155" itemscope="" itemtype="http://schema.org/Product">
              <div class="col-12 col-w37 no-padding">
                  <div class="thumbnail-container">

                                          <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                          <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/54-home_default/donec-non-lectus-ac-erat-sedei.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/54-large_default/donec-non-lectus-ac-erat-sedei.jpg" width="600" height="600">
                                                                                                                          <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/55-home_default/donec-non-lectus-ac-erat-sedei.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/55-large_default/donec-non-lectus-ac-erat-sedei.jpg" width="600" height="600">
                                              </a>

                                      </div>
              </div>
              <div class="col-12 col-w63 no-padding">
                  <div class="product-description">
                        <div class="product-groups">
                         <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/2_taylor-jonson/">
              <i class="fa fa-user"></i>
              Taylor Jonson
          </a>
      </p>



                         <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/7-155-donec-non-lectus-ac-erat-sedei.html#/1-الحجم-ص/10-اللون_-احمر">Donec non lectus ac erat sedei</a></div>

                        <div class="product-group-price">

                                                        <div class="product-price-and-shipping">



                                <span itemprop="price" class="price">14.28&nbsp;UK£</span>





                              </div>

                        </div>
                        </div>
                                        </div>
              </div>
          </div>
      </div></div></div></div><div class="owl-nav"><div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div>
                      </div>
      </div>
  </div>
  <div class="nov-html col-xl-12 col-lg-12 col-md-12 policy-product no-padding">
      <div class="block">
                  <div class="block_content">
              <div class="policy-row d-flex">
  <div class="icon-policy"><i class="noviconpolicy noviconpolicy-1">1</i></div>
  <div class="policy-content">
  <div class="policy-name">Free Delivery</div>
  <div class="policy-des">From $ 250</div>
  </div>
  </div>
  <div class="policy-row d-flex">
  <div class="icon-policy"><i class="noviconpolicy noviconpolicy-2">2</i></div>
  <div class="policy-content">
  <div class="policy-name">Money Back</div>
  <div class="policy-des">Guarantee</div>
  </div>
  </div>
  <div class="policy-row d-flex">
  <div class="icon-policy"><i class="noviconpolicy noviconpolicy-3">3</i></div>
  <div class="policy-content">
  <div class="policy-name">Authenticity</div>
  <div class="policy-des">100% guaranteed</div>
  </div>
  </div>
          </div>
      </div>
  </div>

                </div>
                            </div>
            </div>
          </div>

          <div class="product-detail-bottom">
            <div class="container">

                                <section class="relate-product product-accessories clearfix">
                    <h3 class="h5 title_block">Related products<span class="sub_title">Hand-picked arrivals from the best designer</span></h3>

                    <div class="products product_list grid owl-carousel owl-theme owl-rtl owl-loaded owl-drag" data-autoplay="true" data-autoplaytimeout="6000" data-loop="true" data-items="5" data-margin="0" data-nav="true" data-dots="false" data-items_mobile="2">
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(2106px, 0px, 0px); transition: all 0.25s ease 0s; width: 3510px;"><div class="owl-item cloned" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="40" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/9-smartphone-tablet">Smartphone &amp; Tablet</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن">Nullam sed sollicitudin mauris</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/24-home_default/hummingbird-printed-t-shirt.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/25-home_default/hummingbird-printed-t-shirt.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">24.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                  </div>
      <span>5 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
              <i class="fa fa-user"></i>
              David James
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="1">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="WishlistCart('wishlist_block_list', 'add', '1', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div>








      <div class="owl-item cloned" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="2" data-id-product-attribute="60" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/9-smartphone-tablet">Smartphone &amp; Tablet</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">Lorem ipsum dolor sit amet ege</a></div>

              </div>

              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/29-home_default/brown-bear-printed-sweater.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/30-home_default/brown-bear-printed-sweater.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">36.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
              <i class="fa fa-user"></i>
              David James
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="2">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_2" href="#" data-rel="2" onclick="WishlistCart('wishlist_block_list', 'add', '2', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item cloned" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="13" data-id-product-attribute="254" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/32-audio">Audio</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر">Proin placerat lacus eget auctor</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/84-home_default/proin-placerat-lacus-eget-auctor.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/84-large_default/proin-placerat-lacus-eget-auctor.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/85-home_default/proin-placerat-lacus-eget-auctor.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/85-large_default/proin-placerat-lacus-eget-auctor.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">12.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
              <i class="fa fa-user"></i>
              David James
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="13">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_13" href="#" data-rel="13" onclick="WishlistCart('wishlist_block_list', 'add', '13', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item cloned" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="17" data-id-product-attribute="328" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/5-camera-photo">Camera &amp; Photo</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-الحجم-ص/10-اللون_-احمر">Nam feugiat tellus nec ultrices</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/104-home_default/nam-feugiat-tellus-nec-ultrices.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/104-large_default/nam-feugiat-tellus-nec-ultrices.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/105-home_default/nam-feugiat-tellus-nec-ultrices.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/105-large_default/nam-feugiat-tellus-nec-ultrices.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">12.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">
              <i class="fa fa-user"></i>
              Harry Makle
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="17">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_17" href="#" data-rel="17" onclick="WishlistCart('wishlist_block_list', 'add', '17', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item cloned" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="19" data-id-product-attribute="383" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/4-home-appliance">Home Appliance</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-الحجم-ص/10-اللون_-احمر">Vivamus non ante quis est rhont</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/115-home_default/vivamus-non-ante-quis-est-rhont.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/115-large_default/vivamus-non-ante-quis-est-rhont.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/116-home_default/vivamus-non-ante-quis-est-rhont.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/116-large_default/vivamus-non-ante-quis-est-rhont.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">12.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">
              <i class="fa fa-user"></i>
              Harry Makle
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="19">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_19" href="#" data-rel="19" onclick="WishlistCart('wishlist_block_list', 'add', '19', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="40" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/9-smartphone-tablet">Smartphone &amp; Tablet</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن">Nullam sed sollicitudin mauris</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/24-home_default/hummingbird-printed-t-shirt.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/25-home_default/hummingbird-printed-t-shirt.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">24.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                  </div>
      <span>5 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
              <i class="fa fa-user"></i>
              David James
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="1">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="WishlistCart('wishlist_block_list', 'add', '1', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="2" data-id-product-attribute="60" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/9-smartphone-tablet">Smartphone &amp; Tablet</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">Lorem ipsum dolor sit amet ege</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/29-home_default/brown-bear-printed-sweater.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/30-home_default/brown-bear-printed-sweater.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">36.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
              <i class="fa fa-user"></i>
              David James
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="2">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_2" href="#" data-rel="2" onclick="WishlistCart('wishlist_block_list', 'add', '2', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="13" data-id-product-attribute="254" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/32-audio">Audio</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر">Proin placerat lacus eget auctor</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/84-home_default/proin-placerat-lacus-eget-auctor.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/84-large_default/proin-placerat-lacus-eget-auctor.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/85-home_default/proin-placerat-lacus-eget-auctor.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/85-large_default/proin-placerat-lacus-eget-auctor.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">12.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
              <i class="fa fa-user"></i>
              David James
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="13">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_13" href="#" data-rel="13" onclick="WishlistCart('wishlist_block_list', 'add', '13', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="17" data-id-product-attribute="328" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/5-camera-photo">Camera &amp; Photo</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-الحجم-ص/10-اللون_-احمر">Nam feugiat tellus nec ultrices</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/104-home_default/nam-feugiat-tellus-nec-ultrices.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/104-large_default/nam-feugiat-tellus-nec-ultrices.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/105-home_default/nam-feugiat-tellus-nec-ultrices.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/105-large_default/nam-feugiat-tellus-nec-ultrices.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">12.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">
              <i class="fa fa-user"></i>
              Harry Makle
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="17">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_17" href="#" data-rel="17" onclick="WishlistCart('wishlist_block_list', 'add', '17', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item active lastActiveItem" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="19" data-id-product-attribute="383" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/4-home-appliance">Home Appliance</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-الحجم-ص/10-اللون_-احمر">Vivamus non ante quis est rhont</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/115-home_default/vivamus-non-ante-quis-est-rhont.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/115-large_default/vivamus-non-ante-quis-est-rhont.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/116-home_default/vivamus-non-ante-quis-est-rhont.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/116-large_default/vivamus-non-ante-quis-est-rhont.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">12.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">
              <i class="fa fa-user"></i>
              Harry Makle
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="19">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_19" href="#" data-rel="19" onclick="WishlistCart('wishlist_block_list', 'add', '19', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item cloned active" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="40" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/9-smartphone-tablet">Smartphone &amp; Tablet</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن">Nullam sed sollicitudin mauris</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/1-40-hummingbird-printed-t-shirt.html#/1-الحجم-ص/6-اللون_-رمادي_داكن" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/24-home_default/hummingbird-printed-t-shirt.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/24-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/25-home_default/hummingbird-printed-t-shirt.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/25-large_default/hummingbird-printed-t-shirt.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">24.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                                  <div class="star star_on"></div>
                  </div>
      <span>5 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
              <i class="fa fa-user"></i>
              David James
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="1">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="WishlistCart('wishlist_block_list', 'add', '1', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item cloned active" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="2" data-id-product-attribute="60" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/9-smartphone-tablet">Smartphone &amp; Tablet</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود">Lorem ipsum dolor sit amet ege</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/29-home_default/brown-bear-printed-sweater.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/30-home_default/brown-bear-printed-sweater.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">36.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
              <i class="fa fa-user"></i>
              David James
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="2">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_2" href="#" data-rel="2" onclick="WishlistCart('wishlist_block_list', 'add', '2', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item cloned active" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="13" data-id-product-attribute="254" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/32-audio">Audio</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر">Proin placerat lacus eget auctor</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/audio/13-254-proin-placerat-lacus-eget-auctor.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/84-home_default/proin-placerat-lacus-eget-auctor.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/84-large_default/proin-placerat-lacus-eget-auctor.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/85-home_default/proin-placerat-lacus-eget-auctor.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/85-large_default/proin-placerat-lacus-eget-auctor.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">12.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
              <i class="fa fa-user"></i>
              David James
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="13">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_13" href="#" data-rel="13" onclick="WishlistCart('wishlist_block_list', 'add', '13', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item cloned active firstActiveItem" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="17" data-id-product-attribute="328" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/5-camera-photo">Camera &amp; Photo</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-الحجم-ص/10-اللون_-احمر">Nam feugiat tellus nec ultrices</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/camera-photo/17-328-nam-feugiat-tellus-nec-ultrices.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/104-home_default/nam-feugiat-tellus-nec-ultrices.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/104-large_default/nam-feugiat-tellus-nec-ultrices.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/105-home_default/nam-feugiat-tellus-nec-ultrices.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/105-large_default/nam-feugiat-tellus-nec-ultrices.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">12.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">
              <i class="fa fa-user"></i>
              Harry Makle
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="17">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_17" href="#" data-rel="17" onclick="WishlistCart('wishlist_block_list', 'add', '17', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div><div class="owl-item cloned" style="width: 234px;"><div class="item  text-center">
              <div class="product-miniature js-product-miniature item-two first_item" data-id-product="19" data-id-product-attribute="383" itemscope="" itemtype="http://schema.org/Product">
              <div class="product-cat-content">

                      <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/4-home-appliance">Home Appliance</a></div>


                      <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-الحجم-ص/10-اللون_-احمر">Vivamus non ante quis est rhont</a></div>

              </div>
              <div class="thumbnail-container">

                                  <a href="http://demo.bestprestashoptheme.com/savemart/ar/home-appliance/19-383-vivamus-non-ante-quis-est-rhont.html#/1-الحجم-ص/10-اللون_-احمر" class="thumbnail product-thumbnail two-image">
                      <img class="img-fluid image-cover" src="http://demo.bestprestashoptheme.com/savemart/115-home_default/vivamus-non-ante-quis-est-rhont.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/115-large_default/vivamus-non-ante-quis-est-rhont.jpg" width="600" height="600">
                                                                                                      <img class="img-fluid image-secondary" src="http://demo.bestprestashoptheme.com/savemart/116-home_default/vivamus-non-ante-quis-est-rhont.jpg" alt="" data-full-size-image-url="http://demo.bestprestashoptheme.com/savemart/116-large_default/vivamus-non-ante-quis-est-rhont.jpg" width="600" height="600">
                                      </a>





                              </div>
              <div class="product-description">
                  <div class="product-groups">
                      <div class="product-group-price">

                                                  <div class="product-price-and-shipping">



                              <span itemprop="price" class="price">12.00&nbsp;UK£</span>





                          </div>

                      </div>
                       <div class="product-comments">
      <div class="star_content">
                          <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                                  <div class="star"></div>
                  </div>
      <span>0 review</span>
  </div>    <p class="seller_name">
          <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/3_harry-makle/">
              <i class="fa fa-user"></i>
              Harry Makle
          </a>
      </p>

                  </div>
                  <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                                  <form action="http://demo.bestprestashoptheme.com/savemart/ar/عربة التسوق" method="post" class="formAddToCart">
                          <input type="hidden" name="token" value="28add935523ef131c8432825597b9928">
                          <input type="hidden" name="id_product" value="19">
                          <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>أضف للسلة</span></a>
                      </form>

  <a class="addToWishlist wishlistProd_19" href="#" data-rel="19" onclick="WishlistCart('wishlist_block_list', 'add', '19', false, 1); return false;">
      <i class="fa fa-heart"></i>
      <span>Add to Wishlist</span>
  </a>
                                          <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                          <i class="fa fa-search"></i><span> نظرة سريعة</span>
                      </a>
                  </div>
              </div>
          </div>
      </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div>
                  </section>





            </div>
          </div>


            <div class="modal fade js-product-images-modal" id="product-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
                  <figure>
            <img class="js-modal-product-cover product-cover-modal" src="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg" alt="" title="" itemprop="image" width="600">
          </figure>
          <aside id="thumbnails" class="thumbnails js-thumbnails text-xs-center">

              <div class="js-modal-mask mask  nomargin ">
                <ul class="product-images js-modal-product-images">
                                    <li class="thumb-container">
                      <img data-image-large-src="http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg" class="thumb js-modal-thumb" src="http://demo.bestprestashoptheme.com/savemart/29-cart_default/brown-bear-printed-sweater.jpg" alt="" title="" itemprop="image" width="125">
                    </li>
                                    <li class="thumb-container">
                      <img data-image-large-src="http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg" class="thumb js-modal-thumb" src="http://demo.bestprestashoptheme.com/savemart/30-cart_default/brown-bear-printed-sweater.jpg" alt="" title="" itemprop="image" width="125">
                    </li>
                                    <li class="thumb-container">
                      <img data-image-large-src="http://demo.bestprestashoptheme.com/savemart/31-large_default/brown-bear-printed-sweater.jpg" class="thumb js-modal-thumb" src="http://demo.bestprestashoptheme.com/savemart/31-cart_default/brown-bear-printed-sweater.jpg" alt="" title="" itemprop="image" width="125">
                    </li>
                                    <li class="thumb-container">
                      <img data-image-large-src="http://demo.bestprestashoptheme.com/savemart/32-large_default/brown-bear-printed-sweater.jpg" class="thumb js-modal-thumb" src="http://demo.bestprestashoptheme.com/savemart/32-cart_default/brown-bear-printed-sweater.jpg" alt="" title="" itemprop="image" width="125">
                    </li>
                                    <li class="thumb-container">
                      <img data-image-large-src="http://demo.bestprestashoptheme.com/savemart/33-large_default/brown-bear-printed-sweater.jpg" class="thumb js-modal-thumb" src="http://demo.bestprestashoptheme.com/savemart/33-cart_default/brown-bear-printed-sweater.jpg" alt="" title="" itemprop="image" width="125">
                    </li>
                                </ul>
              </div>

                    </aside>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- /.modal -->
  <!-- /.modal -->
  <!-- /.modal -->



            <footer class="page-footer">

                <!-- Footer content -->

            </footer>


        </section>


    </div>
  </div>




@endsection
