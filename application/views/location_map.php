<!DOCTYPE html>
<html>
  <head>
    <style>
      #map-canvas {
        width: 1000px;
        height: 500px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
          var a= '<?php echo $lat;?>';
          var b= '<?php echo $lng?>';
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(a, b),
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.HYBRID
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
  </body>
</html>