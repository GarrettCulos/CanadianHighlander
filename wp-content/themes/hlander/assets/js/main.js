$.support.transition = false;

window.onresize = function(event) {
    var windowHeight = $(window).height();
    var windowWidth = $(window).width();

    // Set width of search bar on resizing of the window.
    var topNavWidth = $('.hl-top-nav').width();
    var logoWidth = $(".hl-left-container").width();
    var iconWidth = $(".hl-right-container").width();
    var buttonWidth = $(".hl-search-container .hl-utility-button").width();

    $('.hl-search-container .hl-utility-bar input').css("width", topNavWidth - logoWidth - buttonWidth - iconWidth - 100);

	// $('.carousel-inner img').css({"width" : windowWidth , "height" : windowWidth*});

};

$(document).ready(function() {
	/*
     * Replace all SVG images with inline SVG
     * Allows the use of fill/stroke to customize
     * SVG colors
     */
    $('img.svg').each(function(){
        var $img = $(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        $.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = $(data).find('svg');

            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

	});

    setTimeout(function(){ 
        // Set width of search bar in nav on loading page
        var topNavWidth = $('.hl-top-nav').width();
        var logoWidth = $(".hl-left-container").width();
        var iconWidth = $(".hl-right-container").width();
        var buttonWidth = $(".hl-search-container .hl-utility-button").width();
        $(".hl-search-container .hl-utility-bar input").css("width", topNavWidth - logoWidth - buttonWidth - iconWidth - 100);
    }, 10);

});