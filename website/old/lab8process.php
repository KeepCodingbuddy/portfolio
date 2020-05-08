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
	   top: 250px;
	   z-index: 2;
	   width: 500px;
	   margin: 50px auto;
	   padding: 20px;
	   background: rgba(255,255,255, 0.7);
	   border: 10px solid black;
	   border-radius: 30px;
	   color: black;
   }

   #bg {
	   position: fixed;
	   top: -50%;
	   left: -50%;
	   width: 200%;
	   height: 200%;
   }

   #bg img {
	   position: absolute;
	  top: 0;
	  left: 0;
	  right: 0;
	  bottom: 0;
	  margin: auto;
	  min-width: 50%;
	  min-height: 50%;
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
  $firstname = check_data($_POST['firstname']);

  //check lastname input
  $lastname = check_data($_POST['lastname']);

  //check email input
  $email = check_data($_POST['email']);

  //Check description input
  $alien_description = check_data($_POST['aliendescription']);

  //check howmany input
  $how_many = check_data($_POST['howmany']);

  //check howlong input
  $how_long = check_data($_POST['howlong']);

  //check when it happened input
  $when_it_happened = check_data($_POST['whenithappened']);

  //check scared
  $scared = $_POST['scared'];

  $name = $firstname . ' ' . $lastname;

//=====================Confirmation displayed in HTML form by PHP script=====================//

      echo '<div class="wrap">';
      
        echo '<h1> Thanks for submitting the form.</h1><br/>';
        echo 'You were abducted ' . $when_it_happened . ' days ago.' .'<br/>';
        echo 'You were gone for: ' . $how_long .' minutes.' . '<br />';
        echo 'Number of aliens: ' . $how_many . '<br/>';
        echo 'Describe them: ' . $alien_description . '<br/>';
        echo 'Were you scared? - Answer: ' . $scared . '<br/>';
        echo 'Your name is: ' . $name . '<br/>';

      echo '</div>';

//=====================Confirmation displayed in HTML form by PHP script=====================//

$method = $_SERVER['REQUEST_METHOD'];
$now = date('D, d M Y -- g:i a');

//===================== Write input into a txt file=====================//

$file = fopen("log.txt", "a") or die("file not open"); //open text file for appending

$message = "You were abducted " . $when_it_happened. " days ago." . "\n"
		   ."You were gone for: " . $how_long . " minutes." . "\n"
		   ."Number of aliens: " . $how_many . "\n"
		   ."Describe them: " . $alien_description . "\n"
		   ."Were you scared? - Answer: " . $scared . "\n"
		   ."Your name is: " . $name . "\n"
		   .$method . " , received " . $now . "\n"
		   ."**********************************************" ."\n";

fwrite($file, $message) or die("Data not written"); //Write message to file

fclose($file); //close file

//===================== Write input into a txt file=====================//


}
//===================== Process Script =====================//
?>

<div id="bg">

	<img src="https://media.giphy.com/media/hsCZWemG7SrpWtKUdN/giphy.gif">

</div>
</body>

</html>
