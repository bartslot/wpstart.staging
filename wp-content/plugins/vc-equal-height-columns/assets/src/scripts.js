window.onload = function() {
    if (window.jQuery) {  
		jQuery('[data-equal-height-columns="yes"]').each(function(){
			var columns = jQuery(this).children('.wpb_column');
			columns.matchHeight();
		});		
    } 
}