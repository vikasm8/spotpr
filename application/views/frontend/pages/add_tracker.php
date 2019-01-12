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