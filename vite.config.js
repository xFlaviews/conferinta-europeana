import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/plugins/notiflix.js',
                
                //grapesjs
                'resources/sass/backend/plugins/grapesjs.scss',
                'resources/js/backend/plugins/grapesjs.js',

                // backend

                // Theme Js
                'resources/js/backend/config.js',
                'resources/js/backend/app.js',
                'resources/js/backend/head.js',

                // Theme Css
                'resources/sass/backend/app.scss',
                'resources/sass/backend/icons.scss',

                'node_modules/animate.css/animate.min.css',
                'node_modules/animate.css/animate.compat.css',
                'node_modules/glightbox/dist/css/glightbox.min.css',
                'node_modules/plyr/dist/plyr.css',
                'node_modules/nouislider/dist/nouislider.min.css',
                'node_modules/sweetalert2/dist/sweetalert2.min.css',
                'node_modules/swiper/swiper-bundle.min.css',
                'node_modules/tippy.js/dist/tippy.css',
                'node_modules/shepherd.js/dist/css/shepherd.css',
                'node_modules/quill/dist/quill.core.css',
                'node_modules/quill/dist/quill.bubble.css',
                'node_modules/quill/dist/quill.snow.css',
                'node_modules/dropzone/dist/dropzone.css',
                'node_modules/flatpickr/dist/flatpickr.min.css',
                'node_modules/@simonwep/pickr/dist/themes/classic.min.css',
                'node_modules/@simonwep/pickr/dist/themes/monolith.min.css',
                'node_modules/@simonwep/pickr/dist/themes/nano.min.css',
                'node_modules/nouislider/dist/nouislider.min.css',
                'node_modules/nice-select2/dist/css/nice-select2.css',
                'node_modules/jsvectormap/dist/jsvectormap.min.css',
                'node_modules/glightbox/dist/css/glightbox.min.css',
                'node_modules/gridjs/dist/theme/mermaid.min.css',
                // 'node_modules/dropzone/dist/dropzone.min.js',
                'node_modules/dropzone/dist/dropzone-min.js',

                'resources/js/backend/pages/dashboard.js',
                'resources/js/backend/pages/apps-calendar.js',
                'resources/js/backend/pages/apps-kanban.js',
                'resources/js/backend/pages/extended-animation.js',
                'resources/js/backend/pages/extended-sortable.js',
                'resources/js/backend/pages/extended-plyr.js',
                'resources/js/backend/pages/extended-sweetalert.js',
                'resources/js/backend/pages/extended-swiper.js',
                'resources/js/backend/pages/extended-tippy.js',
                'resources/js/backend/pages/extended-tour.js',
                'resources/js/backend/pages/form-inputmask.js',
                'resources/js/backend/pages/form-fileupload.js',
                'resources/js/backend/pages/form-flatpickr.js',
                'resources/js/backend/pages/extended-ratings.js',
                'resources/js/backend/pages/form-editor.js',
                'resources/js/backend/pages/extended-lightbox.js',
                'resources/js/backend/pages/form-color-pickr.js',
                'resources/js/backend/pages/form-rangeslider.js',
                'resources/js/backend/pages/form-select.js',
                'resources/js/backend/pages/form-validation.js',
                'resources/js/backend/pages/icons-material-symbols.js',
                'resources/js/backend/pages/icons-mingcute.js',
                'resources/js/backend/pages/maps-google.js',
                //'resources/js/backend/pages/maps-vector.js', // to update..
                'resources/js/backend/pages/gallery.js',
                'resources/js/backend/pages/table-gridjs.js',
                'resources/js/backend/pages/charts-apex.js',

                // Code Highlight Js
                'resources/js/backend/pages/highlight.js',
            ],
            refresh: true,
            manifest: true,
        }),
    ],
});
