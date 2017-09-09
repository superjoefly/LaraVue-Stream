import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import Form from './utilities/Form';

Vue.use(VueRouter);

// Assigning to window make available anywhere in project
window.Vue = Vue;
window.axios = axios;
window.axios.defaults.headers.common = {
  'X-Requested-With': 'XMLHttpRequest'
};
window.Form = Form;
