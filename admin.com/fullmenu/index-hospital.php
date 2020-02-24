<?php include ('admin.com/fullmenu/header.php') ?>

            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper main-wrapper row" style=''>

                    <div class='col-12'>
                        <div class="page-title">

                            <div class="float-left">
                                <!-- PAGE HEADING TAG - START --><h1 class="title">Hospital</h1><!-- PAGE HEADING TAG - END -->                            </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- MAIN CONTENT AREA STARTS -->


                    <div class="col-xl-12">
                        <section class="box nobox ">
                            <div class="content-body">

                                <div class="row">



                                    <div class="col-lg-7 col-md-12 col-12">
                                        <div class="r1_maingraph db_box">
                                            <span class='float-left'>
                                                <i class='icon-purple fa fa-square icon-xs'></i>&nbsp;<small>Quality of Service</small>&nbsp; &nbsp;<i class='fa fa-square icon-xs icon-primary'></i>&nbsp;<small>Service Recommendations</small>
                                            </span>
                                            <div id="db_morris_area_graph" style="height:auto;width:100%;"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-md-12 col-12">

                                        <div class="row">
                                            <div class="col-12">

                                                <div class="r1_graph1 db_box db_box_large">
                                                    <span class='bold'>68.95%</span>
                                                    <span class='float-right'><small>New Patients</small></span>
                                                    <div class="clearfix"></div>
                                                    <span class="db_dynamicbar">Loading...</span>
                                                </div>
                                            </div>
                                            <div class="col-12">

                                                <div class="r1_graph2 db_box db_box_large">
                                                    <span class='bold'>2332</span>
                                                    <span class='float-right'><small>Pharmacy Orders</small></span>
                                                    <div class="clearfix"></div>
                                                    <span class="db_linesparkline">Loading...</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- End .row -->





                                <div class="row">



                                    <div class="col-lg-7 col-md-12 col-12">
                                        <div class="r1_maingraph db_box">
                                            <span class='float-left'>
                                                <i class='icon-purple fa fa-square icon-xs'></i>&nbsp;<small>OPD Earnings</small>&nbsp; &nbsp;<i class='fa fa-square icon-xs icon-primary'></i>&nbsp;<small>IPD Earnings</small>
                                            </span>
                                            <div id="db_morris_line_graph" style="height:auto;width:100%;"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-md-12 col-12">

                                        <div class="row">
                                            <div class="col-12">

                                                <div class="r1_graph1 db_box db_box_large">
                                                    <span class='bold'>67/98</span>
                                                    <span class='float-right'><small>OPD/IPD Visitors</small></span>
                                                    <div class="clearfix"></div>
                                                    <span class="db_compositebar">Loading...</span>
                                                </div>
                                            </div>
                                            <div class="col-12">

                                                <div class="r1_graph2 db_box db_box_large">
                                                    <span class='bold'>332</span>
                                                    <span class='float-right'><small>Lab Tests</small></span>
                                                    <div class="clearfix"></div>
                                                    <span class="db_linesparkline2">Loading...</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- End .row -->

                            </div>
                        </section></div>



                    <!-- MAIN CONTENT AREA ENDS -->
                </section>
            </section>
            <!-- END CONTENT -->
            <div class="page-chatapi hideit">

                <div class="search-bar">
                    <input type="text" placeholder="Search" class="form-control">
                </div>

                <div class="chat-wrapper">
                    <h4 class="group-head">Groups</h4>
                    <ul class="group-list list-unstyled">
                        <li class="group-row">
                            <div class="group-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="index-hospital.html#">Work</a></h4>
                            </div>
                        </li>
                        <li class="group-row">
                            <div class="group-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="index-hospital.html#">Friends</a></h4>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">Favourites</h4>
                    <ul class="contact-list">

                        <li class="user-row " id='chat_user_1' data-user-id='1'>
                            <div class="user-img">
                                <a href="index-hospital.html#"><img src="../data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="index-hospital.html#">Clarine Vassar</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row " id='chat_user_2' data-user-id='2'>
                            <div class="user-img">
                                <a href="index-hospital.html#"><img src="../data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="index-hospital.html#">Brooks Latshaw</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row " id='chat_user_3' data-user-id='3'>
                            <div class="user-img">
                                <a href="index-hospital.html#"><img src="../data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="index-hospital.html#">Clementina Brodeur</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">More Contacts</h4>
                    <ul class="contact-list">

                        <li class="user-row " id='chat_user_4' data-user-id='4'>
                            <div class="user-img">
                                <a href="index-hospital.html#"><img src="../data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="index-hospital.html#">Carri Busey</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row " id='chat_user_5' data-user-id='5'>
                            <div class="user-img">
                                <a href="index-hospital.html#"><img src="../data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="index-hospital.html#">Melissa Dock</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row " id='chat_user_6' data-user-id='6'>
                            <div class="user-img">
                                <a href="index-hospital.html#"><img src="../data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="index-hospital.html#">Verdell Rea</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row " id='chat_user_7' data-user-id='7'>
                            <div class="user-img">
                                <a href="index-hospital.html#"><img src="../data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="index-hospital.html#">Linette Lheureux</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row " id='chat_user_8' data-user-id='8'>
                            <div class="user-img">
                                <a href="index-hospital.html#"><img src="../data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="index-hospital.html#">Araceli Boatright</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row " id='chat_user_9' data-user-id='9'>
                            <div class="user-img">
                                <a href="index-hospital.html#"><img src="../data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="index-hospital.html#">Clay Peskin</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row " id='chat_user_10' data-user-id='10'>
                            <div class="user-img">
                                <a href="index-hospital.html#"><img src="../data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="index-hospital.html#">Loni Tindall</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row " id='chat_user_11' data-user-id='11'>
                            <div class="user-img">
                                <a href="index-hospital.html#"><img src="../data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="index-hospital.html#">Tanisha Kimbro</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row " id='chat_user_12' data-user-id='12'>
                            <div class="user-img">
                                <a href="index-hospital.html#"><img src="../data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="index-hospital.html#">Jovita Tisdale</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>


            <div class="chatapi-windows ">




            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script> 
        <script src="../assets/js/popper.min.js" type="text/javascript"></script> 
        <script src="../assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="../assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="../assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <script>window.jQuery || document.write('<script src="../assets/js/jquery-1.11.2.min.js"><\/script>');</script>
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 

        <script src="http://jaybabani.com/complete-admin/v6.4/bs4/assets/plugins/rickshaw-chart/vendor/d3.v3.js" type="text/javascript"></script> <script src="../assets/plugins/jquery-ui/smoothness/jquery-ui.min.js" type="text/javascript"></script> <script src="http://jaybabani.com/complete-admin/v6.4/bs4/assets/plugins/rickshaw-chart/js/Rickshaw.All.js"></script>
        <script src="../assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/morris-chart/js/raphael-min.js" type="text/javascript"></script>
        <script src="../assets/plugins/morris-chart/js/morris.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <script src="../assets/plugins/gauge/gauge.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/icheck/icheck.min.js" type="text/javascript"></script>
        <script src="../assets/js/hos-dashboard.js" type="text/javascript"></script>
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="../assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 


        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>
</html>





<script type="text/javascript">


</script>