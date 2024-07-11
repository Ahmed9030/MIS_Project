<?php 
ob_start();
include 'inti.php';






?>

<!--====== Header End ======-->
    <!--start form-->
    <div class="container my-5">
        
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="text-sm-center mb-4">تسجيل الدخول</h2>
                <form class="billing-form bg-light float-start p-3" action="user.php" method="POST">
                    <div class="row g-3">
                        <h4>مرحبا </h4>
                 
                        <div class="col-12">
                            <label class="form-label">اسم المستخدم</label>
                            <input type="text" class="form-control" placeholder="اسم المستخدم" required="" name="user">
                        </div>
                        <div class="col-12">
                            <label class="form-label">البريد الالكترونى</label>
                            <input type="email" class="form-control" placeholder="البريد الالكترونى" required="" name="email">
                        </div>
                        <div class="col-12">
                            <label class="form-label">كلمة المرور</label>
                            <input type="text" class="form-control" placeholder="كلمة المرور" required="" name="pass">
                        </div>
                     
                        <div class="col-12">
                            <label class="form-label">العنوان</label>
                            <input type="text" class="form-control" placeholder="العنوان" required="" name="adress">
                        </div>
                        <div class="col-12">
                            <label class="form-label">رقم الهاتف</label>
                            <input type="text" class="form-control" placeholder="رقم  الهاتف" required="" name="phone">
                        </div>
                     
               
                        
                   
                    <button class="btn btn-primary float-end" type="submit">سجل الان</button>
                </form>
            </div>
        </div>
    </div>
<!--end form-->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="js/jquery-3.7.1.min.js">
    <link rel="stylesheet" href="js/popper.min.js">

<?php 
include $tpl_tem .'footer.php'; 

ob_end_flush();
?>
