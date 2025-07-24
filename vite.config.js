import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/css/bootstrap.min.css',
                'public/css/fontawesome-all.min.css',
                'public/css/flaticon.css',
                'public/css/animate.css',
                'public/css/aos.css',
                'public/css/jquery.fancybox.min.css',
                'public/css/slick.css',
                'public/css/leaflet.css',
                'public/css/meanmenu.css',
                'public/css/default.css',
                'public/css/style.css',
                'public/css/responsive.css',
                'public/js/vendor/jquery-1.12.4.min.js',
                'public/js/vendor/modernizr-3.5.0.min.js',
                'public/js/popper.min.js',
                'public/js/bootstrap.min.js',
                'public/js/slick.min.js',
                'public/js/jquery.meanmenu.min.js',
                'public/js/jquery.fancybox.min.js',
                'public/js/isotope.pkgd.min.js',
                'public/js/parallax.js',
                'public/js/aos.js',
                'public/js/waypoint.js',
                'public/js/jquery-appear.js',
                'public/js/counterup-min.js',
                'public/js/typer.js',
                'public/js/vanilla-tilt.min.js',
                'public/js/leaflet.js',
                'public/js/jquery-knob.js',
                'public/js/ajax-form.js',
                'public/js/main.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
});
