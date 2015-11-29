$.support.transition = false;

(function($) {

	$documentDirectory = '../wp-content/themes/genze/assets';

	$(document).ready(function() {
		$('.product-info-block').each(function(){
			var bgImg =$(this).data('bg-img');
			$(this).css({'background-image':'url('+bgImg+')'});
		});
		$('.color-circle').each(function(){
			var circleColor =$(this).data('filter-color');
			$(this).css({'background-color':circleColor, 'border':'2px solid '+circleColor});
			if(circleColor == 'white'){
				$(this).css({'border':'2px solid red'});
			}
		});
	});

});