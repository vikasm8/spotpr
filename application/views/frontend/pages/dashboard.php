<style type="text/css">


.card-header.card-header-icon {
    background: #1a4bb1;
}
tr {
    font-size: 11px;
    font-color: #1a4bb1;
}

    </style>


<div class="content">
    <div class="container-fluID">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              
              <div class="card-content">
                <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">AA</i>
                </div>
                
                <h4 class="card-title">Master Server Inventory</h4>
                 <div class="form-group form-button pull-left">

                  <form action="<?php echo base_url().'exportCSV' ?>" method="POST">
                  <div class="col-md-4">
                  <input type="date" name="first_date" class="form-control">
                  </div>
                  <div class="col-md-4">
                  <input type="date" name="second_date" class="form-control">
                  </div>
                  <div class="col-md-3">
                  <button class="btn btn-default" type="submit">Export Data</button>
                  </div>  
                </div>
                <div class="form-group form-button pull-right">
                     <a href="<?php echo base_url().'add_info' ?>" class="btn btn-default" style="background-color: #9c27b0;">Add Data</a>
                </div>
                <div class="clearfix"></div>
                
                
                <div class="material-datatables table-responsive">
                    <table class="table" ID="example2">
                          <thead class="text-primary">
                              <th class="font_bold">S.NO</th>
                              <th class="font_bold">SERVER</th>
                              <th class="font_bold">OS</th>
                              <th class="font_bold">BLADE</th>
                              <th class="font_bold">APPLICATION</th>
                               <th>COMPONENT</th>
                              <th>ENVIRONMENT</th>
                               <th>Create Date</th>

                              <!--<th>DATA_CENTER</th>
                              <th>COST_CENTER</th>
                              <th>MRC_COST_CENTER</th>
                              <th>APP_READY</th>
                              <th>FINAL_TIER_LEVEL</th>
                              <th>HP_TIER_LEVEL</th>
                              <th>PRODUCT</th> -->
                              

                              <th class="font_bold">Action</th>
                          </thead>
                          <tbody>
                              <?php 
                              //print_r($user);die();
                              if(!empty($user))
                              {  
                                  $i=0;
                                  //echo "<pre>";print_r($reseller); die();
                                  foreach($user as $data_array)
                                  {
                                      $i++;
                                      ?>
                                      <tr>
                                          <!-- <td><?php //echo $data_array['customer_code']?></td> -->
                                          <td><?php echo $i?></td>
                                          <td><?php echo (isset($data_array['SERVER']) ? $data_array['SERVER'] : 'none');?></td>
                                    
                                          <td><?php echo (!empty($data_array['OS'])?$data_array['OS']:''); ?></td>
                                          <td><?php echo (!empty($data_array['BLADE'])?$data_array['BLADE']:'')  ?></td>
                                          <td><?php echo (!empty($data_array['APPLICATION'])?$data_array['APPLICATION']:''); ?></td>
                                           <td><?php echo (!empty($data_array['COMPONENT'])?$data_array['COMPONENT']:''); ?></td>
                                          <td><?php echo (!empty($data_array['ENVIRONMENT'])?$data_array['ENVIRONMENT']:''); ?></td>
                                          <td><?php echo (!empty($data_array['CREATED_DATE'])?$data_array['CREATED_DATE']:''); ?></td>
                                           <!--<td><?php //echo (!empty($data_array['DATA_CENTER'])?$data_array['DATA_CENTER']:''); ?></td>
                                          <td><?php //echo (!empty($data_array['COST_CENTER'])?$data_array['COST_CENTER']:''); ?></td>
                                          
                                          <td><?php //echo (!empty($data_array['MRC_COST_CENTER'])?$data_array['MRC_COST_CENTER']:''); ?></td>
                                          
                                          <td><?php //echo (!empty($data_array['APP_READY'])?$data_array['APP_READY']:''); ?></td>
                                          
                                          <td><?php //echo (!empty($data_array['FINAL_TIER_LEVEL'])?$data_array['FINAL_TIER_LEVEL']:''); ?></td>
                                          
                                          <td><?php //echo (!empty($data_array['HP_TIER_LEVEL'])?$data_array['HP_TIER_LEVEL']:''); ?></td>
                                          
                                          <td><?php //echo (!empty($data_array['PRODUCT'])?$data_array['PRODUCT']:''); ?></td>
                                          -->

                                          <td>
                                              <a href="<?php echo base_url().'view_details/'.$data_array['ID']; ?>"><i class="fa fa-eye" aria-hIDden="true"></i></a>/
                                              <a href="<?php echo base_url().'edit_details/'.$data_array['ID']; ?>"><i class="fa fa-pencil-square-o" aria-hIDden="true"></i></a>
                                              <a href="javascript:voID(0)" href-data="<?php echo  $data_array['ID']; ?>" class="delete">
                                                  <i class="fa fa-trash-o" aria-hIDden="true"></i>
                                              </a> 
                                               
                                          </td>
                                      </tr>
                                      <?php 
                                  }
                              }
                              ?>
                              <!-- Modal -->
                              <!--<div class="modal fade" ID="myModal" role="dialog">
                              <div class="modal-dialog"> -->
                          </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>   
<script type="text/javascript">
	$(function () {
	    $('#example2').DataTable({
	      "paging": true,
	      // "lengthChange": false,
	      "searching": true,
	      "ordering": true,
	      // "info": true,
	      // "autoWIDth": false
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
	    });
	});
  

  $(".delete").click(function(e){     
        //alert("Sure you want to delete ?");
        e.preventDefault(); 
        var id = $(this).attr("href-data");
        var href = "<?php echo site_url(); ?>delete_data";
        var btn = this;
        //alert(id);

      if(confirm("Sure you want to delete ?"))
      {
          $.ajax({
              type: "POST",
              url: href,
              data:{tabname:'capsplan_data',id:id},

              success: function(response) {
              
              
                    if (response == "Success")
                  {
                    
                      $(btn).closest('tr').fadeOut("slow");
                  }
                  else
                  {
                   // alert('hello');
                      alert("Error");
                  }

              }
          });
      }
    })

</script> 

<style type="text/css">
    table.dataTable > thead > tr > th,
    table.dataTable > tbody > tr > th,
    table.dataTable > tfoot > tr > th,
    table.dataTable > thead > tr > td,
    table.dataTable > tbody > tr > td,
    table.dataTable > tfoot > tr > td {
      padding: 5px !important;
      outline: 0;
      border-top: 1px solID #ddd !important;
      border-left: 1px solID #ddd !important;
      border-bottom: 1px solID #ddd !important;
      border-right: 1px solID #ddd !important;
    }
</style> 