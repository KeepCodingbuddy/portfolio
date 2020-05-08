/* Check validity for email script - Most important */
function checkEmail(email){

	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	if(email.value.match(mailformat)){
		document.form.email.focus();
		return true;

	} else {
		alert("Check your email format buddy!");
		document.form.email.focus();
		return false;
	}

}
/* Check validity for email script - Most important */


/* Set interval to change background and stop it script */

function randomBackground() {

    var random = Math.floor(Math.random() * 11) + 0;

    var images = ["https://media.giphy.com/media/NDJWGU4n74di0/giphy.gif",
                    "https://media.giphy.com/media/TlK63EEk7IznsP18dk4/giphy.gif",
                    "https://media.giphy.com/media/gpkstDZ9FGGXK/giphy.gif",
                    "https://media.giphy.com/media/RDR5q3gc0Sk9O/giphy.gif",
                    "https://media.giphy.com/media/7FyYDjXlgDZ6M/giphy.gif",
                    "https://media.giphy.com/media/LndB6H5wjQPomk2njp/giphy.gif",
                    "https://media.giphy.com/media/ZiDYl8BcAGaFW/giphy.gif",
                    "https://media.giphy.com/media/JoIcxJVEBTe1NBj9hR/giphy.gif",
                    "https://media.giphy.com/media/l3vRd7MSzBC4H8FyM/giphy.gif",
                    "https://media.giphy.com/media/l3fzWT8N37MoYB5QY/giphy.gif",
                    "https://media.giphy.com/media/1Y7NyWDxcYDdSKS0cB/giphy.gif"];

    document.getElementById("image").src = images[random];

}

function stopInterval() {

    clearInterval(interval);
}

/* Set interval to change background and stop it script */