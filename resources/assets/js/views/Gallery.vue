<template>
    <div class="home">
        <jumbo header="Gallery"></jumbo>
        <lightbox src="src/assets/logo.png" caption="this is pic caption" album="albumA"></lightbox>
        <gallery-main></gallery-main>
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
    import Jumbo from './components/pages/home/Jumbo.vue'
    import GalleryMain from './components/pages/gallery/GalleryMain.vue'
    import ContactBox from './components/global/ContactBox.vue'
    import ContactText from './components/pages/home/ContactText.vue'
    export default {
      name: 'home',
      data() {
        return {
          msg: 'Welcome to Your Vue.js App'
        }
      },
      components: {
          Jumbo,
          GalleryMain,
          ContactBox,
          ContactText
      }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
