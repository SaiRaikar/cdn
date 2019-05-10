<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SunbulahGroup') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('css/excel-2007.css') }}" rel="stylesheet">





        <!--JUST ENABLED-->
        <script src="{{ asset('js/bootstrap.js') }}" defer></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/3.0.1/github-markdown.css" rel="stylesheet">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

        <script src="{{ asset('js/jush.js') }}" defer></script>
        <link href="{{ asset('css/jush.css') }}" rel="stylesheet">

        
    <link type="text/css" rel="stylesheet" href="{{ asset('css/assets/css/github-markdown.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/assets/css/pilcrow.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/assets/css/hljs-github.min.css') }}"/>
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="/vendor/emojione/sprites/emojione-sprite-{{ config('emojione.spriteSize') }}.min.css"/>
        <!--JUST ENABLED-->




        <!--JUST DISABLED-->
        <!--
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/assets/css/hljs-github.dark.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/assets/css/pilcrow-dark.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/assets/css/style.css') }}"/>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        -->
        <!--JUST DISABLED-->








    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <!--<link href="{{ asset('css/styles.css') }}" rel="stylesheet">-->
    <!--<link rel="manifest" href="{{ asset('js/manifest.json') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>-->
    <!--<script type="text/javascript" src="https://ipool.remotewebaccess.com/wp-content/uploads/jquery-3.3.1.min.js"></script>
    <link rel="apple-touch-icon" href="{{ asset('image/sgimg.png') }}" />
    <link rel="apple-touch-startup-image" href="{{ asset('image/launcher-img.png') }}">
    <meta name="apple-mobile-web-app-title" content="SG Portal">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="icon" href="{{ asset('image/sgimg.png') }}">-->
    <!-- Add to Homescreen -->
    <!--<link rel="stylesheet" type="text/css" href="https://ipool.remotewebaccess.com/wp-content/public/addtohomescreen.css">-->
    <!--<script src="https://ipool.remotewebaccess.com/wp-content/public/addtohomescreen.js"></script>-->
    <!--<script>
    addToHomescreen.removeSession();
    instance.clearSession();
    addToHomescreen();
    addToHomescreen({
        detectHomescreen: true
    });
    var a = addToHomescreen({
        onAdd: function () {
            alert('Welcome SunbulahGroup Framework, employees portal.');
        }
    });
    </script>-->
    <!-- Add to Homescreen -->


    <style>
        body {

            align-content:center;
        }

        input {
  border:none;
  width:100%;
  height:100%;
  font-family: Verdana, Helvetica, Arial, FreeSans, sans-serif;
  font-size:12px;
  padding: 0 4px 0 4px;
}

input:focus { 
  border:2px solid #5292F7;
  outline: none;
}

.navbar-light .navbar-brand, .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
    color: rgba(0,0,0,.9);

}

.navbar-brand, .navbar-nav > li > a {
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.25);
}

.btn-primary {
    background-image: -webkit-linear-gradient(top, #337ab7 0%, #265a88 100%);
    background-image: -o-linear-gradient(top, #337ab7 0%, #265a88 100%);
    background-image: -webkit-gradient(linear, left top, left bottom, from(#337ab7), to(#265a88));
    background-image: linear-gradient(to bottom, #337ab7 0%, #265a88 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff265a88', GradientType=0);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
    background-repeat: repeat-x;
    border-color: #245580;
}

.btn-primary {
    color: #fff;
    background-color: #3490dc;
    border-color: #3490dc;
}

.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0rem;
    font-size: .9rem;
    line-height: 1.6;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

html{
            font:0.75em/1.5 sans-serif;
            color:#333;
            background-color:#fff;
            padding:0em;
        }

        /* Tables */
        table{
            width:100%;
            margin-bottom:0em;
            border-collapse: collapse;
            text-align:left;
        }
        th{
            font-weight:bold;
            background-color:#ddd;
            text-align:left;
        }
        th,
        td{
            padding:0em;
            border:1px solid #ccc;
            text-align:left;
        }
        input {
    border: none;
    width: 80%;
    height: 3%;
    font-family: Verdana, Helvetica, Arial, FreeSans, sans-serif;
    font-size: 12px;
    padding: 0 4px 0 4px;
        }
    </style>
</head>




<body class="markdown-body">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img width="35px" height="35px" src="{{ asset('image/sgimg.png') }}" />
                  <b><span style="font-size:32px" class="input navbar-toggler-icon">{{ config('app.name', 'SunbulahGroup') }}<span></b>
                </a>
                    
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="navbar-nav mr-auto">
                    
                    </ul>
                    <!-- Right Side Of Navbar -->
                    @yield('content')

                </div>
            </div>
        </nav>

    </div>
</body>
<footer class="footer">
      <div class="container">
        <div id="ftr-wrap">
            <div class="ftr-links">
                <ul class="ml-auto" style="float:right">                   
                   <span><a style="font-size:10px;" href="#">Terms</a></span>&nbsp;&nbsp;  | &nbsp;&nbsp;
                   <span><a style="font-size:10px;" href="#">Privacy Policy</a></span>&nbsp;&nbsp; | &nbsp;&nbsp;     
                   <span><a style="font-size:10px;" href="{{ route('root.index') }}">Sitemap</a></span>     
                </ul>
            </div>
            <div class="copyright-sunbulahgroup">
            <?='<span class="pull-left" style="font-size:10px; padding-left:0px;">Copyright &copy; ' . date("Y") . ' <a href="/">SunbulahGroup</a>.</span><span style="font-size:10px" class="copyright"> SA, Riyadh. C.R. 0001231212</span>';?>
            </div>     
        </div>
      </div>
    </footer>
</html>
