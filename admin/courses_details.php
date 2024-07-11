<?php 
        /*
            ==========================================
            == mange details courses page 
            == u can edit details courses from here
            ==========================================
        */
    ob_start();
    session_id('ecommerce');
    session_start();
    $page_title = 'Courses Details';
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
            <h1 class="text-center">أدارة  صفحة تفاصيل الكورسات</h1>
            <div class="container">
                <div class= "table-responsive"> 
                        <table class="mine-table mange-member text-center table table-bordered">
                            <tr>
                                <td>#ID</td>
                                <td>Course Name</td>
                                <td>Tools</td>
                                <td>level</td>
                                <td>The Time For Learn</td>
                                <td>Date</td>
                                <td>Control</td>
                            </tr>
                        <?php 
                                foreach($rows as $row){
                                    echo "<tr>";
                                        echo "<td>" . $row['ID'] ."</td>"; 
                                        echo "<td>" . $row['title'] ."</td>";
                                        echo "<td>" . $row['tools'] ."</td>";
                                        echo "<td>" . $row['co_level'] ."</td>";
                                        echo "<td>" . $row['time_learn'] ."</td>";
                                        echo "<td>".  $row['date']."</td>";
                                        echo "<td>
                                        <a href='courses_details.php?action=Edit&co_id=" . $row['ID'] . " ' class='btn btn-success'><i class='fa fa-edit'></i> Edit </a>";

                                       
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
                echo "<h2 class='text-center'> There's no members!</h2>";
                echo '<a href="members.php?action=add" 
                class="btn btn-primary"><i class="fa fa-plus"></i> New Member</a>';
        
        echo "</div>";
        }



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
            <h1 class="text-center">تعديل بيانات تفاصيل الكورس </h1>
                    <div class="container">
                    <form class="form-horizontal" action="?action=updata" method="POST">
                        <!-- start course field -->
                        <input type="hidden" name="co_id" value="<?php echo $row['ID']?>">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="title" class="form-control" value ="<?php echo $row['title']?>" required="required" autocomplete="off"  placeholder="أكتب عنوان الكورس">
                            </div>
                        </div>
                        <!-- end Title field -->

                        <!-- start Descrption field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Descrption</label>
                            <div class="col-sm-10 col-md-6">
                                <textarea  
                                name="descrption" 
                                class="form-control" 
                                required="required" 
                                style="height: 150px"
                                placeholder="أكتب وصف  مفصل عن الدورة"><?php echo $row['descrption_2']?></textarea>
                            </div>
                        </div>
                        <!-- end Descrption field -->

                        <!-- start Values field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Values <p style="font-size: 11px; color:darkorange;">يجب أن تفصل بين الفقرات بأستخدام " | " </p></label>
                            <div class="col-sm-10 col-md-6">
                                <textarea  
                                name="values"  
                                class="form-control" 
                                required ="required" 
                                style="height: 125px"
                                placeholder="أكتب ما الذي سوف يتعلمه من الحصول علي هذا الكورس "><?php echo $row['co_values']?></textarea>
                            </div>
                        </div>
                        <!-- end Values field -->

                        <!-- start tools field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tools <p style="font-size: 11px; color:darkorange;">يجب أن تفصل بين الفقرات بأستخدام " | " </p></label>
                            <div class="col-sm-10 col-md-6">
                                <textarea 
                                name="tools"  
                                class="form-control"
                                style="height: 125px" 
                                required ="required" 
                                placeholder="الأدوات المستخدمة في الكورس"><?php echo $row['tools']?></textarea>
                            </div>
                        </div>
                        <!-- end tools field -->

                        <!-- start video field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Video</label>
                            <div class="col-sm-10 col-md-6">
                                <textarea 
                                name="video"  
                                class="form-control" 
                                required ="required" 
                                placeholder="لينك الفيديو التعريفي بالكورس"><?php echo $row['video']?></textarea>
                            </div>
                        </div>
                        <!-- end video field -->

                        <!-- start level field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">level</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="level"  class="form-control" value ="<?php echo $row['co_level']?>" required ="required" placeholder="مستوي هذا الكورس">
                            </div>
                        </div>
                        <!-- end level field -->

                        <!-- start time-learn field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Totil Time</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="time_learn"  class="form-control" value ="<?php echo $row['time_learn']?>" required ="required" placeholder="كم يحتاج المستخدم من الوقت لأنتهاء هذا الكورس">
                            </div>
                        </div>
                        <!-- end time-learn	 field -->
                      
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
             
        
        }else{
            
            echo "<div class='container'>";
                $msg = "<div class='alert alert-danger'>لا يوجد رقم  بهذا في قاعدة البيانات </div>";
                redirectHome($msg);
            echo "</div>";

        }
            
        }elseif($do == "updata"){ 

            //updata page
        echo   " <h1 class='text-center'>احديث بيانات تفاصيل الكورس</h1>" ;       
        echo   "<div class='container'>";

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            // get variables from the from
            $id      =  $_POST['co_id'];
            $title   =  $_POST['title'];
            $dec     =  $_POST['descrption'];
            $values  =  $_POST['values'];
            $tools   =  $_POST['tools'];
            $video   =  $_POST['video'];
            $level   =  $_POST['level'];
            $time    =  $_POST['time_learn'];


            // updata the database  with info
            $stmt = $db->prepare(" UPDATE courses SET title = ? ,  descrption_2 = ? , co_values = ? , tools = ? , video = ? , co_level= ? , time_learn = ?   WHERE ID = $id");
            $stmt->execute(array($title ,$dec , $values , $tools , $video , $level , $time ));
            
            // echo success message
            $success_msg =  '<div class="alert alert-success"> تم تحديث البيانات</div>' ;
            redirectHome($success_msg ,'back');
        }else{
           
            // start header   
            echo "<div class='container'>";
           
            // echo the error message
            $errorMsg =  "<div class='alert alert-danger'>غر مسموح باتصفح في هذة الصفحة مباشرة</div>";
            echo redirectHome($errorMsg);

            echo "</div>";
            echo "</div>";
        }
        }
    
        include $tpl. "foooter.php";

    }else{
        header('Location: index.php');
        exit();
    }
    ob_end_flush();






