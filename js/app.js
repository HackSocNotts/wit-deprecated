// Function to loop around and display different words every x seconds
var w = 0;
window.setInterval(function() {

  var words = ["Students", "Women", "Men"];

  $('.moving_text').fadeOut("slow", function () {
    $('.moving_text').text(words[w++]);
  });
  $('.moving_text').fadeIn("slow");

  if (w >= words.length) {
    w = 0;
  }
}, 3000);


/**
 * GA Script. For 2016.inspirewit.com
 */
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-71607271-1', 'auto');
ga('send', 'pageview');


/**
 * Smooth scroll to anchor, e.g. register
 * https://css-tricks.com/snippets/jquery/smooth-scrolling/
 */
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


/**
 * Interactive cover section 
 */

var canvas = document.getElementById("canvas");
var altBG = document.getElementById("altBG");
var triangle = new TriangleBG({
  canvas : canvas,
  alternateElem : altBG,
  cellHeight : 80,
  cellWidth : 100,
  mouseLight : true,
  mouseLightRadius : 500,
  mouseLightIncrement : 5,
  resizeAdjustment : true,
  variance : 1,
  pattern : "x*y",
  baseColor1 : {
    baseHue : 208,
    baseSaturation : 46,
    baseLightness : 53
  }, 
  baseColor2 : {
    baseHue : 243,
    baseSaturation : 29,
    baseLightness : 50
  },
  colorDelta : {
    hue : 0,
    lightness : 0,
    saturation : 0
  }
});