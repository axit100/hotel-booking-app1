/* ----------------- Start Document ----------------- */

function initializeMap(locationsData) {
    if (document.getElementById("map") !== null) {

        // Touch Gestures
        if ($('#map').attr('data-map-scroll') == 'true' || $(window).width() < 992) {
            var scrollEnabled = false;
        } else {
            var scrollEnabled = true;
        }

        var mapOptions = {
            gestureHandling: scrollEnabled,
        }

        // Map Init
        window.map = L.map('map', mapOptions);
        $('#scrollEnabling').hide();


        // ----------------------------------------------- //
        // Popup Output
        // ----------------------------------------------- //
        function locationData(locationURL, locationImg, locationTitle, locationAddress, locationRating, locationRatingCounter) {
            return ('' +
                '<a href="' + locationURL + '" class="leaflet-listing-img-container">' +
                '<div class="infoBox-close"><i class="fa fa-times"></i></div>' +
                '<img src="' + locationImg + '" alt="">' +

                '<div class="leaflet-listing-item-content">' +
                '<h3>' + locationTitle + '</h3>' +
                '<span>' + locationAddress + '</span>' +
                '</div>' +

                '</a>' +

                '<div class="leaflet-listing-content">' +
                '<div class="leaflet-listing-title">' +
                '<div class="' + infoBox_ratingType + '" data-rating="' + locationRating + '"><div class="rating-counter">(' + locationRatingCounter + ' reviews)</div></div>' +
                '</div>' +
                '</div>')
        }


        // Listing rating on popup (star-rating or numerical-rating)
        var infoBox_ratingType = 'star-rating';

        map.on('popupopen', function () {
            if (infoBox_ratingType = 'numerical-rating') {
                numericalRating('.leaflet-popup .' + infoBox_ratingType + '');
            }
            if (infoBox_ratingType = 'star-rating') {
                starRating('.leaflet-popup .' + infoBox_ratingType + '');
            }
        });


        // ----------------------------------------------- //
        // Locations
        // ----------------------------------------------- //

        var locations = [];
        locationsData.forEach(function (val, index) {
            // console.log('Data at index ' + index + ':', val);
            // Create a location entry and add it to the locations array
            locations.push([
                locationData('listings-single-page.html', val.category.image, val.company_name, val.address, 5.0, '0'),
                val.latitude,
                val.longitude,
                val.id,
                '<i class="im im-icon-Map-Marker"></i>'
            ]);
        });

        // Open Street Map
        // -----------------------//
        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> Contributors',
                maxZoom: 18,
            }).addTo(map);

        // ----------------------------------------------- //
        // Markers
        // ----------------------------------------------- //
        markers = L.markerClusterGroup({
            spiderfyOnMaxZoom: true,
            showCoverageOnHover: false,
        });

        for (var i = 0; i < locations.length; i++) {

            var listeoIcon = L.divIcon({
                    iconAnchor: [20, 51], // point of the icon which will correspond to marker's location
                    popupAnchor: [0, -51],
                    className: 'listeo-marker-icon',
                    html: '<div class="marker-container">' +
                        '<div class="marker-card">' +
                        '<div class="front face">' + locations[i][4] + '</div>' +
                        '<div class="back face">' + locations[i][4] + '</div>' +
                        '<div class="marker-arrow"></div>' +
                        '</div>' +
                        '</div>'
                }
            );

            var popupOptions =
                {
                    'maxWidth': '270',
                    'className': 'leaflet-infoBox'
                }
            var markerArray = [];
            marker = new L.marker([locations[i][1], locations[i][2]], {
                icon: listeoIcon,

            })
                .bindPopup(locations[i][0], popupOptions);
            //.addTo(map);
            marker.on('click', function (e) {

                // L.DomUtil.addClass(marker._icon, 'clicked');
            });
            map.on('popupopen', function (e) {
                //   L.DomUtil.addClass(e.popup._source._icon, 'clicked');


                // }).on('popupclose', function (e) {
                //   if(e.popup){
                //     L.DomUtil.removeClass(e.popup._source._icon, 'clicked');
                //   }

            });
            markers.addLayer(marker);
        }
        map.addLayer(markers);


        markerArray.push(markers);
        if (markerArray.length > 0) {
            map.fitBounds(L.featureGroup(markerArray).getBounds().pad(0.2));
        }


        // Custom Zoom Control
        map.removeControl(map.zoomControl);

        var zoomOptions = {
            zoomInText: '<i class="fa fa-plus" aria-hidden="true"></i>',
            zoomOutText: '<i class="fa fa-minus" aria-hidden="true"></i>',
        };

        // Creating zoom control
        var zoom = L.control.zoom(zoomOptions);
        zoom.addTo(map);

    }

    function singleListingMap() {

        var lng = parseFloat($('#singleListingMap').data('longitude'));
        var lat = parseFloat($('#singleListingMap').data('latitude'));
        var singleMapIco = "<i class='" + $('#singleListingMap').data('map-icon') + "'></i>";

        var listeoIcon = L.divIcon({
                iconAnchor: [20, 51], // point of the icon which will correspond to marker's location
                popupAnchor: [0, -51],
                className: 'listeo-marker-icon',
                html: '<div class="marker-container no-marker-icon ">' +
                    '<div class="marker-card">' +
                    '<div class="front face">' + singleMapIco + '</div>' +
                    '<div class="back face">' + singleMapIco + '</div>' +
                    '<div class="marker-arrow"></div>' +
                    '</div>' +
                    '</div>'

            }
        );

        var mapOptions = {
            center: [lat, lng],
            zoom: 13,
            zoomControl: false,
            gestureHandling: true
        }

        var map_single = L.map('singleListingMap', mapOptions);
        var zoomOptions = {
            zoomInText: '<i class="fa fa-plus" aria-hidden="true"></i>',
            zoomOutText: '<i class="fa fa-minus" aria-hidden="true"></i>',
        };

        // Zoom Control
        var zoom = L.control.zoom(zoomOptions);
        zoom.addTo(map_single);

        map_single.scrollWheelZoom.disable();

        marker = new L.marker([lat, lng], {
            icon: listeoIcon,
        }).addTo(map_single);

        // Open Street Map
        // -----------------------//
        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> Contributors',
                maxZoom: 18,
            }).addTo(map_single);


        // MapBox (Requires API Key)
        // -----------------------//
        // L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}@2x.png?access_token={accessToken}', {
        //     attribution: " &copy;  <a href='https://www.mapbox.com/about/maps/'>Mapbox</a> &copy;  <a href='http://www.openstreetmap.org/copyright'>OpenStreetMap</a>",
        //     maxZoom: 18,
        //     id: 'mapbox.streets',
        //     accessToken: 'ACCESS_TOKEN'
        // }).addTo(map_single);


        // Street View Button URL
        $('a#streetView').attr({
            href: 'https://www.google.com/maps/search/?api=1&query=' + lat + ',' + lng + '',
            target: '_blank'
        });
    }

// Single Listing Map Init
    if (document.getElementById("singleListingMap") !== null) {
        singleListingMap();
    }
}


$(document).ready(function () {
    /** ax code **/
// Function to make AJAX request for a single location
    async function fetchDataForLocation() {
        try {
            var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const url = '/api/get-map'; // Replace with your API URL
            const [page, image, name, address, rating, reviews] = '';

            const response = await fetch(url, {
                method: 'GET', // Adjust the method as needed (GET, POST, etc.)
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                },
            });

            if (!response.ok) {
                throw new Error('Request failed with status: ' + response.status);
            }

            const responseData = await response.json();

            // Call the processLocationData function with the fetched data
            processLocationData(responseData);

            return responseData; // Assuming the response is JSON
        } catch (error) {
            // Handle any errors that occurred during the fetch
            console.error(error);
        }
    }

    function processLocationData(data) {
     //   console.log(data);
//        var locations = 333333333;
//         var locations = [
//             [locationData('listings-single-page.html', 'images/listing-item-01.jpg', "Tom's Restaurant", '964 School Street, New York', '3.5', '12'), 40.94401669296697, -74.16938781738281, 1, '<i class="im im-icon-Map"></i>'],
//         ];
        initializeMap(data)
    }

    fetchDataForLocation();

});

/***** end ax code ***/

