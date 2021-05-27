require('./bootstrap');
import Vue from "vue";

Vue.component("LoginComponent", require("./components/loginComponent/login.vue").default);

const vm = new Vue({

    el: "#app",

});
