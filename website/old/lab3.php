<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">

	body {

		height: 100%;
		width: 100%;
		margin: 0 auto;

	}
		
		.header {
			width: 100%;
			height: 300px;
			background-color: #052C52;
			background-image: url(https://www.askideas.com/media/13/Welcome-Glad-Youre-Here.jpg);
			background-repeat: no-repeat;
			background-size: 100% 100%;
			margin: 0 auto;

		}

		.content {

			width: 100%;
			height:1000px;
			background-color: #052C52;
			background-image: url(https://media.giphy.com/media/GKbzFgxrlgKQ/giphy.gif);
			background-repeat: no-repeat;
			background-size: 100% 100%;
			margin: 0 auto;
		}
		
		/* ----- BUTTONS ----- */

		.content .buttons {

			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}

		.btn:link,
		.btn:visited {
		    display: inline-block;
		    padding: 10px 30px;
		    font-weight: 300;
		    text-decoration: none;
		    border-radius: 200px;
		    transition: background-color 0.5s, border 0.5s, color 0.5s;
		}

		.btn-full:link,
		.btn-full:visited {
		    background-color: #001E36;
		    border: 1px solid #001E36;
		    color: #fff;
		    margin-right: 15px;
		}

		.btn-ghost:link,
		.btn-ghost:visited {
		    border: 1px solid #001E36;
		    color: #cf6d17;
		}

		.btn:hover,
		.btn:active {
		    background-color: #cf6d17;
		}

		.btn-full:hover,
		.btn-full:active {
		    border: 1px solid #e67e22;
		}

		.btn-ghost:hover,
		.btn-ghost:active {
		    border: 1px solid #e67e22;
		    color: #fff;
		}

		#btn1 {
			display: inline-block;
			margin-right: 20px;
		}

		/* ----- BUTTONS ----- */
		strong {

			color: white;
		}
		

	</style>
</head>
<body>

	<div class="header"></div>
	<div class="content">
		 <strong>
			<script>    var m = /week11name\=([^\;]+)/i.exec(document.cookie)
			if (m) document.write("Welcome back "+m[1]+"<br>")</script>
			</script>
		</strong> 
		<div class="buttons">

				<a class="btn btn-ghost" id="btn1" href="lab1.php" >My Old Labs</a>
				<a class="btn btn-full" id="btn2" href="../index.php">My Final Project</a>	

		</div>

	</div>

</body>
</html>






































