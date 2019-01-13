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

                                <form class="form-horizontal" method="post" action="<?php echo site_url().'edit_tracker/'.$dataInfo['ID']; ?>">
                                <div class="row">
                                    <input type="hidden" name="id" value="<?php echo $dataInfo['ID']; ?>">
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
                                                                <input type="text"  name="jira_number" class="form-control" value="<?php echo (!empty($dataInfo['JIRA_NUMBER']) ? $dataInfo['JIRA_NUMBER'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Database name</label>
                                                                <input type="text"  name="database_name" value="<?php echo (!empty($dataInfo['DATABASE_NAME']) ? $dataInfo['DATABASE_NAME'] : 'N/A'); ?>" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">SR Number</label>
                                                                <input type="text"  name="sr_number" class="form-control" value="<?php echo (!empty($dataInfo['SR_NUMBER']) ? $dataInfo['SR_NUMBER'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">SR Name</label>
                                                                <input type="text"  name="sr_name" class="form-control" value="<?php echo (!empty($dataInfo['SR_NAME']) ? $dataInfo['SR_NAME'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Start Date</label>
                                                                <input type="text"  name="start_date" class="form-control" value="<?php echo (!empty($dataInfo['START_DATE']) ? $dataInfo['START_DATE'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Change Number</label>
                                                                <input type="text"  name="change_number" class="form-control" value="<?php echo (!empty($dataInfo['CHANGE_NUMBER']) ? $dataInfo['CHANGE_NUMBER'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Change Status</label>
                                                                <input type="text"  name="change_status" class="form-control" value="<?php echo (!empty($dataInfo['CHANGE_STATUS']) ? $dataInfo['CHANGE_STATUS'] : 'N/A'); ?>"  >
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
                                        <button type="submit" name="btnUpdate" value="Update" class="btn btn-fill btn-rose">
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
  
    </div>
</div>

<!--  DataTables.net Plugin    -->