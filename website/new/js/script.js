$(document).ready(function () {


// ===================== IMAGE SLIDER SECTION WITH TYPED CHARACTERS - FUNCTION ===================== \\
	$('#slides').superslides({

		animation: 'fade',
		play: 5000,
		pagination: false

	});

	var typed = new Typed(".typed", {

		strings: ["Computer", "Science", "Student.", "Soon - Software Engineer."],
		typeSpeed: 80,
		loop: true,
		startDelay: 2000,
		showCursor: false

	});
// ===================== IMAGE SLIDER SECTION WITH TYPED CHARACTERS - FUNCTION end===================== \\


// ===================== SKILLS SECTION ITEMS WITH CAROUSEL ===================== \\
	$('.owl-carousel').owlCarousel({
	    loop:true,
	    items: 4,
	    responsive:{
	        0:{
	            items:1
	        },
	        480:{
	            items:2
	        },
	        768:{
	            items:3
	        },
	        938:{
	            items:4
	        }
	    }
	});
// ===================== SKILLS SECTION ITEMS WITH CAROUSEL end===================== \\


// ===================== Function for proficiency animation on scroll to skills section ===================== \\
	var skillsTopOffset = $(".skillsSection").offset().top;//capture top position of the skills section

	$(window).scroll(function() {

		console.log(window.pageYOffset);

		if(window.pageYOffset > skillsTopOffset - $(window).height() + 200) {//when we reach this postion the animation below happens with easyPieChart

				$('.chart').easyPieChart({
		            easing: 'easeInOut',
		            barColor: '#fff',
		            trackColor: false,
		            scaleColor: false,
		            lineWidth: 4,
		            size: 152,
		            onStep: function(from, to, percent) {
		            	$(this.el).find('.percent').text(Math.round(percent));
		            }
		        });

		}
	});
// ===================== Function for proficiency animation on scroll to skills section end===================== \\


// ===================== Function for the sticky menu bar on scroll ===================== \\

	const nav = $("#navigation");
	const navTop = nav.offset().top;//Capture top postion of the navigation menu

	function stickyNavigation() {

		var body = $("body");

		if($(window).scrollTop() >= navTop) { //when we reached this position we perform the class styles below

			body.addClass("fixedNav");
			body.css("padding-top", nav.outerHeight() + "px");

		} else {
			body.removeClass("fixedNav");
			body.css("padding-top", 0);
		}
	}

	$(window).on("scroll",stickyNavigation);


					// ===================== Function for scrolling slowly ===================== \\

					$("#navigation li a").click(function(e){

						e.preventDefault();

						var targetElement = $(this).attr("href");
						var targetPosition = $(targetElement).offset().top;//capture the top positon of the element we clicked on

						//We scroll slowy to the captured position when we click on the link using jquery animate
						$("html, body").animate({scrollTop: targetPosition - 50}, "slow");
					});
					// ===================== Function for scrolling slowly end===================== \\

	
// ===================== Function for the sticky menu bar on scroll end===================== \\

// ===================== Function for contact me form ===================== \\

  function registerForm() {

    var trigger = $('.contactbox-trigger'),
	  container = $('.contactbox-wrapper');
	  
    $('<div class="body-overlay"></div>').prependTo(container);

    trigger.on('click', function (e) {

      e.preventDefault();
      container.addClass('is-visible');
    });

    $('.body-overlay').on('click', function () {

      container.removeClass('is-visible');
    });

  }
  registerForm();

});

// ===================== Function for contact me form  end===================== \\


//================================= Validation Function =================================\\

function contactForm_validate(form){

    //contains form errors
    var errors = [];
    //contains form errors


    //Check validity for name
    if (form.name.value == "") {

        errors.push("1. Name is empty! - Please type your name.");

    }
    //Check validity for name


    //Check validity for email  
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(!form.email.value.match(mailformat)){
       
        errors.push("2. Please check your email format!");

    } 
    //Check validity for email

	//Check validity for textarea/message

	if (form.message.value == "") {

        errors.push("3. Message is empty! - Please type something.");

    }

	//Check validity for textarea/message

    //display error messages
    if (errors.length > 0) {

        var msg = "ERRORS:\n\n";

        for(var i=0; i < errors.length; i++){

            msg+=errors[i] + "\n";
        }

        alert(msg);

        return false;
    }
    //display error messages
    
}

//================================= Validation Function =================================\\















































