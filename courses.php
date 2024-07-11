<?php 
ob_start();
include 'inti.php'

?>

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
              <li><a href="index.php">الرئسيه </a></li>
                <li class="active" aria-current="page">كورسات</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--course section start-->
    <section class="section-padding page">
      <div class="course-top-wrap">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8">
              
            </div>
            <div class="col-lg-4">
              <div class="topbar-search">
                <form method="get" action="#">
                  <input
                    type="text"
                    placeholder="ابحث في دوراتنا"
                    class="form-control"
                  />
                  <label><i class="fa fa-search"></i></label>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


        <!--course section start-->
    <section class="course-wrapper section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8">
            <div class="section-heading mb-70 text-center">
              <h2 class="font-lg">الدورات التدربية</h2>
              <p>برنامجك المثالي في دوراتنا </p>
            </div>
          </div>
        </div>
        <div class="row justify-content-lg-center">

        <?php 

$stmt = $db->prepare("SELECT videos.*,  
                        courses.price AS c_price, 
                        users.Username AS username 
                    FROM 
                        videos 
                    INNER JOIN 
                        courses
                    ON
                        courses.ID = course_id
                    INNER JOIN 
                        users
                    ON 
                        users.ID = user_id
                    ");

$stmt->execute();

// get the all data from database
$rows = $stmt->fetchAll();

      ?>
      <?php foreach($rows as $row){
      
      ?>
            <!-- stert vidoe filde -->
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="course-grid bg-shadow tooltip-style">
                <div class="course-header">
                  <div class="course-thumb">
                    <iframe width="363" height="200"  src="<?php echo $row['v_link']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    
                    <div class="course-price"> 
                      <?php echo $row['c_price']?>
                    </div>
                    
                  </div>
                </div>

                <div class="course-content">
                  <div class="rating mb-10">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                    <span>3.9 (30 تعليقات)</span>
                  </div>
                  
                  <h3 class="course-title mb-20">

                    <a href="#"><?php echo $row['title']?></a>

                  </h3>

                  <div
                    class="course-footer mt-20 d-flex align-items-center justify-content-between">

                    <span class="duration">

                      <i class="far fa-clock me-2"></i>6.5 ساعة</span>

                    <span class="students">

                      <i class="far fa-user"></i> 51 طالبا</span>

                      <span class="lessons">
                        
                      <i class="far fa-play-circle me-2"></i>26 درسا</span>

                    </div>

                  </div>
                  
                  <div class="course-hover-content">
                  <div class="price">

                    <?php echo $row['c_price']?>

                  </div>
                  <h3 class="course-title mb-20 mt-30">
                    <a href="courses-2.php"><?php echo $row['title']?></a>
                  </h3>
                  <div class="course-meta d-flex align-items-center mb-20">
                    <div class="author me-4">
                      <img
                      src="assets/images/course/img_01.jpg"
                      alt=""
                      class="img-fluid"
                    />
                    <a href="drow-courses.php"><?php echo $row['username']?></a>
                    </div>
                    <span class="lesson">
                      <i class="far fa-file-alt"></i> 20 درسا</span
                    >
                  </div>
                  <p class="mb-70">
                  <?php echo $row['title']?>
                  </p>
                  <a href="login.php" class="btn btn-grey btn-sm rounded"
                  >انضم الان <i class="fal fa-angle-right"></i
                  ></a>
                </div>
              </div>
            </div>
        <?php }?>
          <!-- end vidoe filde -->
          <!-- COURSE END -->
        </div>
      </div>
    </section>
    <!--course section end-->
      <!--course-->
    </section>
    <!--course section end-->


    <?php 
include $tpl_tem .'footer.php'; 

ob_end_flush();
?>