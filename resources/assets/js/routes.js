import VueRouter from 'vue-router';
import Home from './views/components/Home'
import Gallery from './views/components/Gallery'
import About from './views/components/About'
import Contact from './views/components/Contact'



let routes = [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/gallery',
      name: 'Gallery',
      component: Gallery
    },
    {
      path: '/about',
      name: 'About',
      component: About
    },
    {
      path: '/contact',
      name: 'Contact',
      component: Contact
    }
  ]

export default new VueRouter({
  routes,
  mode: 'history'
})
