<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Common_model extends CI_Model 
{

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
       $user = $this->session->userdata('passzone_reseller_data');

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
          redirect("home");
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
    // $this->db->select('SERVER,OS,BLADE,PRODUCT,CREATED_DATE');
    
    // $this->db->where('CREATED_DATE >=' ,strtotime($first_date));
    // $this->db->where('CREATED_DATE <=' ,strtotime($second_date));
    // $q =  $this->db->get($table);
    // $response = $q->result_array();
    // echo $this->db->last_query();die;
    // //return  $this->db->queries[0];
    // return $response;
    $SQL = "select * FROM CAPSPLAN_DATA 
 WHERE trunc(CREATED_DATE) BETWEEN to_date('".$first_date."','DD-MM-YY') AND TO_DATE('".$second_date."','DD-MM-YY')";
// $SQL = "select * FROM CAPSPLAN_DATA 
// WHERE trunc(CREATED_DATE) BETWEEN to_date('01-Nov-18','DD-MM-YY') AND TO_DATE('26-Nov-18','DD-MM-YY')";


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

  public function resellerprofileInfo($user_where,$service_where)
  {
    //$this->db->join("users","users.id = notification.sender_id","left");
    $this->db->select("users.*,gym_info.id as gym_id,gym_info.banner_img,gym_info.logo_img,gym_info.location as gym_location,gym_info.location_lat as gym_location_lat,gym_info.location_long as gym_location_long,gym_info.status as gym_status,gym_info.bank_account_name,gym_info.bank_account_no,gym_info.ifsc_code,gym_info.cancel_check_image,gym_info.corporation_certificate");
    $this->db->from("users");
    $this->db->join("gym_info","users.id = gym_info.user_id","left");
    $this->db->where($user_where);
    // $this->db->where("users.id",$user_id);
    // $this->db->where("users.status !=",3);
    $result = $this->db->get()->row_array();

    $this->db->select("service.id as service_id,service.category_id,service.name as service_name,service.description as service_description,service.price,services_category.name as category_name,service.status as service_status");
    $this->db->from("users");
    $this->db->join("service","users.id = service.reseller_id","left");
    $this->db->join("services_category","service.category_id = services_category.id","left");
    $this->db->where($service_where);
    // $this->db->where("service.status",1);
    // $this->db->where("users.id",$user_id);
    $result['services_data'] = $this->db->get()->result_array();


    return $result;
  }

  // public function resellerlist($user_where)
  // {
  //   //$this->db->join("users","users.id = notification.sender_id","left");
  //   $this->db->select("users.*,gym_info.id as gym_id,gym_info.reseller_info,gym_info.banner_img,gym_info.logo_img,gym_info.location as gym_location,gym_info.location_lat as gym_location_lat,gym_info.location_long as gym_location_long,gym_info.status as gym_status,gym_info.bank_account_name,gym_info.bank_account_no,gym_info.ifsc_code,gym_info.cancel_check_image,gym_info.corporation_certificate");
  //   $this->db->from("users");
  //   $this->db->join("gym_info","users.id = gym_info.user_id","left");
  //   $this->db->where($user_where);
  //   // $this->db->where("users.id",$user_id);
  //   // $this->db->where("users.status !=",3);
  //   $result = $this->db->get()->result_array();
  //   return $result;
  // }

  public function resellerlist($whr,$orderby)
  {
    $sql = "SELECT u.*,rb.name as studio_name,
            u.id as rid,
            rb.location as studio_location,
            rb.location_lat as studio_location_lat,
            rb.location_long as studio_location_long,
            rb.image as banner_img,
            rb.category_id,
            IF((SELECT ROUND(AVG(rating),1) FROM user_ratings WHERE to_id = rid AND type = 1) IS NULL, 0, (SELECT ROUND(AVG(rating),1) FROM user_ratings WHERE to_id = rid AND type = 1 )) as rating
            FROM users as u
            LEFT JOIN reseller_banner as rb ON rb.reseller_id=u.id
            $whr
            $orderby";
    $result = $this->db->query($sql)->result_array();
    // echo $this->db->last_query(); die;
    return $result;
  }

  public function ordersdata($whr,$orderby){
    $sql = "SELECT o.*,
            op.reseller_item_id,
            op.image as p_image,
            op.title,
            op.description,
            op.price as p_price,
            op.discount as p_discount,
            op.discount_type as p_discount_type,
            op.admin_commission as p_admin_commission,
            op.admin_commission_type as p_admin_commission_type,
            u.full_name as user_full_name,
            u.email as user_email,
            u.address as user_address,
            u.reg_id as user_reg_id,
            u.mobile_no as user_mobile_no,
            r.full_name as reseller_full_name,
            r.email as reseller_email,
            r.address as reseller_address,
            r.mobile_no as reseller_mobile_no,
            r.reg_id as reseller_reg_id
            FROM orders as o
            INNER JOIN order_product as op ON o.id = op.order_id
            LEFT JOIN users as r ON o.reseller_id = r.id
            LEFT JOIN users as u ON o.user_id = u.id
            $whr
            $orderby";
    $result = $this->db->query($sql)->result_array();
    echo $this->db->last_query(); die;
    return $result;
  }

  public function ResellerServices($service_where)
  {
      $this->db->select("service.id as service_id,service.category_id,service.name as service_name,service.description as service_description,service.price,services_category.name as category_name,service.status as service_status");
      $this->db->from("users");
      $this->db->join("service","users.id = service.reseller_id","left");
      $this->db->join("services_category","service.category_id = services_category.id","left");
      $this->db->where($service_where);
      // $this->db->where("service.status",1);
      // $this->db->where("users.id",$user_id);
      $result = $this->db->get()->result_array();
      return $result;
  }

  public function ResellerItems($items_where)
  {

    $this->db->select("ri.*,c.category");
    $this->db->from("reseller_items as ri");
    // $this->db->join("services_category as s","s.id = ri.service_cat_id","inner");
    $this->db->join("category as c","c.id = ri.category_id","left");
    // $this->db->join("reseller_items_schedule as ris","ris.item_id = ri.id","left");
    $this->db->where($items_where);
    $result = $this->db->get()->result_array();
    // echo $this->db->last_query();
    // die;  
    return $result;
  }

  public function ResellerItemsNew($whr,$orderby){
    $sql = "SELECT ri.*,c.category,ri.id as itm_id,
            IF((SELECT min(price) FROM reseller_items_schedule WHERE item_id = itm_id) IS NULL, 0, (SELECT min(price) FROM reseller_items_schedule WHERE item_id = itm_id)) as price,
            IF((SELECT discount FROM reseller_items_schedule WHERE item_id = itm_id and price=( SELECT MIN(price) FROM  reseller_items_schedule where item_id = itm_id)) IS NULL, 0, (SELECT discount FROM reseller_items_schedule WHERE item_id = itm_id and price=( SELECT MIN(price) FROM  reseller_items_schedule where item_id = itm_id))) as discount,
            IF((SELECT discount_type FROM reseller_items_schedule WHERE item_id = itm_id and price=( SELECT MIN(price) FROM  reseller_items_schedule where item_id = itm_id)) IS NULL, 0, (SELECT discount_type FROM reseller_items_schedule WHERE item_id = itm_id and price=( SELECT MIN(price) FROM  reseller_items_schedule where item_id = itm_id))) as discount_type
            FROM reseller_items as ri
            LEFT JOIN category as c on c.id = ri.category_id
            $whr
            $orderby
            ";
    $result = $this->db->query($sql)->result_array();
    // echo $this->db->last_query(); die;
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

  function bannercategory($whr)
  {
    
          $this->db->select("category.*, categories_banner.id as banner_id, categories_banner.image");
          $this->db->from("categories_banner");
          $this->db->join("category","categories_banner.category_id = category.id","inner");
          $this->db->where("categories_banner.status",$whr);
          $result = $this->db->get()->result_array();
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

  public function getallitemsterms($whr,$orderby)
  {
    $sql = "SELECT tc.*,us.reg_id,us.full_name,us.email,us.mobile_no,c.category 
            from termsandconditions as tc
            Left join users as us on us.id = tc.reseller_id
            Left join category as c on c.id = tc.category_id
            $whr
            $orderby";
    $result = $this->db->query($sql)->result_array();
    // echo $this->db->last_query(); die;
    return $result;
  }

  public function resellerbanners($whr,$orderby)
  {
    $sql = "SELECT b.*,c.category,us.full_name,us.mobile_no,us.reg_id,us.email
            from reseller_banner as b
            Left join category as c on c.id = b.category_id
            Left join users as us on us.id = b.reseller_id
            $whr
            $orderby
            ";
    $result = $this->db->query($sql)->result_array();
    // echo $this->db->last_query(); die;
    return $result;
  }

  public function getservicelist($whr,$orderby)
  {
    $sql = "SELECT s.*,sc.name as service_cat_name,c.category as category_name
            from service as s
            Left join services_category as sc on sc.id = s.category_id
            Left join category as c on c.id = s.maincategory_id
            $whr
            $orderby";
    $result = $this->db->query($sql)->result_array();
    // echo $this->db->last_query(); die;
    return $result;
  }

  public function reselleritemschedules($whr,$orderby){
    $sql = "SELECT ris.*,iss.name as schedule_name
            FROM reseller_items_schedule as ris
            LEFT JOIN  item_schedule as iss on iss.id = ris.schedule_id 
            $whr 
            $orderby
            ";
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