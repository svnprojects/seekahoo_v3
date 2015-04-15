<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  .glyphicon-chevron-left::before {
        margin-left: -40px;
}
  </style>
</head>
<body>

<div class="" style="padding:0;">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php $cnt = 1; for($i=0;$i<5;$i += 2) 
	  {
	  if(isset($dat1->data->recent_home_more[$i]))
							{
	  ?>
      <div class="col-xs-12 item <?php if($cnt == 1){echo "active";} ?>" style="padding:0">
      <div class="col-xs-6" style="padding:0">
       <div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-lg-offset-0 col-md-offset-0 col-sm-10 col-md-10 col-lg-10" align="center" style="padding:0px 0px;">
						<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-lg-offset-2 col-md-offset-1 col-sm-10 col-md-10 col-lg-10" align="center" style="padding:0px ;border:1px solid #d1d2d4;background-color:#ffffff;height:600px">						
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0px 0;" >
								<a style="cursor:default;float:left;margin:5px 0px 0 5px;" class="hero-comment-avatar" >
									<img src="<?php echo $api_url.$dat1->data->recent_home_more[$i]->profile_thumb_url;?>">
								 </a>
								 <p style="font-size:16px;color:#fc9a30;font-family:Robo-Regular;text-align:left;margin-top:5px;margin-bottom:5px;">
									<?php echo $dat1->data->recent_home_more[$i]->name;?>
								</p>
								<p style="font-size:16px;color:#7c7c7d;font-family:Robo-Regular;text-align:left;margin-top:0px;margin-bottom:20px;">
									<?php echo myfunction($dat1->data->recent_home_more[$i]->post_created_date);?>
								</p>
							</div>	
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0px 0;" >
								<img  class="img-responsive" align="center" style=" width:100%;height:300px;padding:0;" src="<?php echo $api_url.$dat1->data->recent_home_more[$i]->media_thumb_url;?>">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0px 0;" >
								 <p style="font-size:16px;color:#fc9a30;font-family:Robo-Regular;text-align:left;margin:5px">
									<?php foreach($dat1->data->recent_home_more[$i]->tag_title as $key => $tagtitle)
										{
											echo $tagtitle;
											if($key < count($dat1->data->recent_home_more[$i]->tag_title)-1)
											{echo ",";}
											};?>
								</p>
								<p style="font-size:16px;color:#7c7c7d;font-family:Robo-Regular;text-align:left;margin:5px;">
									<?php echo $dat1->data->recent_home_more[$i]->CAPTION;?>
								</p>
							</div>	
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0px 0;" >
								<span style="float:right;font-family:Robo-Bold;font-size:20px;color:#fc9a30;margin:0 8px;"> . . .</span>
								<img  class="" align="right" style="padding:0;margin:0 8px;" src="images/like_on.png">
								<img  class="" align="right" style="padding:0;margin:0 8px;" src="images/comments_on.png">
								<img  class="" align="right" style="padding:0;margin:0 8px;" src="images/like_on.png">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0px 0;" >
								<p style="font-size:16px;color:#7c7c7d;font-family:Robo-Regular;float:right;margin:8px 15px 0 0;">
									<?php echo $dat1->data->recent_home_more[$i]->comment_total;?> comments
								</p>
								<p align="right" style="font-size:16px;color:#7c7c7d;font-family:Robo-Regular;float:right;margin:8px 35px 0 0;">
									<?php echo $dat1->data->recent_home_more[$i]->likes;?> Likes
								</p>
								
							</div>	
</div>
</div>
      </div>
	  <?php } if(isset($dat1->data->recent_home_more[$i+1]))
							{
							?>
      <div class="col-xs-6" style="padding:0">
	          <div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-lg-offset-0 col-md-offset-0 col-sm-10 col-md-10 col-lg-10" align="center" style="padding:0px 0px;">
						<div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-lg-offset-2 col-md-offset-1 col-sm-10 col-md-10 col-lg-10" align="center" style="padding:0px ;border:1px solid #d1d2d4;background-color:#ffffff;height:600px">						
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0px 0;" >
								<a style="cursor:default;float:left;margin:5px 0px 0 5px;" class="hero-comment-avatar" >
									<img src="<?php echo $api_url.$dat1->data->recent_home_more[$i+1]->profile_thumb_url;?>">
								 </a>
								 <p style="font-size:16px;color:#fc9a30;font-family:Robo-Regular;text-align:left;margin-top:5px;margin-bottom:5px;">
									<?php echo $dat1->data->recent_home_more[$i+1]->name;?> 
								</p>
								<p style="font-size:16px;color:#7c7c7d;font-family:Robo-Regular;text-align:left;margin-top:0px;margin-bottom:20px;">
									<?php echo myfunction($dat1->data->recent_home_more[$i+1]->post_created_date);?>
								</p>
							</div>	
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0px 0;" >
								<img  class="img-responsive" align="center" style=" width:100%;height:300px;padding:0;" src="<?php echo $api_url.$dat1->data->recent_home_more[$i+1]->media_thumb_url;?>">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0px 0;" >
								 <p style="font-size:16px;color:#fc9a30;font-family:Robo-Regular;text-align:left;margin:5px">
									<?php foreach($dat1->data->recent_home_more[$i+1]->tag_title as $key => $tagtitle)
										{
											echo $tagtitle;
											if($key < count($dat1->data->recent_home_more[$i+1]->tag_title)-1)
											{echo ",";}
											};?>
								</p>
								<p style="font-size:16px;color:#7c7c7d;font-family:Robo-Regular;text-align:left;margin:5px;">
									<?php echo $dat1->data->recent_home_more[$i+1]->CAPTION;?>
								</p>
							</div>	
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0px 0;" >
								<span style="float:right;font-family:Robo-Bold;font-size:20px;color:#fc9a30;margin:0 8px;"> . . .</span>
								<img  class="" align="right" style="padding:0;margin:0 8px;" src="images/like_on.png">
								<img  class="" align="right" style="padding:0;margin:0 8px;" src="images/comments_on.png">
								<img  class="" align="right" style="padding:0;margin:0 8px;" src="images/like_on.png">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0px 0;" >
								<p style="font-size:16px;color:#7c7c7d;font-family:Robo-Regular;float:right;margin:8px 15px 0 0;">
									<?php echo $dat1->data->recent_home_more[$i+1]->comment_total;?> comments
								</p>
								<p align="right" style="font-size:16px;color:#7c7c7d;font-family:Robo-Regular;float:right;margin:8px 35px 0 0;">
									<?php echo $dat1->data->recent_home_more[$i+1]->likes;?> Likes
								</p>
								
							</div>	
</div>
</div>
      </div>
	  <?php } ?>
      </div>
	  <?php $cnt++; } ?>
 
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>