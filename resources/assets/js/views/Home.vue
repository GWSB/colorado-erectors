<template>
<div class="home">
    <jumbo header="Erections by Beavers!!">
      <!-- TODO Make this paralax https://github.com/surmon-china/vue-awesome-swiper/blob/master/examples/28-parallax.vue -->
      <swiper :options="swiperOption">
        <swiper-slide><img src="http://placehold.it/1200x400"></swiper-slide>
        <swiper-slide><img src="http://placehold.it/1200x400"></swiper-slide>
        <swiper-slide><img src="http://placehold.it/1200x400"></swiper-slide>
        <div class="swiper-pagination" slot="pagination"></div>
        <div class="swiper-button-prev" slot="button-prev"></div>
        <div class="swiper-button-next" slot="button-next"></div>
    </swiper>
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
import {swiper, swiperSlide} from 'vue-awesome-swiper'
import Jumbo from './components/pages/home/Jumbo.vue'
import HomeMain from './components/pages/home/HomeMain.vue'
import ContactBox from './components/global/ContactBox.vue'
import ContactText from './components/pages/home/ContactText.vue'
export default {
    name: 'home',
    data() {
        return {
          swiperOption: {
              pagination: '.swiper-pagination',
              paginationClickable: true,
              nextButton: '.swiper-button-next',
              prevButton: '.swiper-button-prev',
              spaceBetween: 30
            }
        }
    },
    components: {
        swiper,
        swiperSlide,
        HomeMain,
        ContactBox,
        ContactText,
        Jumbo
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .slide-blur {
    filter: blur(5px) brightness(0.5);
  }
</style>
