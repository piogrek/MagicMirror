<html>
<head>
    <title>Magic Mirror</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/weather-icons.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript">
        var gitHash = '<?php echo trim(`git rev-parse HEAD`) ?>';
    </script>
    <meta name="google" value="notranslate"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <div class="calendar xxsmall"></div>
        </div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-5 text-center">
            <div class="date small dimmed"></div>
                    <div class="time"></div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="windsun small dimmed"></div>
                    <div class="temp"></div>
                </div>
                <div class="col-sm-3 text-right">
                    <div class="forecast small dimmed"></div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <hr>
            <a class="twitter-timeline" href="https://twitter.com/piogrek/lists/news"
               data-tweet-limit="6"
               data-chrome="noheader nofooter noborders transparent"
               data-widget-id="664738826351484928">Tweets from https://twitter.com/piogrek/lists/news</a>
            <script>!function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + "://platform.twitter.com/widgets.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, "script", "twitter-wjs");</script>

        </div>
        <div class="col-sm-4">
            <hr>
            <a class="twitter-timeline"
               href="https://twitter.com/WOWFactsOfLife"
               data-chrome="noheader nofooter noborders transparent"
               data-tweet-limit="6"
               data-widget-id="664959064531693569"></a>
            <script>!function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + "://platform.twitter.com/widgets.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, "script", "twitter-wjs");</script>
        </div>
    </div>
</div>


<div class="center-ver center-hor"><!-- <div class="dishwasher light">Vaatwasser is klaar!</div> --></div>

<div class="bottom center-hor">
</div>

</div>

<script src="js/jquery.js"></script>
<script src="js/jquery.feedToJSON.js"></script>
<script src="js/ical_parser.js"></script>
<script src="js/moment-with-locales.min.js"></script>
<script src="js/config.js"></script>
<script src="js/rrule.js"></script>
<script src="js/version/version.js" type="text/javascript"></script>
<script src="js/calendar/calendar.js" type="text/javascript"></script>
<script src="js/compliments/compliments.js" type="text/javascript"></script>
<script src="js/weather/weather.js" type="text/javascript"></script>
<script src="js/time/time.js" type="text/javascript"></script>
<!--<script src="js/news/news.js" type="text/javascript"></script>-->
<script src="js/main.js?nocache=<?php echo md5(microtime()) ?>"></script>
<!-- <script src="js/socket.io.min.js"></script> -->

</body>
</html>
