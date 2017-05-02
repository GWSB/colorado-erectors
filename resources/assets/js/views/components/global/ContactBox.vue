<template lang="html">
  <div class="contact-box">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h2>Get In Touch</h2>
          <form class="form-horizontal" @submit.prevent="formSubmit">
            <div class="form-group">
              <input type="text" class="form-control" v-model="name" name="name" placeholder="Your name">
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" v-model="phoneNumber" name="number" placeholder="Your phone number">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" v-model="email" name="email" placeholder="Your email">
            </div>
            <div class="form-group">
              <textarea name="notes" class="form-control" v-model="notes" rows="8" cols="80" placeholder="What can we help you with?"></textarea>
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
  data() {
    return {
      name: '',
      phoneNumber: '',
      email: '',
      notes: ''
    }
  },
  methods: {
    formSubmit: function(){
      axios.post('/contact', {
        name: this.name,
        number: this.phoneNumber,
        email: this.email,
        notes: this.notes
      })
      .then(function (response) {
        console.log(response);
      })
      .catch(function (error) {
        console.log(error);
      });
    }
  }
}
</script>

<style lang="css">
</style>
