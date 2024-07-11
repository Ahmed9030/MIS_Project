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
        <div class="form">
          <div class="card space icon-relative">
            <label class="label">حامل البطاقة:</label>
            <input type="text" class="input" placeholder="سوق الترميز" />
            <i class="fas fa-user"></i>
          </div>
          <div class="card space icon-relative">
            <label class="label">رقم الهاتف:</label>
            <input type="text" class="input" placeholder="رقم التليفون" />
            <i class="fas fa-user"></i>
          </div>
          <div class="card space icon-relative">
            <label class="label">رقم البطاقة:</label>
            <input
              type="text"
              class="input"
              data-mask="0000 0000 0000 0000"
              placeholder="رقم البطاقة "
            />
            <i class="far fa-credit-card"></i>
          </div>
          <div class="card-grp space">
            <div class="card-item icon-relative">
              <label class="label">تاريخ انتهاء الصلاحية:</label>
              <input
                type="text"
                name="expiry-data"
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
                class="input"
                data-mask="000"
                placeholder="000"
              />
              <i class="fas fa-lock"></i>
            </div>
          </div>

          <input class="btn btn-primary rounded d-block mx-auto" type="submit" value="دفع">
        </div>
      </div>
    </div>

    <!-- Checkout form ENd -->

    <?php 
include $tpl_tem .'footer.php'; 

ob_end_flush();
?>