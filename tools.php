<?php 
ob_start();
include 'inti.php' ;

$do = isset($_GET['action']) ? $_GET['action'] : 'tools';


if($do == 'tools'){
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
                <li class="active" aria-current="page">الادوات</li>
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
              <div class="col-4">
                <div class="row">
                
                    
                      <div class="position-relative">                      
                      </div>
                    </a>                
                  </div>
                  <div class="col-10 offset-1">
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
          </div>
        </div>

        // 
        <div class="container">
          <div class="row justify-content-center">

          <!-- get the all tools from database -->
          <?php $tools = getAllFrom('*', 'tools' , '' , '' ,'ID' , 'desc'); ?> 

          <!-- // showe the all tools in page  -->
          <?php foreach($tools as $tool){ ?>

              <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="course-grid course-style-3">
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
                      <h4 href="#"><?php echo $tool['title']?></h4>
                    </h3>
                    <div class="course-footer mt-20 d-flex align-items-center justify-content-between">
                      <div class="course-price"><?php echo $tool['price']?>ج</div>
                      <a
                      href="tools.php?action=checkout&toolid=<?php echo $tool['ID']?>"
                      class="btn btn-main-outline btn-radius btn-sm"
                      >اشتري الان  <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- COURSE END -->

            <?php } ?>
          </div>
        </div>
      </section>
      <!--tools section end-->
      <?php include $tpl_tem .'footer.php'; ?> 

<?php 
}elseif($do == 'checkout'){

  // check if rquest $coid is numeric && get the integer of it  
  $toolid = isset($_GET['toolid']) && is_numeric($_GET['toolid']) ? intval($_GET['toolid']) : 0;

  // select all  data depend on this ID
  $stmt = $db->prepare(" SELECT * FROM  tools  WHERE  ID= ? LIMIT 1 ");
  $stmt->execute(array($toolid));
  $row =  $stmt->fetch();
  $count = $stmt->rowCount();

  if($count > 0){
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
                <li><a href="index.php">الرئسية</a></li>
                <li class="active" aria-current="page">الادوات</li>
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
        <form action="?action=done_checkout" method="POST">
          <div class="form">
          <input type="hidden" name="toolid" value="<?php echo $toolid?>">
            <div class="card space icon-relative">
              <label class="label">حامل البطاقة:</label>
              <input type="text" name="name" class="input" placeholder="سوق الترميز " />
              <i class="fas fa-user"></i>
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
        echo "<div class='alert alert-warning'>خظأ:لم يتم العثور علي هذا المنتج في قاعدة البيانات لدينا , ربما نفذت الكمية , تواصل معنا من خلال صفحة التواصل أذا كنت تريد الاستفسار عن شئ</div>";
      echo "</div>";
    }
    ?>

<?php
}elseif($do == 'done_checkout'){
// subscribe page

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){


    echo   " <h1 class='text-center'>صفحة الدفع</h1>" ;       
    echo   "<div class='container'>";
    // get the var from form
    $userid          =  $session_id;
    $toolid          =  $_POST['toolid'];
    $name            =  filter_str($_POST['name']);
    $card_number     =  filter_var($_POST['card_number'] , FILTER_SANITIZE_NUMBER_INT);
    $end_date        =  filter_var($_POST['expiry-date'] , FILTER_SANITIZE_NUMBER_INT);
    $cvc             =  filter_var($_POST['cvc'] , FILTER_SANITIZE_NUMBER_INT);


    $getall = $db->prepare("SELECT * FROM tools where ID = $toolid");

    $getall->execute();

    $tools = $getall->fetch();



    // check if he user buy it befor or not 
    $check  = checkItem("ID" , "tools" , $toolid , "");


    // Validate the form

    $formError = array();

    // put the error messages in $formError array
    if($check < 0 ){
      $formError[] = "خظأ:لم يتم العثور علي هذا المنتج في قاعدة البيانات لدينا , ربما نفذت الكمية , تواصل معنا من خلال صفحة التواصل أذا كنت تريد الاستفسار عن شئ";
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

         
      $stmt = $db->prepare("INSERT INTO 
                          orders(user_id , tool_id , date)
                          VALUES(:zuser_id , :ztool_id , now())" );
      $stmt->execute(array(
          'zuser_id'   => $userid,
          'ztool_id'   => $toolid
      ));

      // echo success message
      $msg = "<div class='alert alert-success'>لقد قمت بشراء ' ". $tools['title'] ." ' نحن في طريقنا الان</div>";
      echo $msg;
    }
    echo "</div>";
  }    
?>


<?php 
}else{
  echo "<div class='container'>";
    echo "<div class='alert alert-warning'>خظأ: هذا الرابط غير صحيح</div>";
  echo "</div>";
}

