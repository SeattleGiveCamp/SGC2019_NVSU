//jQuery(window).load(function() {
jQuery(document).ready(function() {
    /**
     * Slider
     */
    jQuery('#slidebox').flexslider({
        animation: "fade",
        directionNav: true,
        controlNav: false,
        keyboard: true
    });
    
    /* Navigation */

	jQuery('#submenu ul.sfmenu').superfish({ 
		delay:       500,								// 0.1 second delay on mouseout 
		animation:   { opacity:'show',height:'show'},	// fade-in and slide-down animation 
		dropShadows: true								// disable drop shadows 
	});	  
    
    jQuery('#topmenu').mobileMenu({
			prependTo:'.mobilenavi'
			});

    /* for get involved page */
    jQuery('.page-id-16 .clickvolunteer').click( function(e) {e.preventDefault(); console.log('clickvol'); jQuery('#volunteer').toggle(); jQuery('.volunteer a').click(); });
    jQuery('.page-id-16 .clickdonate').click( function(e) {e.preventDefault(); console.log('clickdon'); jQuery('#donation').toggle(); jQuery('.donation a').click(); });


});

// scrolls to page anchors
jQuery(function() {
    jQuery('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                jQuery('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});
