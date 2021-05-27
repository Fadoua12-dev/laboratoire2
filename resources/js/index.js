require('./bootstrap');
import Vue from "vue";

Vue.component("IndexComponent", require("./Components/indexComponent/index.vue").default);

const vm = new Vue({

    el: "#app",

});
