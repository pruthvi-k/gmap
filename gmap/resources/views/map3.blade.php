<?php
/**
 * Created by PhpStorm.
 * User: pruthvi
 * Date: 8/7/15
 * Time: 6:28 PM
 */
        ?>
<script>
var arr = new Array();
function initialize() {
var i;
var Locations = [
{
lat:48.856614,
lon:2.3522219000000177,
address:'Paris',
gval:'25.5',
aType:'Non-Commodity',
title:'Paris',
descr:'Paris'
},
{
lat: 55.7512419,
lon: 37.6184217,
address:'Moscow',
gval:'11.5',
aType:'Non-Commodity',
title:'Moscow',
descr:'Moscow Airport'
},

{
lat:-9.481553000000002,
lon:147.190242,
address:'Port Moresby',
gval:'1',
aType:'Oil',
title:'Papua New Guinea',
descr:'Papua New Guinea 123123123'
},
{
lat:20.5200,
lon:77.7500,
address:'Indore',
gval:'1',
aType:'Oil',
title:'Indore, India',
descr:'Airport India'
}
];

var myOptions = {
zoom: 2,
center: new google.maps.LatLng(51.9000,8.4731),
mapTypeId: google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("map"), myOptions);

var infowindow =  new google.maps.InfoWindow({
content: ''
});

for (i = 0; i < Locations.length; i++) {
size=15;
var img=new google.maps.MarkerImage('marker.png',
new google.maps.Size(size, size),
new google.maps.Point(0,0),
new google.maps.Point(size/2, size/2)
);

var marker = new google.maps.Marker({
map: map,
title: Locations[i].title,
position: new google.maps.LatLng(Locations[i].lat, Locations[i].lon),
icon: img
});

bindInfoWindow(marker, map, infowindow, "<p>" + Locations[i].descr + "</p>",Locations[i].title);

}

}

function bindInfoWindow(marker, map, infowindow, html, Ltitle) {
google.maps.event.addListener(marker, 'mouseover', function() {
infowindow.setContent(html);
infowindow.open(map, marker);

});
google.maps.event.addListener(marker, 'mouseout', function() {
infowindow.close();

});
}
</script>