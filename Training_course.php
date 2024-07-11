<?php 
ob_start();
include 'inti.php';

if(isset($_SESSION['user'])){

  // get the course id 
  $courseid = isset($_GET['coid']) && is_numeric($_GET['coid']) ? intval($_GET['coid']) : 0;

  $check  = checkItem("course_id" , "videos " , $courseid , '');

  if($check > 0 ){ 

  // get the user id
  $userid = $session_id;

  // check if the user buy the coures or not 
  $check  = checkItem("user_id" , "subscribe" , $userid , "and course_id = {$courseid}");

  // showe the course is the user buy it 
  if($check > 0){
    // get all videos from this courses
  $stmt = $db->prepare("SELECT videos.*,
                          courses.image AS co_image ,
                          courses.title AS co_title 
                      FROM 
                          videos
                      INNER JOIN 
                          courses 
                      ON 
                          courses.ID = videos.course_id

                      WHERE course_id = $courseid
                      ORDER BY 
                          course_id
                      DESC");

  $stmt->execute();

  $videos = $stmt->fetchAll();


?>

<!--====== Header End ======-->
<section class="page-header">
  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-8">
        <div class="title-block">
          <div class="text-center fw-bold fs-1 mt-5 text-white mb-5">
          دورة <span class="learn"><?php echo $videos[0]['co_title']?></span>
          </div>
          
          <ul class="header-bradcrumb justify-content-center">
            <li><a href="index.html">Home</a></li>
            <li class="active" aria-current="page">Courses</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container mt-5">
  <h1 class="text-center mb-4"> محتوي الكورس </h1>
</div>

</head>
<body>
    <!-- حاوية الفيديو والقائمة الجانبية -->
    <div class="container-fluid video-container">
        <!-- الفيديو الرئيسي -->
        <div class="video-main">
            <div class="ratio ratio-16x9" id="videoPlayer"> <!-- مشغل الفيديو -->
            <iframe 
                width="363" 
                height="200" 
                src="<?php echo $videos[0]['v_link']?>" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                allowfullscreen></iframe>
              </div>
            </div>
        
        <!-- القائمة الجانبية -->
        <div class="video-sidebar">
            <h4>جميع الفيديوهات</h4>
            <hr>
            <!-- قائمة بالفيديوهات -->
            <?php foreach ($videos as $v): ?>
              <div class="video-list-item" onclick="playVideo('<?php echo $v['v_link']?>')">
                  <img src="assets/images/IMG-20240310-WA0005.jpg" alt="صورة مصغرة">
                  <div class="video-info">
                      <h5 class="card-title"><?php echo $v['title']?></h5>
                  </div>
              </div>
            <?php endforeach; ?>
        </div> 
    </div>

    
<?php 
include $tpl_tem .'footer.php';
    }else{
      echo "<div class='container'>";
        echo "<div class='alert alert-warning'>انت لم تشترك في هذا الكورس بعد , يجب عليك الاشتراك اولا ثم يمكنك مشاهدة محتويات الكورس</div>";
      echo "</div>";
    }
  }else{
    echo "<div class='container'>";
      echo "<div class='alert alert-success'>لا يوجد محتوي بعد , سوف يتم تحميل محتوي هذا الكورس قريبا جدا</div>";
    echo "</div>";
}
}

?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- سكريبت لتشغيل الفيديو في المشغل الرئيسي -->
<script>
    function playVideo(videoUrl) {
        const videoPlayer = document.getElementById("videoPlayer");
        videoPlayer.innerHTML = `<iframe src="${videoUrl}" title="فيديو" allowfullscreen></iframe>`;
    }
</script>


</body>
</html>
