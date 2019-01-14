<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?php echo base_url().'users'; ?>">Back</a>
                    </div>

                    
                    
                    <div class="card-content" style="background-color: bisque;">
                        
                        <div class="tab-content">
                            <div class="tab-pane active" id="pill1">

                                <form class="form-horizontal" method="post" action="<?php echo site_url().'edit_user/'.$dataInfo['ID']; ?>">
                                <div class="row">
                                    <input type="hidden" name="id" value="<?php echo $dataInfo['ID']; ?>">
                                    <div class="col-md-12">
                                        <div class="card">

                                            <div class="card-header card-header-icon" data-background-color="rose">
                                                <i class="material-icons">perm_identity</i>
                                            </div>
                                            <div class="card-content">
                                                <h4 class="card-title">User Info
                                                    <!--<small class="category">Complete your profile</small>-->
                                                </h4>

                                                 <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Name</label>
                                                                <input type="text"  name="name" class="form-control" value="<?php echo (!empty($dataInfo['UNAME']) ? $dataInfo['UNAME'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Username</label>
                                                                <input type="text"  name="username" value="<?php echo (!empty($dataInfo['USERNAME']) ? $dataInfo['USERNAME'] : 'N/A'); ?>" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Password</label>
                                                                <input type="text"  name="password" class="form-control" value="<?php echo (!empty($dataInfo['USPASSWORD']) ? $dataInfo['UPASSWORD'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Email</label>
                                                                <input type="text"  name="email" class="form-control" value="<?php echo (!empty($dataInfo['EMAIL']) ? $dataInfo['EMAIL'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Phone</label>
                                                                <input type="text"  name="phone" class="form-control" value="<?php echo (!empty($dataInfo['PHONE']) ? $dataInfo['PHONE'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Access Level</label>
                                                                <select class="form-control" name="access">
                                                                    <option  value="0" <?php if($dataInfo['ACCESS_LEVEL'] == 0): ?> selected="selected"<?php endif; ?>>Level1</option>
                                                                    <option value="1" <?php if($dataInfo['ACCESS_LEVEL'] == 1): ?> selected="selected"<?php endif; ?>>Level2</option>
                                                                </select>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">User Role</label>
                                                                <select class="form-control" name="user_status">
                                                                    <option value="1" <?php if($dataInfo['USER_STATUS'] == 1): ?> selected="selected"<?php endif; ?>>Team Manager</option>
                                                                    <option value="0" <?php if($dataInfo['USER_STATUS'] == 0): ?> selected="selected"<?php endif; ?>>Team Mate</option>
                                                                </select>
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