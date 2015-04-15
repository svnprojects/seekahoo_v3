<?php include("send_mail2.php"); ?>
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
      <style> 
         #space23 {
         border: 1px solid #c1cad6;
         padding: 10px 40px; 
         background: #ffffff;
         border-radius: 5px;
         }
         #space33 {
         border: 1px solid #c1cad6;
         padding: 10px 40px; 
         background: #ffffff;
         margin:0 auto;
         border-radius: 5px;
         }
         #wrap {  
         min-height: 100%;
         height: auto !important;
         height: 100%;
         /* Negative indent footer by it's height */
         margin: 0 auto -60px;
         }
         #submit-support-request{
         padding: 10px 0px;border: none;color: white;line-height: 20px;background: #28a3db;
         font-size: 15px;
         text-transform: uppercase;
         width:60%;
         margin:0 auto;
         float:center;
         line-height: 30px;
         }
         input{
         margin-bottom: 10px;
         height: 40px;
         font-size:17px;
         line-height: 19px;
         color: #4b505e;
         border-color: #c1cad6;
         }
      </style>
	  
	   <?php include_once("analyticstracking.php") ?>  
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
            background-size: cover; " >
            <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:60px;padding-bottom:30px;">
               <h1 style="text-align:center; font-family:Robo-bold;font-size:40px;">How can we help you?</h1>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12" align="center" style="margin-top:30px;padding-bottom:100px;">
               <div id="space23" class="col-sm-offset-3 col-md-offset-3 col-lg-offset-3 col-sm-6 col-md-6 col-lg-6"  style="">
                  <p style="margin: 10px 0 30px;line-height: 1.42857143;font-size:17px;font-family:Robo-Regular;text-align:left;color: #4b505e;">At Seekahoo our mission is to make sure you have an outstanding experience. Please let us know how we are doing and what we can do better. Send us an email and we will get back to you shortly. You can also follow us on Twitter, Facebook or Google+. </p>
                  <form action="" method="post" role="form" id="form"  style="margin:15px;">
                     <div class="form-group">
                        <input class="form-control" id="support_name" name="support_name" placeholder="Your name" required="required" type="text">
                        <input class="form-control" id="support_email" name="email" placeholder="Your email" type="email" required >
                        <textarea class="form-control" id="support_message" name="support_message" placeholder="Your message"  required="required" rows="3"></textarea>
                        <button class="btn  btn-default btn-block" id="submit-support-request" name="button" type="submit" style="background:#2a6496;margin-top:20px;margin-bottom:20px;color:white;">Submit</button>
                     </div>
                  </form>
               </div>
            </div >
            <script>
               $(function() {
                   $('#submit-support-request').click(function() {
                       mixpanel.track('Support request submitted', {'Referrer': document.referrer});
                       $('#support-request-form').submit();
                       return false;
                   });
               });
            </script>
         </div>
         <?php 
            //print_r($_REQUEST);
            //exit;
            if(isset($_REQUEST['email'])){
            
             mail_send12($_POST);
            
            }
            ?>
         <?php include("footer.php"); ?>
<?php include("iphone_android_alert.php"); ?>
      </div>
	  
	  
	  
        </body>
</html>