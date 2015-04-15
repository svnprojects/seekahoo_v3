<?php  $url = $api_url.'posts/get_job_tags'; 
			
			
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
			 //exit;
			 ?>
	<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0px 0;display:block;" >
		 <form id="user_form" name="user_form" enctype='multipart/form-data' role="form" method='POST' action="request_review.php?id=2" style="">
		    <input class="span2" id="search_type" name="search_type" type="hidden">
			<input class="span2" id="tag_id" name="tag_id" type="hidden">
			 <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 20px 0;" >
				<div class="col-xs-offset-1 col-sm-offset-3 col-lg-offset-4 col-md-offset-4 col-xs-10  col-sm-6 col-md-4 col-lg-4"  style="padding:0px 15px;">	
				  
					<button type="button" data-toggle="dropdown" class="dropdown-toggle send_button_index btn btn-block" id="Pros_by_skill" name="Pros_by_skill" type="submit" 
						style="padding: 5px 20px;border-radius:8px; background: #DDDDDD url('images/add_btn.png') no-repeat ;background-position:right 15px top 4px;font-family:Robo-Regular;font-size:18px;color:#5E5E69;font-size:20px;">Choose a category</button>	
					<ul class="dropdown-menu pull-right" style="width:50%;padding:0px;margin:0 15px 0 0;">
					    <?php foreach($job_tags as $value)
							{?>
						<li  onclick="$('#search_type').val('<?php echo str_replace("#","",$value->job_tag).','.$value->job_tag_id;?>');" data-value="1"><a ><?php echo str_replace("#","",$value->job_tag);?></a></li>
						<?php } ?>
						
					</ul>	
				</div>
			</div>	
		<script>
		 $(function(){
			$(".dropdown-menu li a").click(function(){
			  $("#Pros_by_skill:first-child").text($(this).text());
			  $("#Pros_by_skill:first-child").val($(this).text());
		   });
		});
		</script>
		
		<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0px 0;" >
				<div class="col-xs-offset-1 col-sm-offset-3 col-lg-offset-4 col-md-offset-4 col-xs-10  col-sm-6 col-md-4 col-lg-4"style="padding:0px 15px;">	
					<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 5px 20px 0;" >
						<input type="file" class="" id="file" name="file" placeholder="Add Image"
							style="padding: 5px 20px;border-radius:8px;background: #DDDDDD;font-family:Robo-Regular;font-size:18px;color:#5E5E69;font-size:20px;text-align:left;cursor:auto;"></input>
					</div>	
									
				</div>
			</div>
			
			
			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0px 0;" >
				<div class="col-xs-offset-1 col-sm-offset-3 col-lg-offset-4 col-md-offset-4 col-xs-10  col-sm-6 col-md-4 col-lg-4"style="padding:0px 15px;">	
					<div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding:0px 5px 20px 0;" >
						<input type="text" class="form-control" id="user_firstname" name="First name" placeholder="First name"
							style="padding: 5px 20px;border-radius:8px;background: #DDDDDD;font-family:Robo-Regular;font-size:18px;color:#5E5E69;font-size:20px;text-align:left;cursor:auto;" required></input>
					</div>	
					<div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding:0px 0 20px 5px;" >
						<input type="text" class="form-control" id="user_lastname" name="Last name" placeholder="Last name"
							style="padding: 5px 20px;border-radius:8px;background: #DDDDDD;font-family:Robo-Regular;font-size:18px;color:#5E5E69;font-size:20px;text-align:left;cursor:auto;" required></input>
					</div>						
				</div>
			</div>
			
			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 20px 0;" >
				<div class="col-xs-offset-1 col-sm-offset-3 col-lg-offset-4 col-md-offset-4 col-xs-10  col-sm-6 col-md-4 col-lg-4" align="center" style="padding:0px 15px;">			  
					<input type="email" class="form-control" id="user_emailaddr" name="email" placeholder="Email address"
							style="padding: 5px 20px;border-radius:8px;background: #DDDDDD;font-family:Robo-Regular;font-size:18px;color:#5E5E69;font-size:20px;text-align:left;cursor:auto;"  required></input>					
				</div>
			</div>
			
			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 0px 0;" >
				<div class="col-xs-offset-1 col-sm-offset-3 col-lg-offset-4 col-md-offset-4 col-xs-10  col-sm-6 col-md-4 col-lg-4" align="center" style="padding:0px 15px;">
					<div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding:0px 5px 20px 0px;" >
						<input type="text" class="form-control  bfh-phone" id="phoneno" name="Phone number" placeholder="Phone number" data-format="(ddd) ddd-dddd"
							style="padding: 5px 20px;border-radius:8px;background: #DDDDDD;font-family:Robo-Regular;font-size:18px;color:#5E5E69;font-size:20px;text-align:left;cursor:auto;" required></input>
					</div>	
					<div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding:0px 0 20px 5px;" >
					<input type="text" pattern="[0-9]{5}"  class="form-control" id="user_zipcode" name="Zipcode" placeholder="Zip Code"
							style="padding: 5px 20px;border-radius:8px;background: #DDDDDD;font-family:Robo-Regular;font-size:18px;color:#5E5E69;font-size:20px;text-align:left;cursor:auto;"  required></input>
						
					</div>						
				</div>	
			</div>
			
			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 20px 0;" >
				<div class="col-xs-offset-1 col-sm-offset-3 col-lg-offset-4 col-md-offset-4 col-xs-10  col-sm-6 col-md-4 col-lg-4" align="center" style="padding:0px 15px;">	
		
					<textarea rows="4" maxLength="300" placeholder="Describe your needs in detail." class="form-control" id="user_desc" name="user description"
						style="padding: 5px 20px;border-radius:8px;background: #DDDDDD;font-family:Robo-Regular;font-size:18px;color:#5E5E69;font-size:20px;text-align:left;cursor:auto;" required></textarea>	
				</div>
			</div>
			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 20px 0;" >
				<div class="col-xs-offset-1 col-sm-offset-3 col-lg-offset-4 col-md-offset-4 col-xs-10  col-sm-6 col-md-4 col-lg-4" align="center" style="padding:0px 15px;">			  
					<button class="form-control  send_button_index btn btn-block" id="send_my_request" name="Send my request" type="submit" 
						style="padding: 0px 20px;border-radius:8px;background: #fc9a30;font-family:Robo-Bold;font-size:18px;color:#fff;font-size:23px;">Send my request</button>	
				</div>
			</div>
			<!--<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px 0 20px 0;" >
				<div class="col-xs-offset-1 col-sm-offset-3 col-lg-offset-4 col-md-offset-4 col-xs-10  col-sm-6 col-md-4 col-lg-4" align="center" style="padding:0px 15px;">			  
					<button class="form-control  send_button_index btn btn-block" id="back_btn" name="back_btn" type="button" 
						style="padding: 0px 20px;border-radius:8px;background: #fc9a30;font-family:Robo-Bold;font-size:18px;color:#fff;font-size:23px;">Back</button>	
				</div>
			</div>-->
		</form>
		</div>

