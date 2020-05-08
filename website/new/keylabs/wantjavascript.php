<!DOCTYPE HTML>
<html>
<head>

	<title>JavaScript Checking</title>

	<script type="text/javascript" src="validateScript.js"></script>
	<meta charset="UTF-8">
	<meta name="author" content="Ibrahim">
	<meta name="description" content="Student to Check form for desired inputs">
	<meta name="keywords" content="html form,css,universe quiz,javascript checking">
	
	<style>
	li	{margin-bottom:7px}
	input, select, textarea	{color:#00F;}
	body	{color:#3cdce7; background:#e74c3c;}
	ol	{color: #fff;}
	ul li	{margin-bottom:0px; color:#00a;}
	p i	{color: #008}

	a {color: #fff;}

	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}

	li {
		float:inherit;
	}

	li a {
		display: block;
		color: #3cdce7;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	li a:hover {
		background-color: #3cdce7;
		color: white;
	}
	</style>

</head>

<body>

<h2>Where do we come from?</h2>

<p>All these form elements (except the Pluto checkbox) must be filled out. I <i>(Were Ibrahim Thera)</i> have added JavaScript code to check that this has been done. </p>

													<hr>

<form name="UniverseForm" action="https://osiris.ubishops.ca/jensen/echo.php" method="GET" onsubmit="return validateForm(this)">

<ol>

	<li>Your name <input type="text" name="confused_philosopher" placeholder="Enter name..." onChange="document.cookie='week11name='+this.value"></li>

	<li>Your email address  <input type="text" name="address" placeholder="Enter email..."></li>

	<li>Your postal code &nbsp; &nbsp; <input type="text" name="postal" placeholder="Canada post format..."></li>

	<li>Where did the universe come from?
	<blockquote> Here follow some suggestions from various mythologies, religions, scientists, and in particular JRR Tolkien and Stephen Hawking. <em>(You can add or subtract options, it will be your page)</em>
	</blockquote>
	<select name="origin" >
		<option>(no opinion is not an option)</option>
		<option value="Raven">Raven beat the darkness with his wings</option>
		<option value="Iluvitar">The Song of Il&uacute;vitar</option>
		<option value="BigBang">The Big Bang</option>
		<option value="Jotun">The warm armpit of a Jotun</option>
		<option value="Nothingness">Ex Nihil summa est</option>
		<option value="always">It just always was there</option>
		<option value="Hawking">It's the ultimate free lunch</option>
	</select>
	</li>

	<li>
	What do you think the universe is made of?: <em>
	(Select  at least one)</em>

		<ul>
			<li><input type="checkbox" name="composition[]" value="earth air fire water"> Earth, air, fire and water</li>
			<li><input type="checkbox" name="composition[]" value="ordinary matter"> Bayronic matter</li>
			<li><input type="checkbox" name="composition[]" value="Dark matter"> Dark matter</li>
			<li><input type="checkbox" name="composition[]" value="Dark energy"> Dark energy</li>
			<li><input type="checkbox" name="composition[]" value="Radiation"> Radiation</li>
			<li><input type="checkbox" name="composition[]" value="Spirit"> Spirit</li>
			<li><input type="checkbox" name="composition[]" value="slugs"> Slugs and snails and puppydog tails</li>
			<li><input type="checkbox" name="composition[]" value="stars"> Stars, planets, comets and dust</li>
			<li><input type="checkbox" name="composition[]" value="black holes"> Black holes and white holes</li>
		</ul>

	</li>

	<li>
	How many planets are there? (a number please)
		<input type ="text" name="howmany">	
	</li>

	<li>
	Is Pluto one of them? <input type="checkbox" name="Pluto"> <em>You are free to check or not check this box</em>
	</li>

	<li>
	The colour of Mars is: 
		<label for=r>Red </label><input type=radio name=Mars value="red" id=r> &nbsp; &nbsp;
		<label for=y>Yellow </label><input type=radio name=Mars value="yellow" id=y> &nbsp; &nbsp;
		<label for=g>Green </label><input type=radio name=Mars value="green" id=g> &nbsp; &nbsp;
		<label for=b>Blue </label><input type=radio name=Mars value="blue" id=b> &nbsp; &nbsp;
		<label for=p>Purple </label><input type=radio name=Mars value="purple" id=p>
	</li>

	<li>
	Your approximation of the value of &pi;
	<input name="pi"> (the ratio of circumference to diameter)<br>
	<em>A number with a decimal point is required</em>
	</li>

	<li>
		<input type=submit>
		<input type=reset>
	</li>

</ol>

</form>

<!-- Go to <a href="../../index.html">My Homepage</a>, and see your name now there. -->

<ul>
		<li><a href="../../index.php">Go Back</a></li>
		<li><a href="javascriptGame.php">Javascript Game</a></li>
		<li><a href="aboutme.php">About Me</a></li>
		<li><a href="form.php">Form with PHP</a></li>
</ul>

</body>
</html>


