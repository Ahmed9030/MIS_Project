<?php 
        /*
            ==========================================
            == mange orders page 
            == u can  edit | delete orders from  here
            ==========================================
        */
    ob_start();
    session_id('ecommerce');
    session_start();
    $page_title = 'Orders';
    if(isset($_SESSION['username'])){

        include 'inti.php';

        $do = isset($_GET['action']) ? $_GET['action'] : 'manage';

        // start manage page
        if ($do == 'manage'){
            // mange page

            $query ='';

            if(isset($_GET['page']) && $_GET['page'] == 'done_orders'){
                $query = 'WHERE status = 1';
            }else{
                $query = 'WHERE status != 1';
                
            }

            //select all orders 
            
            $stmt = $db->prepare("SELECT  orders.* , 

            users.Username AS username,
            users.Phone AS phone,
            users.Address AS address,
        
            tools.title AS t_title 
            
            FROM orders 
            
            INNER JOIN 
            users 
            ON 
            users.ID = user_id 
            
            INNER JOIN 
            tools
            ON
            tools.ID = tool_id 

           $query

            ORDER BY ID DESC ");
            
            // execute the statment
            $stmt->execute();
            
            //assing to variable
            $rows = $stmt->fetchAll();

        // start mange subscribe if there's is subscribe in database
        if (!empty ($rows)){
            ?>
            <h1 class="text-center">أدارة الطلبات</h1>
            <div class="container">
                <div class= "table-responsive"> 
                        <table class="mine-table mange-member text-center table table-bordered">
                            <tr>
                                <td>#ID</td>
                                <td>Username</td>
                                <td>Tool Name</td>
                                <td>Number</td>
                                <td>Address</td>
                                <td>Data</td>
                                <td>Control</td>
                            </tr>
                        <?php 
                            foreach($rows as $row){
                                echo "<tr>";
                                    echo "<td>" . $row['ID'] ."</td>";
                                    echo "<td>" . $row['username'] ."</td>";
                                    echo "<td>" . $row['t_title'] ."</td>";
                                    echo "<td>" . $row['phone'] ."</td>";
                                    echo "<td>" . $row['address'] ."</td>";
                                    echo "<td>". $row['date']."</td>";

                                    if($row['status'] == 0 ):
                                    echo "<td>
                                    <a href='orders.php?action=Edit&order_id=" . $row['ID'] . " ' class='btn btn-success'><i class='fa fa-edit'></i> Edit </a>
                                    <a href='orders.php?action=done&order_id= " .$row["ID"] . "'class='btn btn-primary confirmDoneOrder' ><i class='fa fa-check'></i> Done </a>";
                                    echo "</td>";
                                else:
                                    echo "<td>----";
                                    echo "</td>";
                                    
                                endif;
                                    
                                echo "</tr>";
                            }
                        ?>
                        </table>
                    </div>
                </div>
            
            <?php 
        }else{
            echo "<div class='container'>";
                echo "<h2 class='text-center'> There's No Orders!</h2>";
        echo "</div>";
        }
        // end mange subscribe

    }elseif($do == 'Edit'){   
            // Edit page 

        // check if rquest $userid is numeric && getn the integer of it  
        $order_id = isset($_GET['order_id']) && is_numeric($_GET['order_id']) ? intval($_GET['order_id']) : 0;
        // select all  data depend on this ID
        $stmt = $db->prepare(" SELECT  orders.* , 
                        users.Username AS username,
                        users.Phone AS phone,
                        users.Address AS address,

                        tools.title AS t_title 
                        
                        FROM orders 
                        
                        INNER JOIN 
                        users 
                        ON 
                        users.ID = user_id 
                        
                        INNER JOIN 
                        tools
                        ON
                        tools.ID = tool_id 

                        WHERE orders.ID = ?

                        limit 1  ");

        $stmt->execute(array($order_id));
        $row =  $stmt->fetch();
        $count = $stmt->rowCount();
        // if there's such ID show data  the form 
        if ($count >0){
            ?>
            <h1 class="text-center">تعديل طلب المستخدم</h1>
                    <div class="container">
                        <form class="form-horizontal" action="?action=updata" method="POST">
                        <input type="hidden" name="order_id" value="<?php echo $order_id?>" >
                        <!-- start username field -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><i class="fa fa-user"></i> <?php echo $row['username']?></label>
                        </div>

                         <!-- start courses field -->

                         <div class="form-group">
                            <label class="col-sm-2 control-label">Tool</label>
                            <div class="col-sm-10 col-md-6">
                                <select class='form-control' name='tool'>
                                <?php
                                $stmt1 = $db->prepare("SELECT * FROM tools ");
                                $stmt1->execute();
                                $tools = $stmt1->fetchAll();

                                foreach($tools as $tool ){

                                echo "<option value='" . $tool['ID'] . "'";
                                if($row['tool_id'] == $tool['ID']){echo 'selected';}
                                echo">" . $tool['title'] . "</option>";
                                }
                                ?>
                                </select>
                            </div>
                        </div>
                        <!-- end courses field -->

                       
                        <!-- start phone field -->
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
            $order_id  =  $_POST['order_id'];
            $tool      =  $_POST['tool'];
  

            // updata the database  with info
            $stmt = $db->prepare("UPDATE orders SET tool_id = ?   WHERE ID= ? ");
            $stmt->execute(array($tool , $order_id));
            
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


        }elseif($do == 'done'){
            // done orders page

            echo " <h1 class='text-center'>أتمام الطلب بنجاح</h1>" ;       
            echo "<div class='container'>";

                // check if rquest $order_is is numeric && GET the integer of it  
                $order_id = isset($_GET['order_id']) && is_numeric($_GET['order_id']) ? intval($_GET['order_id']) : 0;

                $check = checkItem('ID','orders' , $order_id);
                // if there's such ID show data  the form 
                if ($check > 0 ){
                    
                    // done this order   
                    $stmt = $db->prepare("UPDATE orders SET  status = 1 WHERE ID = $order_id ");
                    $stmt->execute();
                    // echo success message
                    $msg  = '<div class="alert alert-success">تم أتمام العملية بنجاح</div>' ;
                    redirectHome($msg ,'back');
                }else{
                    
                    $msg = "<div class='alert alert-danger'>لا يوجد رقم طلب بهذا في قاعدة البيانات </div>";
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






