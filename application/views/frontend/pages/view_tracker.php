<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?php echo base_url().'srtracker'; ?>">Back</a>
                    </div>

                    
                    
                    <div class="card-content" style="background-color: bisque;">
                        
                        <div class="tab-content">
                            <div class="tab-pane active" id="pill1">
                                <div class="row">
                                    <?php //echo "<pre>"; print_r($dataInfo); ?>
                                    <div class="col-md-12">
                                        <div class="card">

                                            <div class="card-header card-header-icon" data-background-color="rose">
                                                <i class="material-icons">perm_identity</i>
                                            </div>
                                            <div class="card-content">
                                                <h4 class="card-title">Detail Info
                                                    <!--<small class="category">Complete your profile</small>-->
                                                </h4>

                                                 <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Jira Number</label>
                                                                <input type="text" readonly="readonly" name="SERVER" class="form-control" value="<?php echo (!empty($dataInfo['jira_number']) ? $dataInfo['jira_number'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Database name</label>
                                                                <input type="text" readonly="readonly" name="OS" value="<?php echo (!empty($dataInfo['database_name']) ? $dataInfo['database_name'] : 'N/A'); ?>" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">SR Number</label>
                                                                <input type="text" readonly="readonly" name="BLADE" class="form-control" value="<?php echo (!empty($dataInfo['sr_number']) ? $dataInfo['sr_number'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">SR Name</label>
                                                                <input type="text" readonly="readonly" name="PRODUCT" class="form-control" value="<?php echo (!empty($dataInfo['sr_name']) ? $dataInfo['sr_name'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Start Date</label>
                                                                <input type="text" readonly="readonly" name="sr_name" class="form-control" value="<?php echo (!empty($dataInfo['start_date']) ? $dataInfo['start_date'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Change Number</label>
                                                                <input type="text" readonly="readonly" name="MANGER" class="form-control" value="<?php echo (!empty($dataInfo['change_number']) ? $dataInfo['change_number'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Change Status</label>
                                                                <input type="text" readonly="readonly" name="COMPONENT" class="form-control" value="<?php echo (!empty($dataInfo['change_status']) ? $dataInfo['change_status'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                    <div class="clearfix"></div>
                                                <!--</form>-->
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
    </div>
</div>

<!--  DataTables.net Plugin    -->