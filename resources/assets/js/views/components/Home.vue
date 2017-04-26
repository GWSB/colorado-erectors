<template>
    <div class="home">
        <jumbo header="Erections by Beavers!!">
            <carousel-3d :controls-visible="true" :width="640" :height="400">
              <slide :index="0">
                <img src="http://lorempixel.com/640/400/business" alt="">
              </slide>
              <slide :index="1">
                <img src="http://lorempixel.com/640/400/sports" alt="">
              </slide>
              <slide :index="2">
                <img src="http://lorempixel.com/640/400/cats" alt="">
              </slide>
              <slide :index="3">
                <img src="http://lorempixel.com/640/400/food" alt="">
              </slide>
              <slide :index="4">
                <img src="http://lorempixel.com/640/400/technics" alt="">
              </slide>
            </carousel-3d>
        </jumbo>

        <home-main></home-main>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <contact-box></contact-box>
                </div>
                <div class="col-sm-12 col-md-6">
                    <contact-text></contact-text>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { Carousel3d, Slide } from 'vue-carousel-3d';
    import Jumbo from './pages/home/Jumbo.vue'
    import HomeMain from './pages/home/HomeMain.vue'
    import ContactBox from './global/ContactBox.vue'
    import ContactText from './pages/home/ContactText.vue'
    export default {
      name: 'home',
      data() {
        return {
          msg: 'Welcome to Your Vue.js App'
        }
      },
      components: {
          Carousel3d,
          Slide,
          Jumbo,
          HomeMain,
          ContactBox,
          ContactText
      }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
