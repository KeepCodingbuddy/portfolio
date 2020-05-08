<!DOCTYPE html">
<html lang="en">
<head>
  <meta charset=utf-8" />
  <title>Report Reception</title>

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
<h2>Thank you! - Report well received :)</h2>

<?php
//===================== Data sent from (lab4.html) will be Stored into these variables =====================//

$when_it_happened = $how_long = $alien_description = $scared = $email 
= $firstname = $lastname = $how_many = $other = " "; //Which are empty initially

//===================== Data sent from lab4.html will be Stored into these variables =====================//


//===================== Function Script - Check input data =====================//

function check_data($data) {
  $data = trim($data);
  $data = htmlspecialchars($data);
  return $data;
}
//===================== Function Script - Check input data =====================//


//===================== Process Script =====================//

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

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

     //check other input
    $other = nl2br($_POST['other']);

    //check scared 
    $scared = $_POST['scared'];

    $name = $firstname . ' ' . $lastname;
  
}

//===================== Process Script =====================//

?>

  <?php

      //=====================Confirmation displayed in HTML form by PHP script=====================//
      echo '<div class="wrap">';
      
        echo '<h1> Thanks for submitting the form.</h1><br/>';
        echo 'You were abducted ' . $when_it_happened . ' days ago.' .'<br/>';
        echo 'You were gone for: ' . $how_long .' minutes.' . '<br />';
        echo 'Number of aliens: ' . $how_many . '<br/>';
        echo 'Describe them: ' . $alien_description . '<br/>';
        echo 'Were you scared? - Answer: ' . $scared . '<br/>';
        echo 'Anything else? : ' . $other . '<br/>';
        echo 'Your name is: ' . $name . '<br/>';
        echo 'Your email address is: ' . $email;

      echo '</div>';
    //=====================Confirmation displayed in HTML form by PHP script=====================//

  ?>

    <div id="bg">

      <img src="https://media.giphy.com/media/hsCZWemG7SrpWtKUdN/giphy.gif">

    </div>

</body>
</html>

