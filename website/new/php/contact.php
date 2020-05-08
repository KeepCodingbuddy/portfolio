<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Aliens Abducted Me - Report an Abduction</title>
<style type="text/css" media="screen">

@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

	body {
		overflow-x: hidden;
		display: block;
		margin: 0;
		padding: 0;
		font-family: 'Roboto', sans-serif;
	}

   .wrap {
	   position: relative;
	   top: 450px;
	   z-index: 2;
	   width: 450px;
	   margin: 50px auto;
	   padding: 20px;
	   background: rgba(255,255,255, 0.7);
	   border: 10px solid #fff;
	   border-radius: 30px;
	   color: #E6E9F2;
	   height: 200px;
   }

   #bg {
	   position: fixed;
	   top: -50%;
	   left: -50%;
	   width: 200%;
	   height: 200%;
	   background: #e74c3c;
   }

</style>

</head>

<body>

<?php

//===================== Function Script - Check input data =====================//

function check_data($data) {
  $data = trim($data);
  $data = htmlspecialchars($data);
  return $data;
}

//===================== Function Script - Check input data =====================//


//===================== Process Script =====================//

if (isset($_POST['submit'])) {

  //check firstname input
  $name = check_data($_POST['name']);

  //check email input
  $email = check_data($_POST['email']);

  //Check contact message
  $msg= check_data($_POST['message']);


//=====================Confirmation displayed in HTML form by PHP script=====================//

    echo '<div class="wrap">';
    
		echo '<h1> Thank you for your message '.$name. '!</h1><br/>';
		
		echo '<h2>I will get back to you pretty soon!! </h2>';
    
    echo '</div>';

//=====================Confirmation displayed in HTML form by PHP script=====================//

 $method = $_SERVER['REQUEST_METHOD'];
 $now = date('D, d M Y -- g:i a');

// //===================== Write input into a txt file=====================//

$file = fopen("contact.txt", "a") or die("file not open"); //open text file for appending

$message = $msg. "\n"
		   .$method. " , received " . $now . "\n"
		   ."**********************************************" ."\n";

fwrite($file, $message) or die("Data not written"); //Write message to file

fclose($file); //close file

//===================== Write input into a txt file=====================//


}
//===================== Process Script =====================//
?>

<div id="bg">

</div>
</body>

</html>
