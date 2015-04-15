<?php
	  require("db_config.php");

 $email=$_POST['email'];


	  $q=mysql_query("select * from notification_users where email_id='$email'");

	  
	  // Always set content-type when sending HTML email
	  	$headers = 'From: Seekahoo <admin@Seekahoo.com>' . "\r\n".
		//$headers .= 'Cc: myboss@example.com' . "\r\n";
		'Reply-To: $email' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	  	$headers .= "MIME-Version: 1.0\r\n";
  		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		  $to = $email;
		  $subject = "Seekahoo!";
		  $body = "<html><body>Thanks for checking out Seekahoo!  We'll let you know as soon as the Seekahoo app is ready for download.  In the meantime, stop by www.seekahoo.com for any new updates.  Thanks and we'll be in touch!.<br><br><br><br>";
		  $body.="The Seekahoo Group <br> support@seekahoo.com</body></html>";
	

if(mysql_num_rows($q) == 0)
{
//ini_set("SMTP","smtp.nyu.edu");
//ini_set("smtp_port","25");
      if (mail($to, $subject, $body, $headers))
            { 
				 $insert=mysql_query("insert into notification_users(email_id) values('$email')");
echo 'You have successfully signed up!';
            } 
       else 
             {
echo 'Error in sending mail. Please try again later!';
            } 		
			
 }
 else
	 {           
echo 'You have already signed up!';
	  }
	
  
 ?> 