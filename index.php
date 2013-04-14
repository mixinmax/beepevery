<html>
<head>
    <meta charset='utf-8'>
    <title>BeepEvery</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <meta name="description" content="Interval beeping and self-serving website all in one!" />
</head>
<body>

    <audio id="audio">
        <source src="beep.mp3" />
        <source src="beep.wav" />
        Sorry, your browser doesn't support HTML5 audio. <a href="mailto:contact@f33r.com">Mail me</a> to get my lazy butt up and use Flash.
    </audio>

    <div id="header" class="row-fluid">
        <div class="span6 offset3">
            <h1>BeepEvery &nbsp;</h1>
            <input id="interval" class="input-small" type="text" value="1m10s">
        </div>
    </div>

    <div id="error" class="row-fluid">
        <div class="span6 offset3 alert alert-error">
            <button type="button" id="hide-error" class="close">&times;</button>
            The interval must be of the form xx<strong>h</strong>xx<strong>m</strong>xx<strong>s</strong>
        </div>
    </div>

    <div class="row-fluid">
        <div id="timer-block" class="hero-unit span6 offset3">
            <span id="timer">
                <span id="h">0</span><span class="little">h</span>
                <span id="m">0</span><span class="little">m</span>
                <span id="s">0</span><span class="little">s</span>
            </span>
            <!-- can't get this to work yet
                <span id="next-beep">next beep in <span id="remaining">0</span> seconds</span>
            -->
        </div>
    </div>

    <div class="row-fluid">
        <div id="start-pause" class="hero-unit control span3 offset3">START</div>
        <div id="reset" class="hero-unit control span3 offset6">RESET</div>
    </div>

    <div class="row-fluid">
        <div id="footer" class="span6 offset3">
            Made by Max Mackie. Visit me at <a href="http://github.com/maxmackie">Github</a> 
            or check out my <a href="http://maxmackie.com">website</a>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.timer.js" type="text/javascript"></script>
    <script src="js/timer.js" type="text/javascript"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-40131907-1', 'beepevery.com');
        ga('send', 'pageview');
    </script>
</body>
</html>