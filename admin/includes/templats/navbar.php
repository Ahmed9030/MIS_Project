<!--
=========================================
navbar for pages >> admin apge 
=========================================
-->

<header class="header-style-1"> 
    <div class="header-navbar navbar-sticky">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="site-logo">
                    <a href="index.php">
                       
                <h3 class="p-relative txt-c mt-0">Admin/CreaTiveArt</h3>
              </a>
            </div>

            <div class="offcanvas-icon d-block d-lg-none">
              <a href="#" class="nav-toggler"><i class="fal fa-bars"></i></a>
            </div>

            <div class="header-category-menu d-none d-xl-block">
              <ul>
                <li class="has-submenu"></li>
              </ul>
            </div>

            <nav class="site-navbar ms-auto">
              <ul class="primary-menu">
                <li class="current">
                  <a href="dashboard.php">الرئسية </a>

                  <li>
                    <a href="members.php">الاعضاء</a>
                    
                  <li>
                  <a href="courses.php"> الدورات</a>
                  <ul class="submenu">
                    
                    <li><a href="courses.php">الكورسات</a></li>
                    <li><a href="courses_details.php"> تفاصيل الكورس </a></li>
                    <li><a href="videos.php"> فيديوهات الكورسات</a></li>                   
                  </ul>
                </li>
                
                <li> <a href="subscribe.php"> الأشتراكات </a></li>
                <li> <a href="items.php">المنتجات المعروضة </a></li>
                
                
                <li>
                <a href="orders.php"> الطلبات</a>
                <ul class="submenu">
                   <li> <a href="orders.php">الطلبات</a></li>
                   <li> <a href="orders.php?page=done_orders">الطلبات المنتهية</a></li>
              </ul>
            </li>

                <!-- showe the dashbord to user -->
                <?php if(isset($_SESSION['username'])){?>

                  <li>
                    <a href="dashbord.php"><?php echo $_SESSION['username']?></a>
                    <ul class="submenu">
                      <li><a href="dashbord.php">الملف الشخصي</a></li>
                    </ul>
                  </li>

                <?php }?>

            </nav>
            <div class="header-btn d-none d-xl-block">

            <?php 
            if(isset($_SESSION['username'])){

              echo  "<a href='logout.php'>Logout</a>" ; 

            }else{
            ?>
                <a href="login.php" class="login">تسجيل الدخول</a>
                <a href="Register.php" class="btn btn-main-2 btn-sm-2 rounded">
                  سجل الان</a
                > 
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </header>