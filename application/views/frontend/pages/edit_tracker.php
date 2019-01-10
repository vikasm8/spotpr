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

                                <form class="form-horizontal" method="post" action="<?php echo site_url().'edit_tracker/'.$dataInfo['id']; ?>">
                                <div class="row">
                                    <input type="hidden" name="id" value="<?php echo $dataInfo['id']; ?>">
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
                                                                <input type="text"  name="jira_number" class="form-control" value="<?php echo (!empty($dataInfo['jira_number']) ? $dataInfo['jira_number'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Database name</label>
                                                                <input type="text"  name="database_name" value="<?php echo (!empty($dataInfo['database_name']) ? $dataInfo['database_name'] : 'N/A'); ?>" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">SR Number</label>
                                                                <input type="text"  name="sr_number" class="form-control" value="<?php echo (!empty($dataInfo['sr_number']) ? $dataInfo['sr_number'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">SR Name</label>
                                                                <input type="text"  name="sr_name" class="form-control" value="<?php echo (!empty($dataInfo['sr_name']) ? $dataInfo['sr_name'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Start Date</label>
                                                                <input type="text"  name="start_date" class="form-control" value="<?php echo (!empty($dataInfo['start_date']) ? $dataInfo['start_date'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Change Number</label>
                                                                <input type="text"  name="change_number" class="form-control" value="<?php echo (!empty($dataInfo['change_number']) ? $dataInfo['change_number'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Change Status</label>
                                                                <input type="text"  name="change_status" class="form-control" value="<?php echo (!empty($dataInfo['change_status']) ? $dataInfo['change_status'] : 'N/A'); ?>"  >
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