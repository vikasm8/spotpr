<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?php echo base_url().'dashboard'; ?>">Back</a>
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
                                                                <label class="control-label">SERVER</label>
                                                                <input type="text" readonly="readonly" name="SERVER" class="form-control" value="<?php echo (!empty($dataInfo['SERVER']) ? $dataInfo['SERVER'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">OS</label>
                                                                <input type="text" readonly="readonly" name="OS" value="<?php echo (!empty($dataInfo['OS']) ? $dataInfo['OS'] : 'N/A'); ?>" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">BLADE</label>
                                                                <input type="text" readonly="readonly" name="BLADE" class="form-control" value="<?php echo (!empty($dataInfo['BLADE']) ? $dataInfo['BLADE'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">PRODUCT</label>
                                                                <input type="text" readonly="readonly" name="PRODUCT" class="form-control" value="<?php echo (!empty($dataInfo['PRODUCT']) ? $dataInfo['PRODUCT'] : 'N/A'); ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">APPLICATION</label>
                                                                <input type="text" readonly="readonly" name="APPLICATION" class="form-control" value="<?php echo (!empty($dataInfo['APPLICATION']) ? $dataInfo['APPLICATION'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">MANGER</label>
                                                                <input type="text" readonly="readonly" name="MANGER" class="form-control" value="<?php echo (!empty($dataInfo['MANGER']) ? $dataInfo['MANGER'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">COMPONENT</label>
                                                                <input type="text" readonly="readonly" name="COMPONENT" class="form-control" value="<?php echo (!empty($dataInfo['COMPONENT']) ? $dataInfo['COMPONENT'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">ENVIRONMENT</label>
                                                                <input type="text" readonly="readonly" name="ENVIRONMENT" class="form-control" value="<?php echo (!empty($dataInfo['ENVIRONMENT']) ? $dataInfo['ENVIRONMENT'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">MAINTENANCE_WINDOW</label>
                                                                <input type="text" readonly="readonly" name="MAINTENANCE_WINDOW" class="form-control" value="<?php echo (!empty($dataInfo['MAINTENANCE_WINDOW']) ? $dataInfo['MAINTENANCE_WINDOW'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">MIDDLEWARE_UPLIFT</label>
                                                                <input type="text" readonly="readonly" name="MIDDLEWARE_UPLIFT" class="form-control" value="<?php echo (!empty($dataInfo['MIDDLEWARE_UPLIFT']) ? $dataInfo['MIDDLEWARE_UPLIFT'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">COST_CENTER</label>
                                                                <input type="text" readonly="readonly" name="COST_CENTER" class="form-control" value="<?php echo (!empty($dataInfo['COST_CENTER']) ? $dataInfo['COST_CENTER'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">ON_CALL_PAGER</label>
                                                                <input type="text" readonly="readonly" name="ON_CALL_PAGER" class="form-control" value="<?php echo (!empty($dataInfo['ON_CALL_PAGER']) ? $dataInfo['ON_CALL_PAGER'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">MRC_COST_CENTER</label>
                                                                <input type="text" readonly="readonly" name="MRC_COST_CENTER" class="form-control" value="<?php echo (!empty($dataInfo['MRC_COST_CENTER']) ? $dataInfo['MRC_COST_CENTER'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">APP_READY</label>
                                                                <input type="text" readonly="readonly" name="APP_READY" class="form-control" value="<?php echo (!empty($dataInfo['APP_READY']) ? $dataInfo['APP_READY'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">OS_VERSION</label>
                                                                <input type="text" readonly="readonly" name="OS_VERSION" class="form-control" value="<?php echo (!empty($dataInfo['OS_VERSION']) ? $dataInfo['OS_VERSION'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">FINAL_TIER_LEVEL</label>
                                                                <input type="text" readonly="readonly" name="FINAL_TIER_LEVEL" class="form-control" value="<?php echo (!empty($dataInfo['FINAL_TIER_LEVEL']) ? $dataInfo['FINAL_TIER_LEVEL'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">HP_TIER_LEVEL</label>
                                                                <input type="text" readonly="readonly" name="HP_TIER_LEVEL" class="form-control" value="<?php echo (!empty($dataInfo['HP_TIER_LEVEL']) ? $dataInfo['HP_TIER_LEVEL'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">COST_CENTER</label>
                                                                <input type="text" readonly="readonly" name="COST_CENTER" class="form-control" value="<?php echo (!empty($dataInfo['COST_CENTER']) ? $dataInfo['COST_CENTER'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                     </div>
                                                     <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">HW_ESOL</label>
                                                                <input type="text" readonly="readonly" name="HW_ESOL" class="form-control" value="<?php echo (!empty($dataInfo['HW_ESOL']) ? $dataInfo['HW_ESOL'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">OS_ESOL</label>
                                                                <input type="text" readonly="readonly" name="OS_ESOL" class="form-control" value="<?php echo (!empty($dataInfo['OS_ESOL']) ? $dataInfo['OS_ESOL'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">KERNEL </label>
                                                                <input type="text" readonly="readonly" name="KERNEL" class="form-control" value="<?php echo (!empty($dataInfo['KERNEL']) ? $dataInfo['KERNEL'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                     </div>
                                                     <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">DECOMMSION_DATE_AND_SR</label>
                                                                <input type="text" readonly="readonly" name="DECOMMSION_DATE_AND_SR" class="form-control" value="<?php echo (!empty($dataInfo['DECOMMSION_DATE_AND_SR']) ? $dataInfo['DECOMMSION_DATE_AND_SR'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">SOCKETS</label>
                                                                <input type="text" readonly="readonly" name="SOCKETS" class="form-control" value="<?php echo (!empty($dataInfo['SOCKETS']) ? $dataInfo['SOCKETS'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">INSTALL_DATE</label>
                                                                <input type="text" readonly="readonly" name="INSTALL_DATE" class="form-control" value="<?php echo (!empty($dataInfo['INSTALL_DATE']) ? $dataInfo['INSTALL_DATE'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                     </div>
                                                     <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">PULLDATE</label>
                                                                <input type="text" readonly="readonly" name="PULLDATE" class="form-control" value="<?php echo (!empty($dataInfo['PULLDATE']) ? $dataInfo['PULLDATE'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">OS_LICENSE_REQUIRED</label>
                                                                <input type="text" readonly="readonly" name="OS_LICENSE_REQUIRED" class="form-control" value="<?php echo (!empty($dataInfo['OS_LICENSE_REQUIRED']) ? $dataInfo['OS_LICENSE_REQUIRED'] : 'N/A'); ?>"  >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">VINTELA</label>
                                                                <input type="text" readonly="readonly" name="VINTELA" class="form-control" value="<?php echo (!empty($dataInfo['VINTELA']) ? $dataInfo['VINTELA'] : 'N/A'); ?>"  >
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