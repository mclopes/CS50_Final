var map;
var icon = "img/black-cat.png";
var json = "public/map_controller.php";
var currWindow = false;

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    alert("Geolocation is not supported by this browser.");
  }
}
function showPosition(position) {
  var lat = position.coords.latitude;
  var lng = position.coords.longitude;
  map.setCenter(new google.maps.LatLng(lat, lng));
}
function initialize() {

    var mapProp = {
        center: new google.maps.LatLng(25.7776179, -80.1929211), //LLANDRINDOD WELLS
        zoom: 9,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("map"), mapProp);
    

    $.getJSON(json, function(result) {

        $.each(result, function(key, data) {

            var latLng = new google.maps.LatLng(data.lat, data.long);
            var infowindow = new google.maps.InfoWindow({
                content: details
            });

            var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: {
                    url: icon,
                    scaledSize: new google.maps.Size(30, 35)
                },
                title: data.title
            });
            marker.addListener('click', function() {

                if (currWindow) {
                    currWindow.close();
                }

                currWindow = infowindow;
                //infowindow.open(base.map, marker);


                infowindow.open(map, marker);
            });

            var details = "<div>"
            details += "Owner Name: " + data.user_name + "<br>";
            details += "Phone: " + data.phone + "<br>";
            details += "Type: " + data.type + "<br>";
            details += "Capacity: " + data.capacity + "<br>";
            details += "Availability: " + data.availability + "<br>";
            details += "Address: " + data.address;

            details += "</div>"

            //"<ul>" + "<li>" + data.address + "</li><li>" + data.phone + "</li></ul>";

            bindInfoWindow(marker, map, infowindow, details);

        });

    });

}

function bindInfoWindow(marker, map, infowindow, strDescription) {
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(strDescription);
        infowindow.open(map, marker);
    });
}

function closeCurrInfoWin() {
    if (lastOpenedInfoWindow) {
        lastOpenedInfoWindow.close();
    }
}

google.maps.event.addDomListener(window, 'load', initialize);










//------------------------------------

// // Google Map
// var map;

// // markers for map
// var markers = [];

// function initMap() {
//     var mdc = {
//         lat: 25.7776179,
//         lng: -80.1929211
//     };
//     var map = new google.maps.Map(document.getElementById('map'), {
//         zoom: 4,
//         center: mdc
//     });
//     var marker = new google.maps.Marker({
//         position: mdc,
//         map: map
//     });
// }







// function addMarker(place) {
//     // instance
//     var marker = new MarkerWithLabel({
//         icon: {
//             url: "img/black-cat.png",
//             scaledSize: new google.maps.Size(35, 35)
//         },
//         position: new google.maps.LatLng(place.lat, place.long),
//         map: map,
//         labelContent: place.address,
//         labelAnchor: new google.maps.Point(20, 0),
//     });



//     // click listener
//     // google.maps.event.addListener(marker, "click", function() {
//     //     showInfo(marker);
//     //     $.getJSON("articles.php", {
//     //             geo: place.postal_code
//     //         })
//     //         .done(function(data, textStatus, jqXHR) {
//     //             // if there're no news
//     //             if (data.length === 0) {
//     //                 showInfo(marker, "No News.");
//     //             } else {
//     //                 // setting html to display list of news
//     //                 var ul = "<ul>";

//     //                 // create template
//     //                 var template = _.template("<li><a href = '<%- link %>' target = '_blank'><%- title %></a></li>");

//     //                 // use template to insert content
//     //                 for (var i = 0, n = data.length; i < n; i++) {
//     //                     ul += template({
//     //                         link: data[i].link,
//     //                         title: data[i].title
//     //                     });
//     //                 }

//     //                 // end unordered list
//     //                 ul += "</ul>";

//     //                 // show news
//     //                 showInfo(marker, ul);
//     //             }
//     //         });
//     // });

//     // add marker to global variable markers
//     markers.push(marker);
// }


// function configure() {
//     // update UI after map has been dragged
//     google.maps.event.addListener(map, "dragend", function() {
//         update();
//     });

//     // update UI after zoom level changes
//     google.maps.event.addListener(map, "zoom_changed", function() {
//         update();
//     });
// }



// function update() {
//     // get map's bounds
//     var bounds = map.getBounds();
//     var ne = bounds.getNorthEast();
//     var sw = bounds.getSouthWest();

//     // get places within bounds (asynchronously)
//     var parameters = {
//         ne: ne.lat() + "," + ne.lng(),
//         //q: $("#q").val(),
//         sw: sw.lat() + "," + sw.lng()
//     };
//     $.getJSON("../map_controller.php", parameters)
//         .done(function(data, textStatus, jqXHR) {

//             // remove old markers from map
//             //removeMarkers();-------------------------build

//             // add new markers to map
//             for (var i = 0; i < data.length; i++) {

//                 addMarker(data[i]);

//             }
//         })
//         .fail(function(jqXHR, textStatus, errorThrown) {

//             // log error to browser's console
//             console.log(errorThrown.toString());
//         });
// }