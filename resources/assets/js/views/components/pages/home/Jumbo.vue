<template lang="html">
  <div class="jumbo">
    <div class="jumbotron">

      <h1>{{ header }}</h1>
      <p>...</p>
      <slot></slot>
      <p><a class="btn btn-gwb btn-lg" href="#" role="button">Request Quote</a></p>
    </div>
  </div>
</template>

<script>
  export default {
    name: "jumbo",
    props: ['header']
  }
</script>

<style lang="css">
  .jumbotron {
    box-shadow: 0px 2px 5px #000;
    width: 98%;
    margin: 0 auto;
  }
</style>
