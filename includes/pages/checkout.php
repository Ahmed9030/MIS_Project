<?php 
  include '../../inti.php';
?>
<!DOCTYPE html>
<html>
  <!-- Mirrored from themeturn.com/tf-db/edumel-demo/edumel/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 19:38:11 GMT -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta
      name="description"
      content="Edumel- Education Html Template by dreambuzz"
    />
    <meta
      name="keywords"
      content="education,edumel,instructor,lms,online,instructor,dreambuzz,bootstrap,kindergarten,tutor,e learning"
    />
    <meta name="author" content="dreambuzz" />

    <title>creative art</title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="../../assets/vendors/bootstrap/bootstrap.css" />
    <!-- Iconfont Css -->
    <link
      rel="stylesheet"
      href="../../assets/vendors/awesome/css/fontawesome-all.min.css"
    />
    <link rel="stylesheet" href="../../assets/vendors/flaticon/flaticon.css" />
    <link rel="stylesheet" href="../../assets/fonts/gilroy/font-gilroy.html" />
    <link
      rel="stylesheet"
      href="../../assets/vendors/magnific-popup/magnific-popup.css"
    />
    <!-- animate.css -->
    <link rel="stylesheet" href="../../assets/vendors/animate-css/animate.css" />
    <link
      rel="stylesheet"
      href="../../assets/vendors/animated-headline/animated-headline.css"
    />
    <link
      rel="stylesheet"
      href="../../assets/vendors/owl/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="../../assets/vendors/owl/assets/owl.theme.default.min.css"
    />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="../../assets/css/woocomerce.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <link rel="stylesheet" href="../../assets/css/responsive.css" />
    <link rel="stylesheet" href="../../assets/css/checkout.css" />
  </head>

  <body id="top-header">
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
                <li class="active" aria-current="page">Checkout</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- checkout start -->

    <div class="wrapper">
      <div class="payment">
        <div class="payment-logo">
          <p>c</p>
        </div>

        <h2>بوابة الدفع</h2>
        <div class="form">
          <div class="card space icon-relative">
            <label class="label">حامل البطاقة:</label>
            <input type="text" class="input" placeholder="Coding Market" />
            <i class="fas fa-user"></i>
          </div>
          <div class="card space icon-relative">
            <label class="label">رقم الهاتف:</label>
            <input type="text" class="input" placeholder="phone Number" />
            <i class="fas fa-user"></i>
          </div>
          <div class="card space icon-relative">
            <label class="label">رقم البطاقة:</label>
            <input
              type="text"
              class="input"
              data-mask="0000 0000 0000 0000"
              placeholder="Card Number"
            />
            <i class="far fa-credit-card"></i>
          </div>
          <div class="card-grp space">
            <div class="card-item icon-relative">
              <label class="label">تاريخ انتهاء الصلاحية:</label>
              <input
                type="text"
                name="expiry-data"
                class="input"
                data-mask="00 / 00"
                placeholder="00 / 00"
              />
              <i class="far fa-calendar-alt"></i>
            </div>
            <div class="card-item icon-relative">
              <label class="label">CVC:</label>
              <input
                type="text"
                class="input"
                data-mask="000"
                placeholder="000"
              />
              <i class="fas fa-lock"></i>
            </div>
          </div>

          <div class="btn btn-primary rounded d-block mx-auto">دفع</div>
        </div>
      </div>
    </div>

    <!-- Checkout form ENd -->

    
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

  <!-- Mirrored from themeturn.com/tf-db/edumel-demo/edumel/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 19:38:11 GMT -->
</html>
