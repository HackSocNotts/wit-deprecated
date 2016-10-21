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

// Function to display a random quote in the footer
var quotes = [["Keep your eyes on the stars, and your feet on the ground.","Theodore Roosevelt"],
        ["Don't tell me the sky is the limit when there are footprints on the moon!","Paul Brandt"],
		["I've always been more interested in the future than in the past.","Grace Hopper"],
		["Act as if what you do makes a difference. It does.","William James"]];

function random_quote(){
	var i = Math.floor(Math.random() * quotes.length);
	$("#quote").html("<h3>&ldquo;" + quotes[i][0] + "&rdquo;</h3><p>&mdash;" + quotes[i][1] + "</p>");
}

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
