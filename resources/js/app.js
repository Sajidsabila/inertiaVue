import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

import LandingLayout from './Layouts/LandingLayout.vue'

createInertiaApp({

  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page = pages[`./Pages/${name}.vue`]
    page.default.layout = page.default.layout || LandingLayout
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})