<?php
	require_once('admin/scripts/config.php');
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
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Us</title>
</head>
<body>
    <form class="small-12 cell" id="contactForm" action="contact.php" method="post">
            		<div class="grid-x">
                    <div class="small-12 medium-2 medium-offset-2 cell">
                    <label for="name">First Name</label>
                    </div>
                    <div class="small-12 medium-8 cell">
                    <input type="text" required id="name" name="firstName" size="30" placeholder="Enter your first name">
                    </div>
                    </div>
                    <div class="grid-x">
                    <div class="small-12 medium-2 medium-offset-2 cell">
                    <label for="name">Last Name</label>
                    </div>
                    <div class="small-12 medium-8 cell">
                    <input type="text" required id="name" name="lastName" size="30" placeholder="Enter your last name">
                    </div>
                    </div>
                    <div class="grid-x">
                    <div class="small-12 medium-2 medium-offset-2 cell">
                    <label for="email">Email Address</label>
                    </div>
                    <div class="small-12 medium-8 cell">
                    <input type="email" required id="email" size="30" placeholder="Enter your Email">
                    </div>
                    </div>
                    <div class="grid-x">
                    <div class="small-12 medium-2 medium-offset-2 cell">
                    <label for="tel">Phone Number</label>
                    </div>
                    <div class="small-12 medium-8 cell">
                    <input type="tel" id="phone" size="30" placeholder="Enter your Phone Number">
                    </div>
                    </div>
                    <div class="grid-x">
                    <label class="small-12 medium-2 medium-offset-2 cell" for="description">Description</label>
                    <textarea class="small-12 medium-8 cell" name="description" id="description" placeholder="Please enter a description of the work you would like done" required cols="50" rows="8"></textarea>
                    </div>
                    <div class="grid-x hide">
                    	<div class="small-12 cell">
                        	<input type="street" id="street" size="30" placeholder="Enter your Address">
                    	</div>
                    </div>
                    <div class="grid-x">
                    <div class="small-12 cell">
                    <input id="submit" type="submit" value="Subscribe">
                    </div>
                    </div>
            </form>
</body>
</html>