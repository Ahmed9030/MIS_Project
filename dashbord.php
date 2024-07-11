<?php
ob_start();
include 'inti.php';

if(isset($_SESSION['user'])){

  $stmt = $db->prepare("SELECT Username from users where ID = $session_id");

  $stmt->execute();

  $username = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<link rel="stylesheet" href="assets/css2/style.css">


<div class="d-flex" id="wrapper">
 

<!-- start sidebar -->
<?php include 'includes/templats/sidebar.php'?>
<!-- end sidebar -->


        <div id="page-content-wrapper">
    
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                  <i class="fas fa-aling-left primary-text fs-4 me-3" id="menu-toggle"></i>
                   <h2 class="fs-2 m-0"><?php echo $username['Username']?> أهلا </h2>
              </div>
    
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
                 
             </nav>
               <!--start content here-->
             <div class="container-fluid px-4">
                <!--start content-->
                 <div class="row g-3 my-2">
                   <!--end content-->
                  <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-felx justify-content-around align-items-center rounded">
                      <div class="col mt-0">
                        <h5 class="card-title">عدد الكورسات المشترك فيها</h5>
                      </div>
                      <div class="col-auto">
                        <div class="stat text-primary">
                          <i class="align-middle" data-feather="dollar-sign"></i>
                        </div>
                      </div>
                      <h1 class="mt-1 mb-3"><?php echo  countColum('ID', 'subscribe' , "user_id = {$session_id}" , " ")?></h1>
                    </div>
                  </div>
                  <!--end content-->
                    <div class="col-md-3">
                      <div class="p-3 bg-white shadow-sm d-felx justify-content-around align-items-center rounded">
                        <div class="col mt-0">
                          <h5 class="card-title">عدد عمليات الشراء التي قمت بها علي الموقع</h5>
                      </div>
                      <div class="col-auto">
                        <div class="stat text-primary">
                            <i class="align-middle" data-feather="truck"></i>
                        </div>
                    </div>
                    <h1 class="mt-1 mb-3"><?php echo countColum('ID' , 'orders' , "user_id = {$session_id}" ,"") + countColum('ID', 'subscribe' , "user_id = {$session_id}" , " ") ?></h1>

                      </div>
                    </div>
                  <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-felx justify-content-around align-items-center rounded">
                      <div class="col mt-0">
                        <h5 class="card-title">عدد الأدوات التي قم بشرائها </h5>
                      </div>
                      <div class="col-auto">
                        <div class="stat text-primary">
                          <i class="align-middle" data-feather="shopping-cart"></i>
                        </div>
                      </div>
                      <h1 class="mt-1 mb-3"><?php echo countColum('ID' , 'orders' , "user_id = {$session_id}" ,"AND status = 1") ?></h1>
                    </div>
                  </div>
                  <!--end content-->

                  <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-felx justify-content-around align-items-center rounded">
                      <div class="col mt-0">
                        <h5 class="card-title"> عدد الادوات في أنتظار التسليم</h5>
                      </div>
                      <div class="col-auto">
                        <div class="stat text-primary">
                          <i class="align-middle" data-feather="users"></i>
                        </div>
                        <h1 class="mt-1 mb-3"><?php echo countColum('ID' , 'orders' , "user_id = {$session_id}" ,"AND status = 0") ?></h1>
                            </div>
                          </div>
                         </div>
                                                      
                 <!--end content-->
                 <div class="course-badge">
                  <i class="fas fa-graduation-cap"></i>
                  <span>الكورس الذى تم الاشتراك فيه</span>
              </div>
    
  <!-- start showe the courses of user -->
  <div class="row home-image">
    <?php 

 $check = checkItem('user_id' , 'subscribe' , $session_id , '');

  if($check > 0 ){

    // get the all courses of user what has
    $stmt = $db->prepare("SELECT subscribe.*,
                          courses.image AS co_image ,
                          courses.title AS co_title ,
                          courses.descrption AS co_des 
                        FROM 
                          subscribe
                        INNER JOIN 
                          courses 
                        ON 
                          courses.ID = subscribe.course_id

                        WHERE user_id = $session_id 
                        ORDER BY 
                          course_id
                        DESC");

                          $stmt->execute();

                          $courses = $stmt->fetchAll();

      // start echo the content of courses 
    foreach($courses as $course){?>
    
            <div class="col-lg-4 p-1  col-md-6 col-12">
                <div class="card"  style="margin-top: 28px;">
                  <img src="admin/layout/images/users_images/<?php echo $course['co_image']?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $course['co_title']?></h5>
                    <p>لقد قمت بالأشتراك في هذا الكوس بتاريخ {<?php echo $course['date']?>}</p>

                    <a
                      href="Training_course.php?action=content&coid=<?php echo $course['course_id']?>"
                        class="btn btn-grey btn-sm rounded"
                        >عرض الكورس
                        <i class="fal fa-angle-right">
                        </i>
                      </a>
                    <!-- drow-courses.php?action=content&coid=$courseid -->
                </div>
              </div>
            </div>
          <?php }?>
          </div>
        </div>
   <!-- end echo the content of courses -->

   
   <!-- end showe the courses of user -->
  <?php 
  }else{
    echo "<div class='container'>";
      echo "<div class='alert alert-warning'>أنت  لم تشترك في كورسات بعد , عندما تشترك شوف تظهر جميع الكورسات هنا بعد الشراء</div>";
    echo "</div>";
  }
  ?>

  <!--end content-->
  <div class="row g-3 my-2">
  <div class="course-badge">
    <i class="fas fa-graduation-cap"></i>
    <span>الكورس الذى تم الاشتراك فيه</span>
  </div>
  </div>

  <div class="d-flex" id="wrapper">

    <div class="container">
      <div class="row justify-content-center">
        <h1 style="text-align: center; margin-bottom: 50px; margin-top: 24px;">طلبات لم تستلم بعد</h1>


      <!-- get the all tools from database -->
      <?php   //select all orders 
            
            $stmt = $db->prepare("SELECT  orders.* , 

            users.Username AS username,
            users.Phone AS phone,
            users.Address AS address,
        
            tools.title AS t_title,
            tools.image
            
            FROM orders 
            
            INNER JOIN 
            users 
            ON 
            users.ID = user_id 
            
            INNER JOIN 
            tools
            ON
            tools.ID = tool_id 

            WHERE status != 1

            AND user_id = $session_id
          
            ORDER BY ID DESC ");
            
            // execute the statment
            $stmt->execute();
            
            //assing to variable
            $tools = $stmt->fetchAll(); ?> 

      <!-- // showe the all tools in page  -->
      <?php foreach($tools as $tool){ ?>

          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="course-grid course-style-3" style="background-color: #ffff;">
              <div class="course-header">
                <div class="course-thumb">
                  <img
                    src="admin/layout/images/users_images/tools/<?php echo $tool['image']?>"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>

              <div class="course-content">
                <h3 class="course-title mb-20">
                  <h4 href="#"><?php echo $tool['t_title']?></h4>
                </h3>
                <div class="course-footer mt-20 d-flex align-items-center justify-content-between">
                  <span><?php echo $tool['date']?></span>

                </div>
              </div>
            </div>
          </div>
          <!-- COURSE END -->

        <?php } ?>
      </div>
    </div>
  </section>
</div>
  <?php
}else{
  echo "<div class='container'>";
    echo "<div class='alert alert-warning'>يجب ان تقوم بتسجيل الدخول أولا ثم يمكنك تصفح هذه الصفحة  </div>";
  echo "</div>";
}
ob_end_flush();
?>
<?php include $tpl_tem .'footer.php'; ?>
