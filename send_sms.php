<?php

$to = $_POST['phone_number'];

require "Services/Twilio.php";
// set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "ACe44ea6039d38ef988524b2954000e799";
$AuthToken = "657db431dc9fc5f2b3308e284c8cc9ce";
$client = new Services_Twilio($AccountSid, $AuthToken);
try {
$message = $client->account->messages->create(array(
"From" => "14124555440",
"To" => $to,
"Body" => "Thanks for inquiring about Seekahoo! Click on the link below to download the app from the App Store. https://itunes.apple.com/us/app/seekahoo/id922497295?ls=1&mt=8 ",
));
// Thank you for showing interest in Seekahoo! Please download the iOS app from https://itunes.apple.com/us/app/seekahoo/id922497295?ls=1&mt=8


// Display a confirmation message on the screen
echo "Message sent  successfully!";

}
catch (Exception $e)
    {  //on error push userId in to error array
		// echo 'Error: ' . $e->getMessage();
		echo "Please enter a valid phone number";
    }
	
?>	
	