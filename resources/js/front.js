window.axios = require("axios");
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import Vue from "vue";
import VueRouter from "vue-router";
window.Vue = require("vue");
Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 *
 *
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import App from "./views/App.vue";

const app = new Vue({
    el: "#root",
    render: (h) => h(App),
});
