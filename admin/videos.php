<?php 
        /*
            ==========================================
            == mange courses's videos page 
            == u can add | edit | delete videos from here
            ==========================================
        */
    ob_start();
    session_start();
    $page_title = 'Courses';
    if(isset($_SESSION['username'])){

        include 'inti.php';

        $do = isset($_GET['action']) ? $_GET['action'] : 'manage';

        // start manage page

        if ($do == 'manage'){
            // mange page

            //select all videos  
            
            $stmt = $db->prepare("SELECT videos.*, 

                        courses.title AS c_title
                            FROM 
                            videos
                            INNER JOIN 
                            courses
                        ON
                            courses.ID = course_id 
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
                                <td>Course Name</td>
                                <td>Date</td>
                                <td>Control</td>
                            </tr>
                        <?php 
                                foreach($rows as $row){
                                    echo "<tr>";
                                        echo "<td>" . $row['V_ID'] ."</td>";
                                        echo "<td>" . $row['title'] ."</td>";
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
                        <a href='videos.php?action=add' class="btn btn-primary"><i class="fa fa-plus"></i> أضافة فيديو جديد  </a>
                    </div>
                </div>
            
            <?php 
        }else{
            echo "<div class='container'>";
                echo "<h2 class='text-center'>لا توجد فيديوهات بعد</h2>";
                echo '<a href="videos.php?action=add" 
                class="btn btn-primary"><i class="fa fa-plus"></i> أضافة فيديو جديد</a>';
        
        echo "</div>";
        }
        // end mange members if there's is memebers
        }elseif($do == "add"){
            //  add page
            ?>
            
            <h1 class="text-center">أضافة فيديو جديد</h1>
                    <div class="container">
                    <form class="form-horizontal" action="?action=insert" method="POST" enctype="multipart/form-data">
                        <!-- start course field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="title" class="form-control"  required="required" autocomplete="off"  placeholder="أكتب عنوان يدل علي هذا الفيديو">
                            </div>
                        </div>
                        <!-- end username field -->
                        <!-- start Email field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Link</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="link"  class="form-control" required ="required" placeholder="أدخل لينك الفيديو  ">
                            </div>
                        </div>
                        <!-- end Email field -->
                        <!-- start courses field -->

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Courses</label>
                            <div class="col-sm-10 col-md-6">
                                <select class='form-control' name='courses'>
                                <?php
                                $stmt1 = $db->prepare("SELECT * FROM courses ");
                                $stmt1->execute();
                                $courses = $stmt1->fetchAll();

                                foreach($courses as $co ){

                                echo "<option value='" . $co['ID'] . "'";
                                echo">" . $co['title'] . "</option>";
                                }
                                ?>
                                </select>
                            </div>
                        </div>
                        <!-- end courses field -->
                        <!-- start submit field -->
                        <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" value="أضافة فيديو جديد" class="btn btn-primary">
                            </div>
                        </div>
                        <!-- end submit field -->
                    </form>
                </div>
            <?php 
            
        }elseif($do == 'insert'){
            // Insert page
    
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            echo   " <h1 class='text-center'>اضافة فيديو </h1>" ;       
            echo   "<div class='container'>";
                
                // get variables from the from

                $title   =  $_POST['title'];
                $link    =  $_POST['link'];
                $co      =  $_POST['courses'];
                

                // Validate the form
                $formError = array();

                if (strlen($title) < 4){
                    $formError[] =  "يجب أن يكون أسم العنوان أكثر <srtrong>من 4 حرف</strong>";
                }
               
                if (empty($title)){
                    $formError[] =  "لا تترك حقل العنوان <srtrong>فارغ</srtrong> حاول مرة أخري";
                }
                if (empty($link)){
                    $formError[] =  "لا تترك حقل اللينك   <srtrong>فارغ</srtrong> حاول مرة أخرة";
                }
               
                
                // loop into errors array and echo it

                foreach($formError as $error){
                    $msg = "<div class='alert alert-danger'>". $error . "</div>";
                    redirectHome($msg ,'back', 6);
                    echo $msg;
                    
                }

                // check there's is no error proceed the updata operation
    
                if (empty($formError)){

                    $check = checkItem("title" ,"videos" , $title );
                    
                    if ($check == 1){
                    
                        $msg = "<div class='alert alert-danger'>عفوا هذا العنوان  التي أدخلتله  موجود من قبل أختر أسم غيره!</div>";
                        redirectHome($msg ,'back', 6);

                    }else{

                        // Insert the database  with info
                        
                        $stmt = $db->prepare("INSERT INTO 
                                                videos(title  ,	v_link ,v_date , course_id)
                                            VALUES(:ztitle , :zlink ,now() , :zco_id )" );
                        $stmt->execute(array(
                            'ztitle'   => $title,
                            'zlink'    => $link,
                            'zco_id'   => $co,
                        ));

                        // echo success message
                        $msg = '<div class="alert alert-success">تم أضافة الفيديو في هذا الكورس بنجاح يمكنك رفع المزيد من  محتوي الكورس   </div>' ;
                        redirectHome($msg ,'back');

        
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
        $v_id = isset($_GET['co_id']) && is_numeric($_GET['co_id']) ? intval($_GET['co_id']) : 0;

        // select all  data depend on this ID
        $stmt = $db->prepare(" SELECT * FROM videos WHERE  V_ID = ? LIMIT 1 ");
        $stmt->execute(array($v_id));
        $row =  $stmt->fetch();
        $count = $stmt->rowCount();

        // if there's such ID show data  the form 
        if ($count >0){
            ?>
            <h1 class="text-center">تعديل المحتوى   </h1>
                    <div class="container">
                    <form class="form-horizontal" action="?action=updata" method="POST" enctype="multipart/form-data">
                        <!-- start course field -->
                        <input type="hidden" name="id" value="<?php echo $row['V_ID']?>">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="title" class="form-control" value ="<?php echo $row['title']?>" required="required" autocomplete="off"  placeholder="Type Your Username">
                            </div>
                        </div>
                        <!-- end username field -->
                        <!-- start Email field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Link</label>
                            <div class="col-sm-10 col-md-6">
                                <textarea 
                                name="link"  
                                class="form-control" 
                                required ="required" placeholder="سعر الكورس"><?php echo $row['v_link']?></textarea>
                            </div>
                        </div>
                        <!-- end Email field -->
                        <!-- start courses field -->

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Courses</label>
                            <div class="col-sm-10 col-md-6">
                                <select class='form-control' name='courses'>
                                <?php
                                $stmt1 = $db->prepare("SELECT * FROM courses ");
                                $stmt1->execute();
                                $courses = $stmt1->fetchAll();

                                foreach($courses as $co ){

                                echo "<option value='" . $co['ID'] . "'";

                                if($row['course_id'] == $co['ID']){echo 'selected';}
                                
                                echo">" . $co['title'] . "</option>";
                                }
                                ?>
                                </select>
                            </div>
                        </div>
                        <!-- end courses field -->
                        <!-- start submit field -->
                        <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" value="تحديث البيانات" class="btn btn-primary">
                            </div>
                        </div>
                        <!-- end submit field -->
                    </form>
                </div>
            <?php 
                }else{
                    
                   echo "<div class='container'>";
                        $msg = "<div class='alert alert-danger'>لا يوجد رقم مستخدم بهذا في قاعدة البيانات </div>";
                        redirectHome($msg);
                    echo "</div>";

                }
        }elseif($do == "updata"){ 

            //updata page
        echo   " <h1 class='text-center'>تعديل بيانات المستخدم</h1>" ;       
        echo   "<div class='container'>";

        
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            // get variables from the from

            $id     =  $_POST['id'];
            $title  =  $_POST['title'];
            $link   =  $_POST['link'];
            $co     =  $_POST['courses'];

            // Validate the form
            $formError = array();

            if (strlen($title) < 4){
                $formError[] =  "يجب أن يكون أسم العنوان أكثر <srtrong>من 4 حرف</strong>";
            }
           
            if (empty($title)){
                $formError[] =  "لا تترك حقل العنوان <srtrong>فارغ</srtrong> حاول مرة أخري";
            }
            if (empty($link)){
                $formError[] =  "لا تترك حقل اللينك   <srtrong>فارغ</srtrong> حاول مرة أخرة";
            }
            

            // loop into errors array and echo it
            foreach($formError as $error){
                $msg = "<div class='alert alert-danger'>". $error . "</div>";
                redirectHome($msg ,'back', 6);
            }

            // check there's is no error proceed the updata operation
            if (empty($formError)){
                
                    
                // updata the database  with info
                $stmt = $db->prepare("UPDATE  videos SET title= ? ,  v_link= ? , course_id= ?   WHERE V_ID = $id");
                $stmt->execute(array($title , $link ,$co));
                
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

            echo " <h1 class='text-center'>حذف محتوى</h1>" ;       
            echo "<div class='container'>";

                // check if rquest $userid is numeric && GET the integer of it  
                $co_id = isset($_GET['co_id']) && is_numeric($_GET['co_id']) ? intval($_GET['co_id']) : 0;
                // delete all  data depend on this ID
                  $check = checkItem('V_ID','videos' , $co_id);
                // if there's such ID show data  the form 
                if ($check > 0 ){
                    
                    // delete the user from database    
                    $stmt = $db->prepare("DELETE FROM videos  WHERE V_ID = :zvideo_id");
                    $stmt->bindParam(':zvideo_id' , $co_id);
                    $stmt->execute();

                    // echo success message
                    $msg  = '<div class="alert alert-success">تم حذف هذا الفيديو من قاعدة البيانات بنجاح  </div>' ;
                    redirectHome($msg ,'back');
                }else{
                    
                    $msg = "<div class='alert alert-danger'>لا يوجد محتوى بهذا في قاعدة البيانات </div>";
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






