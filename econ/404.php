<div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content" style="min-height: 568px;">
                         
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>System</span>
                                </li>
                            </ul>
                             
                            </div>
                        
                       
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title">  
                            <small>404 page </small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12 page-404">
                                <div class="number font-green"> Not Found</div>
                                <div class="details">
                                    <h3>Oops! You're lost.</h3>
                                    <p> We can not find the page you're looking for.
                                        <br>
                                        <?php if ($_SESSION['type'] == 'admin') {?>
                                        <a href="indexa.php"> Return home </a> or try the search bar below. </p>
                                         
                                    <?php  } elseif ($_SESSION['type'] == 'student') { ?> 
                                    <a href="index.php"> Return home </a> or try the search bar below. </p>
                                          
                                     <?php }
                                      ?>
                                        
                                        
                                    <form action="#">
                                        <div class="input-group input-medium">
                                            <input type="text" class="form-control" placeholder="keyword...">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn green">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                        <!-- /input-group -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>