const {Loader} = require('google-maps');

let map;
let google;
let marker = [];
let infoWindow = [];
let activeInfoWindow;
let marker_count;
let marker_zoom;
let loader;

export function initGoogleMap()
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
    marker_zoom = data['marker_zoom'];

    if (!loader) {
        loader = new Loader(data['api_key']);

        loader.load().then(function (g) {
            google = g;
            map = new google.maps.Map(document.getElementById('google_map'), data['options']);
            addMarker(data['markers']);
        });
    } else {
        map = new google.maps.Map(document.getElementById('google_map'), data['options']);
        addMarker(data['markers']);
    }
}

function addMarker(markers) {
    marker_count = markers.length;
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
            showInfoWindow(index);
        });
        google.maps.event.addListener(map, 'click', function() {
            if (activeInfoWindow) {
                activeInfoWindow.close();
            }
        });
        google.maps.event.addListener(infoWindow[index],'domready',function(){
            $('.move_prev').click(function() {
                let prev_index = getPrevIndex($(this).attr('data-index'));
                showInfoWindow(prev_index);
            });
            $('.move_next').click(function() {
                let next_index = getNextIndex($(this).attr('data-index'));
                showInfoWindow(next_index);
            });
        });
    });
}

function showInfoWindow(index) {
    if (activeInfoWindow) {
        activeInfoWindow.close();
    }
    infoWindow[index].open(map, marker[index]); // 吹き出しの表示
    let position = marker[index].getPosition();
    map.panTo(position);
    map.setZoom(marker_zoom);
    activeInfoWindow = infoWindow[index];
}

function getPrevIndex(index) {
    if(parseInt(index) == 0) {
        return marker_count - 1;
    }
    return parseInt(index) - 1;
}
function getNextIndex(index) {
    if(parseInt(index) + 1 == marker_count) {
        return 0;
    }
    return parseInt(index) + 1;
}
