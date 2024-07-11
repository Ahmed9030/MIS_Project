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
                      <li class="active" aria-current="page">دوره تدربيه</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


  <!--course section start-->

 
<div class="container mt-5">
  <h1 class="text-center mb-4">دورات الكورس</h1>
  </div>
  <?php  
  // get all videos of course from database
  // $stmt = $db->prepare("SELECT * 
  //                   FROM 
  //                     videos
  //                   WHERE
  //                     course_id =  13
  //                   AND 
  //                     user_id = 5

  //                   ORDER BY course_id
  //                   DESC
  //                   ");
  // $stmt->execute();
  // $videos = $stmt->fetchAll();
  ?>
  <!--start couese-->
  <div class="container mt-5">
  <div class="row">
  <?php 
    // foreach($videos as $v ){
      ?>
  
        <div class="col-md-4">
          <div class="card video-card" data-toggle="modal" data-target="#videoModal1">
            <img src="assets/images/IMG-20240310-WA0003.jpg" class="card-img-top" alt="Video Thumbnail">
            <div class="card-body">
              <h5 class="card-title"><?php  ?></h5>
            </div>
          </div>
        </div>
    
        <div class="col-md-4">
          <div class="card video-card" data-toggle="modal" data-target="#videoModal1">
            <img src="assets/images/IMG-20240310-WA0003.jpg" class="card-img-top" alt="Video Thumbnail">
            <div class="card-body">
              <h5 class="card-title"><?php  ?></h5>
            </div>
          </div>
        </div>
    
    <!-- حاوية الفيديو والقائمة الجانبية -->
    <div class="container-fluid video-container">
      <!-- الفيديو الرئيسي -->
      <div class="video-main">
          <div class="ratio ratio-16x9" id="videoPlayer"> <!-- مشغل الفيديو -->
            <iframe width="363" height="200" src="https://www.youtube.com/embed/PpI6gH6xE7I?si=wbnj_tsxUlS8jCWK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
      </div>

        
            <div class="video-list-item" onclick="playVideo('https://www.youtube.com/embed/lvOi035bb-o?si=rP-PGUYUGwM50Jfw')">
                <img src="assets/images/IMG-20240310-WA0003.jpg" alt="صورة مصغرة أخرى">
                <div class="video-info">
                    <strong>الفيديو الثالث من كورس التاسيس</strong>
                    
                </div>
            </div>
        </div>
      <?php ?>
    </div>
    
<!--end couese-->

<!--course section end-->

<?php include $tpl_tem .'footer.php'; ?> 

<!-- Footer section End -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script>
      function playVideo(videoUrl) {
          const videoPlayer = document.getElementById("videoPlayer");
          videoPlayer.innerHTML = `<iframe src="${videoUrl}" title="فيديو" allowfullscreen></iframe>`;
      }
  </script>

</body>
</html>

