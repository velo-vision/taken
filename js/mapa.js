// Google Map
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 19.4153107, lng: -99.1804722},
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
            // {elementType: 'geometry', stylers: [{color: '#e7e8ea'}]},
            // {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            // {elementType: 'labels.text.fill', stylers: [{color: '#ffffff'}]},
            // {
            //   featureType: 'administrative.locality',
            //   elementType: 'labels.text.fill',
            //   stylers: [{color: '#ffffff'}]
            // },
            // {
            //   featureType: 'poi',
            //   elementType: 'labels.text.fill',
            //   stylers: [{color: '#ffffff'}]
            // },
            // {
            //   featureType: 'road',
            //   elementType: 'geometry',
            //   stylers: [{color: '#ffffff'}]
            // },
            // {
            //   featureType: 'road',
            //   elementType: 'geometry.stroke',
            //   stylers: [{color: '#546cf2'}]
            // },
            // {
            //   featureType: 'road.highway',
            //   elementType: 'geometry',
            //   stylers: [{color: '#b8c8d7'}]
            // },
            // {
            //   featureType: 'road.highway',
            //   elementType: 'geometry.stroke',
            //   stylers: [{color: '#dbbad3'}]
            // },
            // {
            //   featureType: 'water',
            //   elementType: 'geometry',
            //   stylers: [{color: '#c8dfef'}]
            // },
            // {
            //   featureType: 'water',
            //   elementType: 'labels.text.fill',
            //   stylers: [{color: '#515c6d'}]
            // }
          ]
  });
  var marker = new google.maps.Marker({
	position: {lat: 19.4153107, lng: -99.1804722},
	map: map,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var marker2 = new google.maps.Marker({
	position: {lat: 19.4153107, lng: -99.2738722},
	map: map,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var marker3 = new google.maps.Marker({
	position: {lat: 19.4153107, lng: -99.1038722},
	map: map,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var marker4 = new google.maps.Marker({
	position: {lat: 19.3993107, lng: -99.0938722},
	map: map,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var marker4 = new google.maps.Marker({
	position: {lat: 19.4003107, lng: -99.1238722},
	map: map,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var marker5 = new google.maps.Marker({
	position: {lat: 19.4193107, lng: -99.1258722},
	map: map,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var marker6 = new google.maps.Marker({
	position: {lat: 19.4413107, lng: -99.1358722},
	map: map,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var marker7 = new google.maps.Marker({
	position: {lat: 19.4173107, lng: -99.1558722},
	map: map,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var marker7 = new google.maps.Marker({
	position: {lat: 19.4043107, lng: -99.1508722},
	map: map,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var marker8 = new google.maps.Marker({
	position: {lat: 19.3853107, lng: -99.1558722},
	map: map,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var marker9 = new google.maps.Marker({
	position: {lat: 19.4353107, lng: -99.1764722},
	map: map,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var marker10 = new google.maps.Marker({
	position: {lat: 19.3953107, lng: -99.1888722},
	map: map,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var marker11 = new google.maps.Marker({
  position: {lat: 19.3853107, lng: -99.1988722},
  map: map,
  icon: "img/rojo.png",
  title: 'Monks Café'
  });
  var marker12 = new google.maps.Marker({
	position: {lat: 19.4133107, lng: -99.2004722},
	map: map,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var marker13 = new google.maps.Marker({
	position: {lat: 19.4333107, lng: -99.1954722},
	map: map,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var marker14 = new google.maps.Marker({
	position: {lat: 19.4263107, lng: -99.2254722},
	map: map,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
  var marker15 = new google.maps.Marker({
	position: {lat: 19.4083107, lng: -99.2344722},
	map: map,
  icon: "img/rojo.png",
	title: 'Monks Café'
  });
}
