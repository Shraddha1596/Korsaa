jQuery( document ).ready(function() {

	jQuery( ".navigation-top" ).addClass( "site-navigation-fixed" );
	
	jQuery(".business-kontakt-btn button, .home .main_header a, .home .kontakt-div button, .page-id-6  .about-kontakt-btn button").click(function() {
		jQuery('html,body').animate({
			scrollTop: jQuery("#wpforms-form-180").offset().top},
			'slow');
	});
});