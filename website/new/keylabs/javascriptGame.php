<!DOCTYPE html>
<html lang="en">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>LAB 7 - Javascript</title>
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
    color: purple;
}

.wrap {
    position: relative;
    top: 250px;
    z-index: 2;
    width: 500px;
    height: 580px ;
    margin: 50px auto;
    padding: 20px;
    background: rgba(255,255,255, 0.7);
    border: 10px solid black;
    border-radius: 30px;
}

#hidden {
    display:none;
    position: relative;
    top: 250px;
    z-index: 2;
    width: 500px;
    height: 200px ;
    margin: 50px auto;
    padding: 20px;
    background: rgba(255,255,255, 0.7);
    border: 10px solid black;
    border-radius: 30px;
}

    #hidden2 {
    display:none;
    position: relative;
    top: 250px;
    z-index: 2;
    width: 500px;
    height: 230px;
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

    input[type=text] {
    position: relative;
    top: 60px;
    left: 60px;
    height: 25px;
    }

    input[type=submit]#submit {
    position: relative;
    top: 60px;
    left: 60px;
    background-color:rebeccapurple;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

    input[type=submit]#change {
    background-color:rgb(37, 104, 204);
    position: relative;
    top: 100px;
    left: 60px;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

    input[type=submit]#show {
    background-color:rgb(37, 104, 204);
    position: relative;
    top: 115px;
    left: 60px;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

    input[type=submit]#show2 {
    background-color:rgb(37, 104, 204);
    position: relative;
    top: 130px;
    left: 60px;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

    input[type=submit]#try {
    background-color:rgb(37, 104, 204);
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

#span1,#span2 {
    color: white;
}

#span3 {
    color: rgb(37, 104, 204);;
}

ul {
    list-style-type: none;
    margin-top: 230px;
    padding: 0;
    overflow: hidden;
    background: rgba(255,255,255, 0.7);
    border-radius: 10px;
}

li {
    float: left;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 15px 10px;
    text-decoration: none;
}

li a:hover {
    background-color: #e74c3c;
    color: white;
}

  </style>

</head>

<html>

<body>
	
	<div class="wrap">
            <span id="span1">
                <script>
                    var update = new Date(document.lastModified);
                        document.write("I updated this page on " + update);
                </script>
            </span>

                                    <br>
			<h1>Welcome!!! Lets Play a Guessing Game.</h1>
            <h1>How many Fingers am i holding? :)</h1>

                <input id="answer" type="text" placeholder="Please insert a number..." size="35"/>

                <input id="submit" type="submit" value="Submit!">
                                    <br>
                <input id="change" type="submit" onclick="randombackground()" value="Change Background">
                                    
                <input id="show" type="submit" onclick="showHidden()" value="Click Me!">
                                    
                <input id="show2" type="submit" onclick="showHidden2()" value="Click Me too!">

                <ul>
                        <li><a href="../../index.php">Go Back</a></li>
                        <li><a href="form.php">Form with PHP</a></li>
                        <li><a href="wantjavascript.php">Form with Javascript</a></li>
                        <li><a href="aboutme.php">About Me</a></li>
                </ul>

    </div>
    
    <div id="hidden">

        <input id="try" type="submit" onclick="getName()" value="Try Me!">

                                <br>

        <h1 onmouseover="mouseOver()" onmouseout="mouseOut()" id="write" ></h1>

    </div>
    
    <div id="hidden2">

        <input type="radio" name="code" onclick="showLanguages('html')"> HTML
                                
        <input type="radio" name="code" onclick="showLanguages('javascript')">JAVASCRIPT

                                <br>

        <pre id="result">

        </pre>
                                <br>
           <span id="span2">
             <script>
        //********************* Date Section lastmodified script *********************\\

                    var updated, now;  

                        updated = new Date(document.lastModified);

                        now = new Date();

                        var result = now.getTime() - updated.getTime();    
                            
                        var minutes = Math.round(result /(1000*60));

                        document.write("That would be "+ minutes + " minutes from now");

        //********************* Date Section lastmodified script *********************\\
                </script>
            </span>
                                <br>
                                <br>
            <span id="span3">   
                <script>
        //********************* Date Birthday script *********************\\
                    var now = new Date();
                    var yr = now.getFullYear();
                    var birthday = new Date(yr,11,21);
                    var time = birthday.getTime() - now.getTime(); 
                    millisecondsPerDay = 1000*60*60*24;
                    time = Math.round(time / millisecondsPerDay);
                    document.write ("My birthday is in "+ time +" days :)");
        //********************* Date Birthday script *********************\\
                </script>
            </span>


	</div>

	<div id="bg">

		<img id="image" src="https://media.giphy.com/media/xTkcEQACH24SMPxIQg/giphy.gif">

	</div>

    <script type="text/javascript">

        //********************* Guessing Game Script *********************\\
            document.getElementById("submit").onclick = function () {
                
                var x = Math.random ();
                
                x = 6*x;
                
                x = Math.floor(x);
                
                if (x == document.getElementById("answer").value) {
                
                        alert ("Awesome buddy you Won - That's correct!");
                
                } else { 
                
                        alert ("Hahaha wronnnng! My number was " + x + " - Try again!");
                } 
                
            } 
         //********************* Guessing Game Script *********************\\



         //********************* Random Images Script *********************\\
        function randombackground() {

            var random = Math.floor(Math.random() * 11) + 0;

            var images = ["https://media.giphy.com/media/idGw983D7CHrrXa2eO/giphy.gif",
                            "https://media.giphy.com/media/1n4FT4KRQkDvK0IO4X/giphy.gif",
                            "https://media.giphy.com/media/l0DAG3B1k4I6p3pg4/giphy.gif",
                            "https://media.giphy.com/media/mi6DsSSNKDbUY/giphy.gif",
                            "https://media.giphy.com/media/26BGLwK0ciNMY7BaU/giphy.gif",
                            "http://giphygifs.s3.amazonaws.com/media/kjjRGpezebjaw/giphy.gif",
                            "https://media.giphy.com/media/3OCIuYrW1QOfXL8zQz/giphy.gif",
                            "https://media.giphy.com/media/wKncAzOchpYZib3Tz4/giphy.gif",
                            "https://media.giphy.com/media/UVNJ2pOc8IKW42qP5w/giphy.gif",
                            "https://media.giphy.com/media/PmYFV3urYHA7y35cRQ/giphy.gif",
                            "https://media.giphy.com/media/l0He3o8pL9AebplFm/giphy.gif"];

            document.getElementById("image").src = images[random];

        }
        //********************* Random Images Script *********************\\



        //********************* Show Hidden division script *********************\\
        function showHidden() {

            var x = document.getElementById("hidden");

            if (x.style.display === "none"){
                x.style.display = "block";

            } else {
                x.style.display = "none";
            }
        }

        function showHidden2() {

            var x = document.getElementById("hidden2");

            if (x.style.display === "none"){
                x.style.display = "block";

            } else {
                x.style.display = "none";
            }
        }
        //********************* Show Hidden division script *********************\\



        //********************* Prompt section script *********************\\
        function getName() {

            var person = prompt("What's your name?");
            if (person != null) {
                document.getElementById("write").innerHTML =
                "Hello " + person + "! Welcome to my page - Hope you like it.";
            }
        }
        //********************* Prompt section script *********************\\



        //********************* Change text color script *********************\\
        function mouseOver() {

            document.getElementById("write").style.color = "white";
            
        }

        function mouseOut() {

            document.getElementById("write").style.color = "black";

        }
        //********************* Change text color script *********************\\



        //********************* Radio button for showing two languages script*********************\\

var html = `<h1>Welcome!!! Lets Play a Guessing Game.</h1>` ;

var javascript = 
`function getName() {
    var person = prompt("What's your name?");
    if (person != null) {
    document.getElementById("write").innerHTML =
    "Hello " + person + "! Welcome to my page -
    Hope you like it.";
    }
    }`;

        function showLanguages(lang) {

                if (lang == "html") {
                    document.getElementById("result").innerText = html;
                } else if (lang == "javascript") {
                    document.getElementById("result").innerText = javascript;
                } else {
                    document.getElementById("result").innerText = " ";
                }
            };
        //********************* Radio button for showing two languages script *********************\\

    </script>

</body>
</html>