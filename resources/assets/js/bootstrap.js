import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import VueSweetAlert from 'vue-sweetalert';
import auth from './auth.js';
import {Errors} from './errors.js';
import Echo from 'laravel-echo';

window.Vue = Vue;
Vue.use(VueRouter);
Vue.use(VueSweetAlert);

window.auth = auth;
window.Errors = Errors;
window.axios = axios;
window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
    'X-CSRF-TOKEN': document.getElementsByName('csrf-token')[0].getAttribute('content'),
    'Authorization': 'Bearer ' + localStorage.getItem('id_token'),
};
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '7e4af3d3d677b8333635',
    cluster: 'ap1',
    encrypted: false
});
