<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
  中略
  </head>
  <body>
  <div id="map" style="height:500px"> //追加
  </div>

  <script src="{{ asset('/js/result.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyDGx1ExJhrPgderuXAKpHOEZwFF91NF1OQ&callback=initMap" async defer>
  </script>
  </body>
</html>