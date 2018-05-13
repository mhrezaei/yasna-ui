<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.pannellum.org/2.3/pannellum.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.pannellum.org/2.3/pannellum.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .container{
                width:70%;
                margin: auto;
                padding: 100px 50px;
            }
            hr{
                margin: 50px 0;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            #panorama {
                width: 100%;
                height: 500px;
            }

            #controls {
                position: absolute;
                bottom: 0;
                z-index: 2;
                text-align: center;
                width: 100%;
                padding-bottom: 3px;
            }
            .ctrl {
                padding: 8px 5px;
                width: 30px;
                text-align: center;
                background: rgba(200, 200, 200, 0.8);
                display: inline-block;
                cursor: pointer;
            }
            .ctrl:hover {
                background: rgba(200, 200, 200, 1);
            }

        </style>
    </head>
    <body>

        <div class="container">
            <iframe width="100%" height="500" allowfullscreen style="border-style:none;" src="https://cdn.pannellum.org/2.3/pannellum.htm?panorama=https://pannellum.org/images/alma.jpg"></iframe>

            <hr>

            <div id="panorama">
                <div id="controls">
                    <div class="ctrl" id="pan-up">▲</div>
                    <div class="ctrl" id="pan-down">▼</div>
                    <div class="ctrl" id="pan-left">◀</div>
                    <div class="ctrl" id="pan-right">▶</div>
                    <div class="ctrl" id="zoom-in">+</div>
                    <div class="ctrl" id="zoom-out">−</div>
                    <div class="ctrl" id="fullscreen">⤢</div>
                </div>
            </div>

        </div>

    <script>

        var viewer = pannellum.viewer('panorama', {
            "type": "equirectangular",
            "panorama": "assets/images/room.jpg",
            "autoLoad": true,
            "autoRotate": -2,
            "preview": "assets/images/sample3.jpg",
            "title": "ALMA Correlator Facility",
            "author": "Matthew Petroff",
            "compass": true,
            "northOffset": 270,
            "pitch": 2.3,
            "yaw": -135.4,
            "hfov": 120,
            "showControls": false,
            "hotSpotDebug": true,
            "hotSpots": [
                {
                    "pitch": 14.1,
                    "yaw": 1.5,
                    "type": "info",
                    "text": "Baltimore Museum of Art",
                    "URL": "https://artbma.org/"
                },
                {
                    "pitch": -3.211905097736119,
                    "yaw": -153.36820241393002,
                    "type": "info",
                    "text": "اطلاعات مربوط به این مکان"
                },
                {
                    "pitch": -0.9,
                    "yaw": 144.4,
                    "type": "info",
                    "text": "North Charles Street"
                }
            ]

        });

        // Make buttons work
        document.getElementById('pan-up').addEventListener('click', function(e) {
            viewer.setPitch(viewer.getPitch() + 10);
        });
        document.getElementById('pan-down').addEventListener('click', function(e) {
            viewer.setPitch(viewer.getPitch() - 10);
        });
        document.getElementById('pan-left').addEventListener('click', function(e) {
            viewer.setYaw(viewer.getYaw() - 10);
        });
        document.getElementById('pan-right').addEventListener('click', function(e) {
            viewer.setYaw(viewer.getYaw() + 10);
        });
        document.getElementById('zoom-in').addEventListener('click', function(e) {
            viewer.setHfov(viewer.getHfov() - 10);
        });
        document.getElementById('zoom-out').addEventListener('click', function(e) {
            viewer.setHfov(viewer.getHfov() + 10);
        });
        document.getElementById('fullscreen').addEventListener('click', function(e) {
            viewer.toggleFullscreen();
        });

    </script>
    </body>
</html>
