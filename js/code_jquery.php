
<script type="text/javascript">

	$(".contenido").hover(function() {
		$(this).stop().animate({
			"opacity" : "0.5"
		}, "slow");
	}, function() {
		$(this).stop().animate({
			"opacity" : "1"
		}, "slow");
	});
	
	$(document).ready(function() {
		$('.slider').unslider({
			animation : 'fade',
			autoplay : true,
			arrows : false
		});
	});
	
	$(document).ready(function() {
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: function(item) {
					return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
				}
			}
		});
	});

	$(document).ready(function() {
		var nombre = document.location.pathname.match(/[^\/]+$/)[0];
		switch (nombre) {
		case "index.php":
			var v = $('.contenedor').children('div.contenido');
			$(v[0]).css("background-color","#8ecdd0");
			break;
		case "galeria.php":
			var v = $('.contenedor').children('div.contenido');
			$(v[1]).css("background-color","#8ecdd0");
			break;
		
		default:
			break;
		}

	});
	
</script>