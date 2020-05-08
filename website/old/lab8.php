<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Aliens Abducted Me - Report an Abduction</title>
<script type="text/javascript" src="JScript.js"></script>
<style type="text/css" media="screen">

@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

body {
	overflow-x: hidden;
	display: block;
	margin: 0;
	padding: 0;
	font-family: 'Roboto', sans-serif;
}

h1 {
	text-align: center;
	color: white;
}

.wrap {
	position: relative;
	top: 250px;
	z-index: 2;
	width: 520px;
	height: 470px;
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

label {
	display: inline-block;
	width: 200px;
	text-align: right;
	font-size: 15px;
}​

</style>

</head>

<body>

<div class="wrap">

	<form name="form" method="post" action="lab8process.php">

		<h1>Share your story of alien abduction</h1>

		<label for="firstname">First name:</label>
		<input type="text" id="firstname" name="firstname" required><span> *Required</span>
									<br>
		<label for="lastname">Last name:</label>
		<input type="text" id="lastname" name="lastname" required> <span> *Required</span>
									<br>
		<label for="email">What is your email address?</label>
		<input type="text" id="email" name="email"><span> *Required</span>
									<br>
		<label for="whenithappened">When did it happen?</label>
		<input type="number" id="whenithappened" name="whenithappened" min="1"  required><span> *Required</span>
									<br>
		<label for="howlong">How long were you gone?</label>
		<input type="number" id="howlong" name="howlong" min="1" required> <span> *Required</span>
									<br>
		<label for="howmany">How many did you see?</label>
		<input type="number" id="howmany" name="howmany" min="1"  required> <span> *Required</span>
									<br>
		<label for="aliendescription">Describe them:</label>
		<input type="text" id="aliendescription" name="aliendescription" size="32" required><span> *Required</span>
									<br>
									<br>
		<label for="scared">Were you scared?</label>
		Yes <input id="scared" name="scared" type="radio" value="yes" required>
		No <input id="scared" name="scared" type="radio" value="no" required> <span> *Required</span>
									<br>
									<br>
									<br>
		<input id="report" type="submit" value="Report Abduction" name="submit" onclick=" return checkEmail(document.form.email)">
		<input type="reset" value="Reset">
		<a href="../index.php">Go back Home</a>

	</form>
									<br>
									<br>
									<br>

			            /* SETINTERVAL for background change*/
	<input type="submit" onclick="interval = setInterval(randomBackground, 5000);" value="Change Background">
	<input id="stop" type="submit" onclick="stopInterval()" value="Stop Changing">

</div>

  <div id="bg">

	  <img id="image" src="https://media.giphy.com/media/hsCZWemG7SrpWtKUdN/giphy.gif">

  </div>


</body>
</html>