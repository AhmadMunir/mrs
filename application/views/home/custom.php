<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php $this->load->view('home/partial/head') ?>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper">

        <!-- Start of header area -->
        <?php $this->load->view('home/partial/header') ?>
        <!-- End of header area -->
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start Shop Full Grid View -->
            <div class="product-details-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="single-product-image">
                                <div id="product-img-content">
                                    <div id="my-tab-content" class="tab-content mb-30">
                                        <div class="tab-pane b-img active" id="view1">
                                            <a class="venobox" href="images/product/product-details/1.jpg" data-gall="gallery" title=""><img src="images/product/product-details/1.jpg" alt=""></a>
                                        </div>
                                        <div class="tab-pane b-img" id="view2">
                                            <a class="venobox" href="images/product/product-details/2.jpg" data-gall="gallery" title=""><img src="images/product/product-details/2.jpg" alt=""></a>
                                        </div>
                                        <div class="tab-pane b-img" id="view3">
                                            <a class="venobox" href="images/product/product-details/3.jpg" data-gall="gallery" title=""><img src="images/product/product-details/3.jpg" alt=""></a>
                                        </div>
                                        <div class="tab-pane b-img" id="view4">
                                            <a class="venobox" href="images/product/product-details/4.jpg" data-gall="gallery" title=""><img src="images/product/product-details/4.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div id="viewproduct" class="nav nav-tabs product-view bxslider" data-tabs="tabs">
                                        <div class="pro-view b-img active"><a href="#view1" data-toggle="tab"><img src="images/product/product-details/s-1.jpg" alt=""></a></div>
                                        <div class="pro-view b-img"><a href="#view2" data-toggle="tab"><img src="images/product/product-details/s-2.jpg" alt=""></a></div>
                                        <div class="pro-view b-img"><a href="#view3" data-toggle="tab"><img src="images/product/product-details/s-3.jpg" alt=""></a></div>
                                        <div class="pro-view b-img"><a href="#view4" data-toggle="tab"><img src="images/product/product-details/s-4.jpg" alt=""></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-details-content">
                                <div class="product-content text-uppercase">
                                    <a title="Slim Shirt With Stretch" href="product-details.html">Slim Shirt With Stretch</a>
                                    <div class="rating-icon pb-30 mt-10">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </div>
                                    <div class="product-price pb-30">
                                        <span class="new-price">£ 185.00</span>
                                        <span class="old-price">£ 200.00</span>
                                    </div>
                                </div>
                                <div class="product-view pb-30">
                                    <h4 class="product-details-tilte text-uppercase">overview</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. luptate. </p>
                                </div>
                                <div class="product-size text-uppercase pb-40">
                                    <h4 class="product-details-tilte text-uppercase pb-10">size</h4>
                                    <ul>
                                        <li><a href="#">s</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                        <li><a href="#">xxl</a></li>
                                    </ul>
                                </div>
                                <div class="product-attributes clearfix">
                                    <div class="product-color text-uppercase pb-40">
                                        <h4 class="product-details-tilte text-uppercase pb-10">color</h4>
                                        <ul>
                                            <li class="color-1"><a href="#"></a></li>
                                            <li class="color-2"><a href="#"></a></li>
                                            <li class="color-3"><a href="#"></a></li>
                                            <li class="color-4"><a href="#"></a></li>
                                        </ul>
                                    </div>
                                    <div id="quantity-wanted" class="pull-left">
                                        <h4 class="product-details-tilte text-uppercase pb-10">quantity</h4>
                                        <input type="number" class="cart-plus-minus-box" value="1">
                                    </div>
                                </div>
                                <div class="product-action-shop text-center mb-40">
                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                        <i class="zmdi zmdi-eye"></i>
                                    </a>
                                    <a title="Add to cart" href="#">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </a>
                                    <a title="Add to Wishlist" href="#">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                </div>
                                <div class="socialsharing-product">
                                    <h4 class="product-details-tilte text-uppercase pb-10">share this on</h4>
                                    <button type="button"><i class="zmdi zmdi-facebook"></i></button>
                                    <button type="button"><i class="zmdi zmdi-instagram"></i></button>
                                    <button type="button"><i class="zmdi zmdi-rss"></i></button>
                                    <button type="button"><i class="zmdi zmdi-twitter"></i></button>
                                    <button type="button"><i class="zmdi zmdi-pinterest"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-details-content pt-90">
                                <div class="p-details-tab">
                                    <ul class="nav nav-tabs text-uppercase mb-20" role="tablist">
                                        <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                                        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
                                        <li role="presentation"><a href="#tag" aria-controls="tag" role="tab" data-toggle="tab">Product Tags</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <div class="tab-content review">
                                    <div role="tabpanel" class="tab-pane active" id="description">
                                        <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to and    what we like best, every pleasure is to be welcomed and every pain avoided. But in cetain circumstances and owing to the claims of duty or the obligations of busness it will frequently occur that pleasures have to be repudiatedTemporibus recaae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus to a maiores maiores alias consequatur aut  endis doloriu asperiores repellat.maiores what we like best, every pleasure is to be welcomed and every pain avoided. But in cetain circumstances and owing to the claims.</p>
                                        <p>maiores alias consequatur aut  endis doloriu asperiores repellat.maiores what we like best, every pleasure is to be welcomed and every pain avoided. But in cetain circumstances and owing to the claims of duty or the obligations of busness it will frequently occur that pleasures have to be repudiatedTemporibus recaae. Itaque earum rerum hic tenetur a sapiente delectus.</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="reviews">
                                        <table class="table-data-sheet">
                                            <tbody>
                                                <tr class="odd">
                                                    <td>Compositions</td>
                                                    <td>Cotton</td>
                                                </tr>
                                                <tr class="even">
                                                    <td>Styles</td>
                                                    <td>Casual</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td>Properties</td>
                                                    <td>Short Sleeve</td>
                                                </tr>
                                            </tbody>
                                       </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tag">
                                        <div id="product-comments-block-tab">
                                            <a href="#" class="comment-btn"><span>Be the first to write your review!</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Shop Full Grid View -->
            <!-- Start Related Product Area -->
            <div class="related-product pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="related-product-title text-uppercase mb-40">
                                <h4>related Products</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="single-product">
                                <div class="product-img-content mb-20">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img alt="" src="images/product/1.jpg">
                                        </a>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                            <i class="zmdi zmdi-eye"></i>
                                        </a>
                                        <a title="Add to cart" href="#">
                                            <i class="zmdi zmdi-shopping-cart"></i>
                                        </a>
                                        <a title="Add to Wishlist" href="#">
                                            <i class="zmdi zmdi-favorite"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-center text-uppercase">
                                    <a title="Slim Shirt With Stretch" href="product-details.html">Slim Shirt With Stretch</a>
                                    <div class="rating-icon">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </div>
                                    <div class="product-price">
                                        <span class="new-price">£ 185.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="single-product">
                                <div class="product-img-content mb-20">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img alt="" src="images/product/2.jpg">
                                        </a>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                            <i class="zmdi zmdi-eye"></i>
                                        </a>
                                        <a title="Add to cart" href="#">
                                            <i class="zmdi zmdi-shopping-cart"></i>
                                        </a>
                                        <a title="Add to Wishlist" href="#">
                                            <i class="zmdi zmdi-favorite"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-center text-uppercase">
                                    <a title="Slim Shirt With Stretch" href="product-details.html">Slim Shirt With Stretch</a>
                                    <div class="rating-icon">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </div>
                                    <div class="product-price">
                                        <span class="new-price">£ 185.00</span>
                                        <span class="old-price">£ 200.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="single-product">
                                <div class="product-img-content mb-20">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img alt="" src="images/product/3.jpg">
                                        </a>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                            <i class="zmdi zmdi-eye"></i>
                                        </a>
                                        <a title="Add to cart" href="#">
                                            <i class="zmdi zmdi-shopping-cart"></i>
                                        </a>
                                        <a title="Add to Wishlist" href="#">
                                            <i class="zmdi zmdi-favorite"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-center text-uppercase">
                                    <a title="Slim Shirt With Stretch" href="product-details.html">Slim Shirt With Stretch</a>
                                    <div class="rating-icon">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </div>
                                    <div class="product-price">
                                        <span class="new-price">£ 185.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 hidden-sm">
                            <div class="single-product">
                                <div class="product-img-content mb-20">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img alt="" src="images/product/4.jpg">
                                        </a>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                            <i class="zmdi zmdi-eye"></i>
                                        </a>
                                        <a title="Add to cart" href="#">
                                            <i class="zmdi zmdi-shopping-cart"></i>
                                        </a>
                                        <a title="Add to Wishlist" href="#">
                                            <i class="zmdi zmdi-favorite"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-center text-uppercase">
                                    <a title="Slim Shirt With Stretch" href="product-details.html">Slim Shirt With Stretch</a>
                                    <div class="rating-icon">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </div>
                                    <div class="product-price">
                                        <span class="new-price">£ 185.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Related Product Area -->

            <!-- Start Brand Area -->
            <div class="brand-area pb-90">
                <div class="container">
                    <div class="row">
                        <div class="brand-list">
                            <div class="col-md-12">
                                <div class="single-brand text-center">
                                    <a href="#">
                                        <img src="images/brand/1.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-brand text-center">
                                    <a href="#">
                                        <img src="images/brand/2.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-brand text-center">
                                    <a href="#">
                                        <img src="images/brand/3.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-brand text-center">
                                    <a href="#">
                                        <img src="images/brand/4.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-brand text-center">
                                    <a href="#">
                                        <img src="images/brand/5.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-brand text-center">
                                    <a href="#">
                                        <img src="images/brand/6.png" alt="">
                                    </a>
                                </div>
                            </div>
                             <div class="col-md-12">
                                <div class="single-brand text-center">
                                    <a href="#">
                                        <img src="images/brand/1.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-brand text-center">
                                    <a href="#">
                                        <img src="images/brand/2.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-brand text-center">
                                    <a href="#">
                                        <img src="images/brand/3.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Brand Area -->
            <!-- Start Newsletter Area -->
            <div class="newsletter-area">
                <div class="container">
                    <div class="row">
                        <div class="newsletter-content default-bg clearfix ptb-40">
                            <div class="col-md-offset-2 col-md-3 col-sm-5">
                                <div class="newsletter-title text-white text-uppercase">
                                    <h4>NewsLetter Sign-Up</h4>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-7">
                                <div class="signup-form">
                                    <form class="news-form" action="#">
                                        <input type="text" placeholder="Enter your email address..." class="f-form">
                                        <button class="submit text-uppercase">subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Newsletter Area -->
        </section>
        <!-- End page content -->
        <!-- Start footer area -->
        <footer id="footer" class="footer-area">
            <div class="footer-top-area gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget">
                                <div class="footer-widget-img pb-30">
                                    <a href="#">
                                        <img src="images/logo/logo-2.png" alt="">
                                    </a>
                                </div>
                                <ul class="toggle-footer text-white">
                                    <li class="mb-30 pl-45">
                                        <i class="zmdi zmdi-pin"></i>
                                        <p>House No 08, Road No 08, <br>
                                        Din Bari, Dhaka, Bangladesh</p>
                                    </li>
                                    <li class="mb-30 pl-45">
                                        <i class="zmdi zmdi-email"></i>
                                        <p>Username@gmail.com <br>
                                        Damo@gmail.com</p>
                                    </li>
                                    <li class="pl-45">
                                        <i class="zmdi zmdi-phone"></i>
                                        <p>+660 256 24857<br>
                                        +660 256 24857</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="text-white footer-information">
                                <h4 class="pb-40 m-0 text-uppercase">information</h4>
                                <ul class="footer-menu">
                                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i>Hot Sale</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i>best Seller</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i>Suppliers</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i>Our Store</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i>Deal of The Day</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="text-white footer-account">
                                <h4 class="pb-40 m-0 text-uppercase">MY ACCOUNT</h4>
                                <ul class="footer-menu">
                                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i>My Account</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i>Personal Information</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i>Discount</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i>Orders History</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i>Payment</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="text-white footer-about-us">
                                <h4 class="pb-40 m-0 text-uppercase">about us</h4>
                                <p>Lorem ipsum dolor sit amet, consecteir our adipisicing elit, sed do eiusmod tempor the incididunt ut labore et dolore magnaa liqua. Ut enim minimn.</p>
                                <ul class="footer-social-icon">
                                    <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom black-bg ptb-15">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="copyright text-white">
                                <p>Copyright <i class="fa fa-copyright"></i> 2018 <a href="https://freethemescloud.com/" target="_blank" >Free Themes Cloud.</a> All rights reserved. </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-img">
                                <img src="images/payment.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer area -->
    </div>
    <!-- Body main wrapper end -->


    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>
