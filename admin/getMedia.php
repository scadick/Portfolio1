<?php
    // Turn on error reporting
	//ini_set('display_errors', 1);
	//error_reporting(E_ALL);

	//Connect to database
	include('connect.php');

	//if(isset($_GET['id'])){
		//1. Return a single media
		//$id = $_GET['id'];
		//$querySingle = "SELECT * FROM videos_name AND video_description WHERE movies_id = {$id}";
		//$getMedia = mysqli_query($link, $querySingle);
	//}
	if{
		//4. Returns all media
		$mediaQuery = "SELECT video_name, video_description FROM videos";

		$getMedia = mysqli_query($link, $mediaQuery);
		//echo $getMedia;
	}

	$grpResult = "";

	echo "[";

	while($medResult = mysqli_fetch_assoc($getMedia)) {
		$jsonResult = json_encode($medResult);
		$grpResult .= $jsonResult.","; 
	}

	echo substr($grpResult, 0, -1);

	echo "]";
	
	mysqli_close($link);
 ?>