

  var map;
  function initMap() {
   var ales = {
    lat: 44.127204,
    lng: 4.083351999999991
  }
  map = new google.maps.Map(document.getElementById('map'), {
   center: ales,
   zoom: 7
 });
  var marker = new google.maps.Marker({
   position: ales,
   map: map
 })
}