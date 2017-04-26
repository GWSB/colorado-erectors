<template lang="html">
  <div class="contact-box">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h2>Get In Touch</h2>
          <form class="form-horizontal" action="#" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Your name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="number" placeholder="Your phone number">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Your email">
            </div>
            <div class="form-group">
              <textarea name="notes" class="form-control" rows="8" cols="80" placeholder="What can we help you with?"></textarea>
            </div>
            <button type="submit" class="btn btn-gwb btn-lg btn-block" name="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
}
</script>

<style lang="css">
</style>
