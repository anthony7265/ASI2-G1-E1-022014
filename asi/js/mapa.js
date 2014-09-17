function initialize() {

  var mapOptions = {
    zoom: 10,
    center: new google.maps.LatLng(13.692357315058082, -89.21998257812504),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map(document.getElementById('map'),
      mapOptions);

  var marker = new google.maps.Marker({
    position: map.getCenter(),
    map: map,
    title: 'Click to zoom',
    draggable:true

  });

  google.maps.event.addListener(marker, 'dragend', function() {

      // Get the Current position, where the pointer was dropped

      var point = marker.getPosition();

      // Center the map at given point

      map.panTo(point);

      // Update the textbox

      document.getElementById('txt_lat').value=point.lat();
      document.getElementById('txt_lng').value=point.lng();
   });

  google.maps.event.addListener(marker, 'click', function() {
    map.setZoom(8);
    map.setCenter(marker.getPosition());
  });
}

google.maps.event.addDomListener(window, 'load', initialize);