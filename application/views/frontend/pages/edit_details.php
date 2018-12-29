<!doctype html>
<html lang="en">

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
<div class="content">
  <?php 
  //print_r($dataInfo);
  ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">contacts</i>
                    </div>
                     <div class="card-header">
                        <a href="<?php echo base_url().'dashboard'; ?>">Back</a>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Edit Data Info</h4>

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

                        <form class="form-horizontal" method="post" action="<?php echo site_url().'edit_details/'.$dataInfo['ID']; ?>">
                            
                            <div class="row">
                                    <input type="hidden" name="id" value="<?php echo $dataInfo['ID']; ?>">
                                    <div class="col-md-12">
                                        <div class="card">

                                            
                                            <div class="card-content">
                                                

                                                <!--<form>-->
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">SERVER</label>
                                                                <input type="text" name="SERVER" class="form-control" value="<?php echo (!empty($dataInfo['SERVER']) ? $dataInfo['SERVER'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">OS</label>
                                                                <input type="text" name="OS" value="<?php echo (!empty($dataInfo['OS']) ? $dataInfo['OS'] : 'N/A'); ?>" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">BLADE</label>
                                                                <input type="text" name="BLADE" class="form-control" value="<?php echo (!empty($dataInfo['BLADE']) ? $dataInfo['BLADE'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">PRODUCT</label>
                                                                <input type="text" name="PRODUCT" class="form-control" value="<?php echo (!empty($dataInfo['PRODUCT']) ? $dataInfo['PRODUCT'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">APPLICATION</label>
                                                                <input type="text" name="APPLICATION" class="form-control" value="<?php echo (!empty($dataInfo['APPLICATION']) ? $dataInfo['APPLICATION'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">MANGER</label>
                                                                <input type="text" name="MANGER" class="form-control" value="<?php echo (!empty($dataInfo['MANGER']) ? $dataInfo['MANGER'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">COMPONENT</label>
                                                                <input type="text" name="COMPONENT" class="form-control" value="<?php echo (!empty($dataInfo['COMPONENT']) ? $dataInfo['COMPONENT'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">ENVIRONMENT</label>
                                                                <input type="text" name="ENVIRONMENT" class="form-control" value="<?php echo (!empty($dataInfo['ENVIRONMENT']) ? $dataInfo['ENVIRONMENT'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">MAINTENANCE_WINDOW</label>
                                                                <input type="text" name="MAINTENANCE_WINDOW" class="form-control" value="<?php echo (!empty($dataInfo['MAINTENANCE_WINDOW']) ? $dataInfo['MAINTENANCE_WINDOW'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">MIDDLEWARE_UPLIFT</label>
                                                                <input type="text" name="MIDDLEWARE_UPLIFT" class="form-control" value="<?php echo (!empty($dataInfo['MIDDLEWARE_UPLIFT']) ? $dataInfo['MIDDLEWARE_UPLIFT'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">COST_CENTER</label>
                                                                <input type="text" name="COST_CENTER" class="form-control" value="<?php echo (!empty($dataInfo['COST_CENTER']) ? $dataInfo['COST_CENTER'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">ON_CALL_PAGER</label>
                                                                <input type="text" name="ON_CALL_PAGER" class="form-control" value="<?php echo (!empty($dataInfo['ON_CALL_PAGER']) ? $dataInfo['ON_CALL_PAGER'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">MRC_COST_CENTER</label>
                                                                <input type="text" name="MRC_COST_CENTER" class="form-control" value="<?php echo (!empty($dataInfo['MRC_COST_CENTER']) ? $dataInfo['MRC_COST_CENTER'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">APP_READY</label>
                                                                <input type="text" name="APP_READY" class="form-control" value="<?php echo (!empty($dataInfo['APP_READY']) ? $dataInfo['APP_READY'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">OS_VERSION</label>
                                                                <input type="text" name="OS_VERSION" class="form-control" value="<?php echo (!empty($dataInfo['OS_VERSION']) ? $dataInfo['OS_VERSION'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">FINAL_TIER_LEVEL</label>
                                                                <input type="text" name="FINAL_TIER_LEVEL" class="form-control" value="<?php echo (!empty($dataInfo['FINAL_TIER_LEVEL']) ? $dataInfo['FINAL_TIER_LEVEL'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">HP_TIER_LEVEL</label>
                                                                <input type="text" name="HP_TIER_LEVEL" class="form-control" value="<?php echo (!empty($dataInfo['HP_TIER_LEVEL']) ? $dataInfo['HP_TIER_LEVEL'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">COST_CENTER</label>
                                                                <input type="text" name="COST_CENTER" class="form-control" value="<?php echo (!empty($dataInfo['COST_CENTER']) ? $dataInfo['COST_CENTER'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                     </div>
                                                     <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">HW_ESOL</label>
                                                                <input type="text" name="HW_ESOL" class="form-control" value="<?php echo (!empty($dataInfo['HW_ESOL']) ? $dataInfo['HW_ESOL'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">OS_ESOL</label>
                                                                <input type="text" name="OS_ESOL" class="form-control" value="<?php echo (!empty($dataInfo['OS_ESOL']) ? $dataInfo['OS_ESOL'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">KERNEL </label>
                                                                <input type="text" name="KERNEL" class="form-control" value="<?php echo (!empty($dataInfo['KERNEL']) ? $dataInfo['KERNEL'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                     </div>
                                                     <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">DECOMMSION_DATE_AND_SR</label>
                                                                <input type="text" name="DECOMMSION_DATE_AND_SR" class="form-control" value="<?php echo (!empty($dataInfo['DECOMMSION_DATE_AND_SR']) ? $dataInfo['DECOMMSION_DATE_AND_SR'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">SOCKETS</label>
                                                                <input type="text" name="SOCKETS" class="form-control" value="<?php echo (!empty($dataInfo['SOCKETS']) ? $dataInfo['SOCKETS'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">INSTALL_DATE</label>
                                                                <input type="text" name="INSTALL_DATE" class="form-control" value="<?php echo (!empty($dataInfo['INSTALL_DATE']) ? $dataInfo['INSTALL_DATE'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                     </div>
                                                     <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">PULLDATE</label>
                                                                <input type="text" name="PULLDATE" class="form-control" value="<?php echo (!empty($dataInfo['PULLDATE']) ? $dataInfo['PULLDATE'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">OS_LICENSE_REQUIRED</label>
                                                                <input type="text" name="OS_LICENSE_REQUIRED" class="form-control" value="<?php echo (!empty($dataInfo['OS_LICENSE_REQUIRED']) ? $dataInfo['OS_LICENSE_REQUIRED'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">VINTELA</label>
                                                                <input type="text" name="VINTELA" class="form-control" value="<?php echo (!empty($dataInfo['VINTELA']) ? $dataInfo['VINTELA'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                     </div>
                                                    
                                                    
                                                    <div class="clearfix"></div>
                                                <!--</form>-->
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                            <div class="row">
                               
                                <div class="col-md-3">
                                    <div class="form-group form-button">
                                        <button type="submit" name="btnUpdate" value="update reseller profile" class="btn btn-fill btn-rose">
                                          Update
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

