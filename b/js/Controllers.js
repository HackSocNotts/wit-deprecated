angular.module('Controllers', []).controller('MainController', function($scope, $window, $route) {

	$scope.shrink = false;
	$scope.padding = false;

	(function(){
		$('.navbar-collapse ul li a').click(function() {
			$('.navbar-toggle:visible').click();
		});
	})();

	angular.element($window).bind("resize",function(e){
		$scope.$broadcast('$resize');
		$scope.$apply(function(){
			$scope.navbar(e);
		});
	});

	$scope.$on('$routeChangeSuccess', function(e) {
		$scope.navbar();
	});

	angular.element($window).bind("scroll", function(e) {
		$scope.$broadcast('$scroll', {sx: e.view.scrollX, sy: e.view.scrollY});
		$scope.$apply(function(){
			$scope.navbar(e);
		});
	});

	$scope.navbar = function(e){
		var e = e == undefined ? {} : e;
		e.view = e.view == undefined ? angular.element($window)[0] : e.view;
		$scope.padding = $route.current.loadedTemplateUrl != "views/home.html";
		$scope.shrink = (($scope.padding || e.view.scrollY>=e.view.innerHeight-100) && $(window).width() >= 768);
	};

}).controller('HomeController', function($scope) {

	$scope.$on('$routeChangeSuccess', function() {
		$scope.fit();
		$('.fullimg').load(function(){
			$scope.fit();
		});
		if(!$scope.loaded){
			$scope.owl = $(".owl-carousel");
			$scope.owl.owlCarousel({
				center: true,
				items:1.5,
				loop:false,
				margin:70,
				dots: true,
				onInitialized: $scope.dots,
				onResized: $scope.dots
			});
			$scope.loaded = true;
		}
	});

	$scope.$on('$resize', function() {
		$scope.fit();
	});

	$scope.$on('$scroll', function(){
		$scope.fit();
	});

	$scope.fit = function(){
		$scope.view = {
			width  : $(window).width(),
			height : $(window).height(),
			sy     : $(window)[0].scrollY
		};
		$scope.img = {
			e      : $('.fullimg')[0],
			sel    : $('.fullimg'),
			width  : $('.fullimg')[0].naturalWidth,
			height : $('.fullimg')[0].naturalHeight
		};

		var navOffset = $scope.view.width>=768 ? 0 : 50;
		$scope.img.sel.height($scope.view.height-navOffset);
		$scope.img.sel.css('margin-left', ($scope.view.width-$scope.img.e.width)/2);

		$('.carousel-right').css('margin-left', $scope.view.width-73);

		var scrollOffset = $scope.view.height-$scope.view.sy-70;
		if(scrollOffset<0){
			$('.carousel-nav').css('margin-top', 10-scrollOffset);
			$scope.dots(scrollOffset);
		} else {
			$('.carousel-nav').css('margin-top', 10);
			$scope.dots(0);
		}
	};

	$scope.dots = function(offset){
		var offset = offset == undefined ? 0 : offset;
		$('.owl-dots').css('margin-top', -$('.owl-stage-outer').height()-7-offset);
	};

	$scope.next = function(){
		$scope.owl.trigger('next.owl.carousel');
	};

	$scope.prev = function(){
		$scope.owl.trigger('prev.owl.carousel');
	};

});