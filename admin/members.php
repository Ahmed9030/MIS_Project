<?php 
        /*
            ==========================================
            == mange members page 
            == u can add | edit | delete members from here
            ==========================================
        */
    ob_start();
    session_id('ecommerce');
    session_start();
    $page_title = 'Members';
    if(isset($_SESSION['username'])){

        include 'inti.php';

        $do = isset($_GET['action']) ? $_GET['action'] : 'manage';

        // start manage page

        if ($do == 'manage'){
            // mange page

            //select all users except admin
            
            $stmt = $db->prepare("SELECT * FROM users WHERE group_ID != 1  ORDER BY ID DESC ");
            
            // execute the statment
            
            $stmt->execute();
            
            //assing to variable
            $rows = $stmt->fetchAll();

        // start mange members if there's is memebers

        if (!empty ($rows)){
            ?>
            <h1 class="text-center">أدارة الاعضاء</h1>
            <div class="container">
                <div class= "table-responsive"> 
                        <table class="mine-table mange-member text-center table table-bordered">
                            <tr>
                                <td>#ID</td>
                                <td>Username</td>
                                <td>Email</td>
                                <td>Registerd Data</td>
                                <td>Control</td>
                            </tr>
                        <?php 
                                foreach($rows as $row){
                                    echo "<tr>";
                                        echo "<td>" . $row['ID'] ."</td>";
                                        echo "<td>" . $row['Username'] ."</td>";
                                        echo "<td>" . $row['Email'] ."</td>";
                                        echo "<td>". $row['Date']."</td>";
                                        echo "<td>
                                        <a href='members.php?action=Edit&userid=" . $row['ID'] . " ' class='btn btn-success'><i class='fa fa-edit'></i> Edit </a>
                                        <a href='members.php?action=delete&userid= " . $row['ID'] . " 'class='btn btn-danger confirm' ><i class='fa fa-close'></i> Delete </a>";

                                       
                                        echo "</td>";
                                    echo "</tr>";
                                }
                        ?>
                        </table>
                        <a href='members.php?action=add' class="btn btn-primary"><i class="fa fa-plus"></i> أضافة مستخدم </a>
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
                        <!-- start username field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="username" class="form-control" required="required" autocomplete="off"  placeholder="Type Your Username">
                            </div>
                        </div>
                        <!-- end username field -->
                        <!-- start Password field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="password" name="password" class="password form-control" required="required" autocomplete="new-password"  placeholder="Type Your Account Password">
                                <i class="show-pass fa fa-eye" ></i>
                            </div>
                        </div>
                        <!-- end Password field -->
                        <!-- start Email field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="Email" name="email"  class="form-control" required ="required" placeholder="Type Your Emaii">
                            </div>
                        </div>
                        <!-- end Email field -->
                        <!-- start submit field -->
                        <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" value="add member" class="btn btn-primary">
                            </div>
                        </div>
                        <!-- end submit field -->
                    </form>
                </div>
            <?php 
            
        }elseif($do == 'insert'){
            // Insert page
    
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            echo   " <h1 class='text-center'>Insert Member</h1>" ;       
            echo   "<div class='container'>";

                // get variables from the from

                $user   =  $_POST['username'];
                $pass   =  $_POST['password'];
                $email  =  $_POST['email'];
                
                $hashpass = password_hash($pass , PASSWORD_DEFAULT);

                // Validate the form
                $formError = array();
                if (strlen($user) < 4){
                    $formError[] =  "لا يجب أن أسم المستخدم يكون أقل <srtrong>من 4 Characters</strong>";
                }
                if (strlen($user) > 20){
                    $formError[] =  "لا يجب أن يتكون الاسم أكثر <srtrong>من 20 Characters</srtrong> ";
                }
                if (empty($user)){
                    $formError[] =  "لا تترك حقل أسم المستخدم <srtrong>فارغ</srtrong> حاول مرة أخري";
                }
                if (empty($pass)){
                    $formError[] =  "لا تتركت حقل كلمة السر <srtrong>فارغ</srtrong> حاول مرة أخري";
                }
                if (empty($email)){
                    $formError[] =  "لا تترك حقل الاميل <srtrong>فارغ</srtrong>حاول مرة أخري";
                }
                
               
                // loop into errors array and echo it

                foreach($formError as $error){
                    $msg = "<div class='alert alert-danger'>". $error . "</div>";
                    echo $msg;
                    
                }

                // insert new user if no error
                if (empty($formError)){


                    $check = checkItem("Username" ,"users" , $user );
                    
                    // check if this user in database or not 
                    if ($check == 1){
                    
                        // error if found
                        $msg = "<div class='alert alert-danger'>هذا المستخدم موجود بالفعل</div>";
                        redirectHome($msg ,'back', 6);
                
                    }else{

                        // Insert the database  with info
                        
                        $stmt = $db->prepare("INSERT INTO 
                                                users(Username , Email , Password )
                                            VALUES(:zuser , :zmail ,:zpass)" );
                        $stmt->execute(array(
                            'zuser'  => $user,
                            'zmail'  => $email,
                            'zpass'  => $hashpass,
                        ));

                        // echo success message
                        $msg = '<div class="alert alert-success"> تم أضافة مستخدم جديد</div>' ;
                        redirectHome($msg ,'back');
                    }
                }
                
            }else{
                
                // start header
                echo " <h1 class='text-center'>Error Message</h1>" ;       
                echo "<div class='container'>";
                
                    $msg = "<div class='alert alert-danger'>لا يجب ان تتصفح هذة الصفحة بشكل مباشر!</div>";
                    redirectHome($msg , 6);
                    
                
                echo "</div>";
                }
        echo "</div>";
    }elseif($do == 'Edit'){   
            // Edit page 
        // check if rquest $userid is numeric && getn the integer of it  
        $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;
        // select all  data depend on this ID
        $stmt = $db->prepare(" SELECT * FROM users WHERE  ID = ? LIMIT 1 ");
        $stmt->execute(array($userid));
        $row =  $stmt->fetch();
        $count = $stmt->rowCount();
        // if there's such ID show data  the form 
        if ($count >0){
            ?>
            <h1 class="text-center">تعديل بيانات المستخدم</h1>
                    <div class="container">
                        <form class="form-horizontal" action="?action=updata" method="POST" enctype="multipart/form-data"  >
                        <input type="hidden" name="userid" value="<?php echo $userid?>" >
                        <!-- start username field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="username" class="form-control" value ="<?php echo $row['Username']?>" autocomplete="off" required="required">
                            </div>
                        </div>

                         <!-- start image field -->
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="file" name="image"  class="form-control">
                            </div>
                        </div>
                        <!-- end image field -->
                        <!-- start submit field -->

                        <!-- start phone field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Phone</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="phone" class="form-control" value ="<?php echo $row['Phone']?>" autocomplete="off" required="required">
                            </div>
                        </div>
                        <!-- end phone field -->

                        <!-- start Address field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="text" name="address" class="form-control" value ="<?php echo $row['Address']?>" autocomplete="off" required="required">
                            </div>
                        </div>
                        <!-- end Address field -->

                        <!-- start Password field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="hidden" name="oldpassword" value="<?php echo $row['Password']?>">
                                <input type="password" name="newpassword" class="form-control" autocomplete="new-password" placeholder="Change Your Old Password">
                            </div>
                        </div>
                        <!-- end Password field -->
                        <!-- start Email field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="Email" name="email" value="<?php echo $row['Email']?>" class="form-control" required ="required">
                            </div>
                        </div>
                        <!-- end Email field -->
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

            $id    =  $_POST['userid'];
            $user  =  $_POST['username'];
            $email =  $_POST['email'];
            $phone =  $_POST['phone'];
            $add   =  $_POST['address'];

            
            // password trick
            $pass = empty($_POST['newpassword']) ?$_POST['oldpassword'] :password_hash($_POST['newpassword'] , PASSWORD_DEFAULT);
    

            // Validate the form
            $formError = array();
            if (strlen($user) < 4){
                $formError[] =  "لا يجب أن أسم المستخدم يكون أقل <srtrong>من 4 Characters</strong>";
            }
            if (strlen($user) > 20){
                $formError[] =  "لا يجب أن يتكون الاسم أكثر <srtrong>من 20 Characters</srtrong> ";
            }
            if (empty($user)){
                $formError[] =  "لا تترك حقل أسم المستخدم <srtrong>فارغ</srtrong> حاول مرة أخري";
            }
            if (empty($email)){
                $formError[] =  "لا تترك حقل الاميل <srtrong>فارغ</srtrong>حاول مرة أخري";
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

                    move_uploaded_file($imageTmp , "layout/images/users_profile//" . $image);
                }
                // check if there is other username 'and' id in database or not
                $stmt2 = $db->prepare("SELECT * FROM users WHERE Username = ? AND ID != ?");
                $stmt2->execute(array($user , $id));
                $check = $stmt2->rowCount();

                // echo error message if there's is 
                if ($check == 1){

                    $msg = "<div class='alert alert-danger'>عفوا هذا المستخدم موجود بافعل</div>";
                    redirectHome($msg ,'back');
                
                // echo if there's is not
                }else{
                    // updata the database  with info
                    $stmt = $db->prepare("UPDATE users SET Username= ? , image = ?,  Email= ? , Password= ? , Phone = ? , Address = ? WHERE ID= ?");
                    $stmt->execute(array($user , $image , $email ,$pass, $phone, $add , $id));
                    
                    // echo success message
                    $success_msg =  '<div class="alert alert-success">' . $stmt->rowCount() . " تم تحديث". "</div>" ;
                    redirectHome($success_msg ,'back');
                }
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
                $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;
                // delete all  data depend on this ID
                  $check = checkItem('ID','users' , $userid);
                // if there's such ID show data  the form 
                if ($check > 0 ){
                    
                    // delete the user from database    
                    $stmt = $db->prepare("DELETE FROM users  WHERE ID = :zuser");
                    $stmt->bindParam(':zuser' , $userid);
                    $stmt->execute();

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






