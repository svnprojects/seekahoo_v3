<?php
if(!$_REQUEST['kDrgfHfj']) {	
	header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html" />
      <title>SEEKAHOO</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="image/jpg" href="images/app_icon_58x58.png"/>
      <link rel="shortcut icon" type="image/jpg" href="images/app_icon_58x58.png"/>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/bootstrap-theme.css">
      <script src="js/jquery-1.11.1.js"></script>
      <script src="js/bootstrap-3.2.0.js"></script>
	 
      <link rel="stylesheet" href="css/style.css">
   <style type="text/css">
	.custom-radio{
	
		display: inline-block;
		position: relative;
		z-index: 2;
		top: 3px;
		margin:0 10px;
		width:20px;height:20px;
		background: url("images/check_box_normal_sts.png") no-repeat;
	}
	
	.custom-radio.selected{
		margin:0 10px;
		width: 20px; height: 20px;
background: url("images/check_box_on_sts.png") no-repeat;		
	}
	.custom-radio input[type="checkbox"]{
		margin: 1px;
		position: absolute;
		z-index: 2;            
		cursor: pointer;
		outline: none;
		opacity: 0;
		/* CSS hacks for older browsers */
		_noFocusLine: expression(this.hideFocus=true); 
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		filter: alpha(opacity=0);
		-khtml-opacity: 0;
		-moz-opacity: 0;
	}
    
    /* Let's Beautify Our Form */
    form{
        margin: 20px;
    }
    .label_size{
	color:#136a9d;
        display: block;
        margin: 30px 0px;
		font-size:20px;font-family:Robo-regular;font-weight:normal;
    }
    input[type="submit"]{
        float: left;
        background: #f2f2f2;
        border: 1px solid #CCCCCC;
        border-radius: 4px;
        margin-top: 20px;
        padding: 4px 10px;
        cursor: pointer;
        outline: none;
    }
	input[type="submit"]:hover{
        color: #fff;
        border-color: #1b7aa9;
        background-color: #239fdb;
    }
</style>

<script type="text/javascript">

    function customRadio(radioName){
        var radioButton = $('input[name="'+ radioName +'"]');
        $(radioButton).each(function(){
            $(this).wrap( "<span class='custom-radio'></span>" );
            if($(this).is(':checked')){
                $(this).parent().addClass("selected");
            }
        });
        $(radioButton).click(function(){
            if($(this).is(':checked')){
                $(this).parent().addClass("selected");
            }
			else  
			
                $(this).parent().removeClass("selected");
          
            // $(radioButton).not(this).each(function(){
                // $(this).parent().removeClass("selected");
            // });
        });
    }
    $(document).ready(function (){
        customRadio("browser[]");
		
		if($('.ids1').val() == 1) {
		
		 $('input.ids1').parent().addClass("selected");
						 $(".ids1").prop("checked", true);
		}
		else {
		 $(".ids1").prop("checked", false);
		}
			if($('.ids2').val() == 1) {
		  $('input.ids2').parent().addClass("selected");
						 $(".ids2").prop("checked", true);
		}
		else {
		 $('input.ids2').parent().removeClass("selected");
						 $(".ids2").prop("checked", false);
		}	
		if($('.ids3').val() == 1) {
		  $('input.ids3').parent().addClass("selected");
						 $(".ids3").prop("checked", true);
		}
		else {
		 $('input.ids3').parent().removeClass("selected");
						 $(".ids3").prop("checked", false);
		}	
		if($('.ids4').val() == 1) {
		  $('input.ids4').parent().addClass("selected");
						 $(".ids4").prop("checked", true);
		}
		else {
		 $('input.ids4').parent().removeClass("selected");
						 $(".ids4").prop("checked", false);
		}		
		
		
		$("#submit_preference").click(function(){
		var id1,id2,id3,id4,userid;
		userid= <?php echo base64_decode($_REQUEST['kDrgfHfj']); ?>;
		if($('input.ids1').is(':checked')){
		id1=1;
		//alert(id1);
		} else {
		id1=0;
		}
		if($('input.ids2').is(':checked')){
		id2=1;
		}else {
		id2=0;
		//alert(id2);
		}
		if($('input.ids3').is(':checked')){
		id3=1;
		//	alert(id3);
		}else {
		id3=0;
		}
		if($('input.ids4').is(':checked')){
		id4=1;
	
		}else {
		id4=0;
		//	alert(id4);
		}
		$.post("insert_email_preference.php",{user_id:userid, id11: id1, id22: id2,id33: id3, id44: id4 },function(result){
		
		  if($.trim(result) === "success") {
		  		alert("Your email preference was updated successfully");
				window.location = "index.php";
			}
		  else {
		  		alert("Failed to update. Please try again later!!!");
			}			
	});
		});
		// <!--//txt=$('.ids:checked').val(); -->
		 // var searchIDs = $("input[type='checkbox']:checked").map(function(){
			// return $(this).val();
		// }).get();alert(searchIDs);
		
    // if(searchIDs.length>0)
	// {
		  // $.post("insert_emailpreference.php",{suggest:searchIDs},function(result){
		  // alert(result);
		 
      
		// <!--  //alert('Inserted Successfully');
			//$("span").html(result); -->
		  // });
			// <!--	 //alert(1);
				//console.log($('.ids:checked').val());-->
	// }
	// else {
				// alert('Please select atleast one check box');
		// }		
		 // });
       
     })
</script>
   </head>
     <body>
      <div id="wrap">
         <div class="" style="padding:0px 0 0 0;">
            <?php include("header_contact.php"); ?>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:1px;background-color:#fc9a30"></div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" class="img-responsive" style="background-image: url('images/bg_123.jpg');
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;padding-bottom:65px;" >
			<div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:30px;padding-bottom:30px;">
               <h1 style="text-align:center; font-family:Robo-bold;font-size:40px;">Email Preferences</h1>
            </div>
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align=""style="margin-top:0px;margin-bottom:50px;">
					<form id="preference_form"   method="post">
						<div class="col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-2 col-xs-12 col-sm-10 col-md-10 col-lg-8" style="padding: 30px 40px; border:1px solid #c1cad6;background: #ffffff; border-radius: 5px;border-radius:">
							<?php
							  require_once("db_config.php"); 
				if($_REQUEST['kDrgfHfj']) {			  
							  $user_id = base64_decode($_REQUEST['kDrgfHfj']);
							  $query_string = mysql_query("select * FROM email_preferences where user_id=".$user_id.""); 
							 // if(count($row = mysql_fetch_array($query_string))==0) { header('location:index.php'); }
								while($row = mysql_fetch_array($query_string)) {
// print_r($row);
									?>									
										<label class="label_size"><input type="checkbox" class="ids1" name="browser[]" value="<?php echo $row['new_service']; ?>"> Receive alerts and notifications about new services</label>
										<label class="label_size"><input type="checkbox" class="ids2" name="browser[]" value="<?php echo $row['daily_summary']; ?>"> Receive daily summary of trending posts</label>
										<label class="label_size"><input type="checkbox" class="ids3" name="browser[]" value="<?php echo $row['monthly_summary']; ?>"> Receive weekly summaries</label>  
										<label class="label_size"><input type="checkbox" class="ids4" name="browser[]" value="<?php echo $row['new_contractors']; ?>">  Receive notifications about new contractors in your area</label>  
									<?php	
							}
						}	
							 ?>
							 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
							   <button class="btn btn-md btn-primary " id="submit_preference" name="submit" type="button" style="padding: 10px 25px;border: none;color: white;line-height: 30px;
										  width: 100%;margin: 30px auto 0px auto;max-width: 270px;background: #2a6496;font-size: 16px;text-transform: uppercase;" >Submit</button>
							 </div>
						</div>
					
				 </form>
            </div> 
         </div >
         <?php include("footer.php"); ?>
		  <?php include("iphone_android_alert.php"); ?>
      </div>


  </body>
</html>