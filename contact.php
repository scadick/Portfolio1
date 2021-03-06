<?php
	require_once('admin/config.php');
	if(isset($_POST['name'])){
		//echo "yup";
		$direct = "thankyou.php";
		$fname = $_POST['firstName'];
		$lname = $_POST['lastName'];
		$email = $_POST['email'];
		$street = $_POST['street'];
		$message = $_POST['description'];
		$phone = $_POST['phone'];
		//echo $name;
		if($street === ""){
			//echo "send mail";
			$sendMail = submitMessage($direct, $fname, $lname, $email, $message, $phone);
		}/*else{
			echo "F off bot!";
		}*/
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Portfolio</title>
<link rel="stylesheet" href="css/foundation.css">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
    <div class="border">
    <header class="grid-x">
    <img id="headerImg" src="images/logo.svg" alt="Logo" class="small-12 medium-4 cell">
        <div class="grid-x">
            <div class="dropdown align-middle" class="grid-x">
            <button class="dropButton small-12 cell hide-for-medium">Menu</button>
            <ul id="mainNav" class="medium-horizontal menu">
                <li class="small-12 medium-2 cell"><a href="index.html">Home</a></li>
                <li class="small-12 medium-2 cell"><a href="media.html">Media</a></li>
                <li class="small-12 medium-2 cell"><a href="about.html">About</a></li>
                <li class="small-12 medium-2 cell"><a href="#" class="selected">Contact</a></li>
            </ul>
            </div>
        </div>
    </header>
	<section id="mainBody">
    <section id="mainContact" class="grid-x"> <!--start mainGallery-->
    	<h1 class="small-12 cell">Contact</h1>
        	<section id="contactArea" class="grid-x"><!--start contactArea-->
                <h2 class="hide">About Page</h2>
                <div class="grid-x">
                <p class="small-12 cell align-center" id="contactText">Have an idea that you would like me to do? Input your information below and I will get back to you as soon as I can.</p>
                </div> 
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
                    <input type="email" required id="email" name="email" size="30" placeholder="Enter your Email">
                    </div>
                    </div>
                    <div class="grid-x">
                    <div class="small-12 medium-2 medium-offset-2 cell">
                    <label for="tel">Phone Number</label>
                    </div>
                    <div class="small-12 medium-8 cell">
                    <input type="tel" id="phone" name="phone" size="30" placeholder="Enter your Phone Number">
                    </div>
                    </div>
                    <div class="grid-x">
                    <label class="small-12 medium-2 medium-offset-2 cell" for="description">Description</label>
                    <textarea class="small-12 medium-8 cell" name="description" id="description" placeholder="Please enter a description of the work you would like done" required cols="50" rows="8"></textarea>
                    </div>
                    <div class="grid-x hide">
                    	<div class="small-12 cell">
                        	<input type="street" name="street" id="street" size="30" placeholder="Enter your Address">
                    	</div>
                    </div>
                    <div class="grid-x">
                    <div class="small-12 cell">
                    <input id="submit" type="submit" name="submit" value="Submit">
                    </div>
                    </div>
            </form>
         <a id="btt" class="float-center"><img src="images/btt.jpg"></a>
    	</section>
        </section>
        </section>
    
<footer class="mainFooter">
	<div class="grid-x">
    	<img id="footerImg" src="images/logo.svg" alt="Logo" class="small-12 medium-4 cell">
    	<ul id="footerNav">
			<li class="small-12 medium-2 cell"><a href="index.html">Home</a></li>
			<li class="small-12 medium-2 cell"><a href="media.html">Media</a></li>
			<li class="small-12 medium-2 cell"><a href="about.html">About</a></li>
			<li class="small-12 medium-2 cell"><a href="#" class="selected">Contact</a></li>
    	</ul>
    </div>
     <section id="socialMediaCon">
            	<h2 class="hide">Social Media</h2>
                <ul id="iconNav" class="grid-x">
  					<li id="facebook">
                    <a href="https://www.facebook.com/Steven-Cadick-497925573939812/">
                    <img src="images/facebook.svg" alt="facebook icon" class="small-3cell">
                    </a>
                    </li>
  					<li id="youtube">
                    <a href="https://www.youtube.com/channel/UC_Hw2KTsqocbnrXGmH60d6g?view_as=subscriber">
                    <img src="images/youtube.svg" alt="youtube icon" class="small-3 cell">
                    </a>
                    </li>
                    <li id="instagram">
                    <a href="https://www.instagram.com/stevencadick/?hl=en">
                    <img src="images/instagram.svg" alt="youtube icon" class="small-6 medium-3 cell">
                    </a>
                    </li>
                    <li id="github">
                    <a href="https://github.com/scadick">
                    <img src="images/github.svg" alt="github icon" class="small-6 medium-3 cell">
                    </a>
                    </li>
				</ul>
            </section>
    <div id="copyright">
    	<p id="copyright">©2017-2018 Steven Cadick</p>
    </div>
</footer>
<script src="js/main.js"></script>
<script src="js/app.js"></script>
</body>
</div>
</html>