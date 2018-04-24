
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                            <li class="sidebar-search-wrapper">
                                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                                <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                                    <a href="javascript:;" class="remove">
                                        <i class="icon-close"></i>
                                    </a>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                            </li>
                            <li class="nav-item start active open">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                   <?php if ($_SESSION['type'] == 'admin') {?>
                                        <li class="nav-item start active open">
                                        <a href="indexa.php" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Dashboard </span>
                                            <span class="selected"></span>
                                             
                                        </a>
                                    </li>
                                         
                                    <?php  } elseif ($_SESSION['type'] == 'student') { ?> 
                                   <li class="nav-item start ">
                                        <a href="index.php" class="nav-link ">
                                            <i class="icon-bulb"></i>
                                            <span class="title">Dashboard</span>
                                              <span class="selected"></span>
                                             
                                        </a>
                                    </li>
                                          
                                     <?php }
                                      ?>
                                    
                                </ul>
                            </li>
                            <li class="heading">
                                <h3 class="uppercase">Features</h3>
                            </li>
                              

                               <?php if ($_SESSION['type'] == 'admin') {?>
                                        <li class="nav-item start ">
                                <a href="student_details.php" class="nav-link nav-toggle">
                                    <i class="fa fa-edit" ></i>
                                    <span class="title"> Students Information</span>
                                    <span class="selected"></span>
                                    <span class=""></span>
                                </a>
                             </li>
                            
                             <li class="nav-item start ">
                                <a href="admin_student_update.php" class="nav-link nav-toggle">
                                    <i class="fa fa-cog"></i>
                                    <span class="title">update student details</span>
                                    <span class="selected"></span>
                                    <span class=""></span>
                                </a>
                             </li>
                            
                              <li class="nav-item start ">
                                <a href="admin_message.php" class="nav-link nav-toggle">
                                    <i class="icon-user" ></i>
                                    <span class="title">Students Complaints</span>
                                    <span class="badge badge-default">                                             <?php             
                 include('inc/config.php');  
                 $sql = "SELECT * from Complaints";
                 $sql1=mysqli_query($conn, $sql);
                if ($sql1) {
               $count=mysqli_num_rows($sql1);
             echo $count;
         }
                    
                   ?> </span>
                                    
                                </a>
                             </li>
                                         
                                    <?php  } elseif ($_SESSION['type'] == 'student') { ?> 
                                    

                                     <li class="nav-item start ">
                                <a href="student_edit.php" class="nav-link nav-toggle">
                                    <i class="fa fa-cog"></i>
                                    <span class="title">update  details</span>
                                    <span class="selected"></span>
                                    <span class=""></span>
                                </a>
                             </li>
                            
                              <li class="nav-item start ">
                                <a href="send_message.php" class="nav-link nav-toggle">
                                    <i class="icon-envelope" ></i>
                                    <span class="title">Complaints</span>
                                     
                                    <span class=""></span>
                                </a>
                             </li>

                              <li class="nav-item start ">
                                <a href="edit_profile.php" class="nav-link nav-toggle">
                                    <i class="icon-settings" ></i>
                                    <span class="title">Edit Profile</span>
                                     
                                    <span class=""></span>
                                </a>
                             </li>
                                          
                                     <?php }
                                      ?>






                             
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->