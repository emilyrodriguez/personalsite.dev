 (function aboutme () {
   "use strict"
       var locations = [
         ['San Antonio, Texas', 29.4241, -98.4936],
         ['John Paul Stevens High School', 29.4400, -98.6846],
         ['SeaWorld San Antonio', 29.4613, -98.6978],
         ['San Antonio College', 29.4459, -98.4943],
         ['Texas A&M University San Antonio', 29.3290, -98.5435],
         ['San Antonio Express-News', 29.427668, -98.48501],
         ['Nationwide Insurance', 29.48223, -98.67378],
         ['Codeup', 29.426492, -98.489662],
         ['Southtown 101', 29.41316, -98.488309]
       ];
       var map = new google.maps.Map(document.getElementById('map'), {
                   zoom: 10,
                   center: new google.maps.LatLng(29.4241, -98.4936),
                   mapTypeId: google.maps.MapTypeId.HYBRID
                 }); 
       var infowindow = new google.maps.InfoWindow();

               var marker, i;
          
               for (i = 0; i < locations.length; i++) {  
                 marker = new google.maps.Marker({
                   position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                   map: map
                 });
          
                 google.maps.event.addListener(marker, 'click', (function(marker, i) {
                   return function() {
                     infowindow.setContent(locations[i][0]);
                     infowindow.open(map, marker);
                   }
                 })(marker, i));
               }
     function loadScript() {
            var script = document.createElement('script');
               script.type = 'text/javascript';
               script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyApZ3SJbryjfJ2sjpyx-fIephHJU3D02Cs' +
                   'callback=initialize';
               document.body.appendChild(script);
             }
            
             window.onload = loadScript;
})();     