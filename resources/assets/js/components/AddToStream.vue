<template>
  <div>
    <p>Status:</p>
    <form @submit.prevent='submit'>
      <div class="control">
        <input class="input" type="text" placeholder="Add something to stream..." v-model="form.body" @keydown="form.errors.clear()">
        <span
          class="help is-danger"
          v-if="form.errors.has('body')" v-text="form.errors.get('body')"></span>
      </div>
      <p style="padding: 10px 0">
        <button class="button is-primary" :disabled="form.errors.any()">Submit</button>
      </p>
    </form>
  </div>
</template>
<script>
export default {
  data: () => ({
    form: new Form({body: ''})
  }),
  methods: {
    submit() {
      this.form.post('/statuses')
      .then(status => this.$emit('updateStream', status))
      .catch(error => alert('There was an error!'));
    }
  }
}
</script>
<style lang="scss" scoped>
</style>
