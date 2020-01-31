const {Loader} = require('google-maps');
let map;
let google;
let marker = [];
let infoWindow = [];
let activeInfoWindow;

function initGoogleMap()
{
    $.ajax({
        type: 'GET',
        url: '/api/map',
        format: 'json',
        success: function (returned_data) {
            renderGoogleMap(returned_data);
        }
    });
}

function renderGoogleMap(data) {
    let loader = new Loader(data['api_key']);

    loader.load().then(function (g) {
        google = g;
        map = new google.maps.Map(document.getElementById('google_map'), data['options']);
        addMarker(data['markers']);
    });
}

function addMarker(markers) {
    $.each(markers, function (index, value) {
        let latLng = new google.maps.LatLng(value.latitude, value.longitude);
        marker[index] = new google.maps.Marker({
            position: latLng,
            map: map,
            icon: {
                url: 'image/map_icon.png',
            }
        });
        infoWindow[index] = new google.maps.InfoWindow({
            content: '<div class="map">' + value.name + '</div>'
        });
        marker[index].addListener('click', function() { // マーカーをクリックしたとき
            if (activeInfoWindow) {
                activeInfoWindow.close();
            }
            infoWindow[index].open(map, marker[index]); // 吹き出しの表示
            activeInfoWindow = infoWindow[index];
        });
        google.maps.event.addListener(map, 'click', function() {
            if (activeInfoWindow) {
                activeInfoWindow.close();
            }
        });
    });
}

initGoogleMap();
