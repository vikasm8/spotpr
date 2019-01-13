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
                
                <h4 class="card-title">SR Tracker</h4>
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
                  
                     <a href="<?php echo base_url().'add_tracker' ?>" class="btn btn-default" style="background-color: #9c27b0;">Add Data</a>
                </div>

                <div class="clearfix"></div>
                
                
                <div class="material-datatables table-responsive">
                    <table class="table" ID="example2">
                          <thead class="text-primary">
                              <th class="font_bold">S.NO</th>
                              <th class="font_bold">Jira Number</th>
                              <th class="font_bold">Database name</th>
                              <th class="font_bold">SR Number</th>
                              <th class="font_bold">SR Name</th>
                              <th class="font_bold">Start Date</th>
                              <th class="font_bold">Change Number</th>
                              <th class="font_bold">Change Status</th>
                              <!-- <th class="font_bold">Created Date</th> -->
                              <th class="font_bold">Action</th>
                          </thead>
                          <tbody>
                              <?php 
                             // print_r($user); die;
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
                                          <td><?php echo (isset($data_array['JIRA_NUMBER']) ? $data_array['JIRA_NUMBER'] : 'none');?></td>
                                    
                                           <td><?php echo (!empty($data_array['DATABASE_NAME'])?$data_array['DATABASE_NAME']:''); ?></td>
                                          <td><?php echo (!empty($data_array['SR_NUMBER'])?$data_array['SR_NUMBER']:'')  ?></td>
                                          <td><?php echo (!empty($data_array['SR_NAME'])?$data_array['SR_NAME']:''); ?></td>
                                           <td><?php echo (!empty($data_array['START_DATE'])?$data_array['START_DATE']:''); ?></td>
                                          <td><?php echo (!empty($data_array['CHANGE_NUMBER'])?$data_array['CHANGE_NUMBER']:''); ?></td>
                                          <td><?php echo (!empty($data_array['CHANGE_STATUS'])?$data_array['CHANGE_STATUS']:''); ?></td>
                                          <!-- <td><?php echo (!empty($data_array['CREATED_DATE'])?$data_array['CREATED_DATE']:''); ?></td> -->
                                          

                                          <td>
                                              <a href="<?php echo base_url().'view_tracker/'.$data_array['ID']; ?>"><i class="fa fa-eye" aria-hIDden="true"></i></a>/
                                              <a href="<?php echo base_url().'edit_tracker/'.$data_array['ID']; ?>"><i class="fa fa-pencil-square-o" aria-hIDden="true"></i></a>
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
        var ID = $(this).attr("href-data");
        var href = "<?php echo site_url(); ?>delete_data";
        var btn = this;
        //alert(ID);

      if(confirm("Sure you want to delete ?"))
      {
          $.ajax({
              type: "POST",
              url: href,
              data:{tabname:'SR_TRACKER',id:ID},

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