<template>
  <div>
    <navigation></navigation>
    <router-view></router-view>
    <great-footer></great-footer>
  </div>
</template>

<script>
    import Navigation from './components/global/Navigation.vue'
    import GreatFooter from './components/global/GreatFooter.vue'
    export default {
        name: 'app',
        components: {
            Navigation,
            GreatFooter
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
