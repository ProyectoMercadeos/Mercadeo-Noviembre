<!DOCTYPE html>
<html>
<head>
  <style>
  html, body, #map-canvas{
    height: 100%;
    margin: 0;
    padding: 0;
  }
  </style>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgAplHzDm6hRW1dWRoNNFv4qo3r8Gt_8M"></script>
  <script>
  function initialize(){
    var mapOptions = {
      zoom:8,
      center: new google.maps.LatLng(-34.397, 150.644)
    };

    var map= new google.maps.Map(
      document.getElementById('map-canvas'),
      mapOptions);
  }
  function loadScript()
  {
    var script= document.createElement('script');
    script.type ='text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' + 'callback=initialize';
    document.body.appendChild(script);
  }
  window.onload = loadScript;
  </script>
</head>
<body>
  <div id="map-canvas" height="100%" width="100%"></div>
</body>
</html>