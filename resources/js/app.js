/*
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 *

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 *

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(example, require('./components/example.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 *

const app = new Vue({
    el: '#app',
    component:[example]
});
*/

/*require('./bootstrap');

window.Vue = require('vue');

import routes from './routes.js'
const router = new VueRouter({routes})

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('example', require('./components/example.vue'));

const router = new VueRouter({ mode: 'history'});
const app = new Vue(Vue.util.extend({ router })).$mount('#app');
*/

import Vue from 'vue'
import VueRouter from 'vue-router'

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);


Vue.use(VueRouter)
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

import App from '../views/App.vue'
import navbar from '../js/components/Navbar.vue'
/*
import Welcome from '../views/welcome.vue'
import navbar from '../js/components/Navbar.vue'
import H from '../js/components/H.vue'
import QB from '../js/components/QB.vue'
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Welcome
        },
        {
            path: '/api/coupons',
            name: 'Delete',
            component: {
                navbar,
                H,
                QB
            }
        }
    ],
});

const app = new Vue({
    el: '#app',
    components: {
        App,
        Welcome,
        navbar,
        H,
        QB
    },
    router,
});
*/
const routes = [
    {
        name: 'delete',
        path: '/coupons',
        component: App
    }
];

const router = new VueRouter({ mode: 'history', routes: routes});

new Vue({
    render: h => h(App),
}).$mount('#app')
