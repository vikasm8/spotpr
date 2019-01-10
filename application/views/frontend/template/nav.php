<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="<?php echo base_url()?>assets/img/sidebar-1.jpg">
            <!--
                Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
                Tip 2: you can also add an image using data-image tag
                Tip 3: you can change the color of the sidebar with data-background-color="white | black"
            -->
            <div class="logo">
                <a  class="simple-text">
                   Control Panel
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="#" class="simple-text">
                  CP
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="<?php echo base_url()?>assets/img/faces/avatar.jpg" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <!-- <b class="caret"></b> -->
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="<?php echo (checkTabActive(array("index")))? "active" : ""; ?>">
                        <a href="<?php echo base_url()?>dashboard">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                     <li class="<?php echo (checkTabActive(array("index")))? "active" : ""; ?>">
                        <a href="<?php echo base_url()?>dashboard">
                            <i class="material-icons">dashboard</i>
                            <p>Master Server Inventory</p>
                        </a>
                    </li>
                     <li class="<?php echo (checkTabActive(array("index")))? "active" : ""; ?>">
                        <a href="<?php echo base_url()?>srtracker">
                            <i class="material-icons">dashboard</i>
                            <p>SR Tracker</p>
                        </a>
                    </li>
                    <li class="<?php echo (checkTabActive(array("index")))? "active" : ""; ?>">
                        <a href="<?php echo base_url()?>users">
                            <i class="material-icons">dashboard</i>
                            <p>Team Mates</p>
                        </a>
                    </li>
                    
                    <li class="<?php echo (checkTabActive(array("logout")))? "active" : ""; ?>">
                        <a href="<?php echo base_url();?>logout">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            <p>logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
            </nav>