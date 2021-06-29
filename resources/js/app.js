require('./bootstrap');

window.Vue = require('vue').default;

// Styles
import '../../public/css/style.css'

// Router
import VueRouter from 'vue-router';
Vue.use(VueRouter)

// Routes
import routes from "./routes/routes";

// Store
import store from "./store/store";

// App
import App from './views/App';

const app = new Vue({
    el: '#app',
    router: routes,
    store,
    render: h => h(App)
});
