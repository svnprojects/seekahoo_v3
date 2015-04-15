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
 <script type='text/javascript' src="http://netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
	<script>
function goBack() {
    window.history.back();
}
</script>
	 
   </head>
   <body>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px;">
      <div class="" style="padding:0px 0 0 0;">
         <?php include("header.php"); ?>
      </div><?php include_once("analyticstracking.php") ?>
	  <?php 
	  function myfunction($date2)
	  {
	  $second = 1;
	  $minute = 60*$second;
	  $hour = 60*$minute;
	  $day = 24*$hour;
	  $week = 7*$day;
	  $month = 30*$day;
	  $year = 365*$day;
	  $out = '';
	  $elapsedYears =0;

$elapsedMonths =0;

$elapsedWeeks = 0;

$elapsedDays =0;

$elapsedHours =0;

$elapsedMinutes=0;

$elapsedSeconds =0;
	
	$date1 = date('Y-m-d H:i:s');
	$diff = abs(strtotime($date2) - strtotime($date1));
 if($diff >= $year)

{

    $elapsedYears = floor($diff /$year);

    if($elapsedYears>1)

    {

	$out = $elapsedYears." Years ago";

    }else

    {

    $out = $elapsedYears." Year ago";

    }
}
else if($diff >= $month)

{

    $elapsedMonths = floor($diff /$month);

    if($elapsedMonths>1)

    {

	$out = $elapsedMonths." Months ago";

    }else

    {

    $out = $elapsedMonths." Month ago";

    }
}
else if($diff >= $week)

{

    $elapsedWeeks = floor($diff /$week);

    if($elapsedWeeks>1)

    {

	$out = $elapsedWeeks." Weeks ago";

    }else

    {

    $out = $elapsedWeeks." Week ago";

    }
}
else if($diff >= $day)

{

    $elapsedDays = floor($diff /$day);

    if($elapsedDays>1)

    {

	$out = $elapsedDays." Days ago";

    }else

    {

    $out = $elapsedDays." Day ago";

    }
}
else if($diff >= $hour)

{

    $elapsedHours = floor($diff /$hour);

    if($elapsedHours>1)

    {

	$out = $elapsedHours." Hours ago";

    }else

    {

    $out = $elapsedHours." Hour ago";

    }
}
else if($diff >= $minute)

{

    $elapsedMinutes = floor($diff /$minute);

    if($elapsedMinutes>1)

    {

	$out = $elapsedMinutes." Minutes ago";

    }else

    {

    $out = $elapsedMinutes." Minute ago";

    }
}
else if($diff >= $second)

{

    $elapsedSeconds = floor($diff /$second);

    if($elapsedSeconds>1)

    {

	$out = $elapsedSeconds." Seconds ago";

    }else

    {

    $out = $elapsedSeconds." Second ago";

    }
}
return $out;
}
//echo myfunction('2013-12-13 13:58:55');


$url = $api_url.'users/get_user_details'; 
			$fields = array(
				'user_id'=>$_GET['id'],
				'user_type'=>2
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
			 $job_tags = $dat->data->user_details->user_details[0];
			 
			 //Get Recent Posts
			$url = $api_url.'posts/recent_home_more_2'; 
			//$url = $api_url.'posts/get_business_post'; 
			$fields = array(
				'user_id'=>$_GET['id'],
				'scroll_position'=>0,
				'distance' => 25
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
		    $result1 = curl_exec($ch);			
		     $dat1 = json_decode($result1);
			// echo "<pre>";
			//print_r($dat1);
			// $job_tags = $dat->data->user_details->user_details[0]; 
			 ?>
	  <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12" style="padding:1px;background-color:#fc9a30"></div>
	  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0 0;background-image: url('images/bg_1234.jpg');background-image: 
	  url('images/bg_1234.jpg');-webkit-background-size: cover;  -moz-background-size: cover;  -o-background-size: cover;  background-size: cover; " class="img-responsive">
		
		<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:10px 0 10px 0;" >
			<div class="col-xs-offset-1 col-sm-offset-8 col-lg-offset-9 col-md-offset-9 col-xs-10  col-sm-4 col-md-3 col-lg-3" align="center" style="padding:10px;">			  
				<a href='job_tags.php' style='text-decoration:none'><button class="send_button_index btn btn-block" id="search_pro_skills" name="submit_btn" type="submit" 
					style="padding: 5px 20px;border-radius:8px;background: #fc9a30;font-family:Robo-Regular;font-size:18px;color:#fff;font-size:20px;">Search for Pros by skill</button></a>	
			</div>
	    </div>
		<!--<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:10px 0 10px 0;" >
			<div class="col-xs-offset-1 col-sm-offset-8 col-lg-offset-9 col-md-offset-9 col-xs-10  col-sm-4 col-md-3 col-lg-3" align="center" style="padding:10px;">			  
				<a onclick="goBack()"  style="text-decoration:none;"><button class="send_button_index btn btn-block" id="back_btn" name="back_btn" type="submit" 
					style="padding: 5px 20px;border-radius:8px;background: #fc9a30;font-family:Robo-Regular;font-size:18px;color:#fff;font-size:20px;">Back</button></a>
			</div>
	    </div>-->
	  <div  class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:60px;padding:0px 0 0px 0;background-color:rgba(241, 242, 244, 0.50);display:block;" >
	  
	<script>  $(document).ready(function() {
	$('#myCarousel').carousel({
	interval: 30000
	})
    
    $('#myCarousel').on('slid.bs.carousel', function() {
    	//alert("slid");
	});
    
    
});
</script>
<style>
	.carousel-control {
  padding-top:10%;
  width:5%;
}
</style>

	  


			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:15px 15px 15px ;" >
			
			
	 

				<div class="col-xs-offset-0 col-sm-offset-0 col-lg-offset-0 col-md-offset-0 col-xs-12  col-sm-12 col-md-12 col-lg-12" align="center" style="padding:0px 0 15px;">	
					<div class="col-xs-offset-1 col-xs-5 col-sm-offset-0 col-lg-offset-0 col-md-offset-0 col-sm-3 col-md-3 col-lg-3" align="center" style="padding:0px 15px;">
						<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-lg-offset-2 col-md-offset-1 col-sm-10 col-md-10 col-lg-8" align="center" style="padding:0px ;">						
							<img  class="img-responsive" align="center" style=" width:100%;padding:0;" src="<?php echo $api_url.$job_tags->profile_thumb_url; ?>">
						</div>
					</div>
					<div class="col-xs-offset-1 col-sm-offset-0 col-lg-offset-0 col-md-offset-0  col-sm-9 col-md-9 col-lg-9" style="padding:0px 0px;">			  
						<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-lg-offset-0 col-md-offset-0 col-sm-5 col-md-5 col-lg-5" align="center" style="padding:0px ;">						

							<p style="color:#000000;font-family:Robo-Regular;text-align:left;margin-top:40px;margin-bottom:0px;font-size: 20px;">					   					   
								<?php echo $job_tags->name;?>
							</p>
							<p style="color:#2136C7;font-family:Robo-Regular;text-align:left;margin-top:0px;margin-bottom:0px;font-size: 22px;">					   					   
								<?php echo $job_tags->phone_number;?>
							</p>
							<a href="http://<?php echo $job_tags->web_address;?>" target="_blank" style="color:#2136C7;font-family:Robo-Regular;float:left;margin:0px 0px 0px 0;font-size: 20px;text-decoration:none;">					   					   
								<?php echo $job_tags->web_address;?> 
							</a>
						</div>
						<div class="col-xs-offset-1 col-sm-offset-0 col-lg-offset-0 col-md-offset-0 col-xs-10 col-sm-4 col-md-4 col-lg-4" style="padding:0px 0px;">			  
								<p style="color:#000000;font-family:Robo-Regular;text-align:left;margin-top:40px;margin-bottom:0px;font-size: 20px;">					   					   
									<?php echo $job_tags->address;?> <br><?php echo $job_tags->city;?> ,<?php echo $job_tags->state;?>&nbsp&nbsp<?php echo $job_tags->zipcode;?>
								</p>							
						</div>						
					</div>				
				</div>
				<div class="col-xs-offset-0 col-sm-offset-0 col-lg-offset-0 col-md-offset-0 col-xs-12  col-sm-12 col-md-12 col-lg-12" style="margin:0px;padding:1px;background-color:#d1d2d4">
				</div>
				<div class="col-xs-offset-0 col-sm-offset-0 col-lg-offset-0 col-md-offset-0 col-xs-12  col-sm-12 col-md-12 col-lg-12" align="center" style="margin:15px 0 0;padding:0px 0 15px;">	
					 <div class="container" style='margin:0 auto'>
					 <?php if(isset($dat1->data->recent_home_more)) { ?>
    <div class="col-md-12">
         
<?php include('carousel.php');?>
        <!--/well-->
    </div>
	<?php } ?>
</div>
				</div>				
			</div>	
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
		
		