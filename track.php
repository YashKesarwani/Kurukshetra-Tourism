<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Location</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> 
    <!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBAt0ANjZutx2YSCDs_XZIzPDx5qtbpWls&callback=initMap"></script>-->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
    <script type="text/javascript">
        var map;
        
        var center = new google.maps.LatLng(29.969513,76.878281);
        var geocoder = new google.maps.Geocoder();
        var infowindow = new google.maps.InfoWindow();

        function init() {
            var id=document.getElementById("getID").innerText;
            var mapOptions = {
                zoom: 13,
                center: center,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }

            map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

            /*var marker = new google.maps.Marker({
                map: map,
                position: center,
            });*/
            makeRequest('get_locations.php?id='+id, function(data) {
                var data = JSON.parse(data.responseText);
                
                for (var i = 0; i < data.length; i++) {
                    displayLocation(data[i]);
                }
            });
        }

        function makeRequest(url,callback){
            var request;
            if(window.XMLHttpRequest){
                request=new XMLHttpRequest();
            }
            request.onreadystatechange=function(){
                if(request.readyState==4 && request.status==200){
                    callback(request);
                }
            }
            request.open("GET",url,true);
            request.send();
        }

        function displayLocation(location) {
            var position = new google.maps.LatLng(parseFloat(location.lat), parseFloat(location.lon));
            var marker = new google.maps.Marker({
                map: map,
                position: position,
                title: location.name
            });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });
        }
    </script>
</head>
<body onload="init()">
    <div id="getID"><?php echo $_GET["id"]; ?></div>
<?php
    include "Header.html";
?>

    <section id="main">
        <div id="map_canvas" style=""></div>
    </section>
    
</body>
<?php
    include "Footer.html";
?>
</html>