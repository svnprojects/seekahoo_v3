
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
<script>
function goBack() {
    window.history.back();
}
</script>
	
	  <?php include_once("analyticstracking.php") ?>  
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
<!--	<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:10px 0 10px 0;" >
			<div class="col-xs-offset-1 col-sm-offset-8 col-lg-offset-9 col-md-offset-9 col-xs-10  col-sm-4 col-md-3 col-lg-3" align="center" style="padding:10px;">			  
				<a onclick="goBack()"  style="text-decoration:none;"><button class="send_button_index btn btn-block" id="back_btn" name="back_btn" type="submit" 
					style="padding: 5px 20px;border-radius:8px;background: #fc9a30;font-family:Robo-Regular;font-size:18px;color:#fff;font-size:20px;">Back</button></a>
			</div>
	    </div>   -->

	<div class="col-xs-12  col-sm-12 col-md-12 col-lg-12" style="padding:0;">		
	<?php 
	$url = $api_url.'posts/get_job_tags'; 			
			
			$ch = curl_init();
			//set the url, number of POST vars, POST data
			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch,CURLOPT_POST,'');
			curl_setopt($ch,CURLOPT_POSTFIELDS,'');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			//execute post
		    $result = curl_exec($ch);			
		     $dat = json_decode($result);
			 $job_tags = $dat->data->job_tags;
			// echo count($job_tags);
			 //exit;
			 ?> <div class="col-xs-offset-1 col-sm-offset-1 col-lg-offset-3 col-md-offset-3 col-xs-10  col-sm-10 col-md-10 col-lg-6" style="padding:15px;background-color:rgba(241, 242, 244, 0.50);border-radius:8px;margin-top:60px;display:block;" >
				 <?php foreach($job_tags as $key => $value)
							{ if($key%2 == 0)
							{
								?>
					<div class="col-xs-offset-0 col-xs-6 col-sm-offset-1 col-lg-offset-1 col-md-offset-1 col-sm-5 col-md-5 col-lg-5" align="center" style="padding:0px 15px;border-right: 1px double #5e5e69;">			  
						 <p style="color:#2136C7;font-family:Robo-Regular;text-align:left;margin-top:10px;margin-bottom:10px;font-size: 20px;">
							<a href='cat_request.php?id=<?php echo $value->job_tag_id;?>&type=1'><?php echo $value->job_tag;?></a>
						 </p>						
					</div>	
					<?php
						} 
					else if($key%2 == 1)
					{
					?>
					<div class="col-xs-offset-0 col-xs-6 col-sm-offset-1 col-lg-offset-1 col-md-offset-1 col-sm-5 col-md-5 col-lg-5" align="center" style="padding:0px 15px;">			  
						 <p style="color:#2136C7;font-family:Robo-Regular;text-align:left;margin-top:10px;margin-bottom:10px;font-size: 20px;">
							<a href='cat_request.php?id=<?php echo $value->job_tag_id;?>&type=1'><?php echo $value->job_tag;?></a>
						 </p>						
					</div>
						<?php } } ?>
									
					
				</div>	
	</div>		
				<div class="col-xs-12  col-sm-12 col-md-12 col-lg-12" >
						<p style="font-family:Robo-Bold;font-size:40px;color:#fff;font-family:Robo-Regular;text-align:center;margin-top:50px;margin-bottom:140px;">
					Have an iPhone or Android?
						</p>									
				</div>	
</div>					
   
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0;background-color:#F1F2F4;">  
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
		
</div>

<?php include("footer.php"); ?>
      <!-- <script src="js/jquery-1.js"></script> -->
     

</div>
</body>
   
  
</html>		