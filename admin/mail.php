<?php
	
	function redirect_to($location){
		if($location != NULL){
			header("Location: {$location}");
			exit;
		}
	}

	//echo "From mail file";
	function submitMessage($direct, $fname, $lname, $email, $tel, $message) {
		//echo "From submitmessage()";
		$to = "steven.cadick@gmail.com";
		$subject = "Message from user from hosting";
		$extra = "Reply to: " + $email;
		$msg = "Name: ".$name."\n\nEmail: ".$email."\n\nMessage: ".$message;
		mail($to,$subject,$msg,$extra);
		//$direct = $direct."?name={$name}";
	}
?>