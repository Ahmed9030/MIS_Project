<!--================ header from php ===================--> 
<?php 
     include '../CreaTiveArt/inti.php';
    include '../templats/header_pages.php'
?>

<!--  body -->
<body id="top-header">
<!--================= navbar from php ============-->
<?php 
include "../templats/navbar_pages.php"
;?>
<!--====== Header End ======-->
<section class="page-header">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-8">
          <div class="title-block">
            <div class="text-center fw-bold fs-1 mt-5 text-white mb-5">
                ماذا تريد <span class="learn">ان تتعلم ؟</span>
              </div>
            <ul class="header-bradcrumb justify-content-center">
              <li><a href="index.html">Home</a></li>
              <li class="active" aria-current="page">Cart</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>
    <!--shop category start-->
    <section class="woocommerce single page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="woocommerce-cart">
                        <div class="woocommerce-notices-wrapper"></div>
                        <form class="woocommerce-cart-form" action="#" method="">
                            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">صورة مصغرة </th>
                                        <th class="product-name">المنتج</th>
                                        <th class="product-price">السعر</th>
                                        <th class="product-quantity">الكميه</th>
                                        <th class="product-subtotal">الاجمالي</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="#" class="remove" aria-label="Remove this item" data-product_id="30" data-product_sku="">×</a>						</td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img width="324" height="324" src="assets/images/tools/photo_2024-01-18_14-19-28.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""></a>
                                    </td>

                                    <td class="product-name" data-title="Product">
                                        <a href="#">قلم تسيح</a>
                                    </td>

                                    <td class="product-price" data-title="Price">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>90.00</span>
                                    </td>

                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <label class="screen-reader-text" for="quantity_5cc58182489a8">الكمية</label>
                                            <input type="number" id=" " class="input-text qty text" step="1" min="0" max="" name="cart[34173cb38f07f89ddbebc2ac9128303f][qty]" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="Sunglasses quantity">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>90.00</span>
                                    </td>
                                </tr>
                                <tr class="woocommerce-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="#" class="remove" aria-label="Remove this item" data-product_id="30" data-product_sku="">×</a>						</td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img width="324" height="324" src="assets/images/tools/photo_2024-01-18_14-20-17.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""></a>
                                    </td>

                                    <td class="product-name" data-title="Product">
                                        <a href="#">قلم فحم ابيض</a>
                                    </td>

                                    <td class="product-price" data-title="Price">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>90.00</span>
                                    </td>

                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <label class="screen-reader-text" for="quantity_5cc58182489a8">الكمية</label>
                                            <input type="number" id="quantity_5cc58182489a8" class="input-text qty text" step="1" min="0" max="" name="cart[34173cb38f07f89ddbebc2ac9128303f][qty]" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="Sunglasses quantity">
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>90.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="coupon">
                                            <label for="coupon_code">القسيمة:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> <button type="submit" class="button" name="apply_coupon" value="Apply coupon">تطبيق القسيمة</button>
                                        </div>
                                        <button type="submit" class="button" name="update_cart" value="Update cart" disabled="">عربة التحديث</button>
                                        <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="27da9ce3e8"><input type="hidden" name="_wp_http_referer" value="/cart/">				</td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row justify-content-end">
                <div class="col-lg-4">
                    <div class="cart-collaterals mt-5">
                        <div class="cart_totals ">
                            <h2>اجماليلت سلة التسوق</h2>
                            <table cellspacing="0" class="shop_table shop_table_responsive">
                                <tbody><tr class="cart-subtotal">
                                    <th>المجموع الفرعي</th>
                                    <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>18.00</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>الاجمالي</th>
                                    <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>18.00</span></strong> </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="wc-proceed-to-checkout">
                                <a href="checkout.html" class="checkout-button button alt wc-forward">
                                    الشروع في الدفع
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--shop category end-->


    <!-- Footer section start -->
  <!--================== footer from php ===================-->
<?php include  '../templats/footer.php'?>

    <!-- Footer section End -->
    



    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="assets/vendors/jquery/jquery.js"></script>
    <!-- Bootstrap 5:0 -->
    <script src="assets/vendors/bootstrap/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.js"></script>
    <!-- Counterup -->
    <script src="assets/vendors/counterup/waypoint.js"></script>
    <script src="assets/vendors/counterup/jquery.counterup.min.js"></script>
    <!--  Owl Carousel -->
    <script src="assets/vendors/owl/owl.carousel.min.js"></script>
    <!-- Isotope -->
    <script src="assets/vendors/isotope/jquery.isotope.js"></script>
    <script src="assets/vendors/isotope/imagelaoded.min.js"></script>
    <!-- Animated Headline -->
    <script src="assets/vendors/animated-headline/animated-headline.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/script.js"></script>


  </body>
  
<!-- Mirrored from themeturn.com/tf-db/edumel-demo/edumel/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 19:38:11 GMT -->
</html>

   
   