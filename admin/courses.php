<?php 
        /*
            ==========================================
            == mange courses page 
            == u can add | edit | delete courses from here
            ==========================================
        */
    ob_start();
    session_id('ecommerce');
    session_start();
    $page_title = 'Courses';
    if(isset($_SESSION['username'])){

        include 'inti.php';

        $do = isset($_GET['action']) ? $_GET['action'] : 'manage';

        // start manage page

        if ($do == 'manage'){
            // mange page

            //select all courses except admin
            
            $stmt = $db->prepare("SELECT * FROM courses ORDER BY ID DESC ");
            
            // execute the statment
            
            $stmt->execute();
            
            //assing to variable
            $rows = $stmt->fetchAll();

        // start mange courses if there's is courses

        if (!empty ($rows)){
            ?>
            <h1 class="text-center">أدارة الكورسات</h1>
            <div class="container">
                <div class= "table-responsive"> 
                        <table class="mine-table mange-member text-center table table-bordered">
                            <tr>
                                <td>#ID</td>
                                <td>Image</td>
                                <td>Title</td>
                                <td>Price</td>
                                <td>Date</td>
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
                                            
                                            echo "<img src='layout/images/users_images/" . $row['image'] ."' alt ='Course image' >";
                                        }

                                        echo "</td>";
                                        echo "<td>" . $row['title'] ."</td>";
                                        echo "<td>" . $row['price'] ."ج</td>";
                                        echo "<td>".  $row['date']."</td>";
                                        echo "<td>
                                        <a href='courses.php?action=Edit&co_id=" . $row['ID'] . " ' class='btn btn-success'><i class='fa fa-edit'></i> Edit </a>
                                        <a href='courses_details.php?action=Edit&co_id=" . $row['ID'] . " ' class='btn btn-primary'><i class='fa fa-edit'></i> Details </a>
                                        <a href='courses.php?action=delete&co_id= " . $row['ID'] . " 'class='btn btn-danger confirm' ><i class='fa fa-close'></i> Delete </a>";

                                       
                                        echo "</td>";
                                    echo "</tr>";
                                }
                        ?>
                        </table>
                        <a href='courses.php?action=add' class="btn btn-primary"><i class="fa fa-plus"></i> أضافة كورس جديد  </a>
                    </div>
                </div>
            
            <?php 
        }else{
            echo "<div class='container'>";
                echo "<h2 class='text-center'> There's no members!</h2>";
                echo '<a href="members.php?action=add" 
                class="btn btn-primary"><i class="fa fa-plus"></i> New Member</a>';
        
        echo "</div>";
        }
        // end mange members if there's is memebers
        }elseif($do == "add"){
            //  add page
            ?>
            
            <h1 class="text-center">أضافة كورس جديد</h1>
                    <div class="container">
                        <form class="form-horizontal" action="?action=insert" method="POST" enctype="multipart/form-data">
                        <!-- start course field -->

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="title" class="form-control" required="required" autocomplete="off"  placeholder="Type Your Username">
                            </div>
                        </div>
                        <!-- end username field -->
                        <!-- start Password field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Descrption</label>
                            <div class="col-sm-10 col-md-6">
                                <textarea  name="descrption" class="form-control" required="required" ></textarea>
                            </div>
                        </div>
                        <!-- end Password field -->
                        <!-- start Email field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Price</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="Price"  class="form-control" required ="required" placeholder="سعر الكورس">
                            </div>
                        </div>
                        <!-- end Email field -->
                        <!-- start image field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Course Image</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="file" name="image"  class="form-control" required = "required">
                            </div>
                        </div>
                        <!-- end image field -->
                        <!-- start submit field -->
                        <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" value="أضافة البيانات" class="btn btn-primary">
                            </div>
                        </div>
                        <!-- end submit field -->
                    </form>
                </div>
            <?php 
            
        }elseif($do == 'insert'){
            // Insert page
    
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            echo   " <h1 class='text-center'>اضافة كورس </h1>" ;       
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
                $imageExtension = strtolower(end($imageExplode)); // jpg png....

                
                // get variables from the from

                $title   =  $_POST['title'];
                $dec     =  $_POST['descrption'];
                $price   =  $_POST['Price'];
                $id      =  $_SESSION['ID'];
                

                // Validate the form
                $formError = array();

                if (strlen($title) < 4){
                    $formError[] =  "يجب أن يكون أسم العنوان أكثر <srtrong>من 4 حرف</strong>";
                }
                if (empty($title)){
                    $formError[] =  "لا تترك حقل العنوان <srtrong>فارغ</srtrong> حاول مرة أخري";
                }
                if (empty($dec)){
                    $formError[] =  "لا تترك حقل الوصف  <srtrong>فارغ</srtrong> حاول مرة أخرة";
                }
                if (empty($price)){
                    $formError[] =  "يجب تحديد سعر الكورس لا تتركة الحقل  <srtrong>فارغ</srtrong> حاول مرة أخري";
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
                    // redirectHome($msg ,'back', 6);
                    echo $msg;
                    
                }

                // check there's is no error proceed the updata operation
    
                if (empty($formError)){

                    $image = rand(0 , 100000000) ."_" . $imageNname;
                    $path = "layout/images/users_images";

                    
                    if(!is_dir($path)){

                        mkdir("layout/images/users_images" , 0777 , true);
                    }

                    move_uploaded_file($imageTmp , "layout/images/users_images//" . $image);

                    $check = checkItem("title" ,"courses" , $title );
                    
                    if ($check == 1){
                    
                        $msg = "<div class='alert alert-danger'>عفوا هذا العنوان  التي أدخلتله  موجود من قبل أختر أسم غيره!</div>";
                        redirectHome($msg ,'back', 6);

                    }else{

                        // Insert the database  with info
                        
                        $stmt = $db->prepare("INSERT INTO 
                                                courses(image ,title  ,descrption  , price , date , member_ID )
                                            VALUES(:zimage ,:ztitle , :zdc , :zprice , now() , :zid )" );
                        $stmt->execute(array(
                            'zimage'   => $image,
                            'ztitle'   => $title,
                            'zdc'      => $dec,
                            'zprice'   => $price,
                            'zid'      => $id,
                        ));

                        // echo success message
                        $msg = '<div class="alert alert-success">تم أضافة الكورس في الموقع بنجاح يمكنك رفع محتوي الكورس الان في هذا الكورس </div>' ;
                        redirectHome($msg ,'back');

                        // echo $title . "<br>";
                        // echo $image . "<br>";
                        // echo $dec . "<br>";
                        // echo $price . "<br>";
                    }
                }
                
            }else{
                
                // start header
                echo " <h1 class='text-center'>Error Message</h1>" ;       
                echo "<div class='container'>";
                
                    $msg = "<div class='alert alert-danger'>لا يجب أن تتصفح هذة الصفحة مباشرة </div>";
                    redirectHome($msg , 6);
                    
                
                echo "</div>";
                }
        echo "</div>";

    }elseif($do == 'Edit'){   
            // Edit page 
        // check if rquest $userid is numeric && getn the integer of it  
        $cousre_id = isset($_GET['co_id']) && is_numeric($_GET['co_id']) ? intval($_GET['co_id']) : 0;

        // select all  data depend on this ID
        $stmt = $db->prepare(" SELECT * FROM courses WHERE  ID = ? LIMIT 1 ");
        $stmt->execute(array($cousre_id));
        $row =  $stmt->fetch();
        $count = $stmt->rowCount();

        // if there's such ID show data  the form 
        if ($count >0){
            ?>
            <h1 class="text-center">تعديل بيانات الكورس </h1>
                    <div class="container">
                    <form class="form-horizontal" action="?action=updata" method="POST" enctype="multipart/form-data">
                        <!-- start course field -->
                        <input type="hidden" name="co_id" value="<?php echo $row['ID']?>">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="title" class="form-control" value ="<?php echo $row['title']?>" required="required" autocomplete="off"  placeholder="Tأكتب عنوان الكورس">
                            </div>
                        </div>
                        <!-- end username field -->
                        <!-- start Password field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Descrption</label>
                            <div class="col-sm-10 col-md-6">
                                <textarea  name="descrption" class="form-control" required="required" ><?php echo $row['descrption']?></textarea>
                            </div>
                        </div>
                        <!-- end Password field -->
                        <!-- start Email field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Price</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="price"  class="form-control" value ="<?php echo $row['price']?>" required ="required" placeholder="سعر الكورس">
                            </div>
                        </div>
                        <!-- end Email field -->
                        <!-- start image field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Course Image</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="file" name="image"  class="form-control">
                            </div>
                        </div>
                        <!-- end image field -->
                        <!-- start submit field -->
                        <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" value="أضافة البيانات" class="btn btn-primary">
                            </div>
                        </div>
                        <!-- end submit field -->
                    </form>
                </div>

            <?php
                //select all videos  
            $stmt = $db->prepare("SELECT videos.*, 

                        courses.title AS c_title
                            FROM 
                            videos
                            INNER JOIN 
                            courses
                        ON
                            courses.ID = course_id 
                            where course_id  = $cousre_id
                        ORDER BY ID DESC ");
            
            // execute the statment
            
            $stmt->execute();
            
            //assing to variable
            $rows = $stmt->fetchAll();

        // start mange courses if there's is courses

        if (!empty ($rows)){
            ?>
            <h1 class="text-center">أدارة محتوى الكورسات</h1>
            <div class="container">
                <div class= "table-responsive"> 
                        <table class="mine-table mange-member text-center table table-bordered">
                            <tr>
                                <td>#ID</td>
                                <td>Title</td>
                                <td>Link</td>
                                <td>Course Name</td>
                                <td>Date</td>
                                <td>Control</td>
                            </tr>
                        <?php 
                                foreach($rows as $row){
                                    echo "<tr>";
                                        echo "<td>" . $row['V_ID'] ."</td>";
                                        echo "<td>" . $row['title'] ."</td>";
                                        echo "<td>" . $row['v_link'] ."</td>";
                                        echo "<td>" . $row['c_title'] ."</td>";
                                        echo "<td>" . $row['v_date'] ."</td>";
                                        echo "<td>
                                        <a href='videos.php?action=Edit&co_id=" . $row['V_ID'] . " ' class='btn btn-success'><i class='fa fa-edit'></i> Edit </a>
                                        <a href='videos.php?action=delete&co_id= " . $row['V_ID'] . " 'class='btn btn-danger confirm' ><i class='fa fa-close'></i> Delete </a>";

                                       
                                        echo "</td>";
                                    echo "</tr>";
                                }
                        ?>
                        </table>
                    </div>
                </div>
            
            <?php 
        }else{
            echo "<div class='container'>";
                echo "<h2 class='text-center'>لا توجد فيديوهات بعد</h2>";
        echo "</div>";
        }

        
        }else{
            
            echo "<div class='container'>";
                $msg = "<div class='alert alert-danger'>لا يوجد رقم  بهذا في قاعدة البيانات </div>";
                redirectHome($msg);
            echo "</div>";

        }
            
        }elseif($do == "updata"){ 

            //updata page
        echo   " <h1 class='text-center'>تعديل بيانات المستخدم</h1>" ;       
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
            $imageExtension = strtolower(end($imageExplode)); // jpg png....

            // get variables from the from

            $id     =  $_POST['co_id'];
            $title  =  $_POST['title'];
            $dec    =  $_POST['descrption'];
            $price  =  $_POST['price'];

            // Validate the form
            $formError = array();

            if (strlen($title) < 4){
                $formError[] =  "يجب أن يكون أسم العنوان أكثر <srtrong>من 4 حرف</strong>";
            }
           
            if (empty($title)){
                $formError[] =  "لا تترك حقل العنوان <srtrong>فارغ</srtrong> حاول مرة أخري";
            }
            if (empty($dec)){
                $formError[] =  "لا تترك حقل الوصف  <srtrong>فارغ</srtrong> حاول مرة أخرة";
            }
            if (empty($price)){
                $formError[] =  "يجب تحديد سعر الكورس لا تتركة الحقل  <srtrong>فارغ</srtrong> حاول مرة أخري";
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
                    $image_data  = get_fild("image" ,"courses" ,  "ID = $id");
    
                    $image = $image_data['image'];
                
                // uplode is not empty
                }else{
                    
                    $image = rand(0 , 100000000) ."_" . $imageNname;
                    $path = "layout/images/users_images";

                    
                    if(!is_dir($path)){

                        mkdir("layout/images/users_images" , 0777 , true);
                    }

                    move_uploaded_file($imageTmp , "layout/images/users_images//" . $image);
                }

                // updata the database  with info
                $stmt = $db->prepare("UPDATE courses SET image= ? ,  title= ? , descrption= ? , price = ?   WHERE ID= $id");
                $stmt->execute(array($image , $title ,$dec, $price ));
                
                // echo success message
                $success_msg =  '<div class="alert alert-success"> تم تحديث البيانات</div>' ;
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

            echo " <h1 class='text-center'>Delete Member</h1>" ;       
            echo "<div class='container'>";

                // check if rquest $userid is numeric && GET the integer of it  
                $co_id = isset($_GET['co_id']) && is_numeric($_GET['co_id']) ? intval($_GET['co_id']) : 0;
                // delete all  data depend on this ID
                  $check = checkItem('ID','courses' , $co_id);
                // if there's such ID show data  the form 
                if ($check > 0 ){
                    
                    // delete the user from database    
                    $stmt = $db->prepare("DELETE FROM courses  WHERE ID = :zcousres_id");
                    $stmt->bindParam(':zcousres_id' , $co_id);
                    $stmt->execute();

                    // echo success message
                    $msg  = '<div class="alert alert-success">تم حذف الكورس من قاعدة البيانات بنجاح  </div>' ;
                    redirectHome($msg ,'back');
                }else{
                    
                    $msg = "<div class='alert alert-danger'>لا يوجد رقم مستخدم بهذا في قاعدة البيانات </div>";
                    redirectHome($msg , 6);
                
                    echo "</div>";
                }
        }
    
        include $tpl. "foooter.php";

    }else{
        header('Location: index.php');
        exit();
    }
    ob_end_flush();






