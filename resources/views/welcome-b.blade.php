@extends('layouts.plannerApp')

@section('title')
    Home | Wedding Planner Portal
@endsection

@section('ifRequired')
    <div id="preloader">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>
@endsection

@section('content')

    <div class="container">
        <div class="tp-banner-container ver1">
            <div class="tp-banner">
                <ul>    <!-- SLIDE  -->
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="6" data-masterspeed="1000">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('images/banner-home-colec1.jpg') }}" alt="Futurelife-home2-slideshow"
                             data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption lfb customout"
                             data-x="550" data-hoffset="-140"
                             data-y="80" data-voffset="-103"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="1500"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on"
                             style="z-index: 7"><img src="{{asset('images/banner-home-colec1-images.jpg')}}"
                                                     alt="Slide-show-home1">
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption font-cap color-black font-play letter-spacing-5 font-400 lfl customout"
                             data-x="168"
                             data-y="250"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="2500"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="on"
                             style="z-index: 8"><p class="size-50">Labori Osam Rotatume</p>

                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption color-grays  letter-spacing-5 lfl customout size-14 "
                             data-x="172"
                             data-y="320"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="2700"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="on"
                             style="z-index: 9"><span class="size-14 font-os weight-100">UNO LOOKBOOK 2016</span>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption customout lfl"
                             data-x="172"
                             data-y="360"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="2900"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="on"
                             style="z-index: 9"><p class="border"><img src="{{asset('images/slideshow-home1.jpg')}}"
                                                                       alt="images"></p>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption t-transform-n color-5f5f5f font-400 font-pop lfl customout size-14 lh-23"
                             data-x="168"
                             data-y="390"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="3100"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="on"
                             style="z-index: 10"><p class="size-14">The Bottle Humidifier is a culmination of pleasing
                                aesthetics and<br>modern utility. The humidifier can generate enough humidity to
                                sufficiently<br>supply any personal space...whether it be the bedroom</p>
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption lfl customout font-os link-v4"
                             data-x="168"
                             data-y="490"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="3300"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="on"
                             style="z-index: 9"><a class="hover-black link-v5" href="#" title="Full Collection">Full
                                Collection<i class="link-icon-black"></i></a>
                        </div>
                    </li>
                    <!-- SLIDER -->
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="6" data-masterspeed="1000">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('images/banner-home-colec1.jpg')}}" alt="Futurelife-home2-slideshow"
                             data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption lfb customout"
                             data-x="550" data-hoffset="-140"
                             data-y="80" data-voffset="-103"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="1500"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on"
                             style="z-index: 7"><img src="{{ asset('images/banner-home-colec1-images.jpg') }}"
                                                     alt="Slide-show-home1">
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption font-cap color-black font-play letter-spacing-5 font-400 lfl customout"
                             data-x="168"
                             data-y="250"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="2500"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="on"
                             style="z-index: 8"><p class="size-50">Labori Osam Rotatume</p>

                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption color-grays  letter-spacing-5 lfl customout size-14 "
                             data-x="172"
                             data-y="320"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="2700"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="on"
                             style="z-index: 9"><span class="size-14 font-os weight-100">UNO LOOKBOOK 2016</span>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption customout lfl"
                             data-x="172"
                             data-y="360"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="2900"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="on"
                             style="z-index: 9"><p class="border"><img src="{{asset('images/slideshow-home1.jpg')}}"
                                                                       alt="images"></p>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption t-transform-n color-5f5f5f font-400 font-pop lfl customout size-14 lh-23"
                             data-x="168"
                             data-y="390"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="3100"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="on"
                             style="z-index: 10"><p class="size-14">The Bottle Humidifier is a culmination of pleasing
                                aesthetics and<br>modern utility. The humidifier can generate enough humidity to
                                sufficiently<br>supply any personal space...whether it be the bedroom</p>
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption lfl customout font-os link-v4"
                             data-x="168"
                             data-y="490"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="500"
                             data-start="3300"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="on"
                             style="z-index: 9"><a class="hover-black link-v5" href="#" title="Full Collection">Full
                                Collection<i class="link-icon-black"></i></a>
                        </div>
                    </li>
                    <!-- SLIDER -->
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="shipping-container space-30">
            <div class="container">
                <div class="shipping-content">
                    <div class="col-md-4">
                        <i class="icon-heart icons"></i>
                        <h3>INTERNATIONAL DELIVERY FROM £6.99</h3>
                    </div>
                    <!-- End col-md-4 -->
                    <div class="col-md-4">
                        <i class="icon-diamond icons"></i>
                        <h3>CLICK &amp; COLLECT TO 500 STORES</h3>
                    </div>
                    <!-- End col-md-4 -->
                    <div class="col-md-4">
                        <i class="icon-emoticon-smile icons"></i>
                        <h3>10% STUDENT DISCOUNT</h3>
                    </div>
                    <!-- End col-md-4 -->
                </div>
                <!-- End shipping-content -->
            </div>
            <!-- End container -->
        </div>
    </div>

    <div class="related-products space-40">
        <div class="container">
            <div class="col-md-7">
                <div class="products slider-one-item owl-nav-hidden dots-show">
                    <div class="product">
                        <a class="product-images" href="#" title="">
                            <img src="{{asset('images/uno-related-product1.jpg')}}" alt=""/>
                        </a>
                    </div>
                    <!-- End product -->
                    <div class="product">
                        <a class="product-images" href="#" title="">
                            <img src="{{asset('images/uno-related-product1.jpg')}}" alt=""/>
                        </a>
                    </div>
                    <!-- End product -->
                </div>
                <!-- End products -->
            </div>
            <!-- End col-md-7 -->
            <div class="col-md-5">
                <div class="product-details">
                    <div class="title"><h4>Staff pick</h4></div>
                    <h3>Daffodils Tee</h3>
                    <p class="category">womens</p>
                    <p class="price">$99.00</p>
                    <p class="product-content">Seamlessly restore robust partnerships and frictionless materials. Interactively implement user friendly services through world-class architectures. Professionally reintermediate market-driven bandwidth rather than cross functional technology. Seamlessly seize progressive e-tailers after...</p>
                    <a href="#" title="view details" class="hover-black">View details<i class="link-icon-black"></i></a>
                </div>
                <!-- End product content -->
                <div class="slider-text">
                    <h3>Related product</h3>
                </div>
                <div class="slider-product">
                    <div class="products slider-two-item">
                        <div class="product">
                            <a class="product-images" href="#" title="">
                                <img src="{{asset('images/uno-related-product-slider1.jpg')}}" alt=""/>
                            </a>
                        </div>
                        <!-- End product -->
                        <div class="product">
                            <a class="product-images" href="#" title="">
                                <img src="{{asset('images/uno-related-product-slider1.jpg')}}" alt=""/>
                            </a>
                        </div>
                        <!-- End product -->
                        <div class="product">
                            <a class="product-images" href="#" title="">
                                <img src="{{asset('images/uno-related-product-slider1.jpg')}}" alt=""/>
                            </a>
                        </div>
                        <!-- End product -->
                    </div>
                </div>
            </div>
            <!-- End col-md-5 -->
        </div>
        <!-- End container -->
    </div>
    <!-- End related-products -->
    <div class="title-text">
        <h3>FEATURED PRODUCTS</h3>
    </div>
    <div class="featured-product space-80">
        <div class="container">
            <div class="col-md-5">
                <div class="products">
                    <div class="product">
                        <div class="product-images">
                            <a href="#" title="product-images">
                                <img class="primary_image" src="{{asset('images/products/1.jpg')}}" alt=""/>
                                <img class="secondary_image" src="{{asset('images/products/1.jpg')}}" alt=""/>
                            </a>
                            <div class="action">
                                <a class="chart" href="#" title="Compare" ><i class="icon icon-bar-chart"></i></a>
                                <a class="zoom" href="#" title="Quick view" ><i class="icon icon-magnifier-add "></i></a>
                                <a class="wish" href="#" title="Wishlist" ><i class="icon icon-heart"></i></a>
                                <a class="add-cart" href="#" title="Add to cart" ><i class="icon-bag"></i></a>
                            </div>
                        </div>
                        <a href="#" title="Bouble Fabric Blazer"><p class="product-title">Bouble Fabric Blazer</p></a>
                        <p class="product-price">$69.90</p>

                    </div>
                    <!-- End product -->
                    <div class="product">
                        <div class="product-images">
                            <a href="#" title="product-images">
                                <img class="primary_image" src="{{asset('images/products/1.jpg')}}" alt=""/>
                                <img class="secondary_image" src="{{asset('images/products/1.jpg')}}" alt=""/>
                            </a>
                            <div class="action">
                                <a class="chart" href="#" title="Compare" ><i class="icon icon-bar-chart"></i></a>
                                <a class="zoom" href="#" title="Quick view" ><i class="icon icon-magnifier-add "></i></a>
                                <a class="wish" href="#" title="Wishlist" ><i class="icon icon-heart"></i></a>
                                <a class="add-cart" href="#" title="Add to cart" ><i class="icon-bag"></i></a>
                            </div>
                        </div>
                        <a href="#" title="Bouble Fabric Blazer"><p class="product-title">Bouble Fabric Blazer</p></a>
                        <p class="product-price">$69.90</p>
                    </div>
                    <!-- End product -->
                    <div class="product">
                        <div class="product-images">
                            <a href="#" title="product-images">
                                <img class="primary_image" src="{{asset('images/products/1.jpg')}}" alt=""/>
                                <img class="secondary_image" src="{{asset('images/products/1.jpg')}}" alt=""/>
                            </a>
                            <div class="action">
                                <a class="chart" href="#" title="Compare" ><i class="icon icon-bar-chart"></i></a>
                                <a class="zoom" href="#" title="Quick view" ><i class="icon icon-magnifier-add "></i></a>
                                <a class="wish" href="#" title="Wishlist" ><i class="icon icon-heart"></i></a>
                                <a class="add-cart" href="#" title="Add to cart" ><i class="icon-bag"></i></a>
                            </div>
                        </div>
                        <a href="#" title="Bouble Fabric Blazer"><p class="product-title">Bouble Fabric Blazer</p></a>
                        <p class="product-price">$69.90</p>

                    </div>
                    <!-- End product -->
                    <div class="product">
                        <div class="product-images">
                            <a href="#" title="product-images">
                                <img class="primary_image" src="{{asset('images/products/1.jpg')}}" alt=""/>
                                <img class="secondary_image" src="{{asset('images/products/1.jpg')}}" alt=""/>
                            </a>
                            <div class="action">
                                <a class="chart" href="#" title="Compare" ><i class="icon icon-bar-chart"></i></a>
                                <a class="zoom" href="#" title="Quick view" ><i class="icon icon-magnifier-add "></i></a>
                                <a class="wish" href="#" title="Wishlist" ><i class="icon icon-heart"></i></a>
                                <a class="add-cart" href="#" title="Add to cart" ><i class="icon-bag"></i></a>
                            </div>
                        </div>
                        <a href="#" title="Bouble Fabric Blazer"><p class="product-title">Bouble Fabric Blazer</p></a>
                        <p class="product-price">$69.90</p>

                    </div>
                    <!-- End product -->
                </div>
                <!-- End products -->
            </div>
            <!-- End col-md-5 -->
            <div class="col-md-7">
                <div class="products slider-one-item owl-nav-hidden dots-show">
                    <div class="product">
                        <a class="product-images" href="#" title="">
                            <img src="assets/images/uno-featured-product1.jpg" alt=""/>
                        </a>
                        <a href="#" title="Kinflok Magazine"><p class="product-title">Kinflok Magazine</p></a>
                        <p class="cat">ACCESSORIES</p>
                        <p class="product-price">$89.90</p>
                    </div>
                    <!-- End product -->
                    <div class="product">
                        <a class="product-images" href="#" title="">
                            <img src="assets/images/uno-featured-product1.jpg" alt=""/>
                        </a>
                        <a href="#" title="Kinflok Magazine"><p class="product-title">Kinflok Magazine</p></a>
                        <p class="cat">ACCESSORIES</p>
                        <p class="product-price">$89.90</p>
                    </div>
                    <!-- End product -->
                </div>
                <!-- End products -->
            </div>
        </div>
        <!-- End container -->
    </div>
    <!-- End featured-product -->
    <div class="newsletter">
        <div class="container">
            <div class="col-md-5">
                <div class="col-md-6">
                    <div class="border-free-shipping">
                        <h3>Free shipping</h3>
                        <h3>on all orders of $25</h3>
                        <a class="hover-black" href="#" title="read-more">Read more<i class="link-icon-gray"></i></a>
                    </div>
                    <!-- End free shipping -->
                </div>
                <div class="col-md-6">
                    <i class="icon icon-rocket"></i>
                </div>
            </div>
            <!-- End col-md-5 -->
            <div class="col-md-7">
                <div class="newsletter-content">
                    <i class="icon icon-envelope-letter"></i>
                    <h3>Sign up for newsletter</h3>
                    <p>to receive updates</p>
                    <form action="#" method="get" accept-charset="utf-8">
                        <input type="text" onblur="if (this.value == '') {this.value = 'Enter your email here...';}" onfocus="if(this.value != '') {this.value = '';}" value="Enter your email here..." class="input-text required-entry validate-email" title="Sign up for our newsletter" id="newsletter" name="email">
                        <button class="button button1 hover-black" title="Subscribe" type="submit">Subscribe<i class="link-icon-black"></i></button>
                    </form>
                </div>
                <!-- End newsletter-content -->
            </div>
            <!-- End col-md-7 -->
        </div>
        <!-- End container -->
    </div>
    <!-- End newsletter -->
    <div class="banner-home2 space-40">
        <div class="container">
            <div class="col-md-7">
                <a class="hover-images" href="#" title="Banner">
                    <img src="assets/images/uno-banner-home1.jpg" alt="Banner">
                </a>
            </div>
            <!-- End col-md-7 -->
            <div class="col-md-5">
                <a class="hover-images" href="#" title="Banner">
                    <img src="assets/images/uno-banner-home2.jpg" alt="Banner">
                </a>
                <div class="hover-effect-border">
                    <img src="assets/images/uno-banner-home2.jpg" alt="Banner">
                    <div class="text">
                        <h4>SPRING 2016 COLLECTION</h4>
                        <h3>Vestibu & Inceptos</h3>
                        <p>Seamlessly restore robust partnerships and frictionless materials nteractively</p>
                        <button class="button button1 hover-white">Take me there <i class="link-icon-white"></i></button>
                    </div>
                    <!-- End text -->
                </div>
            </div>
            <!-- End col-md-5 -->
        </div>
        <!-- End container -->
    </div>
    <!-- End banner home 2 -->

    <!-- Begin From our blog -->
    <div class="container">
        <div class="title-text">
            <h3>FROM OUR BLOG</h3>
        </div>
        <!-- End title text -->
        <div class="blog-post-container owl-nav-hidden blog-slider space-50">
            <div class="blog-post-inner">
                <div class="blog-post-item">
                    <div class="blog-post-image hover-images">
                        <a href="#" title="Post"><img src="assets/images/ImgBlog/1.jpg" alt=""></a>
                    </div>
                    <div class="blog-post-content">
                        <a class="cat" href="#" title="Fashion">Fashion</a>
                        <a class="blog-title" href="#" title="Distinctively reinvent equity">Distinctively reinvent equity </a>
                        <p class="comment">2 comment</p>
                    </div>
                </div>
                <!-- End blog-item -->
                <div class="blog-post-item">
                    <div class="blog-post-image hover-images">
                        <a href="#" title="Post"><img src="assets/images/ImgBlog/1.jpg" alt=""></a>
                    </div>
                    <div class="blog-post-content">
                        <a class="cat" href="#" title="life style">LIFE STYLE</a>
                        <a class="blog-title" href="#" title="Distinctively reinvent equity ">Distinctively reinvent equity </a>
                        <p class="comment">2 comment</p>
                    </div>
                </div>
                <!-- End blog-item -->
                <div class="blog-post-item">
                    <div class="blog-post-image hover-images">
                        <a href="#" title="Post"><img src="assets/images/ImgBlog/1.jpg" alt=""></a>
                    </div>
                    <div class="blog-post-content">
                        <a class="cat" href="#" title="lookbook">LOOKBOOK</a>
                        <a class="blog-title" href="#" title="Distinctively reinvent equity ">Distinctively reinvent equity </a>
                        <p class="comment">2 comment</p>
                    </div>
                </div>
                <!-- End blog-item -->
            </div>
            <!-- End Blog-Post-Inner -->
        </div>
        <!-- End blog post -->
    </div>
    <!-- From our Blog -->

@endsection

