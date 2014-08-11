// Function to loop around and display different words every x seconds
var w = 0;
window.setInterval(function() {
  var words = ["Students", "Women", "Men"];
  $('.moving_text').fadeOut("slow", function () {
    $('.moving_text').text(words[w++]);
  });
  $('.moving_text').fadeIn("slow");

  if (w == words.length) {
    w = 0;
  }
}, 3000);

var owl = {}
$(window).load(function(){
  fit()
  //init carousel
  owl = $(".owl-carousel");
  owl.owlCarousel({
    center: true,
    items:1.5,
    loop:false,
    margin:70,
    dots: true,
    onInitialized: fit,
    onResized: fit
  });
})

$(window).on('resize scroll', function(){
  fit();
})

//responsive js
var fit = function(){
  //lock right arrow in place
  $('.carousel-right').css('margin-left', $(window).width()-73);

  //scroll pinning that stays in the 'stage'
  var scrollOffset = $('header').height()-$(window)[0].scrollY-30;
  var stage = $('.owl-stage-outer').height();
  if(-stage<scrollOffset && scrollOffset<0){
    owlNav(scrollOffset);
  } else if (-stage>=scrollOffset){
    owlNav(-stage);
  } else {
    owlNav(0);
  }
};

//fn that sets the location of the carousel nav elements
var owlNav = function(offset){
  var offset = offset == undefined ? 0 : offset;
  $('.carousel-nav').css('margin-top', 10-offset);
  $('.owl-dots').css('margin-top', -$('.owl-stage-outer').height()-7-offset);
};

//carousel control
var next = function(){
  owl.trigger('next.owl.carousel');
};

var prev = function(){
  owl.trigger('prev.owl.carousel');
};

//onclick and arrow keypress
$('.carousel-left').click(function(){
  prev();
})

$('.carousel-right').click(function(){
  next();
});

$(window).on('keydown', function(e){
  if(e.which == 37){
    prev()
  } else if(e.which == 39){
    next()
  }
})
