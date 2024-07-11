<?php
/*
    ==========================================
    == item Page 
    == u can add | edit | delete items from here
    ==========================================
*/
ob_start();
session_id('ecommerce');
session_start();
$page_title = 'Items';
if(isset($_SESSION['username'])){

    include 'inti.php';
    
    $do = isset($_GET['action']) ? $_GET['action'] : 'manage';

    // if the page is mine page 
    if ($do == 'manage'){
       //select all courses except admin
            
       $stmt = $db->prepare("SELECT * FROM tools ORDER BY ID DESC ");
            
       // execute the statment
       
       $stmt->execute();
       
       //assing to variable
       $rows = $stmt->fetchAll();

        // start mange items tools if there's is items in database
        if(!empty($rows))
        {?>
            <h1 class="text-center">أدارة المنتجات</h1>
            <div class="container">
                <div class= "table-responsive"> 
                        <table class="mine-table mange-member text-center table table-bordered">
                            <tr>
                                <td>#ID</td>
                                <td>Image</td>
                                <td>Title</td>
                                <td>Price</td>
                                <td>Control</td>
                            </tr>
                        <?php 
                                foreach($rows as $row){
                                    echo "<tr>";
                                        echo "<td>" . $row['ID'] ."</td>";
                                        echo "<td>";

                                        if(empty($row['image'])){
                                            echo "<img src='layout/images/users_images/d_user_image.avif'>";
                                        }else{
                                            
                                            echo "<img src='layout/images/users_images/tools/" . $row['image'] ."' alt ='items image' >";
                                        }

                                        echo "</td>";
                                        echo "<td>" . $row['title'] ."</td>";
                                        echo "<td>" . $row['price'] ."ج</td>";
                                        echo "<td>
                                        <a href='items.php?action=edit&item_id=" . $row['ID'] . " ' class='btn btn-success'><i class='fa fa-edit'></i> Edit </a>
                                        <a href='items.php?action=delete&item_id= " . $row['ID'] . " 'class='btn btn-danger confirm' ><i class='fa fa-close'></i> Delete </a>";

                                       
                                        echo "</td>";
                                    echo "</tr>";
                                }
                        ?>
                        </table>
                        <a href='items.php?action=add' class="btn btn-primary"><i class="fa fa-plus"></i> أضافة منتج جديد  </a>
                    </div>
                </div>
            <?php 
        }else{

            echo "<div class='container'>";
                echo "<h2 class='text-center'> لا يوجد أدوات بعد!</h2>";
                echo '<a href="items.php?action=add" 
                class="btn btn-primary"><i class="fa fa-plus"></i>أضف منتج جديد </a>';
        
            echo "</div>";
        }

    }elseif ($do == 'add'){

        //  add page
        ?>
            
        <h1 class="text-center">أضافة منتج جديد</h1>
                <div class="container">
                    <form class="form-horizontal" action="?action=insert" method="POST" enctype="multipart/form-data">
                    <!-- start course field -->

                    <div class="form-group">
                        <label class="col-sm-2 control-label">عنوان المنتج</label>
                        <div class="col-sm-10 col-md-6">
                            <input type="text" name="title" class="form-control" required="required" autocomplete="off"  placeholder="يجب أن يكون اسم المنتج معبر اكثر عن هذا..">
                        </div>
                    </div>
                    <!-- end username field -->
                   
                    <!-- start Email field -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">السعر</label>
                        <div class="col-sm-10 col-md-6">
                            <input type="text" name="Price"  class="form-control" required ="required" placeholder="سعر المنتج">
                        </div>
                    </div>
                    <!-- end Email field -->
                    <!-- start image field -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">صورة للمنتج</label>
                        <div class="col-sm-10 col-md-6">
                            <input type="file" name="image"  class="form-control" required = "required">
                        </div>
                    </div>
                    <!-- end image field -->
                    <!-- start submit field -->
                    <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" value="نشر" class="btn btn-primary">
                        </div>
                    </div>
                    <!-- end submit field -->
                </form>
            </div>
        <?php 
    }elseif($do == 'insert'){
        // Insert page
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            echo   " <h1 class='text-center'>اضافة منتج </h1>" ;       
            echo   "<div class='container'>";


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
                $imageExtension = strtolower(end($imageExplode)); // jpg png.... then JPG PNG....

                
                // get variables from the from
                $title   =  $_POST['title'];
                $price   =  $_POST['Price'];
                
                // Validate the form
                $formError = array();

                if (strlen($title) < 4){
                    $formError[] =  "يجب أن يكون أسم العنوان أكثر <srtrong>من 4 حرف</strong>";
                }
                if (empty($title)){
                    $formError[] =  "لا تترك حقل العنوان <srtrong>فارغ</srtrong> حاول مرة أخري";
                }
                if (empty($price)){
                    $formError[] =  "يجب تحديد سعر المنتج لا تتركة الحقل  <srtrong>فارغ</srtrong> حاول مرة أخري";
                }
                if (!empty($imageNname) && ! in_array($imageExtension ,$imageAllowedExtension)){
                    $formError[] = "هذة الملف غير  <srtrong>غير مدعوم</strong>";
                }
                if (empty($imageNname)){
                    $formError[] = "الصورة  <srtrong>مطلوبة</strong>";
                }
                              
                // loop into errors array and echo it
                foreach($formError as $error){
                    $msg = "<div class='alert alert-danger'>". $error . "</div>";
                    redirectHome($msg ,'back', 6);
                    echo $msg;
                }

                // check there's is no error proceed the updata operation
                if (empty($formError)){

                    $image = rand(0 , 100000000) ."_" . $imageNname;
                    $path = "layout/images/users_images/tools//";

                    if(!is_dir($path)){

                        mkdir("layout/images/users_images/tools" , 0777 , true);
                    }

                    move_uploaded_file($imageTmp , $path . $image);

                    $check = checkItem("title" ,"tools" , $title );
                    
                    if ($check == 1){
                    
                        $msg = "<div class='alert alert-danger'>عفوا هذا العنوان  التي أدخلتله  موجود من قبل أختر أسم غيره!</div>";
                        redirectHome($msg ,'back', 6);

                    }else{

                        // Insert the database  with info
                        $stmt = $db->prepare("INSERT INTO 
                                                tools(image ,title  , price  )
                                            VALUES(:zimage ,:ztitle , :zprice )" );
                        $stmt->execute(array(
                            'zimage'   => $image,
                            'ztitle'   => $title,
                            'zprice'   => $price,
                        ));

                        // echo success message
                        $msg = '<div class="alert alert-success">تم أضافة الكورس في الموقع بنجاح يمكنك رفع محتوي الكورس الان في هذا الكورس </div>' ;
                        redirectHome($msg ,'back');
                    }
                }
                
            }else{
                // start header
                echo " <h1 class='text-center'>رسالة خطأ</h1>" ;       
                echo "<div class='container'>";
                
                    $msg = "<div class='alert alert-danger'>لا يجب أن تتصفح هذة الصفحة مباشرة </div>";
                    redirectHome($msg , 6);
                    
                
                echo "</div>";
                }
        echo "</div>";

    }elseif($do == 'edit'){
        // Edit page 

        // check if rquest $item_id is numeric && getn the integer of it  
        $item_id = isset($_GET['item_id']) && is_numeric($_GET['item_id']) ? intval($_GET['item_id']) : 0;

        // select all  data depend on this ID
        $stmt = $db->prepare(" SELECT * FROM tools WHERE  ID = ? LIMIT 1 ");
        $stmt->execute(array($item_id));
        $row =  $stmt->fetch();
        $count = $stmt->rowCount();

        // if there's such ID show data  the form 
        if ($count >0)
        {
            ?>
            
            <h1 class="text-center">تعديل بيانات المنتج </h1>
                    <div class="container">
                        <form class="form-horizontal" action="?action=update" method="POST" enctype="multipart/form-data">
                        <!-- start course field -->
                        <input type="hidden" name="id" value="<?php echo $row['ID']?>">
    
                        <div class="form-group">
                            <label class="col-sm-2 control-label">عنوان المنتج</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="title" value="<?php echo  $row['title']?>" class="form-control" required="required" autocomplete="off"  placeholder="يجب أن يكون اسم المنتج معبر اكثر عن هذا..">
                            </div>
                        </div>
                        <!-- end username field -->
                       
                        <!-- start Email field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">السعر</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="Price" value="<?php echo $row['price']?>" class="form-control" required ="required" placeholder="سعر المنتج">
                            </div>
                        </div>
                        <!-- end Email field -->
                        <!-- start image field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">صورة للمنتج</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="file" name="image"  class="form-control" >
                            </div>
                        </div>
                        <!-- end image field -->
                        <!-- start submit field -->
                        <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" value="تحديث" class="btn btn-primary">
                            </div>
                        </div>
                        <!-- end submit field -->
                    </form>
                </div>
            <?php 
        }else{

            echo "<div class='container'>";
            $msg = "<div class='alert alert-danger'>لا يوجد رقم منتج بهذا في قاعدة البيانات </div>";
            redirectHome($msg);
        echo "</div>";
        }

    }elseif($do == 'update'){
        //updata page

        echo   " <h1 class='text-center'>تحديث بيانات المنتج</h1>" ;       
        echo   "<div class='container'>";

        
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
                $imageExtension = strtolower(end($imageExplode)); // jpg png.... then JPG PNG....

                
                // get variables from the from
                $title   =  $_POST['title'];
                $price   =  $_POST['Price'];
                $id      =  $_POST['id'];
                
                // Validate the form
                $formError = array();

                if (strlen($title) < 4){
                    $formError[] =  "يجب أن يكون أسم العنوان أكثر <srtrong>من 4 حرف</strong>";
                }
                if (empty($title)){
                    $formError[] =  "لا تترك حقل العنوان <srtrong>فارغ</srtrong> حاول مرة أخري";
                }
                if (empty($price)){
                    $formError[] =  "يجب تحديد سعر المنتج لا تتركة الحقل  <srtrong>فارغ</srtrong> حاول مرة أخري";
                }
                if (!empty($imageNname) && ! in_array($imageExtension ,$imageAllowedExtension)){
                    $formError[] = "هذة الملف غير  <srtrong>غير مدعوم</strong>";
                }
                
                              
                // loop into errors array and echo it
                foreach($formError as $error){
                    $msg = "<div class='alert alert-danger'>". $error . "</div>";
                    redirectHome($msg ,'back', 6);
                    echo $msg;
                }

                // check there's is no error proceed the updata operation
                if (empty($formError)){

                    /// cehck if the image fild empty or not
                    if(empty($imageNname))
                    {
                        // get the old image 
                        $image_data  = get_fild("image" ,"tools" ,  "ID = $id");

                        $image = $image_data['image'];
                    
                    // uplode is not empty
                    }else
                    {
                        $image = rand(0 , 100000000) ."_" . $imageNname;
                        $path = "layout/images/users_images/tools//";
    
                        if(!is_dir($path)){
    
                            mkdir("layout/images/users_images/tools" , 0777 , true);
                        }
    
                        move_uploaded_file($imageTmp , $path . $image);
                    }

                    // updata the database  with info
                    $stmt = $db->prepare("UPDATE tools SET image= ? ,  title= ?  , price = ?   WHERE ID= $id");
                    $stmt->execute(array($image , $title , $price ));
                    
                    // echo success message
                    $success_msg =  '<div class="alert alert-success">  تم تحديث البيانات بنجاح</div>' ;
                    redirectHome($success_msg ,'back');
                
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


    }elseif($do == 'delete'){

         // delete page

         echo " <h1 class='text-center'>حذف منتج </h1>" ;       
         echo "<div class='container'>";

             // check if rquest $userid is numeric && GET the integer of it  
             $item_id = isset($_GET['item_id']) && is_numeric($_GET['item_id']) ? intval($_GET['item_id']) : 0;
             // delete all  data depend on this ID
               $check = checkItem('ID','tools' , $item_id);
             // if there's such ID show data  the form 
             if ($check > 0 ){
                 
                 // delete the user from database    
                 $stmt = $db->prepare("DELETE FROM tools  WHERE ID = :zitem");
                 $stmt->bindParam(':zitem' , $item_id);
                 $stmt->execute();

                 // echo success message
                 $msg  = '<div class="alert alert-success"> تم حذف المنتج بنجاح</div>' ;
                 redirectHome($msg ,'back');
             }else{
                 
                 $msg = "<div class='alert alert-danger'>لا يوجد رقم  بهذا في قاعدة البيانات </div>";
                 redirectHome($msg , 6);
             
                 echo "</div>";
             }
             
        
    }else{
        echo "Error there's no page";
    }
    include $tpl. "foooter.php";
}