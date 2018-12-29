<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	function sendPushNotification($data,$utype = false)
	{
		/*
			Notification fields:

			order_id, from_id, to_id, title, body, msg_type, icon, device_type,reg_id, not_type, trip_date, trip_time
			payment_link
	
		*/

		/*
			Device Type 
			
			1 = ios , 2 = android	
		*/	

		$not = array();
		$paylod = array();
		$msg = array();

		/* Set Notification data according to device and msg type  */
		if($data["msg_type"] == "notification")
		{
			if($data["device_type"] == 1)
			{
				$not["title"] = $data["title"];
				$not["body"] = $data["body"];
				$not["sound"] = "default";
			}else
			{
				$not["title"] = $data["title"];
				$not["body"] = $data["body"];
				$not["sound"] = "default";

				if(!empty($data["icon"]))
				{
					$not["icon"] = $data["icon"];
				}
			}
		}else
		{
			if($data["device_type"] == 1)
			{
				$paylod["title"] = $data["title"];
				$paylod["body"] = $data["body"];
				$paylod["sound"] = "default";
				
				if(isset($data["from_id"]))
				{
					$paylod["from_id"] = $data["from_id"];
				}

				if(isset($data["to_id"]))
				{
					$paylod["to_id"] = $data["to_id"];
				}

				if(isset($data["order_id"]))
				{
					$paylod["order_id"] = $data["order_id"];
				}

				if(isset($data["icon"]))
				{
					$paylod["icon"] = $data["icon"];
				}
				
				if(isset($data["not_type"]))
				{
					$paylod["not_type"] = $data["not_type"];
				}

				if(isset($data["trip_date"]))
				{
					$paylod["trip_date"] = $data["trip_date"];
				}

				if(isset($data["trip_time"]))
				{
					$paylod["trip_time"] = $data["trip_time"];
				}

				if(isset($data["payment_link"]))
				{
					$paylod["payment_link"] = $data["payment_link"];
				}

			}else
			{
				$paylod["'title'"] = "'".$data["title"]."'";
				$paylod["'body'"] = "'".$data["body"]."'";
				$paylod["'sound'"] = "default";

				if(isset($data["from_id"]))
				{
					$paylod["'from_id'"] = "'".$data["from_id"]."'";
				}

				if(isset($data["to_id"]))
				{
					$paylod["'to_id'"] = "'".$data["to_id"]."'";
				}

				if(isset($data["order_id"]))
				{
					$paylod["'order_id'"] = "'".$data["order_id"]."'";
				}

				if(isset($data["icon"]))
				{
					$paylod["'icon'"] = "'".$data["icon"]."'";
				}
				
				if(isset($data["not_type"]))
				{
					$paylod["'not_type'"] = "'".$data["not_type"]."'";
				}

				if(isset($data["trip_date"]))
				{
					$paylod["'trip_date'"] = "'".$data["trip_date"]."'";
				}
				
				if(isset($data["trip_time"]))
				{
					$paylod["'trip_time'"] = "'".$data["trip_time"]."'";
				}

				if(isset($data["payment_link"]))
				{
					$paylod["'payment_link'"] = "'".$data["payment_link"]."'";
				}				
			}
		}

		$msg["registration_ids"] = $data["reg_id"];

		if(!empty($not))
		{
			$msg["notification"] = $not;
		}
		if(!empty($paylod))
		{
			$msg["data"] = $paylod;
		}
		file_put_contents('uploads/Output_jay.TXT', json_encode($msg));
		//echo json_encode($msg); die();

		// savefcmResponse($msg,"in fcm");

		$PUSH_API_KEY = (!empty($utype) && $utype == 3)? USER_PUSH_API_KEY : RESELLER_PUSH_API_KEY;

		// Set CURL request headers 
    	$headers = array( 
                        'Authorization: key=' . $PUSH_API_KEY,
                        'Content-Type: application/json'
                    );
		
		// Initialize curl handle       
	    $ch = curl_init();

	    // Set URL to GCM push endpoint     
	    //curl_setopt($ch, CURLOPT_URL, 'https://gcm-http.googleapis.com/gcm/send');

	    curl_setopt($ch, CURLOPT_URL, PUSH_URL);

	    // Set request method to POST       
	    curl_setopt($ch, CURLOPT_POST, true);

	    // Set custom request headers       
	    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	    // Get the response back as string instead of printing it       
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	    // Set JSON post data
	    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($msg));
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	    // Actually send the request    
	    $result = curl_exec($ch);

	    // Handle errors
	    /*if (curl_errno($ch)) {
	        echo 'GCM error: ' . curl_error($ch);
	    }*/

	    // Close curl handle
	    curl_close($ch);

	    // Debug GCM response       
	    $resp = (array) json_decode($result);
	    // $resp["fcmdate"] = date("Y-m-d H:i:s");
	    return $result;
	}

	function pp($data)
	{
		echo "<pre>"; print_r($data); die();
	}


?>