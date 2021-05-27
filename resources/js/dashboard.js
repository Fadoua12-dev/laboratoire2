require('./bootstrap');
import Vue from "vue";

Vue.component("DashboardComponent", require("./Components/dashboardComponent/dashboard.vue").default);

const vm = new Vue({
}).$mount("#app");


