<?php 

$userid=isset($_GET['ID']) && is_numeric($_GET['ID']) ? intval($_GET['ID']) :0;
$stmt = $db->prepare("SELECT * FROM users WHERE id=? LIMIT 1") ;
$stmt->execute(array( $session_id));
$user = $stmt->fetch();

?>

<link rel="stylesheet" href="assets/css2/style 2.css">


<div class="d-flex" id="wrapper">
<!--start header 2-->


<div class="bg-white">
  
  <div class="list-group list-group-flush my-3">

  <a href="#" class="logo">
      <img src="././admin/layout/images/users_profile/<?php echo $user['image']?>"  alt="user image profile">
    </a>

<a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
<a href="dashbord.php"><i class="fas fa-user me-2" style="font-size: 18px;"></i>الرئسية </a>
  </a>

  <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
  <a href="information.php"><i class="fas fa-database me-2" style="font-size: 18px;"></i>بياناتي</a>
  </a>

  <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
   <a href="information.php?action=tools"> <i class="fas fa-paintbrush notification-icon me-2"></i>الأدوات </a>
  </a>

  <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
  <a href="information.php?action=courses">  <i class="fas fa-graduation-cap me-2"></i>الكورس الذى تم الاشتراك فيه </a>
  </a>

  <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
   <a href="logout.php"> <i class="fas fa-sign-out-alt logout-icon me-2"></i>تسجيل خروج </a>
  </a>
</div>
 
</div>
<!--end header 2-->
</div>