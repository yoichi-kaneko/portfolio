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
    });
}

initGoogleMap();
