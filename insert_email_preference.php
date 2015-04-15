 <?php
 
 		require_once("db_config.php"); 
 
  
		$user_id=$_POST['user_id'];
		$new_service= $_POST['id11'];
		$daily_summary = $_POST['id22'];
		$monthly_summary = $_POST['id33'];
		$new_contractors = $_POST['id44'];  // return array
//print_r($id_array);
//exit;
 		$query = mysql_query("UPDATE email_preferences SET new_service = $new_service, daily_summary = $daily_summary ,monthly_summary = $monthly_summary,new_contractors = $new_contractors where user_id = $user_id");
	       // $query = mysql_query("DELETE FROM email_preferences WHERE job_tag_id = '$value'");
		   
        if($query) { 
		echo 'success';
					//header("Location: manage.php"); // redirent after deleting
		}
		else {
		echo 'error';
		}
	
	
?>