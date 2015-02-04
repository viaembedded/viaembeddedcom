jQuery(document).ready(function ($) {

    var slideDOM = "#slides";

    if ( $(slideDOM + " img").length > 1 ) {

        $("#slides").slidesjs({
	    width: 400,
	    height: 275,
	    navigation: {
	        active: false
	    },
	    pagination: {
	        active: false
	    },
	    play: {
	        active: false,
                effect: "slide",
	        interval: 5000,
	        auto: true,
	        swap: true,
	        pauseOnHover: true,
	        restartDelay: 2500
	    }
        });
    } else {
        $(slideDOM).show();
    };
});
