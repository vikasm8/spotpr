<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Common_model extends CI_Model 
{


  function login($username, $password)
  {
       $this->db->select('*');
       $this->db->from('users');
       $this->db->where('email', $username);
       $this->db->where('upassword', $password);
       //$this -> db -> where('userrole', '1');
       //$this -> db -> limit(1);
       $query = $this->db->get();
       if($query->num_rows() == 1)
       {
          return $query->result();
       } 
       else
       {
         return false;
       }
  }

	public function checklogin($allow)
  {
       $f_name = $this->router->fetch_method();
       $user = $this->session->userdata('passzone_admin_data');

       // print_r($user);
       // die;
       // echo $f_name;
       // die;
       if(empty($user))
       {
      	  if(in_array($f_name, $allow))		
	      {
	      	return true;
	      }else
	      {
	      	redirect("admin");
	      }
       }		
	}

  public function checkuserlogin($allow)
  {
       $f_name = $this->router->fetch_method();
       $user = $this->session->userdata('user_data');

       if(empty($user))
       {
          if(in_array($f_name, $allow))   
        {
          return true;
        }else
        {
          redirect("signin");
        }
       }    
  }
  public function getalldata($table)
  {
        $query = $this->db->get($table);
        return $query->result_array();
  }
  public function getAllRecordsById($table,$conditions)
  {
     $query = $this->db->get_where($table,$conditions);
     return $query->result_array();
  }
	public function getWhereData($tab,$whr)
	{
		$result = $this->db->get_where($tab,$whr)->result_array();
    // echo $this->db->last_query();
    // die; 

    	return $result;
  }
   public function searchRecord($table,$first_date,$second_date)
  {
    
    $SQL = "select * FROM CAPSPLAN_DATA 
 WHERE trunc(CREATED_DATE) BETWEEN to_date('".$first_date."','DD-MM-YY') AND TO_DATE('".$second_date."','DD-MM-YY')";



    $query = $this->db->query($SQL);

    return $query->result_array();
  }

  public function getSingleRecordById($table,$conditions)
  {

     $query = $this->db->get_where($table,$conditions);

     return $query->row_array();

  }

  public function getRecordCount($table, $where_condition)
  {

    $this->db->where($where_condition);

    $query = $this->db->get($table);

    return $query->num_rows();

  }
  public function deleteRecords($table,$where_condition)
  {   
    $this->db->where($where_condition);
    return $this->db->delete($table);
  }

  public function updateData($tab,$data,$whr)
  {
    return $this->db->update($tab,$data,$whr);
    echo $this->db->last_query(); die();

    //return true;
  }

  public function insertMultipleData($tab,$noti_array)
  {

    $this->db->insert_batch($tab, $noti_array);

    return true;
  }

  public function insertRecord($table,$post_data)
  {
    $this->db->insert($table,$post_data);
    return $this->db->insert_id(); 
  }

  public function userInfo($user_id)
  {
    //$this->db->join("users","users.id = notification.sender_id","left");
    $this->db->select("users.*,gym_info.id as gym_id,gym_info.banner_img,gym_info.logo_img,gym_info.location,gym_info.location_lat,gym_info.location_long,countries.name as country_name,states.name as state_name,cities.name as city_name,gym_info.status as gym_status");
    $this->db->from("users");
    $this->db->join("gym_info","users.id = gym_info.user_id","left");
    $this->db->join("countries","users.country = countries.id","left");
    $this->db->join("states","users.state = states.id","left");
    $this->db->join("cities","users.city = cities.id","left");
    $this->db->where("users.id",$user_id);
    $this->db->where("users.status !=",3);
    $result = $this->db->get()->row_array();


    $this->db->select("service.id as service_id,service.category_id,service.name as service_name,service.description as service_description,service.monthly_price,service.quaterly_price,service.halfyearly_price,service.yearly_price,service.price,services_category.name as category_name");
    $this->db->from("users");
    $this->db->join("service","users.id = service.reseller_id","left");
    $this->db->join("services_category","service.category_id = services_category.id","left");
    $this->db->where("service.status",0);
    $this->db->where("users.id",$user_id);
    $result['services'] = $this->db->get()->result_array();

    $this->db->select("service.id as service_id,service.category_id,service.name as service_name,service.description as service_description,service.monthly_price,service.quaterly_price,service.halfyearly_price,service.yearly_price,service.price,services_category.name as category_name");
    $this->db->from("users");
    $this->db->join("service","users.id = service.reseller_id","left");
    $this->db->join("services_category","service.category_id = services_category.id","left");
    $this->db->where("service.status",1);
    $this->db->where("users.id",$user_id);
    $result['active_services'] = $this->db->get()->result_array();
    
    return $result;
  }


  
  public function Getallitems($whr)
  {

    $this->db->select("ri.*,us.full_name,us.email,us.mobile_no");
    $this->db->from("reseller_items as ri");
    $this->db->join("users as us","us.id = ri.reseller_id","inner");
    // $this->db->join("services_category as s","s.id = ri.service_cat_id","inner");
    $this->db->where($whr);
    $this->db->order_by("ri.id", "desc");
    $result = $this->db->get()->result_array();
    // echo $this->db->last_query(); die;
    return $result;
  }

  public function getwhereorderby($tab,$whr,$order_name)
  {
    $this->db->select('*');

    $this->db->order_by($order_name, "asc");
    $result = $this->db->get_where($tab,$whr)->result_array();
    // echo $this->db->last_query();
    // die;  
    return $result;
  }

  
  /*Nirbhay start here 23-03-2018*/
  public function getwhrdata($tab,$whr,$orderby)
  {
    $sql = "SELECT * 
            from $tab
            $whr
            $orderby";
    $result = $this->db->query($sql)->result_array();
    // echo $this->db->last_query(); die;
    return $result;
  }

 
  

  
  

  public function getwhrorder($whr,$orderby){
    
    $sql = "SELECT orders.*, 
            us.full_name as user_full_name,
            us.reg_id as user_reg_id,
            rus.full_name as reseller_full_name,
            rus.reg_id as reseller_reg_id,
            item_schedule.name, 
            order_product.price,
            order_product.schedule_id
            FROM orders JOIN order_product ON orders.id=order_product.order_id 
            LEFT JOIN order_status as os ON orders.order_status =os.order_status_name 
            LEFT JOIN payment_status as ps ON orders.payment_status =ps.payment_status_name 
            LEFT JOIN users as us ON orders.user_id =us.id 
            LEFT JOIN users as rus ON orders.reseller_id =rus.id
            JOIN item_schedule ON item_schedule.id =order_product.schedule_id  
            $whr 
            $orderby
            ";
          $result = $this->db->query($sql)->result_array();
          // echo $this->db->last_query(); die;
         return $result;
  }




}