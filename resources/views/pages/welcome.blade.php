<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
        <meta content="yes" name="apple-mobile-web-app-capable">
        <meta content="black" name="apple-mobile-web-app-status-bar-style">
        <meta content="telephone=no" name="format-detection">
        <meta content="email=no" name="format-detection">
        <link rel="shortcut icon" href="img/favicon.ico">{{-- 注意注意！！！要改 --}}
        <title>摇一摇</title>
        
        <link rel="stylesheet" type="text/css" href="css/index.css"/>
        {{-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/> --}}
    </head>

    <body>
        <div class="bodymask1"><h2>I am<br />a tester1</h2>
            <button class="start">START</button>
        </div>
        <div class="bodymask"><h2>I am<br />a tester</h2>
        </div>

        <div class="shake-box">
            <div class="shake-upside">
                <div class="shake-upside-inner"></div>
            </div>
            <div class="shake-backimage">
               <img id="id-shake-image" src="source/monkey.jpg"/>
            </div>
            <div class="shake-downside"></div>
        </div>
        
        <script src="js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery.fullPage.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/shaked.js" type="text/javascript" charset="utf-8"></script>
    </body>
</html>

