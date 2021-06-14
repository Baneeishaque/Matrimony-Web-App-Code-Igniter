<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Malayali Marrieges</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #mymap {
        height: 70%;
    width: 84%;
    margin-left: 108px;
    margin-bottom: 30px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 20;
      }
    </style>
  </head>
  <body>

<section>
  <div class="container">
    <div class="row">
       <div class="col-lg-12 col-md-12 col-xs-12">
      <div class="row loc-wrp-cont">
       
      <div class="col-lg-1 col-md-1 col-2 loc-fst"><i class="fas fa-map-marker-alt"></i>
      </div>
      <div class="col-lg-3 col-md-3 col-10 loct-cont"><h5><b>Locate Us</b></h5>

<p>You can locate our branches</p>
      </div>
       <div class="col-lg-8 col-md-8 col-12"><div class="wrapd">
   <div class="search">
      <input type="text" id="pac-input" value="" class="searchTerm" placeholder="Enter Preffered Location">
      <button type="submit" onclick="initMap2()" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
      </div>
    </div>
  </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cntct-map" style="padding: 0px;">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251482.44857895473!2d76.16084491937951!3d9.98268091899372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d514abec6bf%3A0xbd582caa5844192!2sKochi%2C%20Kerala!5e0!3m2!1sen!2sin!4v1596698800790!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
      </div>
    </div>
  </div>
</section>


 <title>Places Search Box</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- jsFiddle will insert css and js -->
  </head>
  <body>


    <div id="mymap"></div>

<script>
function initMap() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap',
    }; 

                    
    // Display a map on the web page
    map = new google.maps.Map(document.getElementById("mymap"), mapOptions);
    //map.setTilt(50);
        
    // Multiple markers location, latitude, and longitude
    var markers = [

    <?php foreach ($locations as $row)
        {
            echo '["'.$row->name.'", '.$row->latitude.', '.$row->longitude.'],';
        } ?>
    ];
                        
    // Info window content
    var infoWindowContent = [

    <?php foreach ($locations as $row)
        { ?>
            ['<div class="info_content">' +
                '<h5><?php echo $row->name ?></h5>' +
                '<p><?php echo $row->info ?></p>' + '</div>'],
        <?php } ?>
    ];
        
    // Add multiple markers to map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Place each marker on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            animation: google.maps.Animation.DROP,
            icon: "<?php echo base_url(); ?>assets/images/googlemap.png",
            title: markers[i][0]
        });
        
        // Add info window to marker    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Center the map to fit all markers on the screen
        map.fitBounds(bounds);
    }

    // Set zoom level
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
      this.setZoom(13);
      google.maps.event.removeListener(boundsListener);
    });
        // initialize();

// Load initialize function
google.maps.event.addDomListener(window, 'load', initMap);
  
}

function initMap2() {
  var input = (document.getElementById('pac-input').value);

    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap',
    }; 

                    
    // Display a map on the web page
    map = new google.maps.Map(document.getElementById("mymap"), mapOptions);
    //map.setTilt(50);
        
    // Multiple markers location, latitude, and longitude
    var markers = [

    <?php foreach ($locations as $row)
        {
            echo '["'.$row->name.'", '.$row->latitude.', '.$row->longitude.'],';
        } ?>
    ];
                        
    // Info window content
    var infoWindowContent = [

    <?php foreach ($locations as $row)
        { ?>
            ['<div class="info_content">' +
                '<h5><?php echo $row->name ?></h5>' +
                '<p><?php echo $row->info ?></p>' + '</div>'],
        <?php } ?>
    ];
        
    // Add multiple markers to map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Place each marker on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            animation: google.maps.Animation.DROP,
            icon: "<?php echo base_url(); ?>assets/images/googlemap.png",
            title: markers[i][0]
        });
        
        // Add info window to marker    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Center the map to fit all markers on the screen
        map.fitBounds(bounds);
    }

    // Set zoom level
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
      this.setZoom(13);
      google.maps.event.removeListener(boundsListener);
    });
        // initialize();

// Load initialize function
google.maps.event.addDomListener(window, 'load', initMap);
  
}

function initialize() {

  var markers = [];
  var map = new google.maps.Map(document.getElementById('mymap'), {
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  // var defaultBounds = new google.maps.LatLngBounds(
  //     new google.maps.LatLng(10.000067, 76.3025273),
  //     new google.maps.LatLng(9.991771, 76.3025273));
  // map.fitBounds(defaultBounds);

  // Create the search box and link it to the UI element.
  var input = /** @type {HTMLInputElement} */(
      document.getElementById('pac-input'));
  // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  var searchBox = new google.maps.places.SearchBox(
    /** @type {HTMLInputElement} */(input));

  // [START region_getplaces]
  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
  google.maps.event.addListener(searchBox, 'places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }
    for (var i = 0, marker; marker = markers[i]; i++) {
      marker.setMap(null);
    }

    // For each place, get the icon, place name, and location.
    markers = [];
    var bounds = new google.maps.LatLngBounds();
    for (var i = 0, place; place = places[i]; i++) {
      var image = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      var marker = new google.maps.Marker({
        map: map,
        icon: image,
        title: place.name,
        position: place.geometry.location
      });

      markers.push(marker);

      bounds.extend(place.geometry.location);
    }

    map.fitBounds(bounds);
  });
  // [END region_getplaces]

  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);




function initAutocomplete() {
  const map = new google.maps.Map(document.getElementById("mymap"), {
    center: { map, marker},
    zoom: 13,
    mapTypeId: "roadmap",
  });
  // Create the search box and link it to the UI element.
  const input = document.getElementById("pac-input");
  const searchBox = new google.maps.places.SearchBox(input);
  // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  // Bias the SearchBox results towards current map's viewport.
  map.addListener("bounds_changed", () => {
    searchBox.setBounds(map.getBounds());
  });
  let markers = [];
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener("places_changed", () => {
    const places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }
    // Clear out the old markers.
    markers.forEach((marker) => {
      marker.setMap(null);
    });
    markers = [];
    // For each place, get the icon, name and location.
    const bounds = new google.maps.LatLngBounds();
    places.forEach((place) => {
      if (!place.geometry || !place.geometry.location) {
        console.log("Returned place contains no geometry");
        return;
      }
      const icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25),
      };
      // Create a marker for each place.
      markers.push(
        new google.maps.Marker({
          map,
          icon,
          title: place.name,
          position: place.geometry.location,
        })
      );

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
}
</script>
<!-- <script async defer 
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWjSQkpYWRMa93lsB6UbQ8jeEWtH7J43s&callback=initMap"  type="text/javascript">
    </script> -->
    <script async defer 
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWjSQkpYWRMa93lsB6UbQ8jeEWtH7J43s&callback=initMap&libraries=places&v=weekly"  type="text/javascript">
    </script>
  </body>
</html>












  <!--   var marker = new google.maps.Marker({
    position: myLatLng,
    });

    // // Create markers.
    // features.forEach(function(feature) {
    //     var marker = new google.maps.Marker({
    //         position: feature.position,
    //         icon: icons[feature.type].icon,
    //         map: map
    //     });
    // });

    // Set zoom level
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(6);
        google.maps.event.removeListener(boundsListener);
    }); -->