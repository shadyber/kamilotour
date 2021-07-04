<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}  @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="/css/core.css">
    <!-- Template shortcodes/elements style -->
    <link rel="stylesheet" href="/css/shortcode/shortcodes.css">
    <!-- Template main style -->
    <link rel="stylesheet" href="/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="/css/custom.css">


    <!-- Modernizr JS -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>

    @yield('css')
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class="wrapper fixed-newslatter">
   @include('components.header')
@include('components.breadcrumb')

    @yield('content')
   @include('components.footer')
</div>
<!-- Body main wrapper end -->

@include('components.modals')
<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="/js/vendor/jquery-1.12.0.min.js"></script>
<!-- Bootstrap framework js -->
<script src="/js/bootstrap.min.js"></script>
<!-- All js plugins included in this file. -->
<script src="/js/plugins.js"></script>
<script src="/js/slick.min.js"></script>
@yield('js')

<!-- Google Map js -->
<script src="/https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
<script>
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 12,

            scrollwheel: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(23.7286, 90.3854), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [

                {
                    "featureType": "administrative.locality",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#2c2e33"
                        },
                        {
                            "saturation": 7
                        },
                        {
                            "lightness": 19
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#ffffff"
                        },
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 100
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#ffffff"
                        },
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 100
                        },
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "hue": "#bbc0c4"
                        },
                        {
                            "saturation": -93
                        },
                        {
                            "lightness": 31
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "hue": "#bbc0c4"
                        },
                        {
                            "saturation": -93
                        },
                        {
                            "lightness": 31
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "hue": "#bbc0c4"
                        },
                        {
                            "saturation": -93
                        },
                        {
                            "lightness": -2
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "hue": "#e9ebed"
                        },
                        {
                            "saturation": -90
                        },
                        {
                            "lightness": -8
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#e9ebed"
                        },
                        {
                            "saturation": 10
                        },
                        {
                            "lightness": 69
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#e9ebed"
                        },
                        {
                            "saturation": -78
                        },
                        {
                            "lightness": 67
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                }
            ]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('googleMap');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(23.7286, 90.3854),
            map: map,
            title: 'Ramble!',
            animation:google.maps.Animation.BOUNCE

        });
    }
</script>
<!-- Waypoints.min.js. -->
<script src="/js/waypoints.min.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="/js/main.js"></script>

</body>
