<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.css' rel='stylesheet'/>
    <style>
        body { margin:0; padding:0; }
        #map { position:absolute; top:0; bottom:0; width:100%; }
    </style>
  </head>
  <body>
    <div id='map'></div>
    <script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoicm9idmFuZGVuYmVkZW0iLCJhIjoiY2pwZnZuc2xyMDJkdjNycGo5cDF3MzNhMCJ9.TD5cl1lqUsJObd9bp_0b-A';
    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/light-v9', // stylesheet location
        center: [5.38,52.15], // starting position [lng, lat]
        zoom: 9 // starting zoom
    });
    </script>
  </body>
</html>
