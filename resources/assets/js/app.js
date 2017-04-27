import './bootstrap.js'

import Navigation from './views/components/global/Navigation'
import GreatFooter from './views/components/global/GreatFooter'
import router from './routes'


new Vue({
    el: '#app',
    router,
    components: {
      Navigation,
      GreatFooter
    }
});
