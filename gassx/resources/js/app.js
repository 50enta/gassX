import './bootstrap';
import Vue from 'vue'; // Importing Vue Library
import VueRouter from 'vue-router'; // importing Vue router library
import router from './routes';

window.Vue = Vue;
Vue.use(VueRouter);


const app = new Vue({
    el: '#app',
    router
});