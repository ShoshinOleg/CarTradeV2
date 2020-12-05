import Vue from 'vue'
import App from './App.vue'
import { BootstrapVue } from 'bootstrap-vue'
import router from './router'
import Axios from "axios"

Vue.config.productionTip = false

Vue.use(BootstrapVue)

Vue.prototype.$http = Axios.create({
  baseURL: 'http://localhost:1199/v1'
});

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')


