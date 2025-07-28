import { createInertiaApp } from '@inertiajs/vue3'
import { createApp, h } from 'vue'

// Import jQuery globally
import jQuery from 'jquery'
import '../css/app.css'
import '../css/bootstrap.min.css'
window.$ = window.jQuery = jQuery
// Import other plugins
import 'isotope-layout'
import 'slick-carousel'

createInertiaApp({
  resolve: (name) => {
        const pages = import.meta.glob('./Pages/**/*.vue');
        return pages[`./Pages/${name}.vue`]();
    },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})
