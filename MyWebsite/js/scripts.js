
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		document.getElementById("to-top-btn").style.display = "block";
	} else {
		document.getElementById("to-top-btn").style.display = "none";
	}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0; // For Safari
	document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


//Animates Buttons
$(document).ready(function (){

    $(".home-btn").click(function (){
        $('html, body').animate({
            scrollTop: $("#page-top").offset().top
        }, 1000);

        return false;
    });

    $(".about-me-btn").click(function (){
        $('html, body').animate({
            scrollTop: $("#about-me").offset().top
        }, 1000);

        return false;
    });

    $(".projects-btn").click(function (){
        $('html, body').animate({
            scrollTop: $("#projects").offset().top
        }, 1000);

        return false;
    });

    $(".contact-me-btn").click(function (){
        $('html, body').animate({
            scrollTop: $("#contact-me").offset().top
        }, 1000);

        return false;
    });
});
