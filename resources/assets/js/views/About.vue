<template>
    <div class="home">
        <jumbo header="About Erections by Beavers!"></jumbo>
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
    import Jumbo from './components/pages/home/Jumbo.vue'
    import HomeMain from './components/pages/home/HomeMain.vue'
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
          HomeMain,
          ContactBox,
          ContactText
      }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
