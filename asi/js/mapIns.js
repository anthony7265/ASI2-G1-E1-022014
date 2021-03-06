function initialize() {
// var x= document.getElementById("txt_lat").value;
 //var y= document.getElementById("txt_lng").value;
 var x = 13.69245810;
 var y = -89.22053040;
  var mapOptions = {
    zoom: 10,
    center: new google.maps.LatLng(x,y),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map(document.getElementById('map'),
      mapOptions);

  var marker = new google.maps.Marker({
    position: map.getCenter(),
    map: map,
    title: 'Click to zoom',
    draggable:false

  });

  google.maps.event.addListener(marker, 'dragend', function() {

      // Get the Current position, where the pointer was dropped

      var point = marker.getPosition();

      // Center the map at given point

      map.panTo(point);

      // Update the textbox

      x=point.lat();
      y=point.lng();
   });

  google.maps.event.addListener(marker, 'click', function() {
    map.setZoom(8);
    map.setCenter(marker.getPosition());
  });
}

google.maps.event.addDomListener(window, 'load', initialize);