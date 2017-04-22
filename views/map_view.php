<style>
    #map {
        height: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
    
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>


<script>
    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
            if (request.readyState == 4) {
                request.onreadystatechange = doNothing;
                callback(request, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGPguDR_tDrCsix6uGms1fjDSsfM0nxIQ&callback=initMap">
</script>

<script>
    function init_map() {
        var myOptions = {
            zoom: 14,
            center: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
        marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>)
        });
        infowindow = new google.maps.InfoWindow({
            content: "<?php echo $formatted_address; ?>"
        });
        google.maps.event.addListener(marker, "click", function() {
            infowindow.open(map, marker);
        });
        infowindow.open(map, marker);
    }
    google.maps.event.addDomListener(window, 'load', init_map);

    // function initMap() {    
    //     var map = new google.maps.Map(document.getElementById('map'), {     
    //         center: new google.maps.LatLng(25.8863079, -80.1369417),
    //              zoom: 12    
    //     });    
    //     var infoWindow = new google.maps.InfoWindow;

    //     // Change this depending on the name of your PHP or XML file
    //     downloadUrl('../public/map.php', function(data) {
    //         var xml = data.responseXML;
    //         var markers = xml.documentElement.getElementsByTagName('marker');
    //         Array.prototype.forEach.call(markers, function(markerElem) {
    //             var address = markerElem.getAttribute('address');

    //             var infowincontent = document.createElement('div');
    //             var strong = document.createElement('strong');
    //             strong.textContent = address
    //             infowincontent.appendChild(strong);
    //             infowincontent.appendChild(document.createElement('br'));

    //             var text = document.createElement('text');
    //             text.textContent = address
    //             infowincontent.appendChild(text);
    //             var icon = customLabel[type] || {};
    //             var marker = new google.maps.Marker({
    //                 map: map,
    //                 position: point,
    //                 label: icon.label
    //             });
    //             marker.addListener('click', function() {
    //                 infoWindow.setContent(infowincontent);
    //                 infoWindow.open(map, marker);
    //             });
    //         });
    //     });
    // }



    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
            if (request.readyState == 4) {
                request.onreadystatechange = doNothing;
                callback(request, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
    }

    function doNothing() {}
</script>
<div id="map"></div>