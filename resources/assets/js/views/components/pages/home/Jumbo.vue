<template lang="html">
  <div class="jumbo">
    <div class="jumbotron">
      <h1>{{ header }}</h1>
      <slot></slot>
    </div>
  </div>
</template>

<script>
  export default {
    name: "jumbo",
    props: ['header']
  }
</script>

<style lang="css" scoped>
  .jumbotron {
    box-shadow: 0px 2px 5px #000;
    width: 98%;
    margin: 0 auto;
    background-color: #121212;
    color: #fff;
  }
  h1 {
    margin-bottom: 35px;
  }
</style>
