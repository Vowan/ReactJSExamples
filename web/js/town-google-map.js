var autocomplete, marker;

function initMap() {
    
    var geocoder = new google.maps.Geocoder();


    
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {lat: -34.397, lng: 150.644}

    });
    
    var address = town +", "+region;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: map,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });


    

    

}
