<template>
  <div class="container">
    <div class="columns">
      <div class="column">
        <div class="message" v-for="status in statuses">
          <div class="message-header">
            <p>{{status.user.name}} said ...</p>

            <!-- Filter -->
            <p>
              {{status.created_at | relative | capitalize}}
            </p>
          </div>

          <div class="message-body" v-text="status.body">
          </div>

        </div>
        <add-to-stream @updateStream="addStatus"></add-to-stream>
      </div>
    </div>
  </div>
</template>
<script>
import moment from 'moment-timezone';
import AddToStream from '../components/AddToStream.vue';
export default {
  data: () => ({
    statuses: []
  }),
  filters: {
    relative(date) {
      return moment.utc(date).fromNow();
    },
    capitalize(value) {
      return value.toUpperCase();
    }
  },
  components: {
    'add-to-stream': AddToStream
  },
  methods: {
    addStatus(status) {
      this.statuses.unshift(status);
      alert('Status Added!');
      window.scrollTo(0, 442);
    }
  },
  created() {
    // request to server to fetch statuses...
    axios.get('/statuses')
    // .then(response => this.statuses = response.data);
    .then(({data}) => this.statuses = data);
  }
}
</script>
<style lang="scss" scoped>
</style>
