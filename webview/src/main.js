import './style.css'
import App from './App.vue'
import { createApp } from 'vue'
import router from './plugins/router'
import bootstrap from 'bootstrap/dist/js/bootstrap';
import '../node_modules/@fortawesome/fontawesome-free/css/all.css'

createApp(App).use(router).mount('#app')
