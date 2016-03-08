define(['jquery','owlcarousel','bootstrap','fancybox'], function($, owlCarousel)
{
	return new function(){
		var self = this;
		self.run = function(){
			//THUMB LIST
			$('.thumb-product').owlCarousel({
				itemsCustom : [
					[75, 2],
					[120, 3],
					[75, 4],
				],
				navigation : true,
				pagination: false,
				navigationText: false
			});

			$('.fancybox').fancybox({
				padding: 10,
				openEffect : 'elastic',
				openSpeed  : 150,
				closeEffect : 'elastic',
				closeSpeed  : 150
			});

			$('#resetPassword').on('shown.bs.modal', function () {
				$('input[name="recoveryEmail"]').focus()
			})
		};
	}
});