<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url()?>assets/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url()?>assets/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url()?>assets/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>assets/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>assets/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>assets/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>assets/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url()?>assets/admin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                   <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo base_url()?>assets/admin/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </bu
                </div>
            </div>
           
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">

                        <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url()?>assets/admin/images/icon/earthlogo.png" alt="Admin Pannel" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                         
                        </li>
                        <li>
                            <a href="<?=site_url('admin/index')?>">
                                <i class="fas fa-chart-bar"></i>Course</a>
                        </li>
                        <li>
                            <a href="<?=site_url('admin/viewlesson')?>">
                                <i class="fas fa-table"></i>Lessons</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Video</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Ques</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Announce</a>
                        </li>
                       
                       
                    </ul>
                </nav>
            </div>
        </aside>
             
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
       <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid"> 
                    <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                               
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo base_url()?>assets/admin/images/icon/man.png" alt="sayeed azmal" />
                                        </div>
                                        
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo base_url()?>assets/admin/images/icon/man.png" alt="sayeed azmal" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">sayeed azmal</a>
                                                    </h5>
                                                    <span class="email">sayeedazmal01@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                              
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?=site_url('admin/logout')?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="row">
                         <div class="col-lg-2">
                          <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Add Course</span>
                                
                            </button>
                           </div>
                       </div>
                        <div class="row">
                          
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Course Name</th>
                                                <th>Course No</th>
                                                <th >Course Title</th>
                                                <th >img</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Java</td>
                                                <td>CSE-102</td>
                                                <td>Java OOP</td>
                                                <td>1</td>
                                              <td>
                                          
                                         <a href=" ">
                                           <button type="button" class="btn btn-primary" >
                                             <i class="fas fa-edit"></i>
                                            </button>
                                         </a> 
                                          <a href="">
                                            <button type="button" class="btn btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                         </a>
                                                </td>
                                            </tr>
                                             <tr>
                                                <td>2</td>
                                                <td>Java</td>
                                                <td>CSE-102</td>
                                                <td>Java OOP</td>
                                                <td>1</td>
                                                <td>
                                                 <a href=" ">
                                           <button type="button" class="btn btn-primary" >
                                             <i class="fas fa-edit"></i>
                                            </button>
                                         </a> 
                                          <a href="">
                                            <button type="button" class="btn btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                         </a> 
                                                </td>
                                            </tr>

                                             <tr>
                                                <td>3</td>
                                                <td>Java</td>
                                                <td>CSE-102</td>
                                                <td>Java OOP</td>
                                                <td>1</td>
                                                <td>
                                                 <a href=" ">
                                           <button type="button" class="btn btn-primary" >
                                             <i class="fas fa-edit"></i>
                                            </button>
                                         </a> 
                                          <a href="">
                                            <button type="button" class="btn btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                         </a> 
                                                </td>
                                            </tr>

                                             <tr>
                                                <td>4</td>
                                                <td>Java</td>
                                                <td>CSE-102</td>
                                                <td>Java OOP</td>
                                                <td>1</td>
                                                <td>
                                                 <a href=" ">
                                           <button type="button" class="btn btn-primary" >
                                             <i class="fas fa-edit"></i>
                                            </button>
                                         </a> 
                                          <a href="">
                                            <button type="button" class="btn btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                         </a> 
                                                </td>
                                            </tr>

                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                       
                       
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url()?>assets/admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url()?>assets/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url()?>assets/admin/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url()?>assets/admin/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url()?>assets/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url()?>assets/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url()?>assets/admin/js/main.js"></script>

</body>

</html>
<!-- end document-->
