<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" dir="ltr" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" dir="ltr" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title><?php echo $title; ?></title>
	<meta name="robots" content="index, follow" />		
	<meta name="description" content="Desenvolupament web des de Castelló de la Plana. Webs per mòbil i adaptatius. Portfolio de Carles Jove." />
	<meta name="keywords" content="vasolechecongalletas les paraules clau no serveixen absolutament per res, que ho sapigueu" />

	<link rel="stylesheet" type="text/css" href="/assets/css/app.css" />
	<script type="text/javascript" src="/assets/js/vendor/custom.modernizr.js"></script>
	<link href="/favicon.ico" type="image/x-icon" rel="icon" />
	<link href="/favicon.ico" type="image/x-icon" rel="shortcut icon" />
</head>
<body class="">
	<header class="site-header">
		<h1>
			<a href="/"><?php echo $title; ?></a>
		</h1>
		<nav class="site-nav">
			<ul>
				<li><a href="/principis">Principis</a></li>
				<li><a href="/tarifes">Tarifes</a></li>
				<li><a href="http://carlus.cat/">Blog</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
	<?php $this->content(); ?>
	</main>
	
	<footer class="site-footer">
		<div id="contact">
			<h1>Contacta amb mi</h1>
	
			<a href="mailto:hola@carlus.cat">hola@carlus.cat</a>
			<a href="tel:0034644529970">644 529 970</a>
		</div>
		<div id="motto">
			<p>Igualtat entre persones. Desigualtat entre contiguts.</p>
		</div>
		<a href="https://github.com/carlesjove/a" class="to-a">Built with A</a>
	</footer>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	
	<!-- Collapsable navigation. Simple and elegant, isn't it? -->
	<script>
		var $filter = $('.site-header'),
			$nav = $('.site-nav'),
			shadow_class = 'with-shadow';
		
		if ( $filter.size() && $nav.size() )
		{
			// Set nav the JS way ;-)
			$nav.addClass('collapse').addClass('dark-nav');
			$filter.append('<a class="toggle-nav"><span></span></a>');
			var $nav_button = $('.toggle-nav');
			$filter.prepend($nav);
			
			// Menu icon state
			$nav_button.click(function() {
				$nav.slideToggle();
				if ( $nav_button.size() ) {
					if ( !$nav_button.hasClass('active') ) {
						$nav_button.addClass('active');
						addHeaderShadow();
					}
					else if ( $nav_button.hasClass('active') ) {
						$nav_button.removeClass('active');
					}
				}
			});
			
			// Shadow on scroll
			$(window).scroll(function ()
			{
				if ( ! $filter.hasClass(shadow_class) && $filter.offset().top > 0  ) {
					addHeaderShadow();
				}
				else if ( $filter.hasClass(shadow_class) &&  $filter.offset().top <= 0) {
					removeHeaderShadow();
				}
			});
		}
		
		function addHeaderShadow() {
			$filter.addClass(shadow_class);
		}
		
		function removeHeaderShadow() {
			$filter.removeClass(shadow_class);
		}
	</script>

	<script>
		/*******

			***	Anchor Slider by Cedric Dugas   ***
			*** Http://www.position-absolute.com ***
			
			Never have an anchor jumping your content, slide it.

			Don't forget to put an id to your anchor !
			You can use and modify this script for any project you want, but please leave this comment as credit.
			
		*****/
				
		$(document).ready(function() {
			$(".anchor").anchorAnimate();
		});

		jQuery.fn.anchorAnimate = function(settings) {

		 	settings = jQuery.extend({
				speed : 1100
			}, settings);	
			
			return this.each(function(){
				var caller = this
				$(caller).click(function (event) {	
					event.preventDefault()
					var locationHref = window.location.href
					var elementClick = $(caller).attr("href")
					
					var destination = $(elementClick).offset().top;
					$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
						window.location.hash = elementClick
					});
				  	return false;
				})
			})
		}
	</script>	
</body>
</html>