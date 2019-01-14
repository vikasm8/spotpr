
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

                        <form class="form-horizontal" method="post" action="<?php echo site_url().'add_info' ?>">
                            
                             <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">SERVER</label>
                                                                <input type="text" name="SERVER" class="form-control" value="" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">OS</label>
                                                                <input type="text"  name="OS" value="" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">BLADE</label>
                                                                <input type="text"  name="BLADE" class="form-control" value="" >
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">PRODUCT</label>
                                                                <input type="text"  name="PRODUCT" class="form-control" value="" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">APPLICATION</label>
                                                                <input type="text"  name="APPLICATION" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">MANGER</label>
                                                                <input type="text"  name="MANGER" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">COMPONENT</label>
                                                                <input type="text"  name="COMPONENT" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">ENVIRONMENT</label>
                                                                <input type="text"  name="ENVIRONMENT" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">MAINTENANCE_WINDOW</label>
                                                                <input type="text"  name="MAINTENANCE_WINDOW" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">MIDDLEWARE_UPLIFT</label>
                                                                <input type="text"  name="MIDDLEWARE_UPLIFT" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">COST_CENTER</label>
                                                                <input type="text"  name="COST_CENTER" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">ON_CALL_PAGER</label>
                                                                <input type="text"  name="ON_CALL_PAGER" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">MRC_COST_CENTER</label>
                                                                <input type="text"  name="MRC_COST_CENTER" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">APP_READY</label>
                                                                <input type="text"  name="APP_READY" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">OS_VERSION</label>
                                                                <input type="text"  name="OS_VERSION" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">FINAL_TIER_LEVEL</label>
                                                                <input type="text"  name="FINAL_TIER_LEVEL" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">HP_TIER_LEVEL</label>
                                                                <input type="text"  name="HP_TIER_LEVEL" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">COST_CENTER</label>
                                                                <input type="text"  name="COST_CENTER" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                     </div>
                                                     <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">HW_ESOL</label>
                                                                <input type="text"  name="HW_ESOL" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">OS_ESOL</label>
                                                                <input type="text"  name="OS_ESOL" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">KERNEL </label>
                                                                <input type="text"  name="KERNEL" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                     </div>
                                                     <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">DECOMMSION_DATE_AND_SR</label>
                                                                <input type="text"  name="DECOMMSION_DATE_AND_SR" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">SOCKETS</label>
                                                                <input type="text"  name="SOCKETS" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">INSTALL_DATE</label>
                                                                <input type="text"  name="INSTALL_DATE" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                     </div>
                                                     <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">PULLDATE</label>
                                                                <input type="text"  name="PULLDATE" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">OS_LICENSE_REQUIRED</label>
                                                                <input type="text"  name="OS_LICENSE_REQUIRED" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">VINTELA</label>
                                                                <input type="text"  name="VINTELA" class="form-control" value=""  >
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