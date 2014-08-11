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
