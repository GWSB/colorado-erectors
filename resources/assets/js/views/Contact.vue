<template>
    <div class="home">
        <jumbo header="Get in Touch"></jumbo>
        <contact-main></contact-main>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <contact-box></contact-box>
                </div>
                <div class="col-sm-12 col-md-6">
                    <contact-details></contact-details>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Jumbo from './components/pages/home/Jumbo.vue'
    import ContactMain from './components/pages/contact/ContactMain.vue'
    import ContactBox from './components/global/ContactBox.vue'
    import ContactDetails from './components/pages/contact/ContactDetails.vue'
    export default {
      name: 'home',
      data() {
        return {
          msg: 'Welcome to Your Vue.js App'
        }
      },
      components: {
          Jumbo,
          ContactMain,
          ContactBox,
          ContactDetails
      }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
