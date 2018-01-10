<?php
	require_once('admin/config.php');
	if(isset($_POST['name'])){
		//echo "yup";
		$direct = "thankyou.php";
		$fname = $_POST['firstName'];
		$lname = $_POST['lastName'];
		$email = $_POST['email'];
		$tel = $_POST['phone'];
		$street = $_POST['street'];
		$message = $_POST['message'];
		//echo $name;
		if($street === ""){
			//echo "send mail";
			$sendMail = submitMessage($direct, $fname, $lname, $email, $tel, $message);
		}/*else{
			echo "Get The Hell Out Of Here!!";
		}*/
	}
?>
