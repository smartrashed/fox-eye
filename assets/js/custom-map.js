
(function($){

  $(document).ready(function(){

        var map             = jQuery('#map');
        var mapIcon         = map.data('map-icon');
        var mapTitle        = map.data('map-title');
        var mapLatitute     = map.data('map-latitute');
        var mapLongitute    = map.data('map-longitude');
        var mapZoom         = map.data('map-zoom');
        if ($('#map').length){
            google.maps.event.addDomListener(window, "load", fox_eye_google_map);
        }
        function fox_eye_google_map() {

                  // Create a new StyledMapType object, passing it an array of styles,
                  // and the name to be displayed on the map type control.
                  var styledMapType = new google.maps.StyledMapType(
                [
                  {
                  "featureType": "water",
                  "elementType": "geometry.fill",
                  "stylers": [
                    {
                    "color": "#65ac4c"
                    }
                  ]
                  }
                ],
                      {name: 'Styled Map'});

                  // Create a map object, and include the MapTypeId to add
                  // to the map type control.
              
                  var map = new google.maps.Map(document.getElementById('map'), {
                    center: {mapLatitute, mapLongitute},
                    zoom: mapZoom,
                    scrollwheel: false,
                    icon: mapIcon,
                    mapTypeControlOptions: {
                      mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                              'styled_map']
                    }
                
                  });
            var myLatlng = new google.maps.LatLng ( mapLatitute, mapLongitute);    
            var marker = new google.maps.Marker({
              position: myLatlng,
              icon: mapIcon,
              title: mapTitle
            }); 
            marker.setMap(map);   

                  //Associate the styled map with the MapTypeId and set it to display.
            map.mapTypes.set('styled_map', styledMapType);
            map.setMapTypeId('styled_map');

    }

  });
})(jQuery);


//overvew
 // Progress Bar 
 (function($) {
            function animateElements() {
                $('.progressbar').each(function () {
                    var elementPos = $(this).offset().top;
                    var topOfWindow = $(window).scrollTop();
                    var percent = $(this).find('.circle').attr('data-percent');
                    var percentage = parseInt(percent, 10) / parseInt(100, 10);
                    var animate = $(this).data('animate');
                    if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                        $(this).data('animate', true);
                        $(this).find('.circle').circleProgress({
                            startAngle: -Math.PI / 2,
                            value: percent / 100,
                            thickness: 5,
                            fill: {
                                color: '#F5C200'
                            },
                            emptyFill: '#ECECEC',
                            animation: {
                              duration: 2000,
                              easing: 'easeOutBounce' // Default circleProgressEasing . You can also use jquery Easeing another Effect
                            },          
                        }).on('circle-animation-progress', function (event, progress, stepValue) {
                            $(this).find('div').text((stepValue*100).toFixed(0) + "%");
                        }).stop();
                    }
                });
            }


            // Show animated elements
            animateElements();
            $(window).scroll(animateElements);

})(jQuery);