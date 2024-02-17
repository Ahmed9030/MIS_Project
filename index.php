<?php 
  $page_title = "Home Page";
  include 'inti.php';

?>

<!--================ header  ===================--> 
<!DOCTYPE html>
<html lang="zxx">
  <!-- Mirrored from themeturn.com/tf-db/edumel-demo/edumel/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 19:37:58 GMT -->
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

    <title><?php echo $page_title?></title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/bootstrap.css" />
    <!-- Iconfont Css -->
    <link
      rel="stylesheet"
      href="assets/vendors/awesome/css/fontawesome-all.min.css"
    />
    <link rel="stylesheet" href="assets/vendors/flaticon/flaticon.css" />
    <link rel="stylesheet" href="assets/fonts/gilroy/font-gilroy.html" />
    <link
      rel="stylesheet"
      href="assets/vendors/magnific-popup/magnific-popup.css"
    />
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/vendors/animate-css/animate.css" />
    <link
      rel="stylesheet"
      href="assets/vendors/animated-headline/animated-headline.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/owl/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/owl/assets/owl.theme.default.min.css"
    />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/woocomerce.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
  </head>

  <body id="top-header">
<!--  body -->
<!--================= navbar ============-->
<header class="header-style-1">
      <div class="header-navbar navbar-sticky">
        <div class="container">
          <div class="d-flex align-items-center justify-content-between">
            <div class="site-logo">
              <a href="index.php">
                <!-- <img src="assets/images/photo_2023-12-14_23-20-33.jpg" alt="" class="img-fluid" /> -->
                <h3 class="p-relative txt-c mt-0">CreaTiveArt</h3>
              </a>
            </div>

            <div class="offcanvas-icon d-block d-lg-none">
              <a href="#" class="nav-toggler"><i class="fal fa-bars"></i></a>
            </div>

            <div class="header-category-menu d-none d-xl-block">
              <ul>
                <li class="has-submenu">
                  <ul class="submenu">
                    <li>
                      <a href="#">Design</a>
                      <ul class="submenu">
                        <li><a href="#">Design Tools</a></li>
                        <li><a href="#">Photoshop mastering</a></li>
                        <li><a href="#">Adobe Xd Deisgn</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Developemnt</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Freelancing</a></li>
                  </ul>
                </li>
              </ul>
            </div>

            <nav class="site-navbar ms-auto">
              <ul class="primary-menu">
                <li class="current">
                  <a href="index.php">الرئيسية </a>
                  <ul class="submenu">
                    <li><a href="index.php">الرئيسية 1</a></li>
                    <li><a href="index-2.php">الرئيسية 2</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo $nav?>about.php">من نحن ؟</a></li>

                <li>
                  <a href="<?php echo $nav?>courses.php">الدورات </a>
                  <ul class="submenu">
                    <li><a href="<?php echo $nav?>courses.php">الدورات </a></li>
                    <li><a href="<?php echo $nav?>courses-2.php">شبكة الدورات</a></li>
                    <li>
                      <a href="<?php echo $nav?>course-single.php">الدوره التدريبيه الفردية</a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href="#">الصفحات </a>
                  <ul class="submenu">
                    <li><a href="<?php echo $nav?>instructor.php">المدربين</a></li>
                    <li><a href="<?php echo $nav?>tools.php">الادوات </a></li>
                    <li><a href="<?php echo $nav?>cart.php">عربة التسوق</a></li>
                    <li><a href="<?php echo $nav?>checkout.php">الدفع</a></li>
                    <li>
                      <a href="<?php echo $nav?>works-exhibition.php">معرض الاعمال</a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href="<?php echo $nav?>contact.php">اتصال بنا</a>
                </li>
              </ul>
 
              <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
            </nav>

            <div class="header-btn d-none d-xl-block">
              <a href="<?php echo $nav?>login.php" class="login">Login</a>
              <a href="<?php echo $nav?>Register.php" class="btn btn-main-2 btn-sm-2 rounded"
                >Sign up</a
              >
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Banner Section Start -->
    <div class="banner-1 mb-5">
      <div class="banner-1__bg">
        <div class="text-center fw-bold fs-1 mt-5 text-white mb-5">
          ماذا تريد <span class="learn">ان تتعلم ؟</span>
        </div>
        <div class="banner-form me-5">
          <form action="#" class="row">
            <div class="position-relative mx-auto col-6">
              <input
                type="text"
                class="form-control mx-auto position-relative"
                placeholder="Photoshop , calculus , Java , PHP : ابحث عن الكورس ... مثال"
              />
              <a class="position-absolute me-3" href="#">
                Search<i class="far fa-search"></i
              ></a>
            </div>
          </form>
        </div>
        <div class="category-name text-center mt-5 fs-1">
          <span>الشائعة:</span>
          <a href="#">التاسيس ,</a>
          <a href="#">البورتريه ,</a>
          <a href="#">رسم الفحم ,</a>
          <a href="#">رسم الالوان </a>
        </div>
      </div>
    </div>

    <!-- Banner Section End -->

    <!--  Feature Intro Start -->
    <div class="py-1"></div>
    <section class="features-intro mt-5">
      <div class="container">
        <div class="feature-inner">
          <div class="row">
            <div class="col-xl-4 col-lg-4">
              <div class="feature-item feature-style-left">
                <div class="feature-icon icon-bg-1">
                  <i class="fad fa-users"></i>
                </div>
                <div class="feature-text">
                  <h4>الحصول علي الشهادة</h4>
                  <p>Lorem ipsum dolor seat ameat dui too consecteture</p>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4">
              <div class="feature-item feature-style-left">
                <div class="feature-icon icon-bg-2">
                  <i class="far fa-file-certificate"></i>
                </div>
                <div class="feature-text">
                  <h4>المعلمين المهرة </h4>
                  <p>Lorem ipsum dolor seat ameat dui too consecteture</p>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4">
              <div class="feature-item feature-style-left">
                <div class="feature-icon icon-bg-3">
                  <i class="fa fa-video"></i>
                </div>
                <div class="feature-text">
                  <h4>الفصول الدراسية عبر الانترنت</h4>
                  <p>Lorem ipsum dolor seat ameat dui too consecteture</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  Feature Intro End -->

    <div class="container mt-5 pt-5">
      <div
        id="carouselAll"
        class="carousel slide h-50 w-50 mx-auto mb-4"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item carousel-img active">
            <img
              src="<?php echo $url_image?>works-exhibition/FB_IMG_1698869564008.jpg"
              alt="First slide"
              class="d-block h-100 w-100"
            />
            <div class="carousel-caption">
              <h3>Caption</h3>
              <p>This text describes the first slide</p>
            </div>
          </div>
          <div class="carousel-item carousel-img">
            <img
              src="<?php echo $url_image?>works-exhibition/Screenshot_2023_11_01_22_22_31_53_a23b203fd3aafc6dcb84e438dda678b6.jpg"
              alt="Second slide"
              class="d-block w-100"
            />
            <div class="carousel-caption">
              <h3>Caption</h3>
              <p>This text describes the second slide</p>
            </div>
          </div>
          <div class="carousel-item carousel-img">
            <img
              src="<?php echo $url_image?>works-exhibition/Screenshot_2023_11_01_22_18_24_39_a23b203fd3aafc6dcb84e438dda678b6.jpg"
              alt="Third slide"
              class="d-block w-100"
            />
            <div class="carousel-caption">
              <h3>Caption</h3>
              <p>This text describes the third slide</p>
            </div>
          </div>
          <div class="carousel-item carousel-img">
            <img
              src="<?php echo $url_image?>works-exhibition/FB_IMG_1698869532889.jpg"
              alt="Fourth slide"
              class="d-block w-100"
            />
            <div class="carousel-caption">
              <h3>Caption</h3>
              <p>This text describes the fourth slide</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  Course category -->
    <section class="section-padding">
      <div class="container-fluid container-grid">
        <div class="row justify-content-center">
          <div class="col-xl-8">
            <div class="heading mb-50 text-center">
              <span class="subheading">اهم الفئات</span>
              <h2>تصفح الدورات حسب الفئة</h2>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-2 col-lg-4 col-md-6">
            <div class="single-course-category style-2 mb-20">
              <div class="course-cat-icon">
                <img
                  src="<?php echo $url_image?>icon/icon1.png"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="course-cat-content">
                <h4 class="course-cat-title">
                  <a href="#">التاسيس</a>
                </h4>
              </div>
            </div>
          </div>

          <div class="col-xl-2 col-lg-4 col-md-6">
            <div class="single-course-category style-2">
              <div class="course-cat-icon">
                <img
                  src="<?php echo $url_image?>icon/icon6.png"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="course-cat-content">
                <h4 class="course-cat-title">
                  <a href="#">البورتريه</a>
                </h4>
              </div>
            </div>
          </div>

          <div class="col-xl-2 col-lg-4 col-md-6">
            <div class="single-course-category style-2">
              <div class="course-cat-icon">
                <img
                  src="<?php echo $url_image?>icon/icon3.png"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="course-cat-content">
                <h4 class="course-cat-title">
                  <a href="#">رسم بلفحم</a>
                </h4>
              </div>
            </div>
          </div>

          <div class="col-xl-2 col-lg-4 col-md-6">
            <div class="single-course-category style-2">
              <div class="course-cat-icon">
                <img
                  src="<?php echo $url_image?>icon/icon2.png"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="course-cat-content">
                <h4 class="course-cat-title">
                  <a href="#">رسم رصاص </a>
                </h4>
              </div>
            </div>
          </div>

          <div class="col-xl-2 col-lg-4 col-md-6">
            <div class="single-course-category style-2">
              <div class="course-cat-icon">
                <img
                  src="<?php echo $url_image?>icon/icon3.png"
                  alt=""
                  class="img-fluid"
                />
              </div>
              <div class="course-cat-content">
                <h4 class="course-cat-title">
                  <a href="#">رسم الوان</a>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  Course category End -->
    <!-- Counter Section start -->
    <section class="counter-section-2">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-xl-5 pr-xl-5 col-lg-8">
            <div class="section-heading mb-5 mb-xl-0 text-center text-xl-start">
              <span class="subheading"
                >10,000+ عميل موثوق به في جميع انحاء العالم</span
              >
              <h2 class="font-lg">
                بعض الاسباب التي تجعلك
                 تبدا التعلم نعنا
              </h2>
            </div>
          </div>

          <div class="col-xl-7">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="counter-box bg-1 mb-4 mb-lg-0">
                  <i class="flaticon-man"></i>
                  <div class="count">
                    <span class="counter h2">2</span><span>k</span>
                  </div>
                  <p>الطلاب </p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="counter-box bg-2 mb-4 mb-lg-0">
                  <i class="flaticon-infographic"></i>
                  <div class="count">
                    <span class="counter h2">120</span><span>+</span>
                  </div>
                  <p>الدورات  
                     عبر الانترنت</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="counter-box bg-3">
                  <i class="flaticon-satisfaction"></i>
                  <div class="count">
                    <span class="counter h2">100</span><span>%</span>
                  </div>
                  <p>الرضا</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- COunter Section End -->

    <!--course section start-->
    <section class="course-wrapper section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8">
            <div class="section-heading mb-70 text-center">
              <h2 class="font-lg">الدورات التدريبيه الشائعة</h2>
              <p>اكتشف برنامجك المثاليي في دوراتنا.</p>
             
            </div>
          </div>
        </div>
      
        <div class="row justify-content-lg-center">
          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="course-grid bg-shadow tooltip-style">
              <div class="course-header">
                <div class="course-thumb">
                  <iframe width="500" height="205" src="https://www.youtube.com/embed/s4_YAF4EsWQ?si=Z3S12zRGvyrwwvJ_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
                
                  <div class="course-price">$300</div>
                </div>
              </div>
            
              <div class="course-content">
                <div class="rating mb-10">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>

                  <span>3.9 (30 reviews)</span>
                </div>

                <h3 class="course-title mb-20">
                  <a href="#"> الحصه الخامسه من كورس البورتريه  </a>
                </h3>

                <div
                  class="course-footer mt-20 d-flex align-items-center justify-content-between"
                >
                  <span class="duration"
                    ><i class="far fa-clock me-2"></i>6.5 hr</span
                  >
                  <span class="students"
                    ><i class="far fa-user-alt me-2"></i>51 Students</span
                  >
                  <span class="lessons"
                    ><i class="far fa-play-circle me-2"></i>26 Lessons</span
                  >
                </div>
              </div>

              <div class="course-hover-content">
                <div class="price">$300</div>
                <h3 class="course-title mb-20 mt-30">
                  <a href="#">
                    الحصه الخامسه من كورس البورتريه </a>
                </h3>
                <div class="course-meta d-flex align-items-center mb-20">
                  <div class="author me-4">
                    <img
                      src="<?php echo $url_image?>course/course-2.jpg"
                      alt=""
                      class="img-fluid"
                    />
                    <a href="#">Josephin</a>
                  </div>
                  <span class="lesson">
                    <i class="far fa-file-alt"></i> 20 lessons</span
                  >
                </div>
                <p class="mb-70">
               
                  الحصه الخامسه من كورس البورتريه
                </p>
                <a href="login.html" class="btn btn-grey btn-sm rounded"
                  >Join Now <i class="fal fa-angle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- COURSE END -->

          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="course-grid bg-shadow tooltip-style">
              <div class="course-header">
                <div class="course-thumb">
                  <iframe width="500" height="205" src="https://www.youtube.com/embed/s4_YAF4EsWQ?si=Z3S12zRGvyrwwvJ_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  <div class="course-price">$300</div>
                </div>
              </div>

              <div class="course-content">
                <div class="rating mb-10">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>

                  <span>3.9 (30 reviews)</span>
                </div>

                <h3 class="course-title mb-20">
                  <a href="#"> الحصه الخامسه من كورس البورتريه </a>
                </h3>
                <div
                  class="course-footer mt-20 d-flex align-items-center justify-content-between"
                >
                  <span class="duration"
                    ><i class="far fa-clock me-2"></i>6.5 hr</span
                  >
                  <span class="students"
                    ><i class="far fa-user-alt me-2"></i>51 Students</span
                  >
                  <span class="lessons"
                    ><i class="far fa-play-circle me-2"></i>26 Lessons</span
                  >
                </div>
              </div>

              <div class="course-hover-content">
                <div class="price">$300</div>
                <h3 class="course-title mb-20 mt-30">
                  <a href="#"> الحصه الخامسه من كورس البورتريه  </a>
                </h3>
                <div class="course-meta d-flex align-items-center mb-20">
                  <div class="author me-4">
                    <img
                      src="<?php echo $url_image?>course/course-2.jpg"
                      alt=""
                      class="img-fluid"
                    />
                    <a href="#">Josephin</a>
                  </div>
                  <span class="lesson">
                    <i class="far fa-file-alt"></i> 20 lessons</span
                  >
                </div>
                <p class="mb-70">
                  الحصه الخامسه من كورس البورتريه 
                </p>
                <a
                  href="login.html#Register.html"
                  class="btn btn-grey btn-sm rounded"
                  >Join Now <i class="fal fa-angle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- COURSE END -->

          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="course-grid bg-shadow tooltip-style">
              <div class="course-header">
                <div class="course-thumb">
                  <iframe width="500" height="205" src="https://www.youtube.com/embed/0fBB6zNK_YY?si=Omu_Ep2uLDaM9HFI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  <div class="course-price">$300</div>
                </div>
              </div>

              <div class="course-content">
                <div class="rating mb-10">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>

                  <span>3.9 (30 reviews)</span>
                </div>

                <h3 class="course-title mb-20">
                  <a href="#"> الحصه الخامسه من كورس البورتريه  </a>
                </h3>

                <div
                  class="course-footer mt-20 d-flex align-items-center justify-content-between"
                >
                  <span class="duration"
                    ><i class="far fa-clock me-2"></i>6.5 hr</span
                  >
                  <span class="students"
                    ><i class="far fa-user-alt me-2"></i>51 Students</span
                  >
                  <span class="lessons"
                    ><i class="far fa-play-circle me-2"></i>26 Lessons</span
                  >
                </div>
              </div>

              <div class="course-hover-content">
                <div class="price">$300</div>
                <h3 class="course-title mb-20 mt-30">
                  <a href="#"> الحصه الخامسه من كورس البورتريه  </a>
                </h3>
                <div class="course-meta d-flex align-items-center mb-20">
                  <div class="author me-4">
                    <img
                      src="<?php echo $url_image?>course/course-2.jpg"
                      alt=""
                      class="img-fluid"
                    />
                    <a href="#">Josephin</a>
                  </div>
                  <span class="lesson">
                    <i class="far fa-file-alt"></i> 20 lessons</span
                  >
                </div>
                <p class="mb-70">
                  الحصه الخامسه من كورس البورتريه 
                </p>
                <a
                  href="login.html#Register.html"
                  class="btn btn-grey btn-sm rounded"
                  >Join Now <i class="fal fa-angle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- COURSE END -->
        </div>
        <div class="row justify-content-lg-center">
          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="course-grid bg-shadow tooltip-style">
              <div class="course-header">
                <div class="course-thumb">
                  <iframe width="500" height="205" src="https://www.youtube.com/embed/PGYQu8PCn2w?si=wVOZYldqDtFIMbOl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  <div class="course-price">$300</div>
                </div>
              </div>

              <div class="course-content">
                <div class="rating mb-10">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>

                  <span>3.9 (30 reviews)</span>
                </div>

                <h3 class="course-title mb-20">
                  <a href="#"> الحصه الخامسه من كورس البورتريه </a>
                </h3>

                <div
                  class="course-footer mt-20 d-flex align-items-center justify-content-between"
                >
                  <span class="duration"
                    ><i class="far fa-clock me-2"></i>6.5 hr</span
                  >
                  <span class="students"
                    ><i class="far fa-user-alt me-2"></i>51 Students</span
                  >
                  <span class="lessons"
                    ><i class="far fa-play-circle me-2"></i>26 Lessons</span
                  >
                </div>
              </div>

              <div class="course-hover-content">
                <div class="price">$300</div>
                <h3 class="course-title mb-20 mt-30">
                  <a href="#">الحصه الخامسه من كورس البورتريه  </a>
                </h3>
                <div class="course-meta d-flex align-items-center mb-20">
                  <div class="author me-4">
                    <img
                      src="<?php echo $url_image?>course/course-2.jpg"
                      alt=""
                      class="img-fluid"
                    />
                    <a href="#">Josephin</a>
                  </div>
                  <span class="lesson">
                    <i class="far fa-file-alt"></i> 20 lessons</span
                  >
                </div>
                <p class="mb-70">
                  الحصه الخامسه من كورس البورتريه 
                </p>
                <a
                  href="login.html#Register.html"
                  class="btn btn-grey btn-sm rounded"
                  >Join Now <i class="fal fa-angle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- COURSE END -->

          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="course-grid bg-shadow tooltip-style">
              <div class="course-header">
                <div class="course-thumb">
                  <iframe width="500" height="205" src="https://www.youtube.com/embed/s4_YAF4EsWQ?si=t-oNXJKwhEVYKG_G" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  <div class="course-price">$300</div>
                </div>
              </div>

              <div class="course-content">
                <div class="rating mb-10">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>

                  <span>3.9 (30 reviews)</span>
                </div>

                <h3 class="course-title mb-20">
                  <a href="#"> الحصه الخامسه من كورس البورتريه </a>
                </h3>
                <div
                  class="course-footer mt-20 d-flex align-items-center justify-content-between"
                >
                  <span class="duration"
                    ><i class="far fa-clock me-2"></i>6.5 hr</span
                  >
                  <span class="students"
                    ><i class="far fa-user-alt me-2"></i>51 Students</span
                  >
                  <span class="lessons"
                    ><i class="far fa-play-circle me-2"></i>26 Lessons</span
                  >
                </div>
              </div>

              <div class="course-hover-content">
                <div class="price">$300</div>
                <h3 class="course-title mb-20 mt-30">
                  <a href="#"> الحصه الخامسه من كورس البورتريه  </a>
                </h3>
                <div class="course-meta d-flex align-items-center mb-20">
                  <div class="author me-4">
                    <img
                      src="<?php echo $url_image?>course/course-2.jpg"
                      alt=""
                      class="img-fluid"
                    />
                    <a href="#">Josephin</a>
                  </div>
                  <span class="lesson">
                    <i class="far fa-file-alt"></i> 20 lessons</span
                  >
                </div>
                <p class="mb-70">
                  الحصه الخامسه من كورس البورتريه 
                </p>
                <a
                  href="login.html#Register.html"
                  class="btn btn-grey btn-sm rounded"
                  >Join Now <i class="fal fa-angle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- COURSE END -->

          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="course-grid bg-shadow tooltip-style">
              <div class="course-header">
                <div class="course-thumb">
                  
                  <iframe width="500" height="205" src="https://www.youtube.com/embed/dY7GgAJZ6EI?si=g3mr0kVotVbM027L" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  <div class="course-price">$300</div>
                </div>
              </div>

              <div class="course-content">
                <div class="rating mb-10">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>

                  <span>3.9 (30 reviews)</span>
                </div>

                <h3 class="course-title mb-20">
                  <a href="#">الحصه الخامسه من كورس البورتريه  </a>
                </h3>

                <div
                  class="course-footer mt-20 d-flex align-items-center justify-content-between"
                >
                  <span class="duration"
                    ><i class="far fa-clock me-2"></i>6.5 hr</span
                  >
                  <span class="students"
                    ><i class="far fa-user-alt me-2"></i>51 Students</span
                  >
                  <span class="lessons"
                    ><i class="far fa-play-circle me-2"></i>26 Lessons</span
                  >
                </div>
              </div>

              <div class="course-hover-content">
                <div class="price">$300</div>
                <h3 class="course-title mb-20 mt-30">
                  <a href="#">الحصه الخامسه من كورس البورتريه  </a>
                </h3>
                <div class="course-meta d-flex align-items-center mb-20">
                  <div class="author me-4">
                    <img
                      src="<?php echo $url_image?>course/course-2.jpg"
                      alt=""
                      class="img-fluid"
                    />
                    <a href="#">Josephin</a>
                  </div>
                  <span class="lesson">
                    <i class="far fa-file-alt"></i> 20 lessons</span
                  >
                </div>
                <p class="mb-70">
                  الحصه الخامسه من كورس البورتريه 
                </p>
                <a
                  href="login.html#Register.html"
                  class="btn btn-grey btn-sm rounded"
                  >Join Now <i class="fal fa-angle-right"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- COURSE END -->
        </div>
      </div>
    </section>
    <!--course section end-->

   
    <!-- Section cta End -->
    <!-- Work Process Section Start -->
    <section class="work-process-section">
      <div class="container">
        <div class="row mb-70 justify-content-between">
          <div class="col-xl-5">
            <div class="section-heading text-center text-lg-start mb-4 mb-xl-0">
              <span class="subheading">كيفية البدء </span>
              <h2 class="font-lg">4 خطوات ابدا رحلتك معنا </h2>
            </div>
          </div>
          <div class="col-xl-6">
            <p class="text-center text-lg-start">
              الرسم هو شكل من أشكال الفن التعبيري يتضمن إنشاء صور باستخدام الخطوط والأشكال والألوان. يمكن استخدام الرسم لإنشاء صور واقعية أو تجريدية، ويمكن استخدامه للتعبير عن المشاعر أو الأفكار أو القصص.
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="step-wrapper">
              <div class="step-item">
                <div class="step-number bg-1">01</div>
                <div class="step-text">
                  <h5>الاشتراك بجميع المعلومات </h5>
                  <p>
                  انا سعيد جدا بمقعد العميل و النخبة ايضا
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="step-wrapper">
              <div class="step-item">
                <div class="step-number bg-2">02</div>
                <div class="step-text">
                  <h5>احصل علي القبول </h5>
                  <p>
                    انا سعيد جدا بمقعد العميل والنخبة ايضا
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="step-wrapper">
              <div class="step-item">
                <div class="step-number bg-3">03</div>
                <div class="step-text">
                  <h5>التعلم عبر الانترنت </h5>
                  <p>
                    انا سعيد جدا بمقعد العميل و النخبه ايضا 
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="step-wrapper">
              <div class="step-item">
                <div class="step-number bg-2">04</div>
                <div class="step-text">
                  <h5>الحصول علي الشهادة</h5>
                  <p>
                    انا سعيد جدا بمقعد العميل و النخبة ايضا 
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Work Process Section End -->
    <!-- Testimonial section start -->
    <section class="testimonial section-padding">
      <div class="container-fluid container-grid">
        <div class="row justify-content-center">
          <div class="col-xl-6">
            <div class="section-heading text-center mb-50">
              <span class="subheading">ملاحظات الطلاب </span>
              <h2 class="font-lg">ما يقوله طلابنا </h2>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-12 col-xl-12">
            <div class="testimonials-slides-3 owl-carousel owl-theme">
              <div class="testimonial-item">
                <div class="testimonial-inner">
                  <div class="quote-icon">
                    <i class="flaticon-left-quote"></i>
                  </div>

                  <div class="testimonial-text mb-30">
                    "لقد استمتعت كثيرًا بدورة الرسم هذه. لقد كانت المعلمة رائعة وكانت قادرة على شرح التقنيات بسهولة. لقد تعلمت الكثير في فترة زمنية قصيرة."
                  </div>

                  <div class="client-info d-flex align-items-center">
                    <div class="client-img">
                      <img
                        src="<?php echo $url_image?>clients/testimonial-avata-01.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                    <div class="testimonial-author">
                      <h4>Cory Zamora</h4>
                      <span class="meta">Marketing Specialist</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="testimonial-item">
                <div class="testimonial-inner">
                  <div class="quote-icon">
                    <i class="flaticon-left-quote"></i>
                  </div>

                  <div class="testimonial-text mb-30">
                    "لقد كنت دائمًا مهتمًا بالرسم، لكنني لم أكن أعرف من أين أبدأ. لقد أعطتني هذه الدورة الأساس الذي أحتاجه للبدء في إنشاء رسومات جميلة."
                  </div>

                  <div class="client-info d-flex align-items-center">
                    <div class="client-img">
                      <img
                        src="<?php echo $url_image?>clients/testimonial-avata-02.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                    <div class="testimonial-author">
                      <h4>Jackie Sanders</h4>
                      <span class="meta">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="testimonial-item">
                <div class="testimonial-inner">
                  <div class="quote-icon">
                    <i class="flaticon-left-quote"></i>
                  </div>

                  <div class="testimonial-text mb-30">
                    لقد كانت هذه الدورة تجربة رائعة. لقد تعلمت الكثير عن أنواع مختلفة من الرسم وتقنيات مختلفة. لقد استمتعت أيضًا بالتفاعل مع الطلاب الآخرين."
                  </div>

                  <div class="client-info d-flex align-items-center">
                    <div class="client-img">
                      <img
                        src="<?php echo $url_image?>clients/testimonial-avata-03.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                    <div class="testimonial-author">
                      <h4>Nikolas Brooten</h4>
                      <span class="meta">Sales Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="testimonial-item">
                <div class="testimonial-inner">
                  <div class="quote-icon">
                    <i class="flaticon-left-quote"></i>
                  </div>

                  <div class="testimonial-text mb-30">
                    "لقد أحببت الطريقة التي شرحت بها المعلمة الأساسيات. لقد كانت قادرة على جعلها تبدو سهلة الفهم حتى بالنسبة للمبتدئين."
                  </div>

                  <div class="client-info d-flex align-items-center">
                    <div class="client-img">
                      <img
                        src="<?php echo $url_image?>clients/testimonial-avata-04.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                    <div class="testimonial-author">
                      <h4>Terry Ambady</h4>
                      <span class="meta">Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="testimonial-item">
                <div class="testimonial-inner">
                  <div class="quote-icon">
                    <i class="flaticon-left-quote"></i>
                  </div>

                  <div class="testimonial-text mb-30">
                    "لقد كانت مجتمع الطلاب متعاونًا للغاية. لقد كان من المفيد أن أتمكن من الحصول على تعليقات من الآخرين على عملي
                  </div>

                  <div class="client-info d-flex align-items-center">
                    <div class="client-img">
                      <img
                        src="<?php echo $url_image?>clients/testimonial-avata-03.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                    <div class="testimonial-author">
                      <h4>Nikolas Brooten</h4>
                      <span class="meta">Sales Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial section End -->

    <!-- InstructorsSection Start -->
    <section class="be-instructor section-padding-btm">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <img
              src="<?php echo $url_image?>banner/illustration.png"
              alt=""
              class="img-fluid"
            />
          </div>

          <div class="col-xl-6 col-lg-6">
            <div class="section-heading mt-4 mt-lg-0">
              <span class="subheading">ابدا اليوم </span>
              <h2 class="font-lg mb-20">كن مدرسا</h2>
              <p class="mb-20">
                هل تريد ان تكون معلما؟ هل ترغب في مشاركة معرفتك مع الجميع؟ اذا كنت لديك اي مهارة فيمكنك بسهولة مشاركة معرفتك عبر الانترنت 
              </p>
              
              <a href="contact.html" class="btn btn-main rounded">ابدا التدريس اليوم</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Instructors Section End -->
<!--================== footer from php ===================-->
   <?php include $tpl . 'footer.php'?>

    <!-- 
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="<?php echo $tpl_js?>jquery/jquery.js"></script>
    <!-- Bootstrap 5:0 -->
    <script src="<?php echo $tpl_js?>bootstrap/popper.min.js"></script>
    <script src="<?php echo $tpl_js?>bootstrap/bootstrap.js"></script>
    <!-- Counterup -->
    <script src="<?php echo $tpl_js?>counterup/waypoint.js"></script>
    <script src="assets/vendors/counterup/jquery.counterup.min.js"></script>
    <!--  Owl Carousel -->
    <script src="<?php echo $tpl_js?>owl/owl.carousel.min.js"></script>
    <!-- Isotope -->
    <script src="<?php echo $tpl_js?>isotope/jquery.isotope.js"></script>
    <script src="<?php echo $tpl_js?>isotope/imagelaoded.min.js"></script>
    <!-- Animated Headline -->
    <script src="<?php echo $tpl_js?>animated-headline/animated-headline.js"></script>
    <!-- Magnific Popup -->
    <script src="<?php echo $tpl_js?>magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/script.js"></script>
  </body>

  <!-- Mirrored from themeturn.com/tf-db/edumel-demo/edumel/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 19:38:03 GMT -->
</html>