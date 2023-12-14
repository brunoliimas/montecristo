<?php
require_once 'header.php';
$pasta = base_url('_catalogo') . '/';
?>

<!-- start custom fonts -->
<link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Fauna+One">
<link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Ubuntu:400,700">
<!-- end custom fonts -->

<!-- start needed css style files -->
<link type="text/css" rel="stylesheet" href="<?php echo $pasta ?>css/pageflip.css">
<link type="text/css" rel="stylesheet" href="<?php echo $pasta ?>css/pageflip-custom.css">
<!-- end needed css style files -->

<!-- start needed js libraries -->
<!--script src="<?php echo $pasta ?>js/jquery-3.0.0.min.js"></script-->
<script src="<?php echo $pasta ?>js/pageflip5-min.js"></script>
<script src="<?php echo $pasta ?>js/key.js"></script>
<!-- end needed js libraries -->

<!-- div fix for FullScale needed if the book have top margin -->
<style>
    .pageflip-container {
        padding-top: 1px;
    }
</style>

<div id="pageflip"></div>
<!-- end embed pageflip -->

<!-- start script needed to run pageflip -->
<script>
    var $pageflip = $('#pageflip'),
        pageflip = $pageflip.pageflip();

    /* MEET PAGEFLIP CUSTOM FUNCTIONS */
    var animmode = 1,
        animbtns = ["#animateontop", "#animateonvisible"],
        loop = true,
        rot = 0,
        target,
        zooming = false,
        CustomPFEventHandler = {
            onFlip: function(PN) {
                tryPlayVideos();
            },
            onFlipEnd: function(PN) {
                tryPlayVideos();
            },
            onTop: function(PN) {
                tryPlayVideos();
            },
            onTopEnd: function(PN) {
                // tryPlayVideos();
            },
            onLoad: function(PN) {
                tryPlayVideos();
            },
            onUnload: function(PN) {},
            onHide: function(PN) {},
            onShow: function(PN) {},
            onZoomIn: function(PN) {},
            onZoomOut: function(PN) {}
        };

    gotoPage = function(p) {
        pageflip.gotoPage(p, true);
    }
    // videoPlay = function() {
    // 	var myVideo = document.getElementById("thevideo");
    // 	if (myVideo.paused) myVideo.play();
    // 	else myVideo.pause();
    // }
    videoPlay2 = function() {
        var myVideo2 = document.getElementById("videocapa");
        if (myVideo2.paused) myVideo2.play();
        else myVideo2.pause();
    }
    videoPlay3 = function() {
        var myVideo3 = document.getElementById("video3");
        if (myVideo3.paused) myVideo3.play();
        else myVideo3.pause();
    }
    videoPlay4 = function() {
        var myVideo4 = document.getElementById("video4");
        if (myVideo4.paused) myVideo4.play();
        else myVideo4.pause();
    }
    videoPlay5 = function() {
        var myVideo5 = document.getElementById("video5");
        if (myVideo5.paused) myVideo5.play();
        else myVideo5.pause();
    }
    videoPlay6 = function() {
        var myVideo6 = document.getElementById("video6");
        if (myVideo6.paused) myVideo6.play();
        else myVideo6.pause();
    }
    videoInit = function() {
        //var myVideo = document.getElementById("thevideo");
    }
    selectFeature = function(f) {
        $(".features").addClass("off");
        $("#feature" + f).removeClass("off");
        $("#featurelist ul li").removeClass("selected");
        $("#option" + f).addClass("selected");
    }
    animation = function(t) {
        animmode = t;
        $(".animationcontrol").removeClass("selected");
        $(animbtns[t]).addClass("selected");
    }
    theLoop = function() {
        if (loop) raf2(theLoop);
        setRot();
    }
    setRot = function() {
        $("#spiral").css({
            transform: "rotate(" + rot + "deg)"
        });
        rot = (rot + 4) % 360;
    }
    startLoop = function() {
        if (!loop) {
            loop = true;
            theLoop();
        }
    }
    stopLoop = function() {
        loop = false;
    }
    setZoomFlag = function() {
        if (zooming) $("#iszooming").addClass("selected");
        else $("#iszooming").removeClass("selected");
    }
    window.document.onload = function() {

        // play();
    }
    window.raf2 = (function() {
        return window.requestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            function(callback) {
                window.setTimeout(callback, 100 / 6);
            };
    })();

    pageflip.setPFEventCallBack(CustomPFEventHandler);

    /* END MEET PAGEFLIP CUSTOM FUNCTIONS */

    /* Initialize & Start Pageflip 5 */
    $pageflip.pageflipInit({
        /* Configuration options */
        PageDataFile: "<?php echo $pasta ?>celebrate/celebrate.html",
        PageWidth: 950,
        PageHeight: 950,
        FullScreenEnabled: true,
        Transparency: true,
        Margin: 32,
        MarginBottom: 64,
        AutoScale: true,
        FullScale: true,
        AlwaysOpened: false,
        AutoFlipLoop: -1,
        // AutoFlip: true,
        // AutoFlipLoop: true,
        CenterSinglePage: true,
        DropShadowOpacity: 0.3,
        FlipTopShadowOpacity: 0.2,
        FlipShadowOpacity: 0.2,
        HardFlipOpacity: 0.3,
        EmbossOpacity: 0.2,
        SecondaryDragArea: 32,
        Transparency: true,
        ControlbarFile: "<?php echo $pasta ?>common/controlbar_svg.html",
        GoogleAnalytics: true,
        HashControl: true,
        ShareLink: "https://www.montecristo.com.br",
        ShareText: "Montecristo",
        ShareVia: "@Montecristo",
        ShareImageURL: "https://www.montecristo.com.br/favicon.ico",
        ShowCopyright: false,
        Copyright: Key.Copyright,
        Key: Key.Key,

        FlipDuration: 3200,
        // StartAutoFlip: true,
        // AutoFlipInterval: 2000,

        // AutoSinglePageMode: true
        AutoSinglePageMode: new RegExp('Android|webOS|iPhone|iPad|' + 'BlackBerry|Windows Phone|' + 'Opera Mini|IEMobile|Mobile', 'i').test(navigator.userAgent)

        /*
         new RegExp('Android|webOS|iPhone|iPad|' +
         'BlackBerry|Windows Phone|'  +
         'Opera Mini|IEMobile|Mobile' ,
         'i')
         */

        /* book ID - used as CSS class name */
    }, "meetpageflip");

    function tryPlayVideos() {

        return;
        console.log("tryPlayVideos()");

        try {

            // document.getElementById("video3").play();
            // document.getElementById("video4").play();
            // document.getElementById("video5").play();

            var videos = [];
            videos[videos.length] = "video3";
            videos[videos.length] = "video4";
            videos[videos.length] = "video5";
            videos[videos.length] = "video6";

            for (var i = 0; i < videos.length; i++) {

                console.log(i);

                var obj = document.getElementById(videos[i]);
                console.log(obj);

                if (obj) {
                    console.log("obj")
                    if (obj.paused) {
                        console.log("play");
                        obj.play()
                    }
                }
            }
            /*
             document.getElementById("video3").play()
             document.getElementById("video4").play()
             document.getElementById("video5").play()
             document.getElementById("video6").play()
             */
        } catch (e) {

        }

        /*
         setTimeout(function(){
         tryPlayVideos();
         },1000*60);
         */

    }

    /*
     setTimeout(function(){
     tryPlayVideos();
     },1000*60);
     */
</script>
<?php require_once 'footer.php' ?>