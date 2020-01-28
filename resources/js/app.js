require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import App from './components/App.vue';
import ShowCouponDeatilsPage from "./components/ShowCouponDeatilsPage.vue";
import ShowCouponsPage from "./components/ShowCouponsPage";
import CouponCreate from "./components/couponcreate";
import EditCouponDetailsPage from "./components/EditCouponDetailsPage";
import validateEntries from "./components/validateEntries";
import validateresult from "./components/validateresult";
import Home from './components/Home'
import DeleteCoupon from './components/DeleteCoupon'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

//import App from
Vue.use(VueRouter);
Vue.use(Vuex);
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)


const router = new VueRouter({
     mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/showcoupons',
            name: 'showcoupons',
            component: ShowCouponsPage
        },

        {
            path: '/showcoupondetails/:c_id',
            name: 'showcoupondetail',
            component: ShowCouponDeatilsPage
        },

        {
            path: '/CouponCreate',
            name: 'couponcreate',
            component: CouponCreate
        },

        {
            path: '/editCouponDetails/:c_id',
            name: 'editCoupon',
            component: EditCouponDetailsPage
        },

        {
            path: '/validate',
            name: 'validate',
            component: validateEntries
        },


        {
            path: '/api/couponvalidate/result/:c:p:u',
            name: 'validateresult',
            component: validateresult
        },

        {
            path: '/DeleteCoupon',
            name: 'delete',
            component: DeleteCoupon
        }


    ],
});

//Vue.component('Welcome', require('./components/Welcome.vue') )

const app = new Vue({
    el: '#app',
    router,
    components: {
        App
    },

    // data:{
    //     results:[]
    // },
    //
    // mounted(){
    //     axios.get(url).then(response => {
    //         this.results = response.data
    //     })
    // }
});

console.log('App: ', app);


