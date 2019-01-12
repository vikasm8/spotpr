
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">contacts</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Add User</h4>

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

                        <form class="form-horizontal" method="post" action="<?php echo site_url().'add_user' ?>">
                            
                             <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Name</label>
                                                                <input type="text" name="name" class="form-control" value="" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Username</label>
                                                                <input type="text"  name="username" value="" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Password</label>
                                                                <input type="password"  name="password" class="form-control" value="" >
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Email</label>
                                                                <input type="text"  name="email" class="form-control" value="" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Phone</label>
                                                                <input type="text"  name="phone" class="form-control" value=""  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Access Level</label>
                                                                <select class="form-control" name="access">
                                                                    <option value="0">Level1</option>
                                                                    <option value="1">Level2</option>
                                                                </select>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">User Role</label>
                                                                <select class="form-control" name="user_status">
                                                                    <option value="0">Team Manager</option>
                                                                    <option value="1">Team Mate</option>
                                                                </select>
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

                                                    <div class="row">
                                                        
                                                        <div class="col-md-12">
                                                            <div style="color: red;" class="form-group form-button">
                                                                * Access Level 1 - Allow User to access Master Server Inventory & SR Tracker Both. <br>
                                                                * Access Lavel 2 - Allow User to access SR Tracker Only.
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