mapboxgl.accessToken = 'pk.eyJ1IjoiZXRpZW5kbyIsImEiOiJjamNhbTY4NDgwOXoxMnptdXIyb2ZvZ2k5In0.zCS4uLuoY-v6bfnDzaEoww';
var button = document.getElementById('zoom');

var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/etiendo/cjcanntla0vsp2st9m3af6liq',
    center: [2.33, 48.86],
    zoom: 11,
});

map.addControl(new mapboxgl.NavigationControl());


var geojson = {
    type: 'FeatureCollection',
    features: [{
            type: 'Feature',
            geometry: {
                type: 'Point',
                coordinates: [2.3357592, 48.8854582]
            },
            properties: {
                title: 'La Jurasserie Fine',
                description: '6 bis rue de Ravignan - Paris'
            }
        },
        {
            type: 'Feature',
            geometry: {
                type: 'Point',
                coordinates: [2.3726245, 48.8614533]
            },
            properties: {
                title: 'Charlicot',
                description: '6 rue de la Folie-Méricourt - Paris'
            }
        }
    ]
};

geojson.features.forEach(function (marker) {

    var el = document.createElement('div');
    el.className = 'marker';

    new mapboxgl.Marker(el).setLngLat(marker.geometry.coordinates).setPopup(new mapboxgl.Popup({
        offset: 25
    }).setHTML('<h3>' + marker.properties.title + '</h3><p>' + marker.properties.description + '</p>')).addTo(map)
});



// map.on('load', function () {
//     map.addLayer({
//         "id": "points",
//         "type": "symbol",
//         "source": {
//             "type": "geojson",
//             "data": {
//                 type: 'FeatureCollection',
//                 features: [{
//                         type: 'Feature',
//                         geometry: {
//                             type: 'Point',
//                             coordinates: [2.3357592, 48.8854582]
//                         },
//                         properties: {
//                             title: 'Mapbox',
//                             description: 'Washington, D.C.'
//                         }
//                     },
//                     {
//                         type: 'Feature',
//                         geometry: {
//                             type: 'Point',
//                             coordinates: [-122.414, 37.776]
//                         },
//                         properties: {
//                             title: 'Mapbox',
//                             description: 'San Francisco, California'
//                         }
//                     }
//                 ]
//             }
//         }
//     });
// });