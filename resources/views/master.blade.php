<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Palas | Bootstrap Multipurpose HTML5 Template</title>

        <meta name="author" content="abusinesstheme">
        <meta name="description" content="Palas is a Business HTML Template developed with the the latest HTML5 and CSS3 technologies.">

        <!-- CSS files -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic|Montserrat:400,700' rel='stylesheet'>
        <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="plugins/elegant_font/html_css/style.css">
        <link rel="stylesheet" href="plugins/rs-plugin/css/settings.css" media="screen">
        <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">

        <!-- Main CSS file -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Custom -->
        <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>

        <!-- Global Wrapper -->
        <div id="wrapper">
            @include('header')
            @include('slider')
            @yield('content')
            @include('footer')

            <script src="plugins/jquery/jquery-2.1.0.min.js"></script>
            <script src="plugins/bootstrap/js/bootstrap.min.js"></script>

            <script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
            <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

            <script src="plugins/jquery.appear.js"></script>
            <script src="plugins/retina.min.js"></script>
            <script src="plugins/stellar.min.js"></script>
            <script src="plugins/sticky.min.js"></script>
            <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
            <script src="plugins/isotope/isotope.pkgd.min.js"></script>
            <script src="plugins/isotope/imagesloaded.pkgd.min.js"></script>

            <script src="js/script.js"></script>
            @yield('scripts')
        </div>
    </body>
</html>