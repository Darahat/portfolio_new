<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>
<!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/meanmenu/2.0.8/meanmenu.min.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add all other CSS files here -->

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/meanmenu/2.0.8/jquery.meanmenu.min.js"></script>
        <!-- Scripts -->

        @routes
        @vite(['resources/css/app.css', 'resources/js/app.js', 'public/css/bootstrap.min.css', 'public/css/fontawesome-all.min.css', 'public/css/flaticon.css', 'public/css/animate.css', 'public/css/aos.css', 'public/css/jquery.fancybox.min.css', 'public/css/slick.css', 'public/css/leaflet.css', 'public/css/meanmenu.css', 'public/css/default.css', 'public/css/style.css', 'public/css/responsive.css', 'public/js/vendor/jquery-1.12.4.min.js', 'public/js/vendor/modernizr-3.5.0.min.js', 'public/js/popper.min.js', 'public/js/bootstrap.min.js', 'public/js/slick.min.js', 'public/js/jquery.meanmenu.min.js', 'public/js/jquery.fancybox.min.js', 'public/js/isotope.pkgd.min.js', 'public/js/parallax.js', 'public/js/aos.js', 'public/js/waypoint.js', 'public/js/jquery-appear.js', 'public/js/counterup-min.js', 'public/js/typer.js', 'public/js/vanilla-tilt.min.js', 'public/js/leaflet.js', 'public/js/jquery-knob.js', 'public/js/ajax-form.js', 'public/js/main.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
