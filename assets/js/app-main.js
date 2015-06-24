var dirTema = document.getElementsByTagName('link')[1].getAttribute('href');

require.config({
	baseUrl: '/',
	shim: {
		'jq_ui' : {
			deps : ['jquery'],
		},
		'bootstrap' : {
			deps : ['jquery'],
		},
		'camera' : {
			deps : ['jquery'],
		},
		'dcmegamenu' : {
			deps : ['jquery'],
		},
		'easing' : {
			deps : ['jquery'],
		},
		'hover' : {
			deps : ['jquery'],
		},
		'hoverintent' : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		}
	},
    "waitSeconds" : 20,
    urlArgs: "v=0012",

	paths: {
		// LIBRARY
		jquery          : dirTema+'assets/js/lib/jquery-1.8.2.min',
		bootstrap       : dirTema+'assets/js/lib/bootstrap.min',
		camera          : dirTema+'assets/js/lib/camera',
		mediaqueries    : dirTema+'assets/js/lib/css3-mediaqueries',
		hover           : dirTema+'assets/js/lib/jquery-hover-effect',
		dcmegamenu      : dirTema+'assets/js/lib/jquery.dcmegamenu.1.3.3',
		easing          : dirTema+'assets/js/lib/jquery.easing.1.3',
		hoverintent     : dirTema+'assets/js/lib/jquery.hoverIntent.minified',
		jcarousel		: dirTema+'assets/js/lib/jquery.jcarousel.min',
		jqzoom          : dirTema+'assets/js/lib/jquery.jqzoom-core',
		prettyPhoto     : dirTema+'assets/js/lib/jquery.prettyPhoto',
		quovolver		: dirTema+'assets/js/lib/jquery.quovolver',
		tipsy           : dirTema+'assets/js/lib/jquery.tipsy',
		modernizr       : dirTema+'assets/js/lib/modernizr-1.7.min',
		organictabs     : dirTema+'assets/js/lib/organictabs.jquery',
		// productview     : dirTema+'assets/js/lib/productview',

		// MAIN LIBRARY
		router          : 'js/router',
		jq_ui			: 'js/jquery-ui',
		noty			: 'js/jquery.noty',
		cart          	: 'js/shop_cart',

		// CONTROLLER
		home            : dirTema+'assets/js/pages/home',
		// member          : dirTema+'assets/js/pages/member',
		main            : dirTema+'assets/js/pages/default',
		produk          : dirTema+'assets/js/pages/produk',
	}
});
require([
	'router',
	'main',
	'cart'
], function(router,main,cart)
{
	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// MEMBER
	// router.define('member/*', 'member@run');

	// PRODUK
	router.define('produk/*', 'produk@run');
	
	router.run();
	main.run();
	cart.run();
});