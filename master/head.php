<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>
        <?php echo $pagetitle; ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <link rel='shortcut icon' type='image/x-icon' href='/img/icons/favicon.ico' />

    <!-- CSS  -->
    <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <!-- Master Style -->
    <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />


    <!-- JS -->
    <script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
    <script src="/js/materialize.js"></script>
    <script src="/js/master.js"></script>

    <!--Social Icon Font -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!--Web App Properties-->
    <!-- See documentation: https://developers.google.com/web/fundamentals/device-access/stickyness/ -->
    <!-- Web App Manifest -->
    <link rel="manifest" href="/manifest.json">
    <!-- Style the browser elements -->
    <meta name="theme-color" content="#4fc3f7">
    <meta name="msapplication-navbutton-color" content="#4fc3f7">
    <meta name="apple-mobile-web-app-status-bar-style" content="#4fc3f7">
    <!-- Define web-app homescreen title -->
    <meta name="application-name" content="ReidWeb.com">
    <meta name="apple-mobile-web-app-title" content="ReidWeb.com">
    <!-- Hide the status bar on iOS -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Page specific content -->
    <?php echo $headerContent; ?>

        <!-- Icons -->
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/img/icons/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/icons/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/icons/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/icons/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/img/icons/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/img/icons/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/img/icons/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/img/icons/apple-touch-icon-152x152.png" />
        <link rel="apple-touch-startup-image" href="/img/icons/apple-touch-icon-152x152.pn">
        <link rel="icon" type="image/png" href="/img/icons/favicon-196x196.png" sizes="196x196" />
        <link rel="icon" type="image/png" href="/img/icons/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="/img/icons/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/img/icons/favicon-16x16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="/img/icons/favicon-128.png" sizes="128x128" />
        <meta name="msapplication-TileColor" content="#4fc3f7" />
        <meta name="msapplication-TileImage" content="/img/icons/mstile-144x144.png" />
        <meta name="msapplication-square70x70logo" content="/img/icons/mstile-70x70.png" />
        <meta name="msapplication-square150x150logo" content="/img/icons/mstile-150x150.png" />
        <meta name="msapplication-wide310x150logo" content="/img/icons/mstile-310x150.png" />
        <meta name="msapplication-square310x310logo" content="/img/icons/mstile-310x310.png" />

        <!-- Google Analytics -->
        <?php
            $base_dir  = $_SERVER['DOCUMENT_ROOT'];
            include_once($base_dir . "/master/analyticstracking.php");
        ?>

</head>

<body>
