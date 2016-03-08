var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
    urlArgs: "v=001",
	waitSeconds: 60,
	shim: {
		'bootstrap' : {
			deps : ['jquery']
		},
		'cart' : {
			deps : ['jquery']
		},
		'jq_ui' : {
			deps : ['jquery']
		},
		"noty" : {
			deps : ['jquery']
		},
		"owlcarousel" : {
			deps : ['jquery']
		},
		"ie10_viewreport" : {
			deps : ['bootstrap']
		},
		"mousewheel" : {
			deps : ['jquery']
		},
		"fancybox" : {
			deps : ['jquery']
		}
	},

	paths: {
		// LIBRARY
		jquery 			: ['//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min', dirTema+'/assets/js/lib/jquery.min'],
		bootstrap		: ['//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min', dirTema+'/assets/js/lib/bootstrap'],
		cart			: 'js/shop_cart',
		jq_ui			: 'js/jquery-ui',
		noty			: 'js/jquery.noty',
		owlcarousel		: dirTema+'/assets/js/lib/owl.carousel.min',
		ie10_viewreport	: dirTema+'/assets/js/lib/ie10-viewport-bug-workaround',
		fancybox		: dirTema+'/assets/js/lib/jquery.fancybox.pack',
		
		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		main	        : dirTema+'/assets/js/controller/default',
	}
});
require([
	'jquery',
	'router',
	'cart',
	'main'
], function($,router,cart,main){
	router.run();
	main.run();
	cart.run();
});