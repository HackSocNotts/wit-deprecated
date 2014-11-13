<!-- * schedule.php start * -->
<!-- Schedule Section -->
<section id="schedule">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>Schedule</h2>
        <hr class="star-primary">
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-lg-offset-1">
        <div class="text-center">
          <h4>Arrive</h4>
        </div>
        <div class="row">
          <div class="text-right">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <p>09:00 - 09:30</p>
              <p>09:30 - 09:50</p>
              <p>09:50 - 11:10</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <p>Registration</p>
            <p>Welcome</p>
            <p>Speakers</p>
          </div>
        </div>

        <div class="text-center">
          <h4>Tea Break</h4>
        </div>

        <div class="row">
          <div class="text-right">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <p>11:30 - 12:50</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <p>Speakers</p>
          </div>
        </div>

        <div class="text-center">
          <h4>Lunch</h4>
        </div>

        <div class="row">
          <div class="text-right">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <p>13:30 - 16:30</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <p>Workshops and networking</p>
          </div>
        </div>

        <div class="text-center">
          <h4>Refreshments</h4>
        </div>

        <div class="row">
          <div class="text-right">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <p>16:45 - 17:00</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <p>Closing Talk</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-lg-offset-1">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBmbxXmi_WiX322tfOyGRaa3hw4vGDS7A"></script>
        <script>
        function initialize() {
          var mapOptions = {center: { lat: 52.951659, lng: -1.186477}, zoom: 15,
          panControl: false, zoomControl: true, mapTypeControl: true, scaleControl: false, streetViewControl: false, overviewMapControl: false,
          styles: [{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]},{"featureType":"landscape","stylers":[{"color":"#f2e5d4"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}]
        };
        var map = new google.maps.Map(document.getElementById('map'),mapOptions);
        map.setOptions({'scrollwheel': false}); // Disable zoom on scroll
        var marker = new google.maps.Marker({
          position: {lat: 52.951659, lng: -1.186477},
          map: map,
          title: 'Women In Tech'
        });
        var contentString = '<div id="content"><div id="container"><h3 style="font-size:20px;">Business School South</h3><p style="font-size:11px;"><b>Address:</b> Jubilee Campus, Wollaton Rd, Nottingham NG8 1BB</p><p><a style="text-decoration: underline; font-size: 15px;" href="https://www.google.co.uk/maps/place/Business+School+(South)/@52.951659,-1.186477,15z/data=!4m2!3m1!1s0x0:0x4da28c4722953e75?sa=X&ei=ci5dVKiyO6Kv7AbAw4GQAQ&ved=0CI0BEPwSMAs">Google Maps Link</a></p></div>';
        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map,marker);
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
      </script>
      <div id="map"></div>
    </div>
  </div>
</div>

<div class="container">
  <center>
     <h3>Workshops</h3>
  </center>
  <div class="row">
    <div class="text-centre">
     
      <div class="col-md-2">
        <p><strong>13:30 - 14:15</strong></p>
      </div>
      <div class="col-md-3">
        <p>Intro to Programming - <strong>Code Club</strong></p>
      </div>
      <div class="col-md-3">
        <p>Tackling Techinical Interviews - <strong>Bloomberg</strong></p>
      </div>
      <div class="col-md-3">
        <p>SEO and Digital Marketing - <strong>Impression</strong></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="text-centre">
      <div class="col-md-2">
        <p><strong>14:30 - 15:15</strong></p>
      </div>
      <div class="col-md-3">
        <p>What the API? - <strong>HackSoc</strong></p>
      </div>
      <div class="col-md-3">
        <p>How to be a Photoshop Pro - <strong>CompSoc</strong></p>
      </div>
      <div class="col-md-3">
        <p>Hold-Up - <strong>MakeSense</strong></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="text-centre">
      <div class="col-md-2">
        <p><strong>15:30 - 16:15</strong></p>
      </div>
      <div class="col-md-3">
        <p>Ethical Hacking in 10 - <strong>CapitalOne</strong></p>
      </div>
      <div class="col-md-3">
        <p>The Careers Talk - <strong>UoN Careers</strong></p>
      </div>
      <div class="col-md-3">
        <p>Pi-Top Hardware Workshop - <strong>Pi-Top</strong></p>
      </div>
    </div>
  </div>
</div>


</body>
</html>

</section>
<!-- = schedule.php end = -->
