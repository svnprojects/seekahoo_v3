<?php
// if(!$_REQUEST['request_id']) {	
//	header("location:index.php");
// }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;" />
<title>SEEKAHOO</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/jpg" href="images/app_icon_58x58.png"/>
<link rel="shortcut icon" type="image/jpg" href="images/app_icon_58x58.png"/>

<link rel="stylesheet" href="css/bootstrap.css">
<!-- <link rel="stylesheet" href="css/bootstrap-theme.css">-->
<script src="js/jquery-1.11.1.js"></script>
<script src="js/bootstrap-3.2.0.js"></script> 
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/home.css">
<style> 

</style>
</head>
<body>

	<div class="col-xs-12" align="center" style="padding:0px;">
		<img src="images/seekahoo_logo.png" class="img-responsive" width="180" style="margin:25px 0;">
	</div>	
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  style="background:#d1d2d4" >
	<div class="col-xs-12 col-sm-offset-3 col-md-offset-3 col-lg-offset-4 col-sm-5 col-md-5 col-lg-4" style="padding:0px;">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding:54px 0px;">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  style="" >
			 <?php
				 // require_once("db_config.php"); 
				// if($_REQUEST['kDrgfHfj']) {			  
							  // $request_id = base64_decode($_REQUEST['request_id']);
							  // $query_string = mysql_query("select user_id,media_id,firstName,lastName FROM feedback_request where request_id=".$request_id.""); 
							  // $query_string1 = mysql_query("select profile_org_url,tag_name from users where user_id=".$request_id." and tag_name=".$tag_name."");
							  // $query_string2 = mysql_query("select media_org_url FROM media where media_id = ".$media_id."");		
							 // while($row = mysql_fetch_array($query_string)) {
							//<?php echo $row['profile_org_url']; 
			?>  
				 <a class="hero-comment-avatar"  style="cursor:default;background:#000;">
        				<img src="images/app_icon_58x58.png" class="img-responsive" width="58" style="margin:0px 0 0 0;">
                 </a>		
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  style="font-size:16px;color:#000;" >
				<p style="">Parme Electric</p>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" style="padding:0px;">
		  <img src="images/image2.jpg" class="img-responsive" width="120" style="margin:50px 0;">
	    </div>
	  
    </div>
	<div class="col-xs-12 col-sm-offset-3 col-md-offset-3 col-lg-offset-4 col-sm-5 col-md-5 col-lg-4" align="center" style="padding:0px 10px;">
			<form role="form" id="form_submit" method="post">
	
				 <div class="form-group">
				
						
				        <textarea class="form-control" id="review_value" rows="6" cols="30" maxlength="250" placeholder="Enter your review here " required="required" ></textarea>
					    <div id="textarea_feedback" style="color:#000000;"></div>
					    <button class="btn  btn-default btn-block" id="submit_review" name="submit" type="submit" style="border-color:#2a6496;background:#2a6496;margin-top:20px;margin-bottom:49px;color:white;">Submit</button>
				  </div>			
	
			</form>	
	</div>
</div>	
<script>

		
	$(document).ready(function() { 
    var text_max = 250;
    $('#textarea_feedback').html(text_max + ' characters Counter');
    
    $('#review_value').keyup(function() {

        var text_length = $('#review_value').val().length;
        var text_remaining = text_max - text_length;
        $('#textarea_feedback').html(text_remaining + ' characters remaining');

		
    });
	
});
</script>
<script>
	 $(function(){
	$("#form_submit").submit(function(e){
	// prevent form submit, so we can do a manual one
            e.preventDefault();
				var review_str = $('#review_value').val();
			//	if(review_str.indexOf('#hi')>0) {
					$.post("insert_review.php",{review:review_str},function(result){
					$('#review_value').val('');
					  if($.trim(result) === "success") {
							alert("Your review was updated successfully");
							window.location = "thank_you.php";
						}
					  else { alert($.trim(result));
							alert("Failed to update. Please try again later!!!");
							
						}	
						
				});
			//	}
				
			
			
				
		});
		});
		
</script>		
		

</body>
</html>