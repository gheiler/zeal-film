<html><head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Zeal Film</title>
    <meta name="description" content="Zeal Film">

    <!-- Configured Head Tags  -->
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icon/favicon-16x16.png">
    <link rel="manifest" href="/assets/manifest.json">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="/assets/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#00bcd4">
    <!-- base url -->
    <base href="/">

    <style type="text/css">/* this file will be extracted to main dist folder and is imported in index.html */
    /* This file is for setting global styles  */
    body {
    background: #15343f;
    font-size: 12px;
    margin: 0; }

    .orange {
    background: #f19e1c; }

    .orange-box {
    border: #f19e1c 10px solid;
    border-radius: 10px;
    overflow: hidden;
    height: 100px; }

    .main-content {
    max-width: 600px;
    margin: 0 auto;
    overflow: hidden;
    margin-top: 200px; }
    .main-content .main-title {
    color: #f19e1c;
    float: left;
    width: 70%;
    height: 100%;
    font-size: 6em;
    text-align: center;
    line-height: 100px;
    font-family: 'Exo', sans-serif; }
    .main-content .side-title {
    float: left;
    color: #fff;
    width: 30%;
    height: 100%; }

    .square-font {
    color: #fff;
    text-align: center;
    font-family: 'Exo', sans-serif;
    font-size: 2.5em;
    padding: 10px; }

    .funny-font {
    margin-left: 30px;
    font-size: 3em;
    line-height: 0.8em;
    margin-top: 15px;
    font-family: 'Satisfy', cursive;
    -webkit-transform: rotate(-20deg);
    -moz-transform: rotate(-20deg);
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=-3);
    /*for IE*/ }

    .play-btn-container {
    text-align: center;
    margin: 0 auto; }
    .play-btn-container .play-button {
    background: url('src/assets/img/play.png');
    width: 100px;
    background-size: cover;
    height: 100px;
    border: none;
    cursor: pointer; }

    .side-content {
    padding-top: 100px; }
    .side-content .contact-info {
    color: #fff;
    width: 220px;
    float: right;
    font-size: 1.5em;
    font-family: 'Exo';
    border-radius: 10px 0 0 10px;
    margin-top: -100px; }
    .side-content .contact-info ul {
        list-style: none;
        padding: 10px;
        margin: 0; }
        .side-content .contact-info ul li a {
        text-decoration: none;
        color: inherit;
        cursor: pointer; }
    </style><style type="text/css">h1 {
    color: #00BCD4;
    }</style><style>html, body{
    height: 100%;
    font-family: Arial, Helvetica, sans-serif
    }

    a.active {
    background-color: gray;
    }
    </style>
</head>

<body>
  <app ng-version="4.1.3">
    <main>
        <router-outlet></router-outlet>
        <home _nghost-c1="">
            <div _ngcontent-c1="">
                <div _ngcontent-c1="" class="main-content">
                    <div _ngcontent-c1="" class="orange-box">
                        <div _ngcontent-c1="" class="main-title">
                            ZEAL FILM
                        </div>
                        <div _ngcontent-c1="" class="side-title orange">
                            <div _ngcontent-c1="" class="funny-font"> 
                                at your service
                            </div>
                        </div>
                    </div>
                    <div _ngcontent-c1="" class="square-font">
                        to present your business
                    </div>
                </div>
                <div _ngcontent-c1="" class="side-content">
                    <div _ngcontent-c1="" class="play-btn-container">
                        <button _ngcontent-c1="" class="play-button" id="youtube-player"></button>
                    </div>
                    <div _ngcontent-c1="" class="orange contact-info">
                        <ul _ngcontent-c1="">
                            <li _ngcontent-c1="">Medappa Chreanda</li>
                            <li _ngcontent-c1="">at Square Haus</li>
                            <li _ngcontent-c1="">Bülowstr. 6</li>
                            <li _ngcontent-c1="">10783 Berlin</li>
                            <li _ngcontent-c1=""><a _ngcontent-c1="" href="mailto:office@zeal-film.de">office@zeal-film.de</a></li>
                            <li _ngcontent-c1=""><a _ngcontent-c1="" href="tel:+4901797481018">+49 (0) 0179 748 10 18</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </home>
    </main>
    <div id="player" style="display: none;"></div>
  </app>

  <!-- Google Analytics: change UA-71073175-1 to be your site's ID -->
  <script>
    (function(A,n,g,u,l,a,r){A.GoogleAnalyticsObject=r;A[l]=A[l]||function(){
    (A[l].q=A[l].q||[]).push(arguments)},A[l].l=1*new Date();a=n.createElement(g),
    r=n.getElementsByTagName(g)[0];a.async=1;a.src=u;r.parentNode.insertBefore(a,r)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-71073175-1', 'auto');
    ga('send', 'pageview');
  </script>
  <link href="https://fonts.googleapis.com/css?family=Exo:500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

  <script>
    var player, iframe;
    var $ = document.querySelector.bind(document); 
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    function onYouTubeIframeAPIReady() {
      player = new YT.Player('player', {
        height: '1',
        width: '1',
        videoId: 'amRFNKKCHgI',
        events: {
          'onReady': onPlayerReady,
          'onStateChange': onPlayerStateChange
        }
      });
    }

    // when ready, wait for clicks
    function onPlayerReady(event) {
      var player = event.target;
      iframe = $('#player');
      setupListener(); 
    }

    // when video ends
    function onPlayerStateChange(event) {        
        if(event.data === 0) {
            goOutFromVideo();
        }
    }

    function setupListener (){
        $('#youtube-player').addEventListener('click', playFullscreen);
        document.addEventListener('webkitfullscreenchange', exitHandler, false);
        document.addEventListener('mozfullscreenchange', exitHandler, false);
        document.addEventListener('fullscreenchange', exitHandler, false);
        document.addEventListener('MSFullscreenChange', exitHandler, false);
    }

    function exitHandler()
    {
        if (document.webkitIsFullScreen === false || document.mozFullScreen === false || document.msFullscreenElement === false)
        {
            player.stopVideo();
            goOutFromVideo();
        }
    }

    function goOutFromVideo(){
        $('#player').style.display = 'none';
        if(document.exitFullscreen) {
            document.exitFullscreen();
        } else if(document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if(document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        }
    }

    function playFullscreen (){
      player.playVideo();//won't work on mobile
      $('#player').style.display = 'block';
      
      var requestFullScreen = iframe.requestFullScreen || iframe.mozRequestFullScreen || iframe.webkitRequestFullScreen;
      if (requestFullScreen) {
        requestFullScreen.bind(iframe)();
      }
    }
  </script>
</body>
</html>