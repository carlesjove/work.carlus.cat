/*
 * Responsive jQuery script skeleton
 */

// Vars
var viewportWidth 		= $(window).width(),
	viewportHeight 		= $(window).height(),
	breakpoint      	= 10,//1024,
	breakpointLarge     = 11, //1100,
	amazingList			= $('.amazing-image-list'),
	$container 			= $('#home'),
	$body 				= $('body'),
	amazingImgClass		= 'js-add',
	amazingImgArray		= ['carles-ull.jpg'];

function myResponsiveFunction() 
{
	// Recalculate on resize
	var viewportWidth 	= $(window).width(),
		viewportHeight 	= $(window).height(),
		isMobile 		= viewportWidth < breakpoint,
		isDesktop 		= viewportWidth >= breakpoint;
	
	// Mobile
	if ( isMobile ) 
	{
		// Stuff to be done to get everything back to original
		$('.amazing-image-list li:not(:first-of-type)').hide();
		$container.removeAttr('style');
		amazingList.removeAttr('style');
		
		// Quit script execution
		return false;
	}
	
	// Desktop
	if ( isDesktop ) {
		
		// Make the Amaaaaazing Image List
		if ( $('.'+amazingImgClass).length == 0 ) {
			for ( var i in amazingImgArray ) {
			    amazingList.append('<img class="' + amazingImgClass + '" src="img/' + amazingImgArray[ i ] + '" alt="">');
			}
			
			$('.'+amazingImgClass).wrap('<li><figure>');
		} else {
			$('.amazing-image-list li:not(:first-of-type)').show();
		}
		
		// Calc Amazing current width
		/*
		var amazingWidth = null;
		amazingList.each(function(i, img) {
			amazingWidth += $(this).width();
		});
		*/
				
		// Style it, for the sake of God
		$container.css({ 'position' : 'static' });
		amazingList.css({
			'top' : '6em',
			'left' : '50%',
		});
		$body.css({ 'overflow-x' : 'hidden' });
	}
}
	 
// Run on page load if viewport is big enough
if ( viewportWidth >= breakpoint ) {
	myResponsiveFunction();
}

// Run everytime the window is resized, after 50 milliseconds
// Timer by Zevan Rosser (http://zreference.com/). Source: http://jsfiddle.net/Zevan/c9UE5/5/
$(window).resize(function() {
    clearTimeout(this.id);
    this.id = setTimeout(myResponsiveFunction, 50);
});		