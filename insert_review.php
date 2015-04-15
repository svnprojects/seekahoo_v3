 <?php
    
 	//	require_once("db_config.php"); 
 
  
	//	$request_id=$_POST['request_id'];
	//	$phone_no=$_POST['phone_no'];
		$response_content=$_POST['review'];
		$response_date=date('Y-m-d H:i:s');
//exit;
 	//	$query = mysql_query("UPDATE feedback_request SET response_content = $response_content, is_response = $is_response, request_received_date = $response_date where request_id = $request_id");
        if($response_content) { 
		echo 'success';
					//header("Location: manage.php"); // redirent after deleting
		}
		else {
		echo 'error';
		}
	
	
?>