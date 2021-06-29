import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

// Modules
import soldiers from './modules/soldiers/index';

const store = new Vuex.Store({
    modules: {
        soldiers
    }
})

export default store;
