<?php 
ob_start();
include 'inti.php';


$do = isset($_GET['action']) ? $_GET['action'] : 'manage';

if($do == 'manage'){


  $stmt = $db->prepare("SELECT * FROM users WHERE id=? LIMIT 1") ;
  $stmt->execute(array( $session_id));
  $row=$stmt->fetch();
  $count=$stmt->rowCount();

  if($count > 0){

?>

<link rel="stylesheet" href="assets/css2/style 2.css">


<div class="d-flex" id="wrapper">
 
<!-- start sidebar -->
<?php include 'includes/templats/sidebar.php'?>
<!-- end sidebar -->

<div class="container my-5">
  <div class="row">
    <div class="col-lg-6 offset-lg-3">

    <div href="#" class="logo text-center">
      <img src="././admin/layout/images/users_profile/<?php echo $user['image']?>"  alt="">
    </div>    
      <table class="table table-striped">
        <tbody>

          <tr>
            <th scope="row">الاسم</th>
            <td><?php echo $user['Username']?></td>
          </tr>
  
          <tr>
            <th scope="row">البريد الإلكتروني</th>
            <td><?php echo $user['Email']?></td>
          </tr>

          <tr>
            <th scope="row">الهاتف</th>
            <td><?php echo $user['Phone']?></td>
          </tr>

          <tr>
            <th scope="row">العنوان</th>
            <td><?php echo $user['Address']?></td>
          </tr>

          <tr>
            <th scope="row">تاريخ أنشاء الحساب</th>
            <td><?php echo $user['Date']?></td>
          </tr>
          
          <a href='information.php?action=Edit&user_id=<?php echo $user['ID']?>' style="
            background-color: #1162FC;
            color: #ffff;
            border-radius: 4px;margin-left: 10px;"
            >
            <i class='fa fa-edit'></i> تعديل </a>
        </tbody>
      </table>
    </div>
  </div>
</div>



<?php }else{
  echo "<script>alert(' User does not exist! '); window.location.href='login.php';</script>";

} ?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php 

}elseif($do == 'Edit')
  {  ?>
<div class="d-flex" id="wrapper">

    <!-- start sidebar -->
    <?php include 'includes/templats/sidebar.php'?>
    <!-- end sidebar -->
<?php
       // check if rquest $userid is numeric && getn the integer of it  
       $userid = isset($_GET['user_id']) && is_numeric($_GET['user_id']) ? intval($_GET['user_id']) : 0;

       // select all  data depend on this ID
       $stmt = $db->prepare(" SELECT * FROM users WHERE  ID = ? LIMIT 1 ");
       $stmt->execute(array($userid));
       $row =  $stmt->fetch();
       $count = $stmt->rowCount();

       // if there's such ID show data  the form 
       if ($count >0){

        if($row['ID'] == $session_id)
        {

        
           ?>
      <div class="container ">
      <div class="row">
        <div class="col-xl-7">
         <div class="card">
         <div class="card-body">
        <form class="form-horizontal" action="?action=updata" method="POST" enctype="multipart/form-data"  >
          <input type="hidden" name="userid" value="<?php echo $userid?>" >
          <!-- start username field -->
          <div class="form-group">
              <label class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10 col-md-6">
                  <input type="text" name="username" class="form-control" value ="<?php echo $row['Username']?>" autocomplete="off" required="required">
              </div>
          </div>

          <!-- start image field -->
          <div class="form-group">
              <label class="col-sm-2 control-label">Change Image</label>
              <div class="col-sm-10 col-md-6">
                  <input type="file" name="image"  class="form-control">
              </div>
          </div>
          <!-- end image field -->
          <!-- start submit field -->

          <!-- start phone field -->
          <div class="form-group">
              <label class="col-sm-2 control-label">Phone</label>
              <div class="col-sm-10 col-md-6">
                  <input type="text" name="phone" class="form-control" value ="<?php echo $row['Phone']?>" autocomplete="off" required="required">
              </div>
          </div>
          <!-- end phone field -->

          <!-- start Address field -->
          <div class="form-group">
              <label class="col-sm-2 control-label">Address</label>
              <div class="col-sm-10 col-md-6">
                  <input type="text" name="address" class="form-control" value ="<?php echo $row['Address']?>" autocomplete="off" required="required">
              </div>
          </div>
          <!-- end Address field -->

          <!-- start Password field -->
          <div class="form-group">
              <label class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10 col-md-6">
                  <input type="hidden" name="oldpassword" value="<?php echo $row['Password']?>">
                  <input type="password" name="newpassword" class="form-control" autocomplete="new-password" placeholder="Change Your Old Password">
              </div>
          </div>
          <!-- end Password field -->
          <!-- start Email field -->
          <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10 col-md-6">
                  <input type="Email" name="email" value="<?php echo $row['Email']?>" class="form-control" required ="required">
              </div>
          </div>
          <!-- end Email field -->
          <!-- start submit field -->
          <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" value="تحديث" class="btn btn-primary" style="margin-bottom: -38px;" >
              </div>
          </div>
          <!-- end submit field -->
      </form>
        </div>
      </div>
        </div>

      
</div>
</div>
</div>

<?php 
    }else{
      echo "<div class='container'>";
      $msg = "<div class='alert alert-danger'>انت لا تملك هذا الحساب , غير مسموح لك!</div>";
  echo "</div>";
    }
  }else
  {
    echo "<div class='container'>";
    $msg = "<div class='alert alert-danger'>لا يوجد رقم مستخدم بهذا في قاعدة البيانات </div>";
    redirectHome($msg);
echo "</div>";

  }
}elseif($do == 'updata')
  {  ?>
<div class="d-flex" id="wrapper">

    <!-- start sidebar -->
    <?php include 'includes/templats/sidebar.php'?>
    <!-- end sidebar -->
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){



  // get var from uplod image 

  $imageNname = $_FILES['image']['name'];
  $imageType  = $_FILES['image']['type'];
  $imageTmp   = $_FILES['image']['tmp_name'];
  $imageSize  = $_FILES['image']['size'];

  // list of allowed file type to uplod

  $imageAllowedExtension = array("jpeg" , "jpg" , "png" , "gif");
  
  // explode the name of image 
  $imageExplode = explode('.' ,$imageNname);

  // lower and get the type of image
  $imageExtension = strtolower(end($imageExplode)); // jpg png....

  // get variables from the from

  $id    =  $_POST['userid'];
  $user  =  $_POST['username'];
  $email =  $_POST['email'];
  $phone =  $_POST['phone'];
  $add   =  $_POST['address'];

  
  // password trick
  $pass = empty($_POST['newpassword']) ?$_POST['oldpassword'] :password_hash($_POST['newpassword'] , PASSWORD_DEFAULT);


  // Validate the form
  $formError = array();
  if (strlen($user) < 4){
      $formError[] =  "لا يجب أن أسم المستخدم يكون أقل <srtrong>من 4 Characters</strong>";
  }
  if (strlen($user) > 20){
      $formError[] =  "لا يجب أن يتكون الاسم أكثر <srtrong>من 20 Characters</srtrong> ";
  }
  if (empty($user)){
      $formError[] =  "لا تترك حقل أسم المستخدم <srtrong>فارغ</srtrong> حاول مرة أخري";
  }
  if (empty($email)){
      $formError[] =  "لا تترك حقل الاميل <srtrong>فارغ</srtrong>حاول مرة أخري";
  }
  if (!empty($imageNname) && ! in_array($imageExtension ,$imageAllowedExtension)){
      $formError[] = "هذة الملف غير  <srtrong>غير مدعوم</strong>";
  }
  
  // loop into errors array and echo it
  foreach($formError as $error){
      $msg = "<div class='alert alert-danger'>". $error . "</div>";
      redirectHome($msg ,'back', 6);
  }
  // check there's is no error proceed the updata operation
  if (empty($formError)){


      /// cehck if the image fild empty or not
      if(empty($imageNname))
      {
          // get the old image 
          $image_data  = get_fild("image" ,"users" ,  "ID = $id");

          $image = $image_data['image'];
      
      // uplode is not empty
      }else{
          
          $image = rand(0 , 100000000) ."_" . $imageNname;
          $path = "././admin/layout/images/users_profile/";

          
          if(!is_dir($path)){

              mkdir("././admin/layout/images/users_profile/" , 0777 , true);
          }

          move_uploaded_file($imageTmp , $path . $image);
      }
      // check if there is other username 'and' id in database or not
      $stmt2 = $db->prepare("SELECT * FROM users WHERE Username = ? AND ID != ?");
      $stmt2->execute(array($user , $id));
      $check = $stmt2->rowCount();

      // echo error message if there's is 
      if ($check == 1){

          $msg = "<div class='alert alert-danger'>عفوا هذا المستخدم موجود بافعل</div>";
          redirectHome($msg ,'back');
      
      // echo if there's is not
      }else{
          // updata the database  with info
          $stmt = $db->prepare("UPDATE users SET Username= ? , image = ?,  Email= ? , Password= ? , Phone = ? , Address = ? WHERE ID= ?");
          $stmt->execute(array($user , $image , $email ,$pass, $phone, $add , $id));
          
          echo "<div class='container'>";
          // echo success message
          $success_msg =  '<div class="alert alert-success">' . $stmt->rowCount() . " تم تحديث". "</div>" ;
          redirectHome($success_msg ,'back');
          echo "</div>";
      }
  }
  
}else{
 
  // start header   
  echo "<div class='container'>";
 
  // echo the error message
  $errorMsg =  "<div class='alert alert-danger'>غر مسموح باتصفح في هذة الصفحة مباشرة</div>";
  echo redirectHome($errorMsg);

  echo "</div>";
  echo "</div>";
}
?>
</div>
<?php
}elseif($do  == "tools")
{ ?>

  <div class="d-flex" id="wrapper">

    <!-- start sidebar -->
    <?php include 'includes/templats/sidebar.php'?>
    <!-- end sidebar -->
    <div class="container">
      <div class="row justify-content-center">
        <h1 style="text-align: center;">طلبات لم تستلم بعد</h1>

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

          <div class="col-xl-4 col-lg-4 col-md-6" style="margin: 33px;">
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
}elseif($do == 'courses')
{ ?>
   <div class="d-flex" id="wrapper">

<!-- start sidebar -->
<?php include 'includes/templats/sidebar.php'?>
<!-- end sidebar -->
<div class="container">
<div class="row home-image">
<h1 style="text-align: center;">الكورسات</h1>

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
  
  </div>
</div>
</div>

<?php  
}
?>


<?php 

include $tpl_tem .'footer.php';

ob_end_flush();
?>












































































































