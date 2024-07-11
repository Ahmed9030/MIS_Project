<?php 
        /*
            ==========================================
            == mange subscribe page 
            == u can  edit | delete members from subscribe here
            ==========================================
        */
    ob_start();
    session_id('ecommerce');
    session_start();
    $page_title = 'subscribe';
    if(isset($_SESSION['username'])){

        include 'inti.php';

        $do = isset($_GET['action']) ? $_GET['action'] : 'manage';

        // start manage page

        if ($do == 'manage'){
            // mange page

            //select all subscribe 
            
            $stmt = $db->prepare("SELECT  subscribe.* , 

            users.Username AS username,
            
            courses.title AS co_title 
            
            FROM subscribe 
            
            INNER JOIN 
            users 
            ON 
            users.ID = user_id 
            
            INNER JOIN 
            courses
            ON
            courses.ID = course_id 
            ORDER BY ID DESC ");
            
            // execute the statment
            $stmt->execute();
            
            //assing to variable
            $rows = $stmt->fetchAll();

        // start mange subscribe if there's is subscribe in database
        if (!empty ($rows)){
            ?>
            <h1 class="text-center">أدارة الأشتراكات</h1>
            <div class="container">
                <div class= "table-responsive"> 
                        <table class="mine-table mange-member text-center table table-bordered">
                            <tr>
                                <td>#ID</td>
                                <td>Username</td>
                                <td>Course Name</td>
                                <td>Subscribe Data</td>
                                <td>Control</td>
                            </tr>
                        <?php 
                                foreach($rows as $row){
                                    echo "<tr>";
                                        echo "<td>" . $row['ID'] ."</td>";
                                        echo "<td>" . $row['username'] ."</td>";
                                        echo "<td>" . $row['co_title'] ."</td>";
                                        echo "<td>". $row['date']."</td>";
                                        echo "<td>
                                        <a href='subscribe.php?action=Edit&sub_id=" . $row['ID'] . " ' class='btn btn-success'><i class='fa fa-edit'></i> Edit </a>
                                        <a href='subscribe.php?action=delete&co_id= " . $row['course_id'] . "&user_id= {$row['user_id']} 'class='btn btn-danger confirm' ><i class='fa fa-close'></i> Delete </a>";

                                       
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
        // end mange subscribe

    }elseif($do == 'Edit'){   
            // Edit page 

        // check if rquest $userid is numeric && getn the integer of it  
        $sub_id = isset($_GET['sub_id']) && is_numeric($_GET['sub_id']) ? intval($_GET['sub_id']) : 0;
        // select all  data depend on this ID
        $stmt = $db->prepare(" SELECT  subscribe.* , 

                                users.Username AS username,
                                
                                courses.title AS co_title 
                                
                                FROM 
                                subscribe 
                                
                                INNER JOIN 
                                users 
                                ON 
                                users.ID = user_id 
                                
                                INNER JOIN 
                                courses
                                ON
                                courses.ID = course_id 

                                WHERE subscribe.ID = ? 
                                LIMIT 1 ");

        $stmt->execute(array($sub_id));
        $row =  $stmt->fetch();
        $count = $stmt->rowCount();
        // if there's such ID show data  the form 
        if ($count >0){
            ?>
            <h1 class="text-center">تعديل بيانات المستخدم</h1>
                    <div class="container">
                        <form class="form-horizontal" action="?action=updata" method="POST" enctype="multipart/form-data"  >
                        <input type="hidden" name="userid" value="<?php echo $sub_id?>" >
                        <!-- start username field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><i class="fa fa-user"></i> <?php echo $row['username']?></label>
                            <div class="col-sm-10 col-md-6">
                                <input type="hidden" name="user_id" value ="<?php echo $row['user_id'];?>">
                                <input type="hidden" name="old_course" value ="<?php echo $row['course_id'];?>">
                            </div>
                        </div>

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
                                <input type="submit" value="save" class="btn btn-primary ">
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
        echo   " <h1 class='text-center'>تعديل بيانات الأشتراك</h1>" ;       
        echo   "<div class='container'>";

        
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){


            // get variables from the from

            $id        =  $_POST['user_id'];
            $old_co    =  $_POST['old_course'];
            $courses   =  $_POST['courses'];

            // updata the database  with info
            $stmt = $db->prepare("UPDATE subscribe SET course_id = ? WHERE user_id= ? AND course_id = ?");
            $stmt->execute(array($courses , $id , $old_co));
            
            // echo success message
            $success_msg =  '<div class="alert alert-success"> تم تحديث البيانات بنجاح </div>' ;
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


        }elseif($do == 'delete'){
            // delete page

            echo " <h1 class='text-center'>حذف أشتراك</h1>" ;       
            echo "<div class='container'>";

                // check if rquest $userid is numeric && GET the integer of it  
                $user_id = isset($_GET['user_id']) && is_numeric($_GET['user_id']) ? intval($_GET['user_id']) : 0;
                $co_id = isset($_GET['co_id']) && is_numeric($_GET['co_id']) ? intval($_GET['co_id']) : 0;
                // delete all  data depend on this ID
                $check = checkItem('user_id','subscribe' , $user_id);
                // if there's such ID show data  the form 
                if ($check > 0 ){
                    
                    // delete the user from database    
                    $stmt = $db->prepare("DELETE FROM subscribe  WHERE user_id= ? AND course_id = ?");
                    $stmt->execute(array($user_id,$co_id));

                    // echo success message
                    $msg  = '<div class="alert alert-success">' . $stmt->rowCount() . "تم حذف". "</div>" ;
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






