function myMap() {
    var mapProp= {
      center:new google.maps.LatLng(2.219119, 102.261559),
      zoom:5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}