<?php 
ob_start();
include 'inti.php';

if(isset($_SESSION['user'])){}
$do = isset($_GET['action']) ? $_GET['action'] : 'courses';
?>

<?php if ($do == 'courses'){ 
  // start courses 
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
                <li class="active" aria-current="page">كورس الرسم</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </section>
  
  <!--محتوي الكورس-->
  <div class="container">
  <div class="text-center m-5">
    <h3>كورس الرسم</h3>
    <p>هنا ستجد جميع كورسات التعليمية</p>
  </div>
  <div class="row home-image">
    <?php 
    //selcet the courses from table
    $courses  =  getAllFrom('*' , "courses" , "" , "" ,"ID" , "");

    // start echo the content of courses 
  foreach($courses as $course){?>
  
          <div class="col-lg-4 p-1  col-md-6 col-12">
              <div class="card" >
                <img src="admin/layout/images/users_images/<?php echo $course['image']?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $course['title']?></h5>
                    <p class="card-text"><?php echo $course['descrption']?></p>
                    <a
                    href="drow-courses.php?action=details&coid=<?php echo $course['ID']?>"
                      class="btn btn-grey btn-sm rounded">  تفاصيل >
                      <a href="user.php" 
                ></a
               
                      <i class="fal fa-angle-right">
                      </i>
                    </a>
              </div>
            </div>
          </div>
        <?php }?>
        </div>
      </div>
      <!-- end echo the content of courses -->
      
   <!-- end courses  -->
  <?php include $tpl_tem .'footer.php'; ?>

<?php
}elseif($do == 'details')
{ 

// check if rquest $coid is numeric && getn the integer of it  
    $courseid = isset($_GET['coid']) && is_numeric($_GET['coid']) ? intval($_GET['coid']) : 0;

    // select all  data depend on this ID
    $stmt = $db->prepare(" SELECT * FROM  courses  WHERE  ID= ? LIMIT 1 ");
    $stmt->execute(array($courseid));
    $row =  $stmt->fetch();
    $count = $stmt->rowCount();
    
    if($count > 0)
    { 

      if ($row["co_values"])
      {
        // explode the co_valuse and tools first
        $valuse = explode("|" , $row['co_values']);
        $tools  = explode("|" , $row['tools']);
      }
      ?>

<!-- start details courses page -->

        <section class="course-page-header">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-8">
                  <div class="title-block">
                    <div class="text-center fw-bold fs-1 mt-5 text-white mb-5">
                        <span class="learn"><?php echo $row['title']?></span>
                      </div>
                    <ul class="list-inline mb-0">
                        <li><a href="drow-courses.php"><?php echo $row['title']?></a></li>
                        <li class="list-inline-item"><a href="index.php">الرئسية</a></li>
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
                              <a class="nav-item nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home-tab" aria-selected="true">نظرة عامة </a>
                              <a class="nav-item nav-link" id="nav-instructor-tab" data-bs-toggle="tab" href="#nav-instructor" role="tab" aria-controls="nav-instructor-tab" aria-selected="false">المدرس</a>
                          </div>
                    </nav>


                    <div class="tab-content tutori-course-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="single-course-details ">
    <h4 class="course-title">الوصف</h4>
    <p><?php echo $row['descrption_2']; ?></php>

    <div class="course-widget course-info">
        <h4 class="course-title">ما الذي ستتعلمه؟</h4>
        <ul>

          <?php
          if ($row["co_values"]): 
          foreach ($valuse as $v ): 
          ?>

            <li>
                <i class="fa fa-check"></i>
                <?php echo $v ?>
            </li>

            <?php endforeach; endif;?>
          
        </ul>
        <ul>
        <div class="course-widget course-info">
            <h4 class="course-title">الادوات المستخدمه </h4>
            <ul>

            <?php 
            if ($row['tools']):
            foreach($tools as $t): ?>

                <li>
                    <i class="fa fa-check"></i>
                    <?php echo $t ?> 
                </li>

                <?php endforeach; endif; ?>
              </ul>
            </ul>
          </div>
      </div>
      </div>

<div class="tab-pane fade" id="nav-topics" role="tabpanel" aria-labelledby="nav-topics-tab">
                           
   
      
            <li class="section">
                <div class="section-header">
                    <div class="section-left">
                   
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
                    <h4><a href="#">المدربة</a></h4>
                    <span class="sub-title"></span>
                    
					<p>انجيل سمير الرسامه والفنانه الكبيره الحاصله علي جوائز كثيره </p>
					
					<div class="intructor-social-links">
                        <span class="me-2">تابعني: </span>
                        <a href="https://www.facebook.com/groups/2870596289652363/?mibextid=NSMWBT"> <i class="fab fa-facebook-f"></i></a>
                        <a href=" https://chat.whatsapp.com/Jo2XLmXcLiJ4XxOPSsGd4q"> <i class="fab fa-whatsapp"></i></a>
                        <a href=" https://www.tiktok.com/@gegesamershwky?_t=8kGGbVyleiM&_r=1"
                        ><i class="fa-brands fa-tiktok"></i
                      ></a>
                       
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
            <div class="course-thumb">
              
                <?php echo $row['video']?>
                <div class="modal-footer">
                </div>
              </div>

        <div class="price-header">
            <h2 class="course-price"><?php echo $row['price']?>ج</h2>
        </div>

        <ul class="course-sidebar-list">
            <li>
                <div class="d-flex justify-content-between align-items-center">
                    <span><i class="fal fa-sliders-h"></i>المستوي</span>
                    <?php echo $row['co_level']?>
                </div>
            </li>

                <li>
                <div class="d-flex justify-content-between align-items-center">
                    <span><i class="fas fa-play-circle"></i>المحاضرات </span>
                    <?php echo countColum("V_ID" , 'videos' , "course_id = {$row['ID']}" , "")?>
                </div>
            </li>
                <li>
                <div class="d-flex justify-content-between align-items-center">
                    <span><i class="far fa-user"></i>الطلاب</span>
                    <?php echo countColum("ID" , "subscribe" ,"course_id = {$row['ID']}" , "")?>
                </div>
            <li>
                <div class="d-flex justify-content-between align-items-center">
                    <span><i class="far fa-clock"></i>المدة</span>
                    <?php echo $row['time_learn']?>
                </div>
            </li>
                <li>
                <div class="d-flex justify-content-between align-items-center">
                  <span> <i class="fal fa-globe"></i>اللغة </span>
                  عربية
                </div>
            </li>

            <li>
                <div class="d-flex justify-content-between align-items-center">
                    <span><i class="far fa-calendar"></i>التحديث  </span>
                    <?php echo $row['date']?>
                </div>
            </li>
        </ul>
        <div class="buy-btn">
            <button class="button button-enroll-course btn btn-main-2 rounded">
              
             <a class="qq" href="drow-courses.php?action=checkout&coid=<?php echo $row['ID']?>"><i class="fal fa-shopping-cart"></i>  سجل في الدورة</a> 
                
            </button>
        </div>

        <div class="course-meterial">
            <h4 class="mb-3">يتضمن المده </h4>
            <ul class="course-meterial-list">
                <li><i class="fal fa-long-arrow-right"></i>مقاطع فيديو </li>
                
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
          <!-- end details courses page -->

          <?php include $tpl_tem .'footer.php';?>
  <?php 
  }else{
    echo "<div class='container'>";
            $msg = "<div class='alert alert-danger'>رقم الكورس غير صالح</div>";
            redirectHome($msg);
        echo "</div>";
  }
   ?>
  

<?php
}elseif($do == "checkout"){

  if(isset($_SESSION['user'])){
      // check if rquest $coid is numeric && getn the integer of it  
    $courseid = isset($_GET['coid']) && is_numeric($_GET['coid']) ? intval($_GET['coid']) : 0;

    // select all  data depend on this ID
    $stmt = $db->prepare(" SELECT * FROM  courses  WHERE  ID= ? LIMIT 1 ");
    $stmt->execute(array($courseid));
    $row =  $stmt->fetch();
    $count = $stmt->rowCount();

    if($count >0){
    ?>
    <section class="page-header">
    <!--====== Header End ======-->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-8">
              <div class="title-block">
                <div class="text-center fw-bold fs-1 mt-5 text-white mb-5">
                  ماذا تريد <span class="learn">ان تتعلم ؟</span>
                </div>
                <ul class="header-bradcrumb justify-content-center">

                  <li><a href="drow-courses.php"><?php echo $row['title']?></a></li>                 
                  <li><a href="index.php">الرئسية </a></li>

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
          <form action="?action=subscribe" method="POST">
            <div class="form">
            <input type="hidden" name="coid" value="<?php echo $courseid?>" >
              <div class="card space icon-relative">
              <label class="label">حامل البطاقة:</label>
              <input type="text" name="name" class="input" placeholder="سوق الترميز " />
              <i class="fas fa-user"></i>
            </div>
            <div class="card space icon-relative">
              <label class="label">رقم الهاتف:</label>
              <input type="text" name="number" class="input" placeholder="رقم التليفون " />
              <i class="fas fa-phone" style= "position: absolute; bottom: -21px; left: 5px;" ></i>
            </div>
            <div class="card space icon-relative">
              <label class="label">رقم البطاقة:</label>
              <input
                type="text"
                name="card_number"
                class="input"
                data-mask="0000 0000 0000 0000"
                placeholder="رقم البطاقة"
              />
              <i class="far fa-credit-card"></i>
            </div>
            <div class="card-grp space">
              <div class="card-item icon-relative">
                <label class="label">تاريخ انتهاء الصلاحية:</label>
                <input
                  type="text"
                  name="expiry-date"
                  class="input"
                  data-mask="00 / 00"
                  placeholder="00 / 00"
                />
                <i class="far fa-calendar-alt"></i>
              </div>
              <div class="card-item icon-relative">
                <label class="label">رمز التحقق من البطاقة:</label>
                <input
                  type="text"
                  name="cvc"
                  class="input"
                  data-mask="000"
                  placeholder="000"
                />
                <i class="fas fa-lock"></i>
              </div>
            </div>

            <input class="btn btn-primary rounded d-block mx-auto" type="submit" value="دفع">
            </form>
            </div>
          </div>
        </div>

      <!-- Checkout form ENd -->
      <?php include $tpl_tem .'footer.php'; ?>


  <?php 
  }else{
    echo "<div class='container'>";
            $msg = "<div class='alert alert-danger'>رقم الكورس غير صالح</div>";
            redirectHome($msg);
        echo "</div>";
  }

}else{

  echo "<div class='container'>";
    $msg = "<div class='alert alert-warning'>يجب ان تقوم بتسجيل الدخول أولا ثم يمكنك اكمال الشراء </div>";
    redirectHome($msg , 'login.php' , 'تسجيل الدخول');
  echo "</div>";
}
 
}elseif($do == 'subscribe'){

  // subscribe page

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){


    echo   " <h1 class='text-center'>صفحة الدفع</h1>" ;       
    echo   "<div class='container'>";
    // get the var from form
    $userid          =  $session_id;
    $courseid        =  $_POST['coid'];
    $name            =  filter_str($_POST['name']);
    $card_number     =  filter_var($_POST['card_number'] , FILTER_SANITIZE_NUMBER_INT);
    $end_date        =  filter_var($_POST['expiry-date'] , FILTER_SANITIZE_NUMBER_INT);
    $cvc             =  filter_var($_POST['cvc'] , FILTER_SANITIZE_NUMBER_INT);

    // check if he user buy it befor or not 
    $check           = checkItem("user_id" , "subscribe" , $userid , "and course_id = {$courseid}");


    // Validate the form

    $formError = array();

    // put the error messages in $formError array
    if($check > 0 ){
      $formError[] = "انت بالفعل مشترك في هذا الكورس يمكنك متابعت الكورس من خلال لوحة القيادة الخاصة بك";
    }
    if(empty($name)){
      $formError[] = "يجب أدخال اسم حامل البطاقة";
    }
    if(empty($card_number)){
      $formError[] = "يجب أدخال رقم البطاقة المكون من 16 رقم";
    }
    if(empty($end_date)){
      $formError[] = "يجب أدخال تاريخ أنتهاء البطاقة";
    }
    if(empty($cvc)){
      $formError[] = "يجب أدخال الثلاث أرقام التي خلف البطاقة <strong>هذة الارقام سرية</strong>";
    }

    // echo the error messsages 
    foreach($formError as $error){

      echo "<div class='alert alert-danger'>". $error. "</div>";

    }
    
    if(empty($formError)){

      // Insert the database  with info
      
      $stmt = $db->prepare("INSERT INTO 
                          subscribe(user_id , course_id , date)
                          VALUES(:zuserid , :zcoid , now())" );
      $stmt->execute(array(
          'zuserid' => $session_id,
          'zcoid'   => $courseid
      ));

      // echo success message
      $msg = '<div class="alert alert-success"> تم الاشتراك في الكورس بنجاح شكرا لك ونتمني رحلة تعلم سعيدة</div>';
      redirectHome($msg ,"Training_course.php?action=content&coid=$courseid" , 'محتوي الكورس');
    }
    echo "</div>";

  }else{
           
    // start header   
    echo "<div class='container'>";
   
    // echo the error message
    $errorMsg =  "<div class='alert alert-danger'>لا يمكنك تصفح هذه الصفحة بشكل مباشر</div>";
    echo redirectHome($errorMsg);

    echo "</div>";
    echo "</div>";
}
}else{
  echo "<div class='container'>";
    echo "<div class='alert alert-warning'>خظأ: هذا الرابط غير صحيح</div>";
  echo "</div>";
}
?>
 
  
<?php ob_end_flush()?>