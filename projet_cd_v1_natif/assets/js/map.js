mapboxgl.accessToken = 'pk.eyJ1IjoiZXRpZW5kbyIsImEiOiJjamNhbTY4NDgwOXoxMnptdXIyb2ZvZ2k5In0.zCS4uLuoY-v6bfnDzaEoww';

var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/etiendo/cjcanntla0vsp2st9m3af6liq',
    center: [2.33, 48.86],
    zoom: 11,
});

map.addControl(new mapboxgl.NavigationControl());

var req = new XMLHttpRequest();

req.open("GET", "http://localhost:8888/projet-cd/projet_cd_v1_natif/controller/poi_map.php", false);

req.send(null);

var data = JSON.parse(req.responseText);

var geojson = {
    type: 'FeatureCollection',
    features: data // données récupérées de la BDD via la requête http
};

geojson.features.forEach(function (marker) {

    var el = document.createElement('div');
    el.className = 'marker';

    new mapboxgl.Marker(el).setLngLat(marker.properties.geometry.coordinates).setPopup(new mapboxgl.Popup({
        offset: 25
    }).setHTML('<h3>' + marker.properties.title + '</h3><p>' + marker.properties.content + '</p>')).addTo(map)
});