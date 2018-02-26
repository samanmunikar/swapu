
$('.carousel').carousel({
  interval: 2000
})

 function initMap() {
        var sankhamul = {lat: 27.682635, lng: 85.333109};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: sankhamul
        });
        var marker = new google.maps.Marker({
          position: sankhamul,
          map: map
        });
      }