<template lang="html">
  <div class="navigation">
    <div class="container">
      <ul class="nav nav-tabs nav-justified">
        <router-link to="/" tag="li" active-class="active" exact><a>Home</a></router-link>
        <router-link to="/gallery" tag="li" active-class="active"><a>Gallery</a></router-link>
        <router-link to="/about" tag="li" active-class="active"><a>About</a></router-link>
        <router-link to="/contact" tag="li" active-class="active"><a>Contact</a></router-link>
      </ul>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'navigation'
  }
</script>

<!-- TODO using both li and a causes the font size to double. Remember to fix once routing is properly set up -->
<style lang="css" scoped>
  li {
    font-size: 150%;
    font-weight: bold;
  }
</style>
