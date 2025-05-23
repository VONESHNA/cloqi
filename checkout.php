<?php
require_once 'header.php';
require_once 'topbar.php';

if(isset($_SESSION['customer']))
{
  $customer=$_SESSION['userid'];
$data=['con'=>$con, 'customer'=>$customer];


  $cartnf=Dbops::getCartBycustomer($data);
  $cartnf['n']>0?$cart=$cartnf['f']:$cart=[];
  $items=$cartnf['n'];

}else{

 // echo "<script>window.location='./offline.jpg'</script>";
}


$pds=Dbops::getProduct($con);
$pds['n']>0?$products=$pds['f']:$products=[];
$latestproduct=$products[0]['id'];

?> 
    <!--Header-->
    <div class="header-wrap animated d-flex">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="./index">
                    	<img src="<?php echo $logoWhite;//echo $logoBlack;?>" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                	<div class="d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                	<!--Desktop Menu-->
                	<nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                        <ul id="siteNav" class="site-nav medium center hidearrow">
                            <li class="lvl1 parent megamenu"><a href="./index" style="color: rgb(249, 250, 252);">Home <i class="anm anm-angle-down-l"></i></a>
                            </li>
                        <li class="lvl1 parent megamenu"><a href="./product_category" style="color: rgb(249, 250, 252);">Product <i class="anm anm-angle-down-l"></i></a>
                        </li>
                        <li class="lvl1"><a href="./product?product=<?php echo $latestproduct;?>" style="color: rgb(249, 250, 252);"><b>Buy Now!</b> <i class="anm anm-angle-down-l"></i></a></li>
                      </ul>
                    </nav>
                    <!--End Desktop Menu-->
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="./index">
                            <img src="./VID-20250112-WA0055_026.jpg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                	<div class="site-cart">
                    	<a href="./cartlist" class="site-header__cart" title="Cart">
                        	<i class="icon anm anm-bag-l"></i>
                            <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count"><?php if(isset($items)){ echo $items;} ?></span>
                        </a>
                        <!--Minicart Popup-->
                        <?php include_once './minicartpopup.php';?>

                        <!--End Minicart Popup-->
                    </div>
                    <div class="site-header__search">
                    	<button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                    </div>
                </div>
        	</div>
        </div>
    </div>
    <!--End Header-->
    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
		<div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
        	<li class="lvl1 parent megamenu"><a href="./index">Home <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="#" class="site-nav">Home Group 1<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="./index" class="site-nav">Home 1 - Classic</a></li>
                <li><a href="home2-default.html" class="site-nav">Home 2 - Default</a></li>
                <li><a href="home15-funiture.html" class="site-nav">Home 15 - Furniture </a></li>
                <li><a href="home3-boxed.html" class="site-nav">Home 3 - Boxed</a></li>
                <li><a href="home4-fullwidth.html" class="site-nav">Home 4 - Fullwidth</a></li>
                <li><a href="home5-cosmetic.html" class="site-nav">Home 5 - Cosmetic</a></li>
                <li><a href="home6-modern.html" class="site-nav">Home 6 - Modern</a></li>
                <li><a href="home7-shoes.html" class="site-nav last">Home 7 - Shoes</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Home Group 2<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="home8-jewellery.html" class="site-nav">Home 8 - Jewellery</a></li>
                <li><a href="home9-parallax.html" class="site-nav">Home 9 - Parallax</a></li>
                <li><a href="home10-minimal.html" class="site-nav">Home 10 - Minimal</a></li>
                <li><a href="home11-grid.html" class="site-nav">Home 11 - Grid</a></li>
                <li><a href="home12-category.html" class="site-nav">Home 12 - Category</a></li>
                <li><a href="home13-auto-parts.html" class="site-nav">Home 13 - Auto Parts</a></li>
                <li><a href="home14-bags.html" class="site-nav last">Home 14 - Bags</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">New Sections<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="home11-grid.html" class="site-nav">Image Gallery</a></li>
                <li><a href="home5-cosmetic.html" class="site-nav">Featured Product</a></li>
                <li><a href="home7-shoes.html" class="site-nav">Columns with Items</a></li>
                <li><a href="home6-modern.html" class="site-nav">Text columns with images</a></li>
                <li><a href="home2-default.html" class="site-nav">Products Carousel</a></li>
                <li><a href="home9-parallax.html" class="site-nav last">Parallax Banner</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">New Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="home13-auto-parts.html" class="site-nav">Top Information Bar </a></li>
                <li><a href="#" class="site-nav">Age Varification </a></li>
                <li><a href="#" class="site-nav">Footer Blocks</a></li>
                <li><a href="#" class="site-nav">2 New Megamenu style</a></li>
                <li><a href="#" class="site-nav">Show Total Savings </a></li>
                <li><a href="#" class="site-nav">New Custom Icons</a></li>
                <li><a href="#" class="site-nav last">Auto Currency</a></li>
              </ul>
            </li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="#">Shop <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="#" class="site-nav">Shop Pages<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="shop-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                <li><a href="shop-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                <li><a href="shop-fullwidth.html" class="site-nav">Fullwidth</a></li>
                <li><a href="shop-grid-3.html" class="site-nav">3 items per row</a></li>
                <li><a href="shop-grid-4.html" class="site-nav">4 items per row</a></li>
                <li><a href="shop-grid-5.html" class="site-nav">5 items per row</a></li>
                <li><a href="shop-grid-6.html" class="site-nav">6 items per row</a></li>
                <li><a href="shop-grid-7.html" class="site-nav">7 items per row</a></li>
                <li><a href="shop-listview.html" class="site-nav last">Product Listview</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Shop Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="shop-left-sidebar.html" class="site-nav">Product Countdown </a></li>
                <li><a href="shop-right-sidebar.html" class="site-nav">Infinite Scrolling</a></li>

                <li><a href="shop-grid-3.html" class="site-nav">Pagination - Classic</a></li>
                <li><a href="shop-grid-6.html" class="site-nav">Pagination - Load More</a></li>
                <li><a href="product-labels.html" class="site-nav">Dynamic Product Labels</a></li>
                <li><a href="product-swatches-style.html" class="site-nav">Product Swatches </a></li>
                <li><a href="product-hover-info.html" class="site-nav">Product Hover Info</a></li>
                <li><a href="shop-grid-3.html" class="site-nav">Product Reviews</a></li>
                <li><a href="shop-left-sidebar.html" class="site-nav last">Discount Label </a></li>
              </ul>
            </li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="product-layout-1.html">Product <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="product-layout-1.html" class="site-nav">Product Page<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="product-layout-1.html" class="site-nav">Product Layout 1</a></li>
                <li><a href="product-layout-2.html" class="site-nav">Product Layout 2</a></li>
                <li><a href="product-layout-3.html" class="site-nav">Product Layout 3</a></li>
                <li><a href="product-with-left-thumbs.html" class="site-nav">Product With Left Thumbs</a></li>
                <li><a href="product-with-right-thumbs.html" class="site-nav">Product With Right Thumbs</a></li>
                <li><a href="product-with-bottom-thumbs.html" class="site-nav last">Product With Bottom Thumbs</a></li>
              </ul>
            </li>
            <li><a href="short-description.html" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="short-description.html" class="site-nav">Short Description</a></li>
                <li><a href="product-countdown.html" class="site-nav">Product Countdown</a></li>
                <li><a href="product-video.html" class="site-nav">Product Video</a></li>
                <li><a href="product-quantity-message.html" class="site-nav">Product Quantity Message</a></li>
                <li><a href="product-visitor-sold-count.html" class="site-nav">Product Visitor/Sold Count </a></li>
                <li><a href="product-zoom-lightbox.html" class="site-nav last">Product Zoom/Lightbox </a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="product-with-variant-image.html" class="site-nav">Product with Variant Image</a></li>
                <li><a href="product-with-color-swatch.html" class="site-nav">Product with Color Swatch</a></li>
                <li><a href="product-with-image-swatch.html" class="site-nav">Product with Image Swatch</a></li>
                <li><a href="product-with-dropdown.html" class="site-nav">Product with Dropdown</a></li>
                <li><a href="product-with-rounded-square.html" class="site-nav">Product with Rounded Square</a></li>
                <li><a href="swatches-style.html" class="site-nav last">Product Swatches All Style</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="product-accordion.html" class="site-nav">Product Accordion</a></li>
                <li><a href="product-pre-orders.html" class="site-nav">Product Pre-orders </a></li>
                <li><a href="product-labels-detail.html" class="site-nav">Product Labels</a></li>
                <li><a href="product-discount.html" class="site-nav">Product Discount In %</a></li>
                <li><a href="product-shipping-message.html" class="site-nav">Product Shipping Message</a></li>
                <li><a href="product-shipping-message.html" class="site-nav last">Size Guide </a></li>
              </ul>
            </li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="about-us.html">Pages <i class="anm anm-plus-l"></i></a>
          <ul>
          	<li><a href="cart-variant1.html" class="site-nav">Cart Page <i class="anm anm-plus-l"></i></a>
                <ul class="dropdown">
                    <li><a href="cart-variant1.html" class="site-nav">Cart Variant1</a></li>
                    <li><a href="cart-variant2.html" class="site-nav">Cart Variant2</a></li>
                 </ul>
            </li>
            <li><a href="compare-variant1.html" class="site-nav">Compare Product <i class="anm anm-plus-l"></i></a>
                <ul class="dropdown">
                    <li><a href="compare-variant1.html" class="site-nav">Compare Variant1</a></li>
                    <li><a href="compare-variant2.html" class="site-nav">Compare Variant2</a></li>
                 </ul>
            </li>
			<li><a href="checkout.html" class="site-nav">Checkout</a></li>
            <li><a href="about-us.html" class="site-nav">About Us<span class="lbl nm_label1">New</span></a></li>
            <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
            <li><a href="faqs.html" class="site-nav">FAQs</a></li>
            <li><a href="lookbook1.html" class="site-nav">Lookbook<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="lookbook1.html" class="site-nav">Style 1</a></li>
                <li><a href="lookbook2.html" class="site-nav last">Style 2</a></li>
              </ul>
            </li>
            <li><a href="404.html" class="site-nav">404</a></li>
            <li><a href="coming-soon.html" class="site-nav">Coming soon<span class="lbl nm_label1">New</span></a></li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">Blog <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
            <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
            <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
            <li><a href="blog-grid-view.html" class="site-nav">Gridview</a></li>
            <li><a href="blog-article.html" class="site-nav">Article</a></li>
          </ul>
        </li>
        	<li class="lvl1"><a href="#"><b>Buy Now!</b></a>
        </li>
      </ul>
	</div>
	<!--End Mobile Menu-->
    
    <!--Body Content-->
    <div id="page-content" style="background-color: black;">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title" style="background-color: black;">
        		<div class="wrapper"><h1 class="page-width" style="color: rgb(242, 243, 245);">Checkout</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="customer-box returning-customer">
                        <h3><i class="icon anm anm-user-al"></i> Returning customer? <a href="./login" id="customer" class="text-white text-decoration-underline" data-toggle="collapse" onclick="window.location='./login'">Click here to login</a></h3>
                        <div id="customer-login" class="collapse customer-content">
                            <div class="customer-info">
                                <p class="coupon-text">If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                <form >
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputEmail1">Email address <span class="required-f">*</span></label>
                                            <input type="email" class="no-margin" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputPassword1">Password <span class="required-f">*</span></label>
                                            <input type="password" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-check width-100 margin-20px-bottom">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value=""> Remember me!
                                                </label>
                                                <a href="#" class="float-right">Forgot your password?</a>
                                            </div>
                                            <button type="submit" name="orderplaced" class="btn btn-primary mt-3">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="customer-box customer-coupon">
                        <!-- <h3 class="font-15 xs-font-13"><i class="icon anm anm-gift-l"></i> Have a coupon? <a href="#have-coupon" class="text-white text-decoration-underline" data-toggle="collapse">Click here to enter your code</a></h3> -->
                        <div id="have-coupon" class="collapse coupon-checkout-content">
                            <div class="discount-coupon">
                                <div id="coupon" class="coupon-dec tab-pane active">
                                    <p class="margin-10px-bottom">Enter your coupon code if you have one.</p>
                                    <label class="required get" for="coupon-code"><span class="required-f">*</span> Coupon</label>
                                    <input id="coupon-code" required="" type="text" class="mb-3">
                                    <button class="coupon-btn btn" type="submit">Apply Coupon</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <form method="post" action="./order/orderplaced">

            <div class="row billing-fields">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
                    <div class="create-ac-content bg-light-gray padding-20px-all">
                         <form method="post" action="./order/saveorder">
                            <fieldset>
                                <h2 class="login-title mb-3" style="color: rgb(248, 250, 252);">Billing details</h2>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-firstname" style="color: rgb(248, 250, 252);">First Name <span class="required-f">*</span></label>
                                        <input name="firstname" value="" id="input-firstname" type="text">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-lastname" style="color: rgb(248, 250, 252);">Last Name <span class="required-f">*</span></label>
                                        <input name="lastname" value="" id="input-lastname" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-email" style="color: rgb(248, 250, 252);">E-Mail <span class="required-f">*</span></label>
                                        <input name="email" value="" id="input-email" type="email">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-telephone" style="color: rgb(248, 250, 252);">Contact No. <span class="required-f">*</span></label>
                                        <input name="contact" value="" id="input-telephone" type="tel" required>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                        <label for="input-company" style="color: rgb(248, 250, 252);">Landmark</label>
                                        <input name="landmark" value="" id="input-company" type="text" required>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-address-1" style="color: rgb(248, 250, 252);">Address <span class="required-f">*</span></label>
                                        <input name="address" value="" id="input-address-1" type="text" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-city" style="color: rgb(248, 250, 252);">City <span class="required-f">*</span></label>
                                        <input name="city" value="" id="input-city" type="text" required>
                                    </div>
                                     <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-postcode" style="color: rgb(248, 250, 252);">Pin Code <span class="required-f">*</span></label>
                                        <input name="pincode" value="" id="input-postcode" type="text" required>
                                    </div>
                                </div> 
                                <!-- <div class="row">
                                   
                                    -->
                                   <!--  <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-country" style="color: rgb(248, 250, 252);">Country <span class="required-f">*</span></label>
                                        <select name="country_id" id="input-country">
                                            <option value="" style="color: rgb(248, 250, 252);"> --- Please Select --- </option>
                                            <option value="244 " style="color: rgb(248, 250, 252);">Aaland Islands</option>
                                            <option value="1" style="color: rgb(248, 250, 252);">Afghanistan</option>
                                            <option value="2" style="color: rgb(248, 250, 252);">Albania</option>
                                            <option value="3" style="color: rgb(248, 250, 252);">Algeria</option>
                                            <option value="4" style="color: rgb(248, 250, 252);">American Samoa</option>
                                            <option value="5" style="color: rgb(248, 250, 252);">Andorra</option>
                                            <option value="6" style="color: rgb(248, 250, 252);">Angola</option>
                                        </select>
                                    </div> -->
                                <!-- </div> -->
                                <div class="row">
                                    <!-- <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-zone" style="color: rgb(248, 250, 252);">Region / State <span class="required-f">*</span></label>
                                        <select name="zone_id" id="input-zone">
                                            <option value="" style="color: rgb(248, 250, 252);"> --- Please Select --- </option>
                                            <option value="3513" style="color: rgb(248, 250, 252);">Aberdeen</option>
                                            <option value="3514" style="color: rgb(248, 250, 252);">Aberdeenshire</option>
                                            <option value="3515" style="color: rgb(248, 250, 252);">Anglesey</option>
                                            <option value="3516" style="color: rgb(248, 250, 252);">Angus</option>
                                        </select>
                                    </div> -->
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="form-group form-check col-md-12 col-lg-12 col-xl-12">
                                        <!-- <label class="form-check-label padding-15px-left">
                                            <input type="checkbox" class="form-check-input" value=""><strong style="color: rgb(248, 250, 252);">Create an account ?</strong>
                                        </label> -->
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                              <!--   <div class="row">
                                    <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                        <label for="input-company"style="color: rgb(248, 250, 252);">Order Notes <span class="required-f">*</span></label>
                                        <textarea class="form-control resize-both" name=""rows="3"></textarea>
                                    </div>
                                </div> -->
                            </fieldset>
                        </form>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="background-color: black;">
                    <div class="your-order-payment">
                        <div class="your-order">
                            <h2 class="order-title mb-4" style="color: rgb(248, 250, 252);">Your Order</h2>

                            <div class="table-responsive-sm order-table" style="background-color: black;"> 
                                <table class="bg-white table table-bordered table-hover text-center" style="background-color: black;">
                                    <thead style="background-color: black;">
                                        <tr style="background-color: black;">
                                            <th class="text-left" style="color: rgb(248, 250, 252); background-color: black; " >Product Name</th>
                                            <th style="color: rgb(248, 250, 252); background-color: black;">Price</th>
                                            <th style="color: rgb(248, 250, 252); background-color: black;"> Size</th>
                                            <th style="color: rgb(248, 250, 252); background-color: black;">Qty</th>
                                            <th style="color: rgb(248, 250, 252); background-color: black;">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                          $i=0;
                          $subtotal=0;
                          if(isset($cart)){
foreach($cart as $K=>$v){
  $cartid=$v['id'];
  $productName=$v['productname'];
  $size=$v['size'];
  $sellingprice=$v['sellingprice'];
  $quantity=$v['quantity'];
  !empty($v['img1'])?$img=customerproduct.$v['img1']:'';
  !empty($v['img2'])?$img=customerproduct.$v['img2']:'';
  !empty($v['img3'])?$img=customerproduct.$v['img3']:'';
  !empty($v['img4'])?$img=customerproduct.$v['img4']:'';
  !empty($v['img5'])?$img=customerproduct.$v['img5']:'';
  !empty($v['img6'])?$img=customerproduct.$v['img6']:'';
 $total=$quantity*$sellingprice;
 $subtotal+=$total;
 $shipping=0;
 $grandtotal=$shipping+$subtotal;
                          ?>
                                        <tr>
                                            <td class="text-left" style="color: rgb(248, 250, 252); background-color: black;"><?php echo $productName;?></td>
                                            <td style="color: rgb(248, 250, 252); background-color: black;" >&#8377;<?php echo $sellingprice;?></td>
                                            <td style="color: rgb(248, 250, 252); background-color: black;">                                            <!--Color: Navy<br>--><?php echo ucwords($size);?><br>
</td>
                                            <td style="color: rgb(248, 250, 252); background-color: black;">1</td>
                                            <td style="color: rgb(248, 250, 252); background-color: black;">&#8377;<?php echo $total;?></td>
                                        </tr>
                                          <?php } }?>
                                      <!--   <tr>
                                            <td class="text-left" style="color: rgb(248, 250, 252); background-color: black;">Argon Sweater</td>
                                            <td style="color: rgb(248, 250, 252); background-color: black;">$199</td>
                                            <td style="color: rgb(248, 250, 252); background-color: black;">M</td>
                                            <td style="color: rgb(248, 250, 252); background-color: black;">2</td>
                                            <td style="color: rgb(248, 250, 252); background-color: black;">$298</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left" style="color: rgb(248, 250, 252); background-color: black;">Babydoll Bow Dress</td>
                                            <td style="color: rgb(248, 250, 252); background-color: black;">$299</td>
                                            <td style="color: rgb(248, 250, 252); background-color: black;">XL</td>
                                            <td style="color: rgb(248, 250, 252); background-color: black;">3</td>
                                            <td style="color: rgb(248, 250, 252); background-color: black;">$398</td>
                                        </tr> -->

                                    </tbody>
                                    <tfoot class="font-weight-600">
                                       <!--  <tr>
                                            <td colspan="4" class="text-right" style="color: rgb(248, 250, 252); background-color: black;">Shipping </td>
                                            <td style="color: rgb(248, 250, 252); background-color: black;">$50.00</td>
                                        </tr> -->
                                        <tr>
                                            <td colspan="4" class="text-right" style="color: rgb(248, 250, 252); background-color: black;">Total</td>
                                            <td style="color: rgb(248, 250, 252); background-color: black;">&#8377;<?php if(isset($grandtotal)){echo $grandtotal;}?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        
                        <hr />

                        <div class="your-payment">
                            <h2 class="payment-title mb-3" style="color: rgb(248, 250, 252); background-color: black;">payment method</h2>
                            <div class="payment-method" style="background-color: black;">
                                <div class="payment-accordion" style="background-color: black;">
                                    <div id="accordion" class="payment-section" style="background-color: black;">
                                        <div class="card mb-2" style="background-color: black;">
                                            <div class="card-header" style="background-color: black;">
                                                <a class="card-link" data-toggle="collapse" href="#collapseOne" style="color: rgb(248, 250, 252); background-color: black;">Direct Bank Transfer </a>
                                            </div>
                                            <div id="collapseOne" class="collapse" data-parent="#accordion" style="background-color: black;">
                                                <div class="card-body" style="background-color: black;">
                                                    <p class="no-margin font-15" style="color: rgb(248, 250, 252); background-color: black;">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2" style="background-color: black;">
                                            <div class="card-header" style="background-color: black;">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo" style="color: rgb(248, 250, 252); background-color: black;">Cheque Payment</a>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordion" style="background-color: black;">
                                                <div class="card-body" style="background-color: black;">
                                                    <p class="no-margin font-15" style="color: rgb(248, 250, 252); background-color: black;">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card margin-15px-bottom border-radius-none" style="background-color: black;">
                                            <div class="card-header" style="background-color: black;">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree" style="color: rgb(248, 250, 252); background-color: black;"> PayPal </a>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#accordion" style="background-color: black;">
                                                <div class="card-body" style="background-color: black;">
                                                    <p class="no-margin font-15" style="color: rgb(248, 250, 252); background-color: black;">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="card-header" style="background-color: black;">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour" style="color: rgb(248, 250, 252); background-color: black;"> Payment Information </a>
                                            </div>
                                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <fieldset>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-cardname" style="color: rgb(248, 250, 252); background-color: black;">Name on Card <span class="required-f">*</span></label>
                                                                <input name="cardname" value="" placeholder="Card Name" id="input-cardname" class="form-control" type="text">
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-country" style="color: rgb(248, 250, 252); background-color: black;">Credit Card Type <span class="required-f">*</span></label>
                                                                <select name="cardtype" class="form-control">
                                                                    <option value="" style="color: rgb(248, 250, 252); background-color: black;"> --- Please Select --- </option>
                                                                    <option value="1" style="color: rgb(248, 250, 252); background-color: black;">American Express</option>
                                                                    <option value="2" style="color: rgb(248, 250, 252); background-color: black;">Visa Card</option>
                                                                    <option value="3" style="color: rgb(248, 250, 252); background-color: black;">Master Card</option>
                                                                    <option value="4" style="color: rgb(248, 250, 252); background-color: black;">Discover Card</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-cardno" style="color: rgb(248, 250, 252); background-color: black;">Credit Card Number  <span class="required-f">*</span></label>
                                                                <input name="cardno" value="" placeholder="Credit Card Number" id="input-cardno" class="form-control" type="text">
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label for="input-cvv" style="color: rgb(248, 250, 252); background-color: black;">CVV Code <span class="required-f">*</span></label>
                                                                <input name="cvv" value="" placeholder="Card Verification Number" id="input-cvv" class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <label style="color: rgb(248, 250, 252); background-color: black;" >Expiration Date <span class="required-f">*</span></label>
                                                                <input type="date" name="exdate" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                                                <img class="padding-25px-top xs-padding-5px-top" src="assets/images/payment-img.jpg" alt="card" title="card" />
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="order-button-payment">
                                    <button class="btn" name="orderplaced"value="Place order" type="submit" style="color: rgb(248, 250, 252);">Place order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </form>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!--End Body Content-->
    
    <!--Footer-->
    <footer id="footer">
        <div class="newsletter-section" style="background-color: black;">
            <div class="container">
                <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                            <div class="display-table">
                                <div class="display-table-cell footer-newsletter">
                                    <div class="section-header text-center">
                                        <label class="h2"><newsletter style="color: rgb(248, 250, 252);">sign up for newsletter</label>
                                    </div>
                                    <form  method="post">
                                        <div class="input-group">
                                            <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                            <span class="input-group__btn">
                                                <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Subscribe</span></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                            <div class="footer-social">
                                <ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>    
        </div>
        <div class="site-footer">
        	<div class="container">
     			<!--Footer Links-->
            	<div class="footer-top">
                	<div class="row">
                    	<div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Quick Shop</h4>
                            <ul>
                            	<li><a href="#">Women</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Sportswear</a></li>
                                <li><a href="#">Sale</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Informations</h4>
                            <ul>
                            	<li><a href="#">About us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Terms &amp; condition</a></li>
                                <li><a href="#">My Account</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Customer Services</h4>
                            <ul>
                            	<li><a href="#">Request Personal Data</a></li>
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Support Center</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                        	<h4 class="h4">Contact Us</h4>
                            <ul class="addressFooter">
                            	<li><i class="icon anm anm-map-marker-al"></i><p>55 Gallaxy Enque,<br>2568 steet, 23568 NY</p></li>
                                <li class="phone"><i class="icon anm anm-phone-s"></i><p>(440) 000 000 0000</p></li>
                                <li class="email"><i class="icon anm anm-envelope-l"></i><p>sales@yousite.com</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Footer Links-->
                <hr>
<?php include_once 'footer.php';?>
            </div>
        </div>
    </footer>
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
    
     <!-- Including Jquery -->
     <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
     <script src="assets/js/vendor/jquery.cookie.js"></script>
     <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
     <script src="assets/js/vendor/wow.min.js"></script>
     <!-- Including Javascript -->
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/plugins.js"></script>
     <script src="assets/js/popper.min.js"></script>
     <script src="assets/js/lazysizes.js"></script>
     <script src="assets/js/main.js"></script>
</div>
</body>

<!-- belle/checkout.html   11 Nov 2019 12:44:33 GMT -->
</html>