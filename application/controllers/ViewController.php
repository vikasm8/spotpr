<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewController extends CI_Controller {
	/* FRONTEND CONTROLLER */
	public function index(){
		
		$this->load->view('frontend/pages/signin');
	}

	public function signin(){
		$data = [
			'title' => 'Sign-in User',
			'pages' => 'signin'
		];

		$this->load->view('frontend/pages/signin', $data);
	}

	

	public function Logout(){
		$this->session->sess_destroy();
		redirect(base_url(''));
	}

	public function dashboard(){

        $query = $this->db->query('SELECT * FROM CAPSPLAN_DATA');

		
		//$dataUser = $this->db->get('CAPSPLAN_DATA');
		$dataUser = $query->result_array();
		//print_r($dataUser); die();
		$data = [
			'title' => 'Manage Capsplan Data',
			'pages' => 'user_dashboard',
			'user' => $dataUser
		];
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/template/nav');
		$this->load->view('frontend/pages/dashboard', $data);
		$this->load->view('frontend/template/footer');
	}
	public function view_details($id='')
	{

		if(!empty($id))
		{
			
			$dataInfo = $this->common_model->getSingleRecordById('CAPSPLAN_DATA',array('ID' => $id));
			
			
			if(!empty($dataInfo))
			{
				$data['dataInfo'] = $dataInfo;

				$this->load->view('frontend/template/header');
				$this->load->view('frontend/template/nav');
				$this->load->view('frontend/pages/view_details',$data);
				$this->load->view('frontend/template/footer');
			}
			else
			{
				$this->session->set_flashdata('error','Invalid request.');
				//redirect('admin/unapprove_request',true);
			}
		}
		else
		{
			//redirect('admin/unapprove_request',true);
		}
	}
	public function add_info()
	{
		if(isset($_POST['btnSubmit']))
		{
			
			$SERVER = $this->input->post('SERVER');
		    $OS = $this->input->post('OS'); 
			$BLADE = $this->input->post('BLADE');
			$PRODUCT = $this->input->post('PRODUCT');
			$APPLICATION = $this->input->post('APPLICATION');
			$MANGER = $this->input->post('MANGER');
			$COMPONENT = $this->input->post('COMPONENT');
			$ENVIRONMENT = $this->input->post('ENVIRONMENT');
			$MAINTENANCE_WINDOW = $this->input->post('MAINTENANCE_WINDOW');
			$MIDDLEWARE_UPLIFT = $this->input->post('MIDDLEWARE_UPLIFT');
			$COST_CENTER = $this->input->post('COST_CENTER');
			$ON_CALL_PAGER = $this->input->post('ON_CALL_PAGER');
			$MRC_COST_CENTER = $this->input->post('MRC_COST_CENTER');
			$APP_READY = $this->input->post('APP_READY');
			$OS_VERSION = $this->input->post('OS_VERSION');
			$FINAL_TIER_LEVEL = $this->input->post('FINAL_TIER_LEVEL');
			$HP_TIER_LEVEL = $this->input->post('HP_TIER_LEVEL');
			$KERNEL = $this->input->post('KERNEL');
			$DECOMMSION_DATE_AND_SR = $this->input->post('DECOMMSION_DATE_AND_SR');
			$SOCKETS = $this->input->post('SOCKETS');
			$INSTALL_DATE = $this->input->post('INSTALL_DATE');
			$PULLDATE = $this->input->post('PULLDATE');
			$OS_LICENSE_REQUIRED = $this->input->post('OS_LICENSE_REQUIRED');
			$VINTELA = $this->input->post('VINTELA');
			$HW_ESOL = $this->input->post('HW_ESOL');
			$OS_ESOL = $this->input->post('OS_ESOL');

			$maxid = 0;
			$row = $this->db->query('SELECT ESP.id_sequence.NEXTVAL FROM CAPSPLAN_DATA')->row();
			if ($row) {
			    $maxid = $row->NEXTVAL; 
				
			}
			
		    $sql =  "INSERT into CAPSPLAN_DATA (ID,SERVER,OS,BLADE) values('".$maxid."','".$SERVER."','".$OS."','".$BLADE."')";
			 $res = $this->db->query($sql);
		


			//echo $sql;die;

			 //$res = $this->common_model->insertRecord('CAPSPLAN_DATA',array('ID'=>$maxid,'SERVER' => $SERVER,'OS' => $OS,'BLADE' => $BLADE,'PRODUCT' => $PRODUCT,'APPLICATION' => $APPLICATION,'MANGER' => $MANGER,'COMPONENT' => $COMPONENT,'ENVIRONMENT' => $ENVIRONMENT,'MAINTENANCE_WINDOW' => $MAINTENANCE_WINDOW,'MIDDLEWARE_UPLIFT' => $MIDDLEWARE_UPLIFT,'COST_CENTER' => $COST_CENTER,'ON_CALL_PAGER' => $ON_CALL_PAGER,'MRC_COST_CENTER' => $MRC_COST_CENTER,'APP_READY' => $APP_READY,'OS_VERSION' => $OS_VERSION,'FINAL_TIER_LEVEL' => $FINAL_TIER_LEVEL,'HP_TIER_LEVEL' => $HP_TIER_LEVEL,'KERNEL' => $KERNEL,'DECOMMSION_DATE_AND_SR' => $DECOMMSION_DATE_AND_SR,'SOCKETS' => $SOCKETS,'INSTALL_DATE' => $INSTALL_DATE,'PULLDATE' => $PULLDATE,'OS_LICENSE_REQUIRED' => $OS_LICENSE_REQUIRED,'VINTELA' => $VINTELA,'HW_ESOL' => $HW_ESOL,'OS_ESOL' => $OS_ESOL ));
			if($res)
			{
				//echo "inserted"; die;
				$this->session->set_flashdata('success','Record has been updated successfully.');
				
				redirect('dashboard');
			}
			else
			{
				$this->session->set_flashdata('error','Some internal issue occure. Please try again.');
			}
		}
		else
		{


			    //$this->load->view('frontend/template/header');
			    //echo "HI";die();
				//$this->load->view('frontend/template/nav');
				$this->load->view('frontend/pages/add_info');
				//$this->load->view('frontend/template/footer');

		}
		
		
	}

	public function edit_details($id='')
	{
		if(isset($_POST['btnUpdate']))
		{
			$id = $this->input->post('id');
			$SERVER = $this->input->post('SERVER');
		    $OS = $this->input->post('OS'); 
			$BLADE = $this->input->post('BLADE');
			$PRODUCT = $this->input->post('PRODUCT');
			$APPLICATION = $this->input->post('APPLICATION');
			$MANGER = $this->input->post('MANGER');
			$COMPONENT = $this->input->post('COMPONENT');
			$ENVIRONMENT = $this->input->post('ENVIRONMENT');
			$MAINTENANCE_WINDOW = $this->input->post('MAINTENANCE_WINDOW');
			$MIDDLEWARE_UPLIFT = $this->input->post('MIDDLEWARE_UPLIFT');
			$COST_CENTER = $this->input->post('COST_CENTER');
			$ON_CALL_PAGER = $this->input->post('ON_CALL_PAGER');
			$MRC_COST_CENTER = $this->input->post('MRC_COST_CENTER');
			$APP_READY = $this->input->post('APP_READY');
			$OS_VERSION = $this->input->post('OS_VERSION');
			$FINAL_TIER_LEVEL = $this->input->post('FINAL_TIER_LEVEL');
			$HP_TIER_LEVEL = $this->input->post('HP_TIER_LEVEL');
			$KERNEL = $this->input->post('KERNEL');
			$DECOMMSION_DATE_AND_SR = $this->input->post('DECOMMSION_DATE_AND_SR');
			$SOCKETS = $this->input->post('SOCKETS');
			$INSTALL_DATE = $this->input->post('INSTALL_DATE');
			$PULLDATE = $this->input->post('PULLDATE');
			$OS_LICENSE_REQUIRED = $this->input->post('OS_LICENSE_REQUIRED');
			$VINTELA = $this->input->post('VINTELA');
			$HW_ESOL = $this->input->post('HW_ESOL');
			$OS_ESOL = $this->input->post('OS_ESOL');


			$res = $this->common_model->updateData('CAPSPLAN_DATA',array('SERVER' => $SERVER,'OS' => $OS,'BLADE' => $BLADE,'PRODUCT' => $PRODUCT,'APPLICATION' => $APPLICATION,'MANGER' => $MANGER,'COMPONENT' => $COMPONENT,'ENVIRONMENT' => $ENVIRONMENT,'MAINTENANCE_WINDOW' => $MAINTENANCE_WINDOW,'MIDDLEWARE_UPLIFT' => $MIDDLEWARE_UPLIFT,'COST_CENTER' => $COST_CENTER,'ON_CALL_PAGER' => $ON_CALL_PAGER,'MRC_COST_CENTER' => $MRC_COST_CENTER,'APP_READY' => $APP_READY,'OS_VERSION' => $OS_VERSION,'FINAL_TIER_LEVEL' => $FINAL_TIER_LEVEL,'HP_TIER_LEVEL' => $HP_TIER_LEVEL,'KERNEL' => $KERNEL,'DECOMMSION_DATE_AND_SR' => $DECOMMSION_DATE_AND_SR,'SOCKETS' => $SOCKETS,'INSTALL_DATE' => $INSTALL_DATE,'PULLDATE' => $PULLDATE,'OS_LICENSE_REQUIRED' => $OS_LICENSE_REQUIRED,'VINTELA' => $VINTELA,'HW_ESOL' => $HW_ESOL,'OS_ESOL' => $OS_ESOL ),array('ID'=>$id));
			if($res)
			{
				$this->session->set_flashdata('success','Data has been updated successfully.');
			}
			else
			{
				$this->session->set_flashdata('error','Some internal issue occure. Please try again.');
			}
		}

		if(!empty($id))
		{
			
			$dataInfo = $this->common_model->getSingleRecordById('CAPSPLAN_DATA',array('ID' => $id));
			if(!empty($dataInfo))
			{
				
				$data['dataInfo'] = $dataInfo;
				$this->load->view('frontend/template/header');
				$this->load->view('frontend/template/nav');
				$this->load->view('frontend/pages/edit_details',$data);
				$this->load->view('frontend/template/footer');
			}
			else
			{
				$this->session->set_flashdata('error','Invalid id.');
				redirect('admin/dashboard');
			}
		}
		else
		{
			redirect('admin/dashboard');
		}
	}
	public function delete_data()
    { 

        $tabname = $this->input->post('tabname'); 
         //$status = $this->input->post('status');
          $id = $this->input->post('id'); 
            if(!empty($id))
            {
             //echo $id; exit();
              $result = $this->common_model->deleteRecords('CAPSPLAN_DATA', array('ID' => $id));
              //echo "hi"; exit();
              if($result)
              {
                echo "Success";
              }
              else
              {
                echo "opps error";
              }
            }  
    }

    public function exportCSV(){ 
	   // file name 
	   $filename = 'data_'.date('Ymd').'.csv'; 
	   header("Content-Description: File Transfer"); 
	   header("Content-Disposition: attachment; filename=$filename"); 
	   header("Content-Type: application/csv; ");
	   
	   $first_date = $this->input->post('first_date');
	   $second_date = $this->input->post('second_date'); 

	  $first_date = date("d-M-y", strtotime($first_date));
	  $second_date = date("d-M-y", strtotime($second_date));

	  $result = $this->common_model->searchRecord('capsplan_data', $first_date,$second_date);
	   
	   // file creation 
	   $file = fopen('php://output', 'w');

	   // $fields = $this->db->list_fields('capsplan_data');
	   // $header = $fields->result_array();
	   
	   $header = array("ID","SERVER","OS","BLADE","PRODUCT","APPLICATION","MANGER","COMPONENT","ENVIRONMENT","MAINTENANCE_WINDOW","MIDDLEWARE_UPLIFT","COST_CENTER","ON_CALL_PAGER","MRC_COST_CENTER","APP_READY","OS_VERSION","FINAL_TIER_LEVEL","HP_TIER_LEVEL","KERNEL","DECOMMSION_DATE_AND_SR","SOCKETS","FINAL_TIER_LEVEL","INSTALL_DATE","PULLDATE","OS_LICENSE_REQUIRED","VINTELA","HW_ESOL","OS_ESOL","CREATED_DATE"); 
	    //$header = array("SERVER","OS","BLADE","PRODUCT","CREATED_DATE");
	   fputcsv($file, $header);
	   foreach ($result as $key=>$line){ 
	     fputcsv($file,$line); 
	   }
	   fclose($file); 
	  // redirect('admin/dashboard'); 
	}

	 /* ------------------------------------------------------------------------------------*/

    /*-------------- Define Methods for SR Tracker-------------------------*/


	public function srtracker(){

        $query = $this->db->query('SELECT * FROM SR_TRACKER');

		$dataUser = $query->result_array();
		
		$data = [
			'title' => 'Manage Capsplan Data',
			'pages' => 'user_dashboard',
			'user' => $dataUser
		];
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/template/nav');
		$this->load->view('frontend/pages/srtracker', $data);
		$this->load->view('frontend/template/footer');
	}

	public function add_tracker()
	{
		if(isset($_POST['btnSubmit']))
		{
			
			$jira_number = $this->input->post('jira_number');
		    $database_name = $this->input->post('database_name'); 
			$sr_number = $this->input->post('sr_number');
			$sr_name = $this->input->post('sr_name');
			$start_date = $this->input->post('start_date');
			$change_number = $this->input->post('change_number');
			$change_status = $this->input->post('change_status');
			
			$date 	 = date('m-d-Y');
			

			$res = $this->common_model->insertRecord('SR_TRACKER',array('jira_number' => $jira_number,'database_name' => $database_name,'sr_number' => $sr_number,'sr_name' => $sr_name,'start_date' => $start_date,'change_number' => $change_number,'change_status' => $change_status,'CREATED_DATE' => $date ));
			if($res)
			{
				$this->session->set_flashdata('success','Record has been updated successfully.');
				redirect('srtracker');
			}
			else
			{
				$this->session->set_flashdata('error','Some internal issue occure. Please try again.');
			}
		}
		else
		{

			    
				$this->load->view('frontend/pages/add_tracker');
				

		}
		
		
	}
	
	public function view_tracker($id='')
	{

		if(!empty($id))
		{
			
			$dataInfo = $this->common_model->getSingleRecordById('SR_TRACKER',array('id' => $id));
			
			
			if(!empty($dataInfo))
			{
				$data['dataInfo'] = $dataInfo;

				$this->load->view('frontend/template/header');
				$this->load->view('frontend/template/nav');
				$this->load->view('frontend/pages/view_tracker',$data);
				$this->load->view('frontend/template/footer');
			}
			else
			{
				$this->session->set_flashdata('error','Invalid request.');
				//redirect('admin/unapprove_request',true);
			}
		}
		else
		{
			//redirect('admin/unapprove_request',true);
		}
	}
	
	public function edit_tracker($id='')
	{
		if(isset($_POST['btnUpdate']))
		{
			$jira_number = $this->input->post('jira_number');
		    $database_name = $this->input->post('database_name'); 
			$sr_number = $this->input->post('sr_number');
			$sr_name = $this->input->post('sr_name');
			$start_date = $this->input->post('start_date');
			$change_number = $this->input->post('change_number');
			$change_status = $this->input->post('change_status');
			
			


			$res = $this->common_model->updateData('SR_TRACKER',array('jira_number' => $jira_number,'database_name' => $database_name,'sr_number' => $sr_number,'sr_name' => $sr_name,'start_date' => $start_date,'change_number' => $change_number,'change_status' => $change_status),array('id'=>$id));
			if($res)
			{
				$this->session->set_flashdata('success','Data has been updated successfully.');
			}
			else
			{
				$this->session->set_flashdata('error','Some internal issue occure. Please try again.');
			}
		}

		if(!empty($id))
		{
			
			$dataInfo = $this->common_model->getSingleRecordById('SR_TRACKER',array('id' => $id));
			if(!empty($dataInfo))
			{
				
				$data['dataInfo'] = $dataInfo;
				$this->load->view('frontend/template/header');
				$this->load->view('frontend/template/nav');
				$this->load->view('frontend/pages/edit_tracker',$data);
				$this->load->view('frontend/template/footer');
			}
			else
			{
				$this->session->set_flashdata('error','Invalid id.');
				redirect('admin/dashboard');
			}
		}
		else
		{
			redirect('admin/dashboard');
		}
	}

	
	public function exportCSVSR(){ 
	   // file name 
	   $filename = 'data_'.date('Ymd').'.csv'; 
	   header("Content-Description: File Transfer"); 
	   header("Content-Disposition: attachment; filename=$filename"); 
	   header("Content-Type: application/csv; ");
	   
	   $first_date = $this->input->post('first_date');
	   $second_date = $this->input->post('second_date'); 
	    
	   $first_date = date("d-M-y", strtotime($first_date));
	   $second_date = date("d-M-y", strtotime($second_date));
    
	   $result = $this->common_model->searchRecord('SR_TRACKER', $first_date,$second_date);
	   //print_r($result); die;

	   // file creation 
	   $file = fopen('php://output', 'w');
	   
	   $database_name = $this->input->post('database_name'); 
			$sr_number = $this->input->post('sr_number');
			$sr_name = $this->input->post('sr_name');
			$start_date = $this->input->post('start_date');
			$change_number = $this->input->post('change_number');
			$change_status = $this->input->post('change_status');
	   
	   $header = array("jira_number","database_name","sr_number","sr_name","start_date","change_number","change_status","CREATED_DATE"); 
	   fputcsv($file, $header);
	   foreach ($result as $key=>$line){ 
	     fputcsv($file,$line); 
	   }
	   fclose($file); 
	  // redirect('admin/dashboard'); 
	}


	/* ----------------- END Define Methods for SR Tracker------------------*/
   
    /* ------------------------------------------------------------------------------------*/

     /* ----------------- Define Methods for Team Mates------------------*/

    public function users(){

        $query = $this->db->query('SELECT * FROM users');

		$dataUser = $query->result_array();
		
		$data = [
			'title' => 'Manage Capsplan Data',
			'pages' => 'user_dashboard',
			'user' => $dataUser
		];
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/template/nav');
		$this->load->view('frontend/pages/users', $data);
		$this->load->view('frontend/template/footer');
	}

	public function add_user()
	{
		if(isset($_POST['btnSubmit']))
		{
			$name = $this->input->post('name');
		    $username = $this->input->post('username'); 
			$password = $this->input->post('password');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$access = $this->input->post('access');
			$user_status = $this->input->post('user_status');
			
			


			$res = $this->common_model->insertRecord('users',array('name' => $name,'username' => $username,'password' => $password,'email' => $email,'phone' => $phone,'access' => $access,'user_status' => $user_status));
			if($res)
			{
				$this->session->set_flashdata('success','User has been updated successfully.');
				redirect('users');
			}
			else
			{
				$this->session->set_flashdata('error','Some internal issue occure. Please try again.');
			}
		}
		else
		{

			    
				$this->load->view('frontend/pages/add_user');
				

		}

	}
	public function edit_user($id='')
	{
		if(isset($_POST['btnUpdate']))
		{
			$name = $this->input->post('name');
		    $username = $this->input->post('username'); 
			$password = $this->input->post('password');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$access = $this->input->post('access');
			$user_status = $this->input->post('user_status');
			
			


			$res = $this->common_model->updateData('users',array('name' => $name,'username' => $username,'password' => $password,'email' => $email,'phone' => $phone,'access' => $access,'user_status' => $user_status),array('id'=>$id));
			if($res)
			{
				$this->session->set_flashdata('success','User has been updated successfully.');
			}
			else
			{
				$this->session->set_flashdata('error','Some internal issue occure. Please try again.');
			}
		}

		if(!empty($id))
		{
			
			$dataInfo = $this->common_model->getSingleRecordById('users',array('id' => $id));
			if(!empty($dataInfo))
			{
				
				$data['dataInfo'] = $dataInfo;
				$this->load->view('frontend/template/header');
				$this->load->view('frontend/template/nav');
				$this->load->view('frontend/pages/edit_user',$data);
				$this->load->view('frontend/template/footer');
			}
			else
			{
				$this->session->set_flashdata('error','Invalid id.');
				redirect('admin/users');
			}
		}
		else
		{
			redirect('admin/dashboard');
		}
	}

	/* ----------------- End Define Methods for Team Mates------------------*/

}

/* End of file ViewController.php */
/* Location: ./application/controllers/ViewController.php */