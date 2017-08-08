// Google Map
function initMap() {
  var map2 = new google.maps.Map(document.getElementById('mapa'), {
    center: {lat: 19.4153107, lng: -99.180722},
    zoom: 13,
    scrollwheel: false,
    styles: [
    {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#c8d8e5"
      },
      {
        "weight": 1
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "visibility": "on"
      },
      {
        "weight": 1
      }
    ]
  },
  {
    "featureType": "road",
    "stylers": [
      {
        "color": "#5c7890"
      },
      {
        "weight": 1
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      },
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#acbccb"
      },
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "transit",
    "stylers": [
      {
        "weight": 1
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      },
      {
        "weight": 1
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
   ]
  });
  var m = new google.maps.Marker({
	position: {lat: 19.4153107, lng: -99.1804722},
	map: map2,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var m1 = new google.maps.Marker({
	position: {lat: 19.4153107, lng: -99.2738722},
	map: map2,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var m2 = new google.maps.Marker({
	position: {lat: 19.4153107, lng: -99.1038722},
	map: map2,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var m3 = new google.maps.Marker({
	position: {lat: 19.3993107, lng: -99.0938722},
	map: map2,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var m4 = new google.maps.Marker({
	position: {lat: 19.4003107, lng: -99.1238722},
	map: map2,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var m5 = new google.maps.Marker({
	position: {lat: 19.4193107, lng: -99.1258722},
	map: map2,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var m6 = new google.maps.Marker({
	position: {lat: 19.4413107, lng: -99.1358722},
	map: map2,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var m7 = new google.maps.Marker({
	position: {lat: 19.4173107, lng: -99.1558722},
	map: map2,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var m8 = new google.maps.Marker({
	position: {lat: 19.4043107, lng: -99.1508722},
	map: map2,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
}
