

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>RPTOPS - Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url()?>assets/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url()?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />

    <script src="<?php echo base_url()?>assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <style type="text/css">
        .has-error{
            color: red;
        }
        .list-img{
            width: 50px !important;
            height: 50px !important;
        }
    </style>
    
</head>
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
                  Control Panel
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
                    
                    <li class="<?php echo (checkTabActive(array("logout")))? "active" : ""; ?>">
                        <a href="<?php echo base_url();?>admin/logout">
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

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">contacts</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Add Record</h4>

                        <?php if($this->session->flashdata('success')) { ?>
                          <div class="alert alert-success">
                                <strong><?php echo $this->session->flashdata('success');?></strong> 
                          </div>
                        <?php } ?>
                        <?php if($this->session->flashdata('error')) { ?>
                          <div class="alert alert-danger">
                            <strong><?php echo $this->session->flashdata('error');?></strong> 
                          </div>       
                        <?php } ?>

                        <form class="form-horizontal" method="post" action="<?php echo site_url().'add_tracker' ?>">
                            
                             <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Jira Number</label>
                                                                <input type="text" name="jira_number" class="form-control" value="" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Database name</label>
                                                                <input type="text"  name="database_name" value="" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">SR Number</label>
                                                                <input type="text"  name="sr_number" class="form-control" value="" >
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">SR Name</label>
                                                                <input type="text"  name="sr_name" class="form-control" value="" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Start Date</label>
                                                                <input type="date"  name="start_date" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Change Number</label>
                                                                <input type="text"  name="change_number" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Change Status</label>
                                                                <input type="text"  name="change_status" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    

                                                    <div class="row">
                                                        <label class="col-md-3"></label>
                                                        <div class="col-md-9">
                                                            <div class="form-group form-button">
                                                                <button type="submit" name="btnSubmit" value="submit" class="btn btn-fill btn-rose">
                                                                Submit
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    

<script type="text/javascript">
  
</script>