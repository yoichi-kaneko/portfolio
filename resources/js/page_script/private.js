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
        let tmpl = $('#map_window').render({
            index: index,
            name: value.name,
            date: moment(value.date).format('YYYY-MM-DD'),
            description: value.description,
            url: value.url,
        });
        infoWindow[index] = new google.maps.InfoWindow({
            content: tmpl,
            disableAutoPan: true,
        });
        marker[index].addListener('click', function() { // マーカーをクリックしたとき
            if (activeInfoWindow) {
                activeInfoWindow.close();
            }
            infoWindow[index].open(map, marker[index]); // 吹き出しの表示
            moveCenter(index);
            activeInfoWindow = infoWindow[index];
        });
        google.maps.event.addListener(map, 'click', function() {
            if (activeInfoWindow) {
                activeInfoWindow.close();
            }
        });
    });
}

function moveCenter(index) {
    let position = marker[index].getPosition();
    map.panTo(position);
    map.setZoom(8);
}

initGoogleMap();
