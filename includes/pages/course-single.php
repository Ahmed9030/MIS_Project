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

<section class="course-page-header">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-8">
          <div class="title-block">
            <div class="text-center fw-bold fs-1 mt-5 text-white mb-5">
                ماذا تريد <span class="learn">ان تتعلم ؟</span>
              </div>
            <ul class="list-inline mb-0">
                <li class="list-inline-item">
                    <a href="#">Home</a>
                </li>
                <li class="list-inline-item">Courses</li>
                <!-- <li class="list-inline-item">/</li> -->
                <li class="list-inline-item">Web Development</li>
                <!-- <li class="list-inline-item">/</li> -->
                <li class="list-inline-item">Mastering PHP from zero to hero </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="page-wrapper">
    <div class="tutori-course-content ">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">               
                    <nav class="course-single-tabs learn-press-nav-tabs">
                            <div class="nav nav-tabs course-nav" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home-tab" aria-selected="true">Overview</a>
                            <a class="nav-item nav-link" id="nav-topics-tab" data-bs-toggle="tab" href="#nav-topics" role="tab" aria-controls="nav-topics-tab" aria-selected="false">Curriculam</a>
                            <a class="nav-item nav-link" id="nav-instructor-tab" data-bs-toggle="tab" href="#nav-instructor" role="tab" aria-controls="nav-instructor-tab" aria-selected="false">Instructor</a>
                            <a class="nav-item nav-link" id="nav-feedback-tab" data-bs-toggle="tab" href="#nav-feedback" role="tab" aria-controls="nav-feedback-tab" aria-selected="false">Reviews</a>
                        </div>
                    </nav>


                    <div class="tab-content tutori-course-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="single-course-details ">
    <h4 class="course-title">الوصف</h4>
    <p>يهدف دورة تأسيس الرسم للمبتدئين إلى تزويد الطلاب بالأساسيات التي يحتاجونها لبدء الرسم. سيتعلم الطلاب في هذه الدورة كيفية استخدام الأدوات والمعدات الأساسية للرسم، وكيفية إنشاء خطوط وأشكال بسيطة، وكيفية مزج الألوان</p>

    <div class="course-widget course-info">
        <h4 class="course-title">ما الذي ستتعلمه؟</h4>
        <ul>
            <li>
                <i class="fa fa-check"></i>
                الأدوات والمعدات الأساسية للرسم: سيتم تقديم الطلاب إلى الأدوات والمعدات الأساسية للرسم، مثل أقلام الرصاص والفحم والألوان المائية
            </li>
            <li>
                <i class="fa fa-check"></i>
                إنشاء خطوط وأشكال بسيطة: سيتعلم الطلاب كيفية إنشاء خطوط وأشكال بسيطة، مثل الخطوط المستقيمة والمنحنية والأشكال الهندسية.
            </li>
            <li>
                <i class="fa fa-check"></i>
                مزج الألوان: سيتعلم الطلاب كيفية مزج الألوان باستخدام تقنيات مختلفة، مثل المزج المباشر والمزج التقليدي والمزج الرقمي.
            </li>
           
        </ul>
    </div>
</div>
                        </div>

                        <div class="tab-pane fade" id="nav-topics" role="tabpanel" aria-labelledby="nav-topics-tab">
                            <div class="tutori-course-curriculum" >
    <div class="curriculum-scrollable">
        <ul class="curriculum-sections">
            <li class="section">
                <div class="section-header">
                    <div class="section-left">
                        <h5 class="section-title">شرح الدوره التدريبيه </h5>
                        <p class="section-desc">Dacere agemusque constantius concessis elit videmusne quia stoici constructio dissimillimas audiunt homerus commendationes</p>
                    </div>
                </div>
  
                <ul class="section-content">
                    <li class="course-item has-status course-item-lp_lesson">
                      <a class="section-item-link" href="#">
                        <span class="item-name">The importance of data nowsaday</span>
                        <div class="course-item-meta">
                          <span class="item-meta duration">10.30 min</span>
                          <i class="item-meta course-item-status"></i>
                        </div>
                      </a>
                    </li>

                    <li class="course-item has-status course-item-lp_lesson">
                        <a class="section-item-link" href="#">
                            <span class="item-name">Why my organization should know about data</span>
                            <div class="course-item-meta">
                            <span class="item-meta duration">20.30 min</span>
                            <i class="item-meta course-item-status" ></i>
                            </div>
                        </a>
                    </li>

                    <li class="course-item course-item-lp_assignment course-item-lp_lesson">
                        <a class="section-item-link" href="#">
                             <span class="item-name">Assignments</span>
                             <div class="course-item-meta">
         
                                 <span class="item-meta count-questions">14 questions</span>
                                 <span class="item-meta duration">10.21 min</span><i class="fa item-meta course-item-status trans"></i>
                             </div>
                         </a>
                     </li>
                    <li class="course-item course-item-lp_quiz course-item-lp_lesson">
                       <a class="section-item-link" href="#">
                            <span class="item-name">Quiz 1</span>
                            <div class="course-item-meta">
        
                                <span class="item-meta count-questions">14 questions</span>
                                <span class="item-meta duration">5.67 min</span><i class="fa item-meta course-item-status trans"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- section end -->
            <li class="section">
              <div class="section-header">
                <div class="section-left">
                      <h5 class="section-title">Key concepts </h5>
                      <p class="section-desc">Dacere agemusque constantius concessis elit videmusne quia stoici constructio dissimillimas audiunt homerus commendationes</p>
                </div>
              </div>
  
                <ul class="section-content">
                    <li class="course-item has-status course-item-lp_lesson">
                      <a class="section-item-link" href="#">
                        <span class="item-name">Basic understanding of data management concepts</span>
                        <div class="course-item-meta">
                          <span class="item-meta duration">10 min</span>
                          <i class="item-meta course-item-status"></i>
                        </div>
                      </a>
                  </li>
              </ul>
            </li>
            <!-- section end -->    
            <li class="section">
                <ul class="section-content">
                    <li class="course-item has-status course-item-lp_lesson">
                        <a class="section-item-link" href="#">
                            <span class="item-name">Apply the principles </span>
                            <div class="course-item-meta">
                                <span class="item-meta duration">10 min</span>
                                <i class="item-meta course-item-status"></i>
                            </div>
                        </a>
                    </li>

                    <li class="course-item has-status course-item-lp_lesson">
                        <a class="section-item-link" href="#">
                            <span class="item-name">Lesson 2</span>
                            <div class="course-item-meta">
                                <span class="item-meta duration">20 min</span>
                                <i class="item-meta course-item-status"></i>
                            </div>
                        </a>
                    </li>

                    <li class="course-item has-status course-item-lp_lesson">
                        <a class="section-item-link" href="#">
                            <span class="item-name">Lesson 3</span>
                            <div class="course-item-meta">
                                <span class="item-meta duration">5 min</span>
                                <i class="item-meta course-item-status"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- section end -->
        </ul>
        <!-- Main ul end -->
    </div>
</div>
                        </div>
                        <div class="tab-pane fade" id="nav-instructor" role="tabpanel" aria-labelledby="nav-instructor-tab">
                             <!-- Course instructor start -->
 <div class="courses-instructor">
    <div class="single-instructor-box">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4">
                <div class="instructor-image">
                    <img src="assets/images/course/img_01.jpg" alt="" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-8 col-md-8">
                <div class="instructor-content">
                    <h4><a href="#">المدرب</a></h4>
                    <span class="sub-title"></span>
                    
					<p>انجيل سمير الرسامه والفنانه الكبيره الحاصله علي جوائز كثيره </p>
					
					<div class="intructor-social-links">
                        <span class="me-2">Follow Me: </span>
                        <a href="#"> <i class="fab fa-facebook-f"></i></a>
                        <a href="#"> <i class="fab fa-twitter"></i></a>
                        <a href="#"> <i class="fab fa-linkedin-in"></i></a>
                        <a href="#"> <i class="fab fa-youtube"></i></a>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Conurse  instructor end -->
                        </div>
                        <div class="tab-pane fade" id="nav-feedback" role="tabpanel" aria-labelledby="nav-feedback-tab">
                            <div id="course-reviews">
    <ul class="course-reviews-list">
        <li>
            <div class="course-review">
                <div class="course-single-review">
                    <div class="user-image">
                        <img src="assets/images/course/photo_2024-01-22_12-48-41.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="user-content user-review-content">
                       <div class="review-header mb-10">
                            <h4 class="user-name">المدربة</h4>
                            <p class="review-title">تغطية جميع الموضيع   </p>
                            <div class="rating review-stars-rated">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half"></i></a>
                            </div>
                        </div>
                        <div class="review-text">
                            <div class="review-content">
                            تحدد الدورة الاشياء التي نريد تغييرها ثم تحدد الاشياء التي يجب القيام بها لتحقيق النتيجة المرجوة. ساعدتني الدورة في تحديد المشكلات بوضوح وانشاء مجموعه واسعه من الحلول عالية الجودة ةعم المزيد من تحليل الهياكل للخيارات التي تودي الي قرارات افضل 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>	
        <li>
            <div class="course-review">
                <div class="course-single-review">
                    <div class="user-image">
                        <img src="assets/images/course/photo_2024-01-22_12-48-41.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="user-content user-review-content">
                        <div class="review-header mb-10">
                             <h4 class="user-name">المدربة</h4>
                             <p class="review-title">تغطية جميع الموضيع   </p>
                             <div class="rating review-stars-rated">
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 <a href="#"><i class="fa fa-star-half"></i></a>
                             </div>
                         </div>
                         <div class="review-text">
                             <div class="review-content">
                             تحدد الدورة الاشياء التي نريد تغييرها ثم تحدد الاشياء التي يجب القيام بها لتحقيق النتيجة المرجوة. ساعدتني الدورة في تحديد المشكلات بوضوح وانشاء مجموعه واسعه من الحلول عالية الجودة ةعم المزيد من تحليل الهياكل للخيارات التي تودي الي قرارات افضل 
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>			
    </ul>
</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xl-4">
                    <!-- Course Sidebar start -->
<div class="course-sidebar course-sidebar-2 mt-5 mt-lg-0">
    <div class="course-widget course-details-info">
        <div class="course-thumbnail">
            <img src="assets/images/course/img_01.jpg" alt="" class="img-fluid w-100">
        </div>

        <div class="price-header">
            <h2 class="course-price">$120.00 <span>$150</span></h2>
            <span class="course-price-badge onsale">39% off</span>
        </div>

        <ul class="course-sidebar-list">
            <li>
                <div class="d-flex justify-content-between align-items-center">
                    <span><i class="far fa-sliders-h"></i>المستوي</span>
                    مبتدئ
                </div>
            </li>

                <li>
                <div class="d-flex justify-content-between align-items-center">
                    <span><i class="fas fa-play-circle"></i>المحاضرات </span>
                    2
                </div>
            </li>
                <li>
                <div class="d-flex justify-content-between align-items-center">
                    <span><i class="far fa-user"></i>الطلاب</span>
                    20
                </div>
            <li>
                <div class="d-flex justify-content-between align-items-center">
                    <span><i class="far fa-clock"></i>المدة</span>
                    6 ساعات
                </div>
            </li>
                <li>
                <div class="d-flex justify-content-between align-items-center">
                    <span><i class="far fa-globe"></i>اللغة </span>
                    عربية
                </div>
            </li>

            <li>
                <div class="d-flex justify-content-between align-items-center">
                    <span><i class="far fa-calendar"></i>التحديث  </span>
                    October 15, 2022
                </div>
            </li>
        </ul>
        <div class="buy-btn">
            <button class="button button-enroll-course btn btn-main-2 rounded">
                <i class="far fa-shopping-cart me-2"></i> سجل في الدورة
            </button>
        </div>

        <div class="course-meterial">
            <h4 class="mb-3">يتضمن المده </h4>
            <ul class="course-meterial-list">
                <li><i class="fal fa-long-arrow-right"></i>مقاطع فيديو </li>
                <li><i class="fal fa-long-arrow-right"></i>ملفات للتطوير </li>
                <li><i class="fal fa-long-arrow-right"></i>ملفات التوثيق</li>
            </ul>
        </div>
    </div>

                </div>
            </li>
        </ul>
    </div>
</div>
<!-- Course Sidebar end -->
                </div>
            </div>
        </div>
    </div>
</section>


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
  
<!-- Mirrored from themeturn.com/tf-db/edumel-demo/edumel/course-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 19:38:08 GMT -->
</html>

   
   