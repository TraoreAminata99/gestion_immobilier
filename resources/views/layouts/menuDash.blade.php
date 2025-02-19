<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Gestion immobilière</title>
    <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrap,php,Laravel">
    <meta name="description" content="gestion immobilier">
    <meta name="author" content="Traore Aminata">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">

   <!-- font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
   <!-- Icons -->
   <link rel="stylesheet" href="fonts/font-icons.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/jqueryui.min.css"/>
   <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}"/>

</head>

<body class="body bg-surface counter-scroll">


    <div id="wrapper">
        <div id="page" class="clearfix">
            <div class="layout-wrap">
        
                @yield('content')
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="js/chart.js"></script>
    <script type="text/javascript" src="js/chart-init.js"></script>
    <script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="js/countto.js"></script>
    <script type="text/javascript" src="js/shortcodes.js"></script>
    <script type="text/javascript" src="js/jqueryui.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>