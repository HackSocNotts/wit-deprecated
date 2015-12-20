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
              <p>09:30 - 10:00</p>
              <p>10:15 - 10:30</p>
              <p>10:30 - 12:30</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <p>Registration</p>
            <p>Welcome</p>
            <p>Speakers</p>
          </div>
        </div>

        <div class="text-center">
          <h4>LUNCH</h4>
        </div>

        <div class="row">
          <div class="text-right">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <p>13:30 - 14:15</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <p>Speakers</p>
          </div>
        </div>

        <div class="text-center">
          <h4>CAKE DROP &amp; NETWORKING</h4>
        </div>

        <div class="row">
          <div class="text-right">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <p>15:00 - 18:00</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <p>Workshops &amp; networking</p>
          </div>
        </div>

        <div class="row">
          <div class="text-right">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <p>18:00 - 18:15</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <p>Closing Talk</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-lg-offset-1">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBmbxXmi_WiX322tfOyGRaa3hw4vGDS7A"></script>
        <?php
          /**
           * PHP function to see if user is on a mobile
           * @return boolean True if user is on a mobile, false if not.
           */
          function isMobile() {
            return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
          }
        ?>
        <script>
        function initialize() {
          var mapOptions = {center: { lat: 52.951659, lng: -1.186477}, zoom: 15,
           <?php echo(isMobile()) ? 'draggable: false,' : ''; ?>
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

</section>

