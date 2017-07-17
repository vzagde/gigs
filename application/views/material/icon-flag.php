<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-sm-down search-box">
                            <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-view-grid"></i></a>
                            <div class="dropdown-menu scale-up-left">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 m-b-30">
                                        <h4 class="m-b-20">CAROUSEL</h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"> <img class="d-block img-fluid" src="../assets/images/big/img1.jpg" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img2.jpg" alt="Second slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img3.jpg" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-3 m-b-30">
                                        <h4 class="m-b-20">ACCORDION</h4>
                                        <!-- Accordian -->
                                        <div id="accordion" class="nav-accordion" role="tablist" aria-multiselectable="true">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Collapsible Group Item #1
                                                </a>
                                              </h5> </div>
                                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="card-block"> Anim pariatur cliche reprehenderit, enim eiusmod high. </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingTwo">
                                                    <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  Collapsible Group Item #2
                                                </a>
                                              </h5> </div>
                                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="card-block"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingThree">
                                                    <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  Collapsible Group Item #3
                                                </a>
                                              </h5> </div>
                                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="card-block"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="../assets/images/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Steave Jobs</h4>
                                                <p class="text-muted">varun@gmail.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up"> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-in"></i> India</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> China</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a> </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile" style="background: url(../assets/images/background/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../assets/images/users/profile.png" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe</a>
                        <div class="dropdown-menu animated flipInY">
                            <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                            <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.html">Dashboard 1</a></li>
                                <li><a href="index2.html">Dashboard 2</a></li>
                                <li><a href="index3.html">Dashboard 3</a></li>
                                <li><a href="index4.html">Dashboard 4</a></li>
                                <li><a href="index5.html">Dashboard 5</a></li>
                                <li><a href="index6.html">Dashboard 6</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-laptop-windows"></i><span class="hide-menu">Template Demos</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../minisidebar/index.html">Minisidebar</a></li>
                                <li><a href="../horizontal/index2.html">Horizontal</a></li>
                                <li><a href="../dark/index3.html">Dark Version</a></li>
                                <li><a href="../material-rtl/index4.html">RTL Version</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Apps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-calendar.html">Calendar</a></li>
                                <li><a href="app-chat.html">Chat app</a></li>
                                <li><a href="app-ticket.html">Support Ticket</a></li>
                                <li><a href="app-contact.html">Contact / Employee</a></li>
                                <li><a href="app-contact2.html">Contact Grid</a></li>
                                <li><a href="app-contact-detail.html">Contact Detail</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Inbox</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-email.html">Mailbox</a></li>
                                <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                                <li><a href="app-compose.html">Compose Mail</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Ui Elements</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-user-card.html">User Cards</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-tab.html">Tab</a></li>
                                <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                                <li><a href="ui-tooltip-stylish.html">Tooltip stylish</a></li>
                                <li><a href="ui-sweetalert.html">Sweet Alert</a></li>
                                <li><a href="ui-notification.html">Notification</a></li>
                                <li><a href="ui-progressbar.html">Progressbar</a></li>
                                <li><a href="ui-nestable.html">Nestable</a></li>
                                <li><a href="ui-range-slider.html">Range slider</a></li>
                                <li><a href="ui-timeline.html">Timeline</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
                                <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                                <li><a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>
                                <li><a href="ui-bootstrap.html">Bootstrap Ui</a></li>
                                <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                                <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
                                <li><a href="ui-list-media.html">List Media</a></li>
                                <li><a href="ui-ribbons.html">Ribbons</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                                <li><a href="ui-carousel.html">Carousel</a></li>
                                <li><a href="ui-date-paginator.html">Date-paginator</a></li>
                                <li><a href="ui-dragable-portlet.html">Dragable Portlet</a></li>
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">FORMS, TABLE &amp; WIDGETS</li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="form-basic.html">Basic Forms</a></li>
                                <li><a href="form-layout.html">Form Layouts</a></li>
                                <li><a href="form-addons.html">Form Addons</a></li>
                                <li><a href="form-material.html">Form Material</a></li>
                                <li><a href="form-float-input.html">Floating Lable</a></li>
                                <li><a href="form-pickers.html">Form Pickers</a></li>
                                <li><a href="form-upload.html">File Upload</a></li>
                                <li><a href="form-mask.html">Form Mask</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-dropzone.html">File Dropzone</a></li>
                                <li><a href="form-icheck.html">Icheck control</a></li>
                                <li><a href="form-img-cropper.html">Image Cropper</a></li>
                                <li><a href="form-bootstrapwysihtml5.html">HTML5 Editor</a></li>
                                <li><a href="form-typehead.html">Form Typehead</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-xeditable.html">Xeditable Editor</a></li>
                                <li><a href="form-summernote.html">Summernote Editor</a></li>
                                <li><a href="form-tinymce.html">Tinymce Editor</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Tables</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="table-basic.html">Basic Tables</a></li>
                                <li><a href="table-layout.html">Table Layouts</a></li>
                                <li><a href="table-data-table.html">Data Tables</a></li>
                                <li><a href="table-footable.html">Footable</a></li>
                                <li><a href="table-jsgrid.html">Js Grid Table</a></li>
                                <li><a href="table-responsive.html">Responsive Table</a></li>
                                <li><a href="table-bootstrap.html">Bootstrap Tables</a></li>
                                <li><a href="table-editable-table.html">Editable Table</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Widgets</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="widget-apps.html">Widget Apps</a></li>
                                <li><a href="widget-data.html">Widget Data</a></li>
                                <li><a href="widget-charts.html">Widget Charts</a></li>
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">EXTRA COMPONENTS</li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Page Layout</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="layout-single-column.html">1 Column</a></li>
                                <li><a href="layout-fix-header.html">Fix header</a></li>
                                <li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>
                                <li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>
                                <li><a href="layout-boxed.html">Boxed Layout</a></li>
                                <li><a href="layout-logo-center.html">Logo in Center</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Sample Pages</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="starter-kit.html">Starter Kit</a></li>
                                <li><a href="pages-blank.html">Blank page</a></li>
                                <li><a href="#" class="has-arrow">Authentication <span class="label label-rounded label-success">6</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="pages-login.html">Login 1</a></li>
                                        <li><a href="pages-login-2.html">Login 2</a></li>
                                        <li><a href="pages-register.html">Register</a></li>
                                        <li><a href="pages-register2.html">Register 2</a></li>
                                        <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                                        <li><a href="pages-recover-password.html">Recover password</a></li>
                                    </ul>
                                </li>
                                <li><a href="pages-profile.html">Profile page</a></li>
                                <li><a href="pages-animation.html">Animation</a></li>
                                <li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
                                <li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
                                <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-treeview.html">Treeview</a></li>
                                <li><a href="pages-utility-classes.html">Helper Classes</a></li>
                                <li><a href="pages-search-result.html">Search result</a></li>
                                <li><a href="pages-scroll.html">Scrollbar</a></li>
                                <li><a href="pages-pricing.html">Pricing</a></li>
                                <li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>
                                <li><a href="pages-gallery.html">Gallery</a></li>
                                <li><a href="pages-faq.html">Faqs</a></li>
                                <li><a href="#" class="has-arrow">Error Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="pages-error-400.html">400</a></li>
                                        <li><a href="pages-error-403.html">403</a></li>
                                        <li><a href="pages-error-404.html">404</a></li>
                                        <li><a href="pages-error-500.html">500</a></li>
                                        <li><a href="pages-error-503.html">503</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file-chart"></i><span class="hide-menu">Charts</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="chart-morris.html">Morris Chart</a></li>
                                <li><a href="chart-chartist.html">Chartis Chart</a></li>
                                <li><a href="chart-echart.html">Echarts</a></li>
                                <li><a href="chart-flot.html">Flot Chart</a></li>
                                <li><a href="chart-knob.html">Knob Chart</a></li>
                                <li><a href="chart-chart-js.html">Chartjs</a></li>
                                <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                <li><a href="chart-extra-chart.html">Extra chart</a></li>
                                <li><a href="chart-peity.html">Peity Charts</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-brush"></i><span class="hide-menu">Icons</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="icon-material.html">Material Icons</a></li>
                                <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                <li><a href="icon-themify.html">Themify Icons</a></li>
                                <li><a href="icon-linea.html">Linea Icons</a></li>
                                <li><a href="icon-weather.html">Weather Icons</a></li>
                                <li><a href="icon-simple-lineicon.html">Simple Lineicons</a></li>
                                <li><a href="icon-flag.html">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-map-marker"></i><span class="hide-menu">Maps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="map-google.html">Google Maps</a></li>
                                <li><a href="map-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level dd</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">item 1.1</a></li>
                                <li><a href="#">item 1.2</a></li>
                                <li>
                                    <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#">item 1.3.1</a></li>
                                        <li><a href="#">item 1.3.2</a></li>
                                        <li><a href="#">item 1.3.3</a></li>
                                        <li><a href="#">item 1.3.4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">item 1.4</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Weather icon Page</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Icon</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                                    <h4 class="m-t-0 text-info">$58,356</h4></div>
                                <div class="spark-chart">
                                    <div id="monthchart"></div>
                                </div>
                            </div>
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                                    <h4 class="m-t-0 text-primary">$48,356</h4></div>
                                <div class="spark-chart">
                                    <div id="lastmonthchart"></div>
                                </div>
                            </div>
                            <div class="">
                                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">flag icons</h4>
                                <h6 class="card-subtitle">You can use any icons with class <code>flag-icon flag-icon-us</code></h6>
                                <div class="icon-list-demo row">
                                    <div class="col-3"><i class="flag-icon flag-icon-ad" title="ad" id="ad"></i> AD</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ae" title="ae" id="ae"></i> AE</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-af" title="af" id="af"></i> AF</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ag" title="ag" id="ag"></i> AG</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ai" title="ai" id="ai"></i> AU</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-al" title="al" id="al"></i> AL</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-am" title="am" id="am"></i> AM</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ao" title="ao" id="ao"></i> AO</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-aq" title="aq" id="aq"></i> AQ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ar" title="ar" id="ar"></i> AR</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-as" title="as" id="as"></i> AS</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-at" title="at" id="at"></i> AT</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-au" title="au" id="au"></i> AU</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-aw" title="aw" id="aw"></i> AW</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ax" title="ax" id="ax"></i> AX</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-az" title="az" id="az"></i> AZ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ba" title="ba" id="ba"></i> BA</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-bb" title="bb" id="bb"></i> BB</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-bd" title="bd" id="bd"></i> BD</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-be" title="be" id="be"></i> BE</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-bf" title="bf" id="bf"></i> BF</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-bg" title="bg" id="bg"></i> BG</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-bh" title="bh" id="bh"></i> BH</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-bi" title="bi" id="bi"></i> BI</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-bj" title="bj" id="bj"></i> BJ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-bl" title="bl" id="bl"></i> BL</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-bm" title="bm" id="bm"></i> BM</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-bn" title="bn" id="bn"></i> BN</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-bo" title="bo" id="bo"></i> BO</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-bq" title="bq" id="bq"></i> BQ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-br" title="br" id="br"></i> BR</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-bs" title="bs" id="bs"></i> BS</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-bt" title="bt" id="bt"></i> BT</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-bv" title="bv" id="bv"></i> BV</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-bw" title="bw" id="bw"></i> BW</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-by" title="by" id="by"></i> BY</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-bz" title="bz" id="bz"></i> BZ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ca" title="ca" id="ca"></i> CA</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-cc" title="cc" id="cc"></i> CC</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-cd" title="cd" id="cd"></i> CD</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-cf" title="cf" id="cf"></i> CF</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-cg" title="cg" id="cg"></i> CG</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ch" title="ch" id="ch"></i> CH</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ci" title="ci" id="ci"></i> CI</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ck" title="ck" id="ck"></i> CK</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-cl" title="cl" id="cl"></i> CL</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-cm" title="cm" id="cm"></i> CM</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-cn" title="cn" id="cn"></i> CN</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-co" title="co" id="co"></i> CO</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-cr" title="cr" id="cr"></i> CR</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-cu" title="cu" id="cu"></i> CU</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-cv" title="cv" id="cv"></i> CV</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-cw" title="cw" id="cw"></i> CW</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-cx" title="cx" id="cx"></i> CX</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-cy" title="cy" id="cy"></i> CY</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-cz" title="cz" id="cz"></i> CZ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-de" title="de" id="de"></i> DE</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-dj" title="dj" id="dj"></i> DJ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-dk" title="dk" id="dk"></i> DK</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-dm" title="dm" id="dm"></i> DM</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-do" title="do" id="do"></i> DO</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-dz" title="dz" id="dz"></i> DZ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ec" title="ec" id="ec"></i> EC</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ee" title="ee" id="ee"></i> EE</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-eg" title="eg" id="eg"></i> EG</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-eh" title="eh" id="eh"></i> EH</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-er" title="er" id="er"></i> ER</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-es" title="es" id="es"></i> ES</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-et" title="et" id="et"></i> ET</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-fi" title="fi" id="fi"></i> FI</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-fj" title="fj" id="fj"></i> FJ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-fk" title="fk" id="fk"></i> FK</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-fm" title="fm" id="fm"></i> FM</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-fo" title="fo" id="fo"></i> FO</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> FR</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ga" title="ga" id="ga"></i> GA</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-gb" title="gb" id="gb"></i> GB</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-gd" title="gd" id="gd"></i> GD</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ge" title="ge" id="ge"></i> GE</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-gf" title="gf" id="gf"></i> GF</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-gg" title="gg" id="gg"></i> GG</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-gh" title="gh" id="gh"></i> GH</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-gi" title="gi" id="gi"></i> GI</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-gl" title="gl" id="gl"></i> GL</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-gm" title="gm" id="gm"></i> GM</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-gn" title="gn" id="gn"></i> GN</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-gp" title="gp" id="gp"></i> GP</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-gq" title="gq" id="gq"></i> GQ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-gr" title="gr" id="gr"></i> GR</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-gs" title="gs" id="gs"></i> GS</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-gt" title="gt" id="gt"></i> GT</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-gu" title="gu" id="gu"></i> GU</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-gw" title="gw" id="gw"></i> GW</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-gy" title="gy" id="gy"></i> GY</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-hk" title="hk" id="hk"></i> HK</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-hm" title="hm" id="hm"></i> HM</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-hn" title="hn" id="hn"></i> HN</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-hr" title="hr" id="hr"></i> HR</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ht" title="ht" id="ht"></i> HT</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-hu" title="hu" id="hu"></i> HU</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-id" title="id" id="id"></i> ID</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ie" title="ie" id="ie"></i> IE</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-il" title="il" id="il"></i> IL</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-im" title="im" id="im"></i> IM</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-in" title="in" id="in"></i> IN</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-io" title="io" id="io"></i> IO</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-iq" title="iq" id="iq"></i> IQ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ir" title="ir" id="ir"></i> IR</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-is" title="is" id="is"></i> IS</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-it" title="it" id="it"></i> IT</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-je" title="je" id="je"></i> JE</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-jm" title="jm" id="jm"></i> JM</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-jo" title="jo" id="jo"></i> JO</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-jp" title="jp" id="jp"></i> JP</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ke" title="ke" id="ke"></i> KE</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-kg" title="kg" id="kg"></i> KG</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-kh" title="kh" id="kh"></i> KH</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ki" title="ki" id="ki"></i> KI</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-km" title="km" id="km"></i> KM</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-kn" title="kn" id="kn"></i> KN</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-kp" title="kp" id="kp"></i> KP</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-kr" title="kr" id="kr"></i> KR</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-kw" title="kw" id="kw"></i> KW</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ky" title="ky" id="ky"></i> KY</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-kz" title="kz" id="kz"></i> KZ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-la" title="la" id="la"></i> LA</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-lb" title="lb" id="lb"></i> LB</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-lc" title="lc" id="lc"></i> LC</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-li" title="li" id="li"></i> LI</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-lk" title="lk" id="lk"></i> LK</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-lr" title="lr" id="lr"></i> LR</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ls" title="ls" id="ls"></i> LS</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-lt" title="lt" id="lt"></i> LT</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-lu" title="lu" id="lu"></i> LU</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-lv" title="lv" id="lv"></i> LV</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ly" title="ly" id="ly"></i> LY</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ma" title="ma" id="ma"></i> MA</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-mc" title="mc" id="mc"></i> MC</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-md" title="md" id="md"></i> MD</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-me" title="me" id="me"></i> ME</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-mf" title="mf" id="mf"></i> MF</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-mg" title="mg" id="mg"></i> MG</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-mh" title="mh" id="mh"></i> MH</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-mk" title="mk" id="mk"></i> MK</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ml" title="ml" id="ml"></i> ML</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-mm" title="mm" id="mm"></i> MM</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-mn" title="mn" id="mn"></i> MN</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-mo" title="mo" id="mo"></i> MO</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-mp" title="mp" id="mp"></i> MP</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-mq" title="mq" id="mq"></i> MQ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-mr" title="mr" id="mr"></i> MR</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ms" title="ms" id="ms"></i> MS</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-mt" title="mt" id="mt"></i> MT</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-mu" title="mu" id="mu"></i> MU</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-mv" title="mv" id="mv"></i> MV</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-mw" title="mw" id="mw"></i> MW</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-mx" title="mx" id="mx"></i> MX</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-my" title="my" id="my"></i> MY</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-mz" title="mz" id="mz"></i> MZ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-na" title="na" id="na"></i> NA</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-nc" title="nc" id="nc"></i> NC</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ne" title="ne" id="ne"></i> NE</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-nf" title="nf" id="nf"></i> NF</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ng" title="ng" id="ng"></i> NG</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ni" title="ni" id="ni"></i> NI</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-nl" title="nl" id="nl"></i> NL</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-no" title="no" id="no"></i> NO</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-np" title="np" id="np"></i> NP</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-nr" title="nr" id="nr"></i> NR</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-nu" title="nu" id="nu"></i> NU</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-nz" title="nz" id="nz"></i> NZ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-om" title="om" id="om"></i> OM</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-pa" title="pa" id="pa"></i> PA</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-pe" title="pe" id="pe"></i> PE</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-pf" title="pf" id="pf"></i> PF</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-pg" title="pg" id="pg"></i> PG</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ph" title="ph" id="ph"></i> PH</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-pk" title="pk" id="pk"></i> PK</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-pl" title="pl" id="pl"></i> PL</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-pm" title="pm" id="pm"></i> PM</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-pn" title="pn" id="pn"></i> PN</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-pr" title="pr" id="pr"></i> PR</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ps" title="ps" id="ps"></i> PS</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> PT</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-pw" title="pw" id="pw"></i> PW</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-py" title="py" id="py"></i> PY</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-qa" title="qa" id="qa"></i> QA</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-re" title="re" id="re"></i> RE</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ro" title="ro" id="ro"></i> RO</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-rs" title="rs" id="rs"></i> RS</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ru" title="ru" id="ru"></i> RU</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-rw" title="rw" id="rw"></i> RW</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-sa" title="sa" id="sa"></i> SA</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-sb" title="sb" id="sb"></i> SB</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-sc" title="sc" id="sc"></i> SC</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-sd" title="sd" id="sd"></i> SD</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-se" title="se" id="se"></i> SE</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-sg" title="sg" id="sg"></i> SG</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-sh" title="sh" id="sh"></i> SH</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-si" title="si" id="si"></i> SI</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-sj" title="sj" id="sj"></i> SJ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-sk" title="sk" id="sk"></i> SK</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-sl" title="sl" id="sl"></i> SL</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-sm" title="sm" id="sm"></i> SM</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-sn" title="sn" id="sn"></i> SN</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-so" title="so" id="so"></i> SO</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-sr" title="sr" id="sr"></i> SR</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ss" title="ss" id="ss"></i> SS</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-st" title="st" id="st"></i> ST</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-sv" title="sv" id="sv"></i> SV</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-sx" title="sx" id="sx"></i> SX</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-sy" title="sy" id="sy"></i> SY</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-sz" title="sz" id="sz"></i> SZ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-tc" title="tc" id="tc"></i> TC</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-td" title="td" id="td"></i> TD</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-tf" title="tf" id="tf"></i> TF</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-tg" title="tg" id="tg"></i> TG</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-th" title="th" id="th"></i> TH</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-tj" title="tj" id="tj"></i> TJ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-tk" title="tk" id="tk"></i> TK</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-tl" title="tl" id="tl"></i> TL</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-tm" title="tm" id="tm"></i> TM</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-tn" title="tn" id="tn"></i> TN</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-to" title="to" id="to"></i> TO</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-tr" title="tr" id="tr"></i> TR</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-tt" title="tt" id="tt"></i> TT</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-tv" title="tv" id="tv"></i> TV</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-tw" title="tw" id="tw"></i> TW</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-tz" title="tz" id="tz"></i> TZ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ua" title="ua" id="ua"></i> UA</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ug" title="ug" id="ug"></i> UG</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-um" title="um" id="um"></i> UM</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-us" title="us" id="us"></i> US</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-uy" title="uy" id="uy"></i> UY</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-uz" title="uz" id="uz"></i> UZ</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-va" title="va" id="va"></i> VA</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-vc" title="vc" id="vc"></i> VC</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ve" title="ve" id="ve"></i> VE</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-vg" title="vg" id="vg"></i> VG</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-vi" title="vi" id="vi"></i> VI</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-vn" title="vn" id="vn"></i> VN</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-vu" title="vu" id="vu"></i> VU</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-wf" title="wf" id="wf"></i> WF</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ws" title="ws" id="ws"></i> WS</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-ye" title="ye" id="ye"></i> YE</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-yt" title="yt" id="yt"></i> YT</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-za" title="za" id="za"></i> ZA</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-zm" title="zm" id="zm"></i> ZM</div>
                                    <div class="col-3"><i class="flag-icon flag-icon-zw" title="zw" id="zw"></i> ZW</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2017 Material Pro Admin by wrappixel.com </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
