<?php ob_start();?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Boredom"/>
    <meta name="author" content="Raoul Cornelissen"/>
    <title>Kenteken Administratie</title>
    <!-- Styles -->
    <link href="_assets/styles/css/style_main.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="_assets/styles/css/reset.css" rel="stylesheet" type="text/css"/>
    <style>
        @import 'https://fonts.googleapis.com/css?family=Roboto'; body {font-family: 'Roboto', sans-serif;}
    </style>
    <!-- Responsive Styles -->
    <link href="_assets/styles/css/responsive/responsive_general.css" type="text/css" rel="stylesheet" />
    <!-- Smartwatches -->
    <link href="_assets/styles/css/responsive/responsive_apple_watch.css" type="text/css" rel="stylesheet" /><!-- Apple Watch -->
    <link href="_assets/styles/css/responsive/responsive_moto360_watch.css" type="text/css" rel="stylesheet" /><!-- Moto 360 -->
    <!-- Phones -->
    <link href="_assets/styles/css/responsive/responsive_galaxy.css" type="text/css" rel="stylesheet" /><!-- Galaxy S3 t/m Galaxy S5 -->
    <link href="_assets/styles/css/responsive/responsive_htc.css" type="text/css" rel="stylesheet" /><!-- HTC One -->
    <link href="_assets/styles/css/responsive/responsive_iphone.css" type="text/css" rel="stylesheet" /><!-- Iphone 4 t/m 6 -->
    <!-- Tablets -->
    <link href="_assets/styles/css/responsive/responsive_tablets_galaxy.css" type="text/css" rel="stylesheet" /><!-- Samsung Galaxy Tablets -->
    <link href="_assets/styles/css/responsive/responsive_tablets_ipads.css" type="text/css" rel="stylesheet" /><!-- Ipads -->
    <link href="_assets/styles/css/responsive/responsive_tablets_kindle.css" type="text/css" rel="stylesheet" /><!-- Kindle Fire -->
    <link href="_assets/styles/css/responsive/responsive_tablets_nexus.css" type="text/css" rel="stylesheet" /><!-- Nexus -->
    <!-- Laptops -->
    <link href="_assets/styles/css/responsive/responsive_laptops.css" type="text/css" rel="stylesheet" /><!-- Laptops met en zonder Retina display -->
    <!-- Javascript -->
    <script src="_assets/js/main.js" type="text/javascript"></script>
    
</head>
<body>
<?php require('_assets/scripts/functions.php'); ?>
<?php
    loadform();
    databaseconnect();
    
    ?>
</body>
</html>