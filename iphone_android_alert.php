

      <!-- iPhone Alert Modal -->
      <div class="modal fade" id="iphone-alert"  tabindex="-1" role="dialog" aria-labelledby="iphone-alert-label" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                  <h4 class="modal-title" id="iphone-alert-label">&nbsp;</h4>
               </div>
			   	<div class="modal-body" >
<div id="hide_body" style="display:block;">
                  <p class="title" style="padding:10px;line-height: 1.428571429;text-align:center;color:#333333;font-size:20px;font-family:Robo-Regular;">
                   Great! Now let's get the app on your iPhone.<!--  Seekahoo will be coming soon to iOS. --> <!--Seekahoo is not yet ready for Android &mdash;<br />But it will be shortly!-->
                  </p>
                  <p style="line-height: 1.428571429;text-align:center;color:#333333;font-size:18px;margin-top:20px;margin-bottom:20px;font-family:Robo-light;">
                   Enter your mobile phone number below and we'll text you a link so you can
                     download the app directly to your iPhone.<!--  Give us your email address and</br> we will let you know when it's available.--><!--Just give us your email address and<br />we’ll reach out when it’s available.-->
                  </p>
                  <form  class="" method="post" id="form2" role="form"  style="margin:20px;">
                     <div class="form-group">
                        <input class="form-control bfh-phone" type="text" data-format="(ddd) ddd-dddd"  id="support_phoneno" name="phone_number" oninvalid="this.setCustomValidity('Please enter in correct format.')" placeholder="(123) 456-7890" style="margin-top:40px;margin-bottom:20px;height: 70px;font-size: 24px;line-height: 49px;text-align:center;" required >
                        <div style="padding:20px;text-align:center;">
                           <a  onClick="_gaq.push(['_trackEvent', 'Click', 'AppStore_Clicked', 'App store button']);">  <button class="AppStore_Clicked btn btn-md btn-primary " id="submit_iphone" name="button" type="submit" style="padding: 10px 25px;border: none;color: white;line-height: 30px;
                              width: 100%;margin: 0px 0 10px 0;max-width: 270px;background: #2a6496;font-size: 16px;text-transform: uppercase;" >Submit</button> </a>
                        </div>
                     </div>
                  </form>

</div>
<div >
<p id="show_result" style="text-align:center;color:#333333;font-size:20px;font-family:Robo-Regular;margin:50px 0;"></p>
</div>
 <div id="show_btn" style="padding:20px;text-align:center;display:none;">
                           <button class="btn btn-md btn-primary"  id="ok_btn" name="button" type="submit" style="padding: 10px 25px;border: none;color: white;line-height: 30px;
                              width: 100%;margin: 0px 0 10px 0;max-width: 270px;background: #2a6496;font-size: 16px;text-transform: uppercase;">OK</button>
                        </div>

               </div>
              <!-- <div class="modal-body">
                  <p class="title" style="padding:10px;line-height: 1.428571429;text-align:center;color:#333333;font-size:20px;font-family:Robo-Regular;">Great! Now letÃ¢â‚¬â„¢s get the app on your iPhone.</p>
                  <p style="line-height: 1.428571429;text-align:center;color:#333333;font-size:18px;margin-top:20px;margin-bottom:20px;font-family:Robo-light;">Enter your mobile phone number below and weÃ¢â‚¬â„¢ll text you a link so you can
                     download the app directly to your iPhone.
                  </p>
                  <form action="" method="post" id="form2"  role="form"  style="margin:20px;">
                     <div class="form-group">
                        <input class="form-control" id="phone" name="phone" placeholder="(123) 456-7890"  pattern="[0-9]{10}"  style="margin-top:40px;margin-bottom:20px;height: 70px;font-size: 24px;line-height: 49px;text-align:center;" required >
                        <div style="padding:20px;text-align:center;">------
                           <button class="btn btn-md btn-primary" id="submit-iphone-form" name="button" type="submit" style="padding: 10px 25px;border: none;color: white;line-height: 30px;
                              width: 100%;margin: 0px 0 10px 0;max-width: 270px;background: #2a6496;font-size: 16px;text-transform: uppercase;">Submit</button>
                        </div>
			  
                     </div>
                  </form>
			
               </div> -->
            </div>
         </div>
      </div>
 


 <script>
 
  $(document).ready(function(){
          $("#iphone_close").click(function(){
		  $("input#support_phoneno").val("");
		  });
		  });

           $(document).ready(function(){
          $("#form2").submit(function(){

var data = {phone_number : $("input#support_phoneno").val() };

 $.ajax({
type: "POST",
url: "send_sms.php", //Relative or absolute path to response.php file
data: data,
success: function(data) {
$("#hide_body").hide();

 $("#show_btn").show();
$("#show_result").show();
$("#show_result").html(data);

}
});
return false;
});


          $("#ok_btn").click(function(){
 $('.modal').modal('hide');
  $("#hide_body").show();
 $("#show_btn").hide();
 $("p#show_result").hide();
$("input#support_phoneno").val("");
});
});
          
         
</script>
      <script>
         $(document).ready(function(){
          $("#block1").click(function(){
            $("#block1 a").css('color','#F9AC3A');
         $("#block2 a").css('color','#000');
         $("#block3 a").css('color','#000');
            $("#content1").show();
         $("#content2").hide();
         $("#content3").hide();
         
          });
          
         });
         $(document).ready(function(){
          $("#block2").click(function(){
            $("#block1 a").css('color','#000');
         $("#block2 a").css('color','#F9AC3A');
         $("#block3 a").css('color','#000');
            $("#content1").hide();
         $("#content2").show();
         $("#content3").hide();
         
          });
          
         });
         $(document).ready(function(){
          $("#block3").click(function(){
          $("#block1 a").css('color','#000');
         $("#block2 a").css('color','#000');
         $("#block3 a").css('color','#F9AC3A');
         $("#content3").show();
            $("#content1").hide();
         $("#content2").hide();
         
          });
          
         });
      </script>



      <!-- Android Alert Modal -->
      <div class="modal fade" id="android-alert" tabindex="-1" role="dialog" aria-labelledby="android-alert-label" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="android-alert-label" style="display:none;">Android Alert</h4>
               </div>
               <div class="modal-body">
<div id="hide_body2" style="display:block;">
                  <p class="title" style="padding:10px;line-height: 1.428571429;text-align:center;color:#333333;font-size:20px;font-family:Robo-Regular;">
                     Seekahoo will be coming soon to Android. <!--Seekahoo is not yet ready for Android &mdash;<br />But it will be shortly!-->
                  </p>
                  <p style="line-height: 1.428571429;text-align:center;color:#333333;font-size:18px;margin-top:20px;margin-bottom:20px;font-family:Robo-light;">
                     Give us your email address and</br> we will let you know when it's available.<!--Just give us your email address and<br />we’ll reach out when it’s available.-->
                  </p>
                  <form action="" method="post" role="form" id='form1'  style="margin:20px;">
                     <div class="form-group">
                        <input class="form-control" id="support_email2" name="email" placeholder="name@company.com" type="email" style="margin-top:40px;margin-bottom:20px;height: 70px;font-size: 24px;line-height: 49px;text-align:center;" required >
                        <div style="padding:20px;text-align:center;">
                          <a  onClick="_gaq.push(['_trackEvent', 'Click', 'Android_Clicked', 'Android Button']);">   <button class="Android_Clicked btn btn-md btn-primary" id="submit_iphone2" name="button" type="submit" style="padding: 10px 25px;border: none;color: white;line-height: 30px;
                              width: 100%;margin: 0px 0 10px 0;max-width: 270px;background: #2a6496;font-size: 16px;text-transform: uppercase;">Submit</button> </a>
                        </div>
                     </div>
                  </form>
               </div>
<div >
<p id="show_result2" style="text-align:center;color:#333333;font-size:20px;font-family:Robo-Regular;margin:50px 0;"></p>
</div>
 <div id="show_btn2" style="padding:20px;text-align:center;display:none;">
                           <button class="btn btn-md btn-primary"  id="ok_btn2" name="button" type="submit" style="padding: 10px 25px;border: none;color: white;line-height: 30px;
                              width: 100%;margin: 0px 0 10px 0;max-width: 270px;background: #2a6496;font-size: 16px;text-transform: uppercase;">OK</button>
                        </div>
            </div>
	    </div>	
         </div>
      </div>
  <script>
  
    $(document).ready(function(){
          $("#android_close").click(function(){
		  $("input#support_email2").val("");
		  });
		  });
           $(document).ready(function(){
          $("#form1").submit(function(){
var data = {email : $("input#support_email2").val() };

 $.ajax({
type: "POST",
url: "send_mail.php", //Relative or absolute path to response.php file
data: data,
success: function(data) {
$("#hide_body2").hide();

 $("#show_btn2").show();
$("#show_result2").show();
$("#show_result2").html(data);

}
});
return false;
});

  $("#ok_btn2").click(function(){
			 $('.modal').modal('hide');
			  $("#hide_body2").show();
			 $("#show_btn2").hide();
			 $("p#show_result2").hide();
			$("input#support_email2").val("");
});

});
         
</script>
