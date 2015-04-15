 <?php include_once("analyticstracking.php") ?>  
 <?php  $url = $api_url.'posts/get_pro_by_category'; 
			$fields = array(
				'user_id'=>8,
				'distance'=>25,
				'category_id'=>$_GET['id']
				);
			foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
			rtrim($fields_string,'&');
			
			$ch = curl_init();
			//set the url, number of POST vars, POST data
			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch,CURLOPT_POST,count($fields));
			curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			//execute post
		    $result = curl_exec($ch);			
		     $dat = json_decode($result);
			 $job_tags = $dat->data->pro_list;
			
			 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html" />
      <title>SEEKAHOO</title>
      <meta charset="utf-8">
      <link rel="icon" type="image/jpg" href="images/app_icon_58x58.png"/>
      <link rel="shortcut icon" type="image/jpg" href="images/app_icon_58x58.png"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="css/home.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/bootstrap-theme.css">
      <script src="js/jquery-1.11.1.js"></script>
      <script src="js/bootstrap-3.2.0.js"></script>
	  <script src="js/bootstrap_phonevalidate.js"></script>
      <link rel="stylesheet" href="css/style.css">

	
	 
   </head>
   <body>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px;">
      <div class="" style="padding:0px 0 0 0;">
         <?php include("header.php"); ?>
      </div>
    <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12" style="padding:1px;background-color:#fc9a30"></div>


      
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0 0;background-image: url('images/bg_1234.jpg');background-image: url('images/bg_1234.jpg');-webkit-background-size: cover;  -moz-background-size: cover;  -o-background-size: cover;  background-size: cover; " class="img-responsive">
		
		<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:10px 0 10px 0;" >
			<div class="col-xs-offset-1 col-sm-offset-8 col-lg-offset-9 col-md-offset-9 col-xs-10  col-sm-4 col-md-3 col-lg-3" align="center" style="padding:10px;">			  
				<a href="job_tags.php" style="text-decoration:none;"><button class="send_button_index btn btn-block" id="search_pro_skills" name="submit_btn" type="submit" 
					style="padding: 5px 20px;border-radius:8px;background: #fc9a30;font-family:Robo-Regular;font-size:18px;color:#fff;font-size:20px;">Search for Pros by skill</button></a>
			</div>
	    </div>
<?php if($_GET['type'] != 1)
	{?> 
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display:block;">
				<div class="col-xs-offset-1 col-sm-offset-3 col-lg-offset-3 col-md-offset-3 col-xs-10  col-sm-6 col-md-6 col-lg-6" align="center" style="padding:0px 15px;">	
					<p style="color:#fff;font-family:Robo-Regular;text-align:center;margin-top:50px;margin-bottom:50px;font-size: 20px;">					   					   
				  We've successfully sent your request. Keep watch for an email or </br>phone call from the following Pros.				   
					</p>						
				</div>			
			</div>
			<?php } ?>

		<div id="request_review_detail" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0px 0;display:block;" >
		<?php foreach($job_tags as $jobs)
		{
		?>
			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:15px 0 15px 0;background-color:rgba(241, 242, 244, 0.50);" >
				<div class="col-xs-offset-0 col-sm-offset-3 col-lg-offset-3 col-md-offset-3 col-xs-12  col-sm-6 col-md-6 col-lg-6" align="center" style="padding:0px 0 15px;">	
					<div class="col-xs-offset- col-xs-5 col-sm-offset-0 col-lg-offset-0 col-md-offset-0 col-sm-3 col-md-3 col-lg-3" align="center" style="padding:0px 15px;">			  
						<img  class="img-responsive" align="center" style=" width:100%;margin: 0 auto;padding:0;" src="<?php echo $api_url.$jobs->PROFILE_THUMB_URL; ?>">
					</div>
					<div class="col-xs-offset-0 col-xs-7 col-sm-offset-0 col-lg-offset-0 col-md-offset-0 col-sm-9 col-md-9 col-lg-9" align="center" style="padding:0px 15px;">			  
						<p style="color:#000000;font-family:Robo-Regular;text-align:left;margin-top:40px;margin-bottom:0px;font-size: 20px;">					   					   
							<?php echo $jobs->NAME;	?>
						</p>
						<p style="color:#2136C7;font-family:Robo-Regular;text-align:left;margin-top:0px;margin-bottom:0px;font-size: 22px;">					   					   
							<?php echo $jobs->PHONE_NUMBER;	?>
						</p>
						<p id="view_click"  style="color:#2136C7;font-family:Robo-Regular;float:right;margin:30px 15px 0px 0;font-size: 22px;text-decoration:none;">					   					   
							<a href='profile_detail.php?id=<?php echo $jobs->USER_ID;?>'>View</a>
						</p>							
					</div>
					
				</div>
				<div class="col-xs-offset- col-sm-offset-3 col-lg-offset-3 col-md-offset-3 col-xs-12  col-sm-6 col-md-6 col-lg-6" style="margin-top:0px;padding:1px;background-color:#d1d2d4">
				</div>
			</div>
			<?php } ?>
			
		</div>
		
		 
		<div id="job_tags" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0px 0;display:none;" >
			<?php include('job_tags.php'); ?>		
		 </div>
		
		<div class="col-xs-12  col-sm-12 col-md-12 col-lg-12" >
			<p style="font-family:Robo-Bold;font-size:40px;color:#fff;font-family:Robo-Regular;text-align:center;margin-top:50px;margin-bottom:140px;">
				Have an iPhone or Android?
			</p>									
		</div>			
</div>		

 
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0;background-color:rgba(241, 242, 244, 0.50);">  
    <div class="col-sm-offset-1 col-lg-offset-1 col-md-offset-1 col-xs-12  col-sm-4 col-md-4 col-lg-4" style="margin-top:-140px;">
        <div>
            <img  class="img-responsive" align="center" style=" width:347px;margin: 0 auto;padding:0;" src="images/iphone_img_4.png">
         </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5" style="margin-top:0px;">
		<div class="col-xs-12  col-sm-12 col-md-12 col-lg-12" style="padding:0 45px;">						
		    <p style="color:#5e5e69;font-family:Robo-Bold;text-align:center;margin-top:40px;margin-bottom:40px;font-size: 28px;">
		   		Download Seekahoo for instant access to local Pros, their endorsements, connections, and more.
			</p>
		</div>					
	</div>
					
	<div class="col-xs-12 col-sm-6 col-md-5 col-lg-5" style="margin:0px 0 60px 0;">
		<p style="color:#5e5e69;font-family:Robo-Regular;text-align:center;margin-top:10px;margin-bottom:10px;font-size: 20px;">		     
					   Get the link to download Seekahoo.								  
		</p>
		<div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0 col-lg-10 col-sm-10 col-md-10 col-xs-12" style="">			 
			<form  class="" method="post" id="form3" role="form"  style="">
			      <div class="form-group">
					<div class="input-group" style="padding:0;border:1px solid #7c7c7d;">
					  <input class="form-control bfh-phone" id="phoneno" type="text" data-format="(ddd) ddd-dddd" placeholder="Mobile Number" style="color:#00000;border-radius:0px;border:0px solid #d1d2d4;line-height: 30px;background:#DDDDDD;height:46px;text-align:center;font-size:20px;" required>
					  <span class="input-group-btn" style="">
						 <a > <button class="send_button_index btn " id="submit_btn" name="submit_btn" type="submit" style="padding: 5px 20px;line-height: 30px;border-radius:0px;border:0px solid #d1d2d4;background: #fc9a30;cursor:pointer;height:46px;font-family:Robo-Regular;font-size:18px;color:#fff;font-size:20px;">Send</button> </a>
					  </span>					  
					</div>
				  </div>	 
			</form>		
	     </div>			
    </div>
		
<script>
           $(document).ready(function(){
          $("#form3").submit(function(){

var data = {phone_number : $("input#phoneno").val() };
 $.ajax({
type: "POST",
url: "send_sms.php", //Relative or absolute path to response.php file
data: data,
success: function(data) {

 _gaq.push(['_trackEvent', 'Click', 'send_button_index', 'Send Button index']);
 
 $('#model-alert1').modal('show');
 $("#show_result1").html(data);
$("input#phoneno").val("");

}
});
return false;
});

$("#ok_btn1").click(function(){
 $('#model-alert1').modal('hide');

});

$("#view_click").click(function(){
	
 $('#request_review_detail').hide();
 $('#profile_detail').show();
});

});
         
</script>

    
</div>	 
	  
	  <div class="modal fade" id="model-alert1"  tabindex="-1" role="dialog" aria-labelledby="iphone-alert-label" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                  <h4 class="modal-title" id="iphone-alert-label">&nbsp;</h4>
               </div>
			   	<div class="modal-body" >
				<div >
				<p id="show_result1" style="text-align:center;color:#333333;font-size:20px;font-family:Robo-Regular;margin:50px 0;"></p>
				</div>
				 <div id="show_btn1" style="padding:20px;text-align:center;">
					 <button class="btn btn-md btn-primary"  id="ok_btn1" name="button" type="submit" style="padding: 10px 25px;border: none;color: white;line-height: 30px;
											  width: 100%;margin: 0px 0 10px 0;max-width: 270px;background: #2a6496;font-size: 16px;text-transform: uppercase;">OK</button>
				</div>
               </div>         
            </div>
         </div>
      </div>  
	  
      <?php include("footer.php"); ?>
      <!-- <script src="js/jquery-1.js"></script> -->
     

</div>
</body>
   
  
</html>