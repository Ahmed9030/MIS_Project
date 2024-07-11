<!--
=========================================
navbar for pages >> all pages expect index.php , index2.php 
=========================================
-->

<header class="header-style-1"> 
    <div class="header-navbar navbar-sticky">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="site-logo">
                    <a href="index.php">
                       
                <h3 class="p-relative txt-c mt-0">CreaTiveArt</h3>
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
                  <a href="index.php">الرئسية </a>



                  <li>
                    <a href="about.php">من نحن ؟</a>
                    <ul class="submenu">
                    <li><a href="drow-courses.php"> مدربة الرسم </a></li>
                    <li><a href="works-exhibition.php">معرض الاعمال </a></li>
                  
                    </li>
                  </ul>
                 <li>
              
                    <a href="drow-courses.php">الدورات </a>   
                  <ul class="submenu">
                    <li><a href="drow-courses.php">كورسات الرسم</a></li>
                    <li>
                      <a href="course-single.php">الدوره التدريبيه الفردية</a>
                    </li>
                  </ul>
                  
                </li>

                <li>
                  <a href="tools.php">معرض المنتجات</a>                   
                </li>

                <!-- showe the dashbord to user -->
                <?php if(isset($_SESSION['user'])){?>

                  <li>
                    <a href="dashbord.php"><?php echo $_SESSION['user']?></a>
                    <ul class="submenu">
                      <li><a href="dashbord.php">الملف الشخصي</a></li>
                      <li><a href="information.php?action=Edit&user_id=<?php echo $session_id?>">تعديل بياناتي </a></li>
                    </ul>
                  </li>

                <?php }?>

                <li>
                  <a href="contact.php">اتصل بنا</a>
                </li>
              </ul>

              <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
            </nav>

            <div class="header-btn d-none d-xl-block">

            <?php 
            if(isset($_SESSION['user'])){

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