<?php
ob_start();
session_start(); 
$page_title ="Dashboard";
if(isset($_SESSION['username'])){
    
    // echo 'Welcome: ' . $_SESSION['username'];
    include 'inti.php';

    // the var

    $countuser = 20; // number of lastes user
    $latestuser = getLatest("*" , "users" ,"ID" , $countuser); //the latest users array
   
    $countitem = 5; 
    $latestcourse = getLatest('*' , 'courses' , 'ID' , $countitem);

    $countsub = 8;// number of lastes subcribe
    $latestsub  = $db->prepare(" SELECT  subscribe.* ,  users.Username AS username, courses.title AS co_title , courses.image AS co_image  FROM   subscribe   INNER JOIN     users    ON  users.ID = user_id  INNER JOIN  courses ON courses.ID = course_id   ORDER BY ID DESC LIMIT $countsub");
    $latestsub->execute();
    $subs =  $latestsub->fetchAll();  

    $countOrder = 15;// number of lastes subcribe
    $latestOrder  = $db->prepare(" SELECT  orders.* , users.Username AS username, tools.title AS t_title  FROM orders  INNER JOIN  users  ON  users.ID = user_id  INNER JOIN  tools ON tools.ID = tool_id WHERE status != 1  ORDER BY ID DESC LIMIT $countOrder");
    $latestOrder->execute();
    $orders =  $latestOrder->fetchAll();  
    
    
                                        
    $counttools = 8;// number of lastes tools
    $latesttools  =  getlatest('*' , 'tools' , 'ID' , $counttools);
                                        /* start dashboard page */
   ?>
    <div class="container home-stat text-center">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo date('l jS \of F Y h:i:s A');?></a></li>
                                <li class="breadcrumb-item active"> Your Dives: <?php echo gethostname();?></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="total-revenue-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo countItems("ID" , "users");?></span></h4>
                                <p class="text-muted mb-0">عدد الاعضاء </p>
                            </div>
                           <a href="members.php"> <p class="text-muted mt-3 mb-0">عرض الكل</p></a>
                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="orders-chart"> </div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo countItems("ID " , "subscribe ");?></span></h4>
                                <p class="text-muted mb-0"> عدد أشتراكات الكورسات</p>
                            </div>
                            <a href="subscribe.php"> <p class="text-muted mt-3 mb-0">عرض الكل</p></a>
                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="customers-chart"> </div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo countItems("ID" , "courses");?></span></h4>
                                <p class="text-muted mb-0">  عدد الكورسات</p>
                            </div>
                            <a href="courses.php"> <p class="text-muted mt-3 mb-0">عرض الكل</p></a>
                        </div>
                    </div>
                </div> <!-- end col-->


                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo countItems("ID" , "tools");?></span></h4>
                                <p class="text-muted mb-0">عدد الأدوات   </p>
                            </div>
                            <a href="items.php"> <p class="text-muted mt-3 mb-0">عرض الكل</p></a>
                        </div>
                    </div>
                </div> <!-- end col-->
              

               
            </div> <!-- end row-->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    </div>
    
</div>

    <div class = 'container latest'>
    <div class="row mini-lastest">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                   
                    <h4 class="card-title mb-4">أخر <?php echo $countuser?> أعضاء</h4>

                    <div data-simplebar style="max-height: 336px;">
                        <div class="table-responsive">
                            <table class="table table-borderless table-centered table-nowrap">
                                <tbody>
                                <?php foreach($latestuser as $user){?>
                                    <tr>
                                        <td>
                                            <h6 class="font-size-15 mb-1 fw-normal"><i class="fa-solid fa-user"></i> <?php echo $user['Username'];?></h6>
                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i><i class="fa-regular fa-calendar-days"></i> <?php echo $user['Date'];?></p>
                                        </td>
                                        <td class="text-muted fw-semibold text-end">
                                            <?php
                                            // edit btn
                                                echo '<a href="members.php?action=Edit&userid='. $user['ID'] .'">';
                                                echo '<span class="btn btn-success float-right">';
                                                echo "<i class='fa fa-edit'>";
                                                echo "</i>Edit</span>";
                                                echo "</a>";
                                            echo "</li>";   
                                            ?>
                                        </td>
                                    </tr>  
                                    <?php }?>          
                                </tbody>
                            </table>
                        </div> <!-- enbd table-responsive-->
                    </div> <!-- data-sidebar-->
                </div><!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                   
                    <h4 class="card-title mb-4"> أخر <?php echo $countsub?> كورسات </h4>

                    <div data-simplebar style="max-height: 336px;">
                        <div class="table-responsive">
                            <table class="table table-borderless table-centered table-nowrap">
                                <tbody>
                                <?php if (!empty($latestcourse)){?>
                                <?php foreach($latestcourse as $co){?>
                                    <tr>
                                        <td style="width: 20px;"><img src="layout/images/users_images/<?php echo $co['image'];?>" class="avatar-xs rounded-circle " alt="..."></td>

                                            <td>
                                                <h6 class="font-size-15 mb-1 fw-normal"><?php echo $co['title'];?></h6>
                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"><i class="fa-regular fa-calendar-days"></i> <?php echo $co['date'];?></p>
                                            </td>
                                            
                                            <td class="text-muted fw-semibold text-end">
                                               <?php
                                                // edit btn
                                                echo "<a href='courses.php?action=Edit&co_id=".$co['ID']."'>";
                                                echo "<span class='btn btn-success float-right'><i class= 'fa fa-edit'></i>Edit</span></a>";

                                               ?>
                                            </td>
                                        </tr>  
                                    <?php }?>          
                                    <?php }else{echo "لا توجد كورسات بعد";}?>
                                </tbody>
                            </table>
                        </div> <!-- enbd table-responsive-->
                    </div> <!-- data-sidebar-->
                </div><!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                   
                    <h4 class="card-title mb-4"> أخر <?php echo $countitem?> أشتراكات </h4>

                    <div data-simplebar style="max-height: 336px;">
                        <div class="table-responsive">
                            <table class="table table-borderless table-centered table-nowrap">
                                <tbody>
                                <?php if (!empty($subs)){?>
                                <?php foreach($subs as $sub){?>
                                    <tr>
                                        <td style="width: 20px;"><img src="layout/images/users_images/<?php echo $sub['co_image'];?>" class="avatar-xs rounded-circle " alt="..."></td>

                                            <td>
                                                <h6 class="font-size-15 mb-1 fw-normal"><?php echo $sub['co_title'];?></h6>
                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i><i class="fa fa-user"></i> <?php echo $sub['username'];?></p>
                                            </td>
                                            
                                            <td class="text-muted fw-semibold text-end">
                                               <?php
                                                // edit btn
                                                echo "<a href='subscribe.php?action=Edit&sub_id=".$sub['ID']."'>";
                                                echo "<span class='btn btn-success float-right'><i class= 'fa fa-edit'></i>Edit</span></a>";

                                               ?>
                                            </td>
                                        </tr>  
                                    <?php }?>          
                                    <?php }else{echo "لا توجد كورسات بعد";}?>
                                </tbody>
                            </table>
                        </div> <!-- enbd table-responsive-->
                    </div> <!-- data-sidebar-->
                </div><!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->


        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                   
                    <h4 class="card-title mb-4"> أخر <?php echo $countOrder?> طلبات </h4>

                    <div data-simplebar style="max-height: 336px;">
                        <div class="table-responsive">
                            <table class="table table-borderless table-centered table-nowrap">
                                <tbody>
                                <?php if (!empty($latestOrder)){?>
                                <?php foreach($orders as $order){?>
                                    <tr>
                                        <td style="width: 20px;"><i class="fa fa-user"></i> <?php echo $order['username']?></td>

                                            <td>
                                                <h6 class="font-size-15 mb-1 fw-normal"><?php echo $order['t_title'];?></h6>
                                                <p class="text-muted font-size-13 mb-0"><i class="fa-regular fa-calendar-days"> </i> <?php echo $order['date'];?></p>
                                            </td>
                                            
                                            <td class="text-muted fw-semibold text-end">
                                               <?php
                                                // edit btn
                                                echo "<a href='orders.php?action=edit&item_id=".$order['ID']."'>";
                                                echo "<span class='btn btn-success float-right'><i class= 'fa fa-edit'></i>Edit</span></a>";

                                               ?>
                                            </td>
                                        </tr>  
                                    <?php }?>          
                                    <?php }else{ echo "لا توجد طلبات بعد"; } ?>
                                    
                                </tbody>
                            </table>
                        </div> <!-- enbd table-responsive-->
                    </div> <!-- data-sidebar-->
                </div><!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->


        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                   
                    <h4 class="card-title mb-4"> أخر <?php echo $counttools?> منتجات </h4>

                    <div data-simplebar style="max-height: 336px;">
                        <div class="table-responsive">
                            <table class="table table-borderless table-centered table-nowrap">
                                <tbody>
                                <?php if (!empty($latesttools)){?>
                                <?php foreach($latesttools as $tool){?>
                                    <tr>
                                        <td style="width: 20px;"><img src="layout/images/users_images/tools/<?php echo $tool['image'];?>" class="avatar-xs rounded-circle " alt="..."></td>

                                            <td>
                                                <h6 class="font-size-15 mb-1 fw-normal"><?php echo $tool['title'];?></h6>
                                                <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> <?php echo $tool['price'] . "ج";?></p>
                                            </td>
                                            
                                            <td class="text-muted fw-semibold text-end">
                                               <?php
                                                // edit btn
                                                echo "<a href='items.php?action=edit&item_id=".$tool['ID']."'>";
                                                echo "<span class='btn btn-success float-right'><i class= 'fa fa-edit'></i>Edit</span></a>";

                                               ?>
                                            </td>
                                        </tr>  
                                    <?php }?>          
                                    <?php }else{echo "لا توجد منتجات بعد";}?>
                                </tbody>
                            </table>
                        </div> <!-- enbd table-responsive-->
                    </div> <!-- data-sidebar-->
                </div><!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->
    </div>
    </div>
    </div>
</div>
    </div>

    <?php
    /* end dashboard page */
    include $tpl. "foooter.php";

}else{
    header('Location: index.php');
    exit();
}
ob_end_flush();
?>