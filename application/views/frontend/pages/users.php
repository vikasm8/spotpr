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
                
                <h4 class="card-title">Team Mates</h4>
                <div class="form-group form-button pull-left">

                  
                </div>
                
                <div class="form-group form-button pull-right">
                  
                     <a href="<?php echo base_url().'add_user' ?>" class="btn btn-default" style="background-color: #9c27b0;">Add New User</a>
                </div>

                <div class="clearfix"></div>
                
                
                <div class="material-datatables table-responsive">
                    <table class="table" ID="example2">
                          <thead class="text-primary">
                              <th class="font_bold">S.No</th>
                              <th class="font_bold">Name</th>
                              <th class="font_bold">Username</th>
                              <th class="font_bold">Email</th>
                              <th class="font_bold">Phone Number</th>
                              <th class="font_bold">Access Level</th>
                              <th class="font_bold">User Role</th>
                              <!-- <th class="font_bold">Created Date</th> -->
                              <th class="font_bold">Action</th>
                          </thead>
                          <tbody>
                              <?php 
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
                                          <td><?php echo (isset($data_array['uname']) ? $data_array['uname'] : 'none');?></td>
                                    
                                          <td><?php echo (!empty($data_array['username'])?$data_array['username']:''); ?></td>
                                          <td><?php echo (!empty($data_array['email'])?$data_array['email']:'')  ?></td>
                                          <td><?php echo (!empty($data_array['phone'])?$data_array['phone']:''); ?></td>
                                          <td><?php  if($data_array['access_level']==0) echo "Level1" ;  else  echo "Level2" ; ?></td>
                                          <td><?php  if($data_array['user_status']==0) echo "Team Manager" ;  else  echo "Team Mate" ; ?></td>
                                         <!--  <td><?php echo (!empty($data_array['CREATED_DATE'])?$data_array['CREATED_DATE']:''); ?></td> -->
                                          

                                          <td>
                                              <!-- <a href="<?php echo base_url().'view_tracker/'.$data_array['id']; ?>"><i class="fa fa-eye" aria-hIDden="true"></i></a>/ -->
                                              <a href="<?php echo base_url().'edit_user/'.$data_array['id']; ?>"><i class="fa fa-pencil-square-o" aria-hIDden="true"></i></a>
                                              <a href="javascript:voID(0)" href-data="<?php echo  $data_array['id']; ?>" class="delete">
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
            'csvHtml5'
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
              data:{tabname:'users',id:ID},

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