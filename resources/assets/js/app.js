import './bootstrap.js'

import App from './views/App.vue'
import router from './routes'


new Vue({
    el: '#app',
    router,
    components: {
        App
    }
});
