<template>
<div class="home">
    <jumbo header="Homepage">
      <!-- TODO Make this paralax https://github.com/surmon-china/vue-awesome-swiper/blob/master/examples/28-parallax.vue -->
      <swiper :options="swiperOption">
        <div class="parallax-bg" slot="parallax-bg" data-swiper-parallax="-23%"
             style="background-image:url(http://cdn.gousa.cn/sites/default/files/styles/original_with_watermark/public/yosemite_national_park_0.jpg)">
        </div>
        <swiper-slide>
          <div class="opacity-background">
            <div class="title" data-swiper-parallax="-100">Slide 1</div>
            <br>
            <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
            <div class="text" data-swiper-parallax="-300">
              <p align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.</p>
            </div>
          </div>
          <p><a class="btn btn-gwb btn-lg" href="#" role="button">Request Quote</a></p>
        </swiper-slide>
        <swiper-slide>
          <div class="opacity-background">
            <div class="title" data-swiper-parallax="-100">Slide 2</div>
            <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
            <div class="text" data-swiper-parallax="-300">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.</p>
            </div>
          </div>
          <p><a class="btn btn-gwb btn-lg" href="#" role="button">Request Quote</a></p>
        </swiper-slide>
        <swiper-slide>
          <div class="opacity-background">
            <div class="title" data-swiper-parallax="-100">Slide 3</div>
            <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
            <div class="text" data-swiper-parallax="-300">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.</p>
            </div>
          </div>
          <p><a class="btn btn-gwb btn-lg" href="#" role="button">Request Quote</a></p>
        </swiper-slide>
        <div class="swiper-pagination swiper-pagination-white" slot="pagination"></div>
        <div class="swiper-button-prev swiper-button-white" slot="button-prev"></div>
        <div class="swiper-button-next swiper-button-white" slot="button-next"></div>
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
            parallax: true,
            speed: 600,
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
  .opacity-background {
    background-color: rgba(25, 25, 25, 0.5);
    padding: 25px 10px;
    max-width: 55%;
    margin: 0 auto;
    margin-bottom: 25px;
  }
  .swiper-slide {
  font-size: 18px;
  color:#fff;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  padding: 40px 60px;
  background-color: transparent!important;
  justify-content: space-around!important;
}
.parallax-bg {
  position: absolute;
  left: 0;
  top: 0;
  width: 130%;
  height: 100%;
  -webkit-background-size: cover;
  background-size: cover;
  background-position: center;
}
.swiper-slide .title {
  font-size: 41px;
  font-weight: 300;
}
.swiper-slide .subtitle {
  font-size: 21px;
}
.swiper-slide .text {
  font-size: 14px;
  max-width: 80%;
  line-height: 1.3;
  margin: 0 auto;
}
</style>
