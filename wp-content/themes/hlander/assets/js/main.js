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

    // $('.banner-image').each(function(){
    //     var $this = $(this);
    //     var imageUrl = $this.data('backgroundImg');
    //     $this.css('background-image', 'url(' + imageUrl + ')');
    // });

    // setTimeout(function(){ 
    //     // Set width of search bar in nav on loading page
    //     var topNavWidth = $('.hl-top-nav').width();
    //     var logoWidth = $(".hl-left-container").width();
    //     var iconWidth = $(".hl-right-container").width();
    //     var buttonWidth = $(".hl-search-container .hl-utility-button").width();
    //     $(".hl-search-container .hl-utility-bar input").css("width", topNavWidth - logoWidth - buttonWidth - iconWidth - 100);
    // }, 10);
    // /*
    // * Set side navigation height
    // */
    // var $container = $('#hl-main-content');
    // var headerHeight = $('#hl-header').height();
    // var containerHeight = inViewport($container);
    // var scrollDistance = $('body').scrollTop();
    // if(scrollDistance<50){// console.log(containerHeight-headerHeight+"_"+inViewport($('body'))+'_'+scrollDistance)
    //     $('.side-nav-wrapper').height(containerHeight-headerHeight-16+50-scrollDistance);
    // }else{
    //     $('.side-nav-wrapper').height(containerHeight-headerHeight-16);
    // }


  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  }); 

});

// function inViewport($el) {
//     var elH = $el.outerHeight(),
//         H   = $(window).height(),
//         r   = $el[0].getBoundingClientRect(), t=r.top, b=r.bottom;
//     return Math.max(0, t>0? Math.min(elH, H-t) : (b<H?b:H));
// }

// $(window).on( 'scroll', function(){
//     var $container = $('#hl-main-content');
//     var headerHeight = $('#hl-header').height();
//     var containerHeight = inViewport($container);
//     var scrollDistance = $('body').scrollTop();
//     if(scrollDistance<50){
//     // console.log(containerHeight-headerHeight+"_"+inViewport($('body'))+'_'+scrollDistance)
//         $('.side-nav-wrapper').height(containerHeight-headerHeight-16+50-scrollDistance);
//     }else{
//         $('.side-nav-wrapper').height(containerHeight-headerHeight-16);
//     }

// });
