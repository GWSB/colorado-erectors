import VueRouter from 'vue-router';
import Home from './views/Home'
import Gallery from './views/Gallery'
import About from './views/About'
import Contact from './views/Contact'



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
