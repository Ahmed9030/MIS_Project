<?php 
ob_start();
include 'inti.php';
    
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
              <li class="active" aria-current="page">اتصل بنا</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $user_mail = filter_var($_POST['email'] , FILTER_SANITIZE_EMAIL);
  $message  = filter_str($_POST['mesg']);

  $formError = array();

  if(empty($user_mail)){
    $formError[] = "يجب أن تكتب البريد الألكتروني";
  }
  if(empty($message)){
    $formError[] = "يجب أن تكتب محتوى الرسالة";
  }
  if(!empty($message) && $message < 10){
    $formError[] = "يجب ان لا تقل الرسالة عن 10 أحرف";
  }


  // if there's no errors send Email [mail(to , subject , ,message , header)]
  if(empty($formError)){


    //Recipients
    $mail->setFrom($user_mail);
    $mail->addAddress("ag1386840@gmail.com");     //Add a recipient      
    $mail->addReplyTo($user_mail, 'we get your messge');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Message from user CreaTiveArt from' ." " .  $user_mail;
    $mail->Body    = $message;

 

    if($mail->send()){
      $msg_success = '<div class="alert alert-success">تم أرسال رسالتك بنجاح</div>';
    }else{
      
      $msg_success = '<div class="alert alert-danger">لم يتم أرسال الرسالة حدث خطأ ما</div>';
      // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
 
  }
}

?>

 <!--اتصل بنا-->
 <div class="container">
  <div class="text-center m-5">
      <h3>اتصل بنا</h3>
      <p>يمكنك التواصل معنا في اي وقت</p>
  </div>
  <div class="card mb-3" >
      <div class="row no-gutters">
        <div class="col">
         
          
          <div class="card-body">
            <h5 class="card-title">اتصل بنا</h5>
            <p class="card-text">هذه بطاقه اوسع تحتوي علي نص داعم ادناه كمقدمه طبيعيه لمحتوي اضافي.هذالمحتوي طويل بعض الشئ.</p>
           
            <form action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="POST">

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">لن نشارك بريدك الالكتروني مع اي شخص اخر ابدا.</div>
              </div>
              <div class="mb-3">
                <label >اترك رساله</label>
               <textarea class="form-control" name="mesg"></textarea>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label>اضهار</label>
              </div>
                <!-- <a
                  href="Register.html"
                    class="btn btn-grey btn-sm rounded"
                    >انضم الان 
                    <i class="fal fa-angle-right"></i></a> -->
                <input class="btn btn-grey btn-sm rounded" type="submit" value="أرسل الأن">
                
                <?php 
                if(!empty($formError)){

                 foreach($formError as $error){

                  echo "<div class='alert alert-danger'>". $error ."</div>";

                }
              }
                if(isset($msg_success)){
                  echo $msg_success;
                }
              ?>
            </form>
            
          </div>
        </div>
      </div>
    </div>

</div>

<?php 
include $tpl_tem .'footer.php'; 

ob_end_flush();
?>



